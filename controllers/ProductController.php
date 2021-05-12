<?php
/**
 * ./ - вихід з діючою папки
 * підключення класу Product 
 */
require_once './models/Product.php';

// наслідування від класу Controller
class ProductController extends Controller{

    //перевизначення методу __construct спеціально для product
    public function __construct(){
        $this->model=new Product();
        $this->view=new View();

    }

    // функція для формування і відображення головної сторінки product
    public function index(){
        
        echo 'products this is product';
    }

    // функція для формування відображення товару і його зображення
    public function view($data){
        //пустий масив для інфо про продукт
        $data_page=array();
        if(isset($data['id']) && !empty($data['id'])){
            if($product=$this->model->getProductById($data['id'])){
                // заповнюємо інфо про продукт
               $data_page['product']=$product;
            //    заповнюємо зображеннями даний масив
               $data_page['images']=$this->model->getProductImages($data['id']);
               return $this->view->render('product',$data_page);
            }
        }
        echo 'Не має потрібного товару';
       
    }

}
?>