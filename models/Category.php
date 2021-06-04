<?php
class Category extends Model{
    public function getListCategory(){
        $categories=array();
        $sql="SELECT `product_category`.`category_id`,`category`.`name`,COUNT(`product_category`.`product_id`) AS 'count_products' ,`category`.`parent_id` FROM `product_category` LEFT JOIN `category` ON `product_category`.`category_id`=`category`.`id` INNER JOIN `product_unit` ON `product_category`.`product_id`=`product_unit`.`product_id` GROUP BY `category_id` ORDER BY `category`.`sort_order`";
        // foreach($this->db->query($sql) as $category){
        //     /** getProductsByCategoryId куди передається $category['id']
        //      * масив products з товарами по кожній категорії
        //      * Змінна count де методом Count прахувати кількість елементів
        //      * додати в масив $category
        //      */
        //     $categories[]=$category;
        // }
        return $this->db->query($sql)->fetchAll();

    }

    /**
     * вставляється в foreach для визначення товарів по category id
     */
    public function getProductsByCategoryId($id){
        $sql="SELECT `product_id` FROM `product_category` WHERE `category_id`=:category_id";
        $data=array(
            'category_id'=>$id
        );
        $select=$this->db->prepare($sql);
        $select->execute($data);
        return $select->fetchAll();
    }

    public function getMenu(){
        $sql='SELECT * FROM `category` WHERE `parent_id` IS NULL OR `parent_id`=1';
        $select=$this->db->query($sql);
        return $select->fetchAll();
    }
}
?>