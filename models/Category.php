<?php
class Category extends Model{
    public function getListCategory(){
        $categories=array();
        $sql="SELECT * FROM `category`";
        foreach($this->db->query($sql) as $category){
            /** getProductsByCategoryId куди передається $category['id']
             * масив products з товарами по кожній категорії
             * Змінна count де методом Count прахувати кількість елементів
             * додати в масив $category
             */
            $categories[]=$category;
        }
        return $categories;

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
}
?>