<div class="container">
    <p>Добрий день</p>
    <div>
    <a href="/user_update?id=<?=$data['user_id']?>" class="bttn">Редагування особистої інформації</a>
    </div>
    <hr>
    <div class="upholstery-btn">        
        <a href="/products?id=<?=$_SESSION['user_id']?>" class="bttn">Переглянути товари</a>
    </div>
    <hr>
    <div class="upholstery-btn">        
        <a href="/log_out" class="bttn">Вийти</a>
    </div>
</div>