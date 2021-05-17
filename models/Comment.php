<?php

class Comment extends Model{
  
    public function addComment(array $data){
        $sql='INSERT INTO `comment`(`user_id`, `comment`, `raiting`, `product_id`) VALUES (:userId,:comment,:raiting,:productId)';
        
        $select=$this->db->prepare($sql);        
        return $select->execute($data);
    } 

    

}

?>