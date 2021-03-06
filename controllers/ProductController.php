<?php
/**
 * ./ - вихід з діючою папки
 * підключення класу Product 
 */
require_once './models/Product.php';
require_once './models/Category.php';

// наслідування від класу Controller
class ProductController extends Controller{

    //перевизначення методу __construct спеціально для product
    public function __construct(){
        $this->model=new Product();
        $this->view=new View();
        

    }

    // функція для формування і відображення головної сторінки product
    public function index(){
        $data_page=array();//1
        $filter=array();//1
        $data_page['category_active']=array();//1

        $category=new Category();
        $data_page['categories']=$category->getListCategory();//1
        if(isset($_GET['category']) && !empty($_GET['category'])){            
            $filter['category'] = $_GET['category'];
            if(is_array($filter['category'])){
              $data_page['category_active']=$filter['category'];  
            }else{
                //додавання нового елементу масиву
                $data_page['category_active'][]=$filter['category'];
            }
            $data_page['products'] = $this->model->getFilterProduct($filter);
        }else{
            $data_page['products']=$this->model->getListProducts();//1
        }
        // var_dump( $data_page['products']);
        // die;      
                    
        return $this->view->render('catalog',$data_page);//1
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
               $images=$this->model->getProductImages($data['id']);
            //    якщо не пустий і кількість елементів більше 1
                $data_page['images']=false; 
                if(count($images)>1){
                    // вирізаємо перший елемент масиву 
                    $data_page['main_image']=array_shift($images);
                    $data_page['images']=$images;
                }elseif(count($image)==1){
                    $data_page['main_image']=$image[0];
                    
                }else{
                    $data_page['main_image']='';
                }

                $data_page['units']=$this->model->getProductUnitPrice($data['id']);
                // array(2) { [0]=> array(3) { ["unit_id"]=> int(2) ["name"]=> string(8) "0,1 кг" ["price"]=> float(300) } [1]=> array(3) { ["unit_id"]=> int(3) ["name"]=> string(9) "0,05 кг" ["price"]=> float(250)
                // дістаю всі коментарі по ProductId
                // array(2) { [0]=> array(5) { ["user_id"]=> int(2) ["name"]=> string(4) "Rita" ["comment_id"]=> int(1) ["comment"]=> string(9) "Very Good" ["raiting"]=> int(5) } [1]=> array(5) { ["user_id"]=> int(8) ["name"]=> string(4) "Kort" ["comment_id"]=> int(2) ["comment"]=> string(8) "Good day" ["raiting"]=> int(3)
                $data_page['comments']=$this->model->getCommentsByProductId($data['id']);               
                    
               $data_page['header']=$this->view->render('header');
               $data_page['footer']=$this->view->render('footer');
               return $this->view->render('product',$data_page);
            }
        }
        echo 'Не має потрібного товару';
       
    }

    // public function filter(){
    //     $data_page=array()//1
    //     $filter = array();//1
    //     $data_page['category_active']=array();//1

    //     if(isset($_GET['category']) && !empty($_GET['category'])){            
    //         $filter['category'] = $_GET['category'];
    //         if(is_array($filter['category'])){
    //           $data_page['category_active']=$filter['category'];  
    //         }else{
    //             //додавання нового елементу масиву
    //             $data_page['category_active'][]=$filter['category'];
    //         }
            
    //         $data_page['products'] = $this->model->getFilterProduct($filter);
            
    //         // array(6) {
    //         //     ["product_id"]=>
    //         //     int(1)
    //         //     ["name"]=>
    //         //     string(15) "Дянь Хун"
    //         //     ["year"]=>
    //         //     int(2020)
    //         //     ["price"]=>
    //         //     float(350)
    //         //     ["categories"]=>
    //         //     array(3) {
    //         //       [0]=>
    //         //       string(23) "Червоний чай"
    //         //       [1]=>
    //         //       string(18) "Фасований"
    //         //       [2]=>
    //         //       string(18) "Розсипний"
    //         //     }
    //         //     ["image"]=>
    //         //     string(27) "./web/img/default_image.jpg"

    //         // echo '<pre>';
    //         // var_dump($data_page['products']);
    //         // echo '</pre>';
    //         // die;
    //     } else {
    //        $data_page['products']=$this->model->getListProducts();//   
    //     }

    //     $category=new Category();//1
    //     $data_page['categories']=$category->getListCategory();//1

    //     return $this->view->render('catalog',$data_page);//
        
    // }

}
?>