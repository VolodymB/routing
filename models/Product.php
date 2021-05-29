<?php 
class Product extends Model{

    // пошук товару по його id
    public function getProductById($id){
        $sql="SELECT `product`.`id`,`product`.`name`,`product`.`year`,`product`.`description`,`product`.`status_id`,`status_product`.`name` as 'status_name' FROM `product` LEFT JOIN `status_product` ON `product`.`status_id`=`status_product`.`id` WHERE `product`.`id`=:id";
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

    /**
     * назва, одне фото,
     * мінімальна ціна
     * категорія
     */
    public function getListProducts(){
        $products=array();
        $images=array();
        

        $sql="SELECT `product`.`name`,`product`.`year`,`product_id`, MIN(`price`) as 'price' FROM `product_unit` LEFT JOIN `product` ON `product_id`=`product`.`id` GROUP BY `product_id`";
        foreach($this->db->query($sql) as $product){
            $product_info=array();
            $categories=array();
            $image='./web/img/default_image.jpg';
           
            /**
             *  дістати категорії товару
             * getCategoryById(id)
             * */   
            if($product_categories=$this->getCategoryByProductId($product['product_id'])){
                
                foreach($product_categories as $category){
                    $categories[]=$category['name'];
                }
                // var_dump($categories);
                // die;
            }
                    //int(1) 
                    /** якось знайти і підключити зображення
                     * getProductImages($product_id)
                     * додати в масив $product */    
            if($product_images=$this->getProductImages($product['product_id'])){
                // foreach($product_images as $image){
                    // echo '<pre>';
                    // var_dump($image); 
                    // echo '</pre>';
                    // die;                   
                // }
                $image=$product_images[0];
            }            
            /** якось знайти і підключити зображення
             * getProductImages($product_id)
             * додати в масив $product */  
            $product_info=array(
                'product_id'=>$product['product_id'],
                'name'=>$product['name'],
                'year'=>$product['year'],
                'price'=>$product['price'],
                'categories'=>$categories,
                'image'=>$image
            );
            $products[]=$product_info;        
        }
        // echo '<pre>';
        // var_dump($products); 
        // echo '</pre>';
        // die;
        return $products;
    }

    public function getCategoryByProductId($id){
        $sql="SELECT `category`.`name` FROM `category` LEFT JOIN `product_category` ON `category`.`id`= `product_category`.`category_id` WHERE `product_category`. `product_id`=:product_id";
        $data=array(
            'product_id'=>$id
        );
        $select=$this->db->prepare($sql);
        $select->execute($data);
        return $select->fetchAll();
        } 


        public function getProductByIdByUnit($product_id,$unit_id){
            $sql="SELECT prod_un.`product_id`,prod_un.`unit_id`,
            prod_un.`price`,prod_un.`quantity`,CONCAT(prod.`name`,', ' ,prod.`year`) as 'product_name',un.`name`  
            FROM `product_unit` prod_un LEFT JOIN `product` prod ON prod_un.`product_id`=prod.`id` LEFT JOIN `unit` un 
            ON prod_un.`unit_id`=un.`id` WHERE `product_id`=:product_id AND `unit_id`=:unit_id";
            $data=[
                'product_id'=>$product_id,
                'unit_id'=>$unit_id
            ];           
            $select=$this->db->prepare($sql);
            $select->execute($data);
            $array=$select->fetchAll();
            return $array[0];
        }


    


    }
?>