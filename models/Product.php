<?php 
class Product extends Model{

    // пошук товару по його id
    public function getProductById($id){
        $sql="SELECT * FROM `product` WHERE `id`=:id";
        $data=array(
            'id'=>$id
        );
        $select=$this->db->prepare($sql);
        $select->execute($data);
        return $select->fetch();
    }

    // пошук зображень товару, передається його id
    public function getProductImages($id){
        $sql="SELECT `image`.`image` FROM `product_image` LEFT JOIN `image` ON `image_id`=`image`.`id` WHERE `product_id`=:id";
        $data=array(
            'id'=>$id
        );
        $select=$this->db->prepare($sql);
        $select->execute($data);
        $result=array();
        foreach($select->fetchAll() as $item){
            $result[]=PATH_PRODUCT.$item['image'];
        }
        return $result;
    }

    /**
     * return array
     * [
     * одиниція виміру(id, name) - ціна
     * 
     * ]
     */
    public function getProductUnitPrice($id){
        $sql='SELECT `unit_id`,`name`,`price` FROM `product_unit` LEFT JOIN `unit` on `unit_id`=`id` WHERE `product_id`=:product_id';
        $data=array(
            'product_id'=>$id
        );
        $select=$this->db->prepare($sql);
        $select->execute($data);
        return $select->fetchAll();
    }

    public function getCommentsByProductId($id){
        $sql='SELECT  `user`.`id` as "user_id",`user`.`name`,`comment`.`id` as "comment_id",`comment`.`comment`,`comment`.`raiting` FROM `comment` LEFT JOIN `user` ON `comment`.`user_id`=`user`.`id` WHERE `product_id`=:product_id';
        $data=array(
            'product_id'=>$id
        );
        $select=$this->db->prepare($sql);
        $select->execute($data);
        return $select->fetchAll();
    }

}
?>