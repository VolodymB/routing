<?php

require_once './models/Comment.php';

class CommentController extends Controller{
    public function __construct(){
        $this->model=new Comment();
    }

    public function add(){
        $user_id=1;
        $data=array(
            'userId'=>$user_id,
            'comment'=>$_POST['coment_msg'],
            'raiting'=>$_POST['raiting'],
            'productId'=>$_POST['product_id']
        );
        if($this->model->addComment($data)){
            header("Location:product?product_id=".$_POST['product_id']);
        }
        //array(5) { ["coment_name"]=> string(8) "dtasjfdj" ["product_id"]=> string(1) "2" ["raiting"]=> string(1) "4" ["coment_msg"]=> string(6) "adsdjj" ["coment_btn"]=> string(20) "Відправити" }
        // var_dump ($_POST);
    }

}

?>