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
            $result[]=$item['image'];
        }
        return $result;
    }

}
?>