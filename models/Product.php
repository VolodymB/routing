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
    public function getProductItem($product_id){
        $images=array();
        

        $sql="SELECT `product`.`name`,`product`.`year`,`product_id`, MIN(`price`) as 'price' FROM `product_unit` LEFT JOIN `product` ON `product_id`=`product`.`id` WHERE `product_unit`.`product_id`=:product_id GROUP BY `product_id`";
        $data=array(
            'product_id'=>$product_id
        );
        $select=$this->db->prepare($sql);
        $select->execute($data);
        $product=$select->fetchAll();
        // echo '<pre>';
        // var_dump($product);
        // echo '</pre>';
        // die;
            $product_info=array();
            $categories=array();
            $image='./web/img/default_image.jpg';
           
            /**
             *  дістати категорії товару
             * getCategoryById(id)
             * */   
            if($product_categories=$this->getCategoryByProductId($product_id)){
                
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
            if($product_images=$this->getProductImages($product_id)){
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
                'product_id'=>$product_id,
                'name'=>$product[0]['name'],
                'year'=>$product[0]['year'],
                'price'=>$product[0]['price'],
                'categories'=>$categories,
                'image'=>$image
            );
                   
        
        // echo '<pre>';
        // var_dump($product_info); 
        // echo '</pre>';
        // die;
        return $product_info;
    }

        public function getListProducts(){
            $products=array();

            $sql="SELECT DISTINCT(`product_id`) FROM `product_unit` ";
            foreach($this->db->query($sql) as $product){
                $products[]=$this->getProductItem($product['product_id']);
            }

            return $products;
        }

        public function getFilterProduct($filter=array()){
            
            $product=array();

            $sql = "SELECT DISTINCT (`product_category`.`product_id`), `product`.`name`,`product`.`year`, MIN(`price`) as 'price' FROM `product_unit` LEFT JOIN `product` ON `product_id`=`product`.`id` LEFT JOIN `product_category` ON `product`.`id` = `product_category`.`product_id`";

        if(isset($filter['category']) && !empty($filter['category'])){
            if(is_array($filter['category'])){
                $sql .= "WHERE `category_id` IN (".implode(',', $filter['category']).")";
            }else{
                $sql .= "WHERE `category_id`=".$filter['category'];
            }
            
        }

        $sql .= " GROUP BY `product_id`";

        if(isset($filter['sort']) && !empty($filter['sort'])){
            $sql .= " ORDER BY ...";
        }

        foreach($this->db->query($sql) as $product){          
            $products[]=$this->getProductItem($product['product_id']);        
        }

        return $products;
            // if(!empty($filter['category'])){
            //     $value=implode(',',$filter['category']);//1,2,3
            //     $sql="SELECT DISTINCT `product_id` FROM `product_category` WHERE `category_id` IN ($value)";
            //     $this->db->query($sql);
            // }
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