<div class="container">
<form method="POST">
    <div class="mb-3">
        <label for="id" class="form-label"></label>
        <input type="hidden" name="user_id" class="form-control" id="user_id" aria-describedby="user_id" value='<?=(isset($data['user']['id']))?$data['user']['id']:''?>'>
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div>
        <div class="mb-3">
            <label for="name" class="form-label">Імя </label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" value='<?=(isset($data['user']['name']))?$data['user']['name']:''?>'>
            <div id="nameHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Фамілія</label>
            <input type="text" name="surname" class="form-control" id="surname" aria-describedby="surname" value='<?=(isset($data['user']['surname']))?$data['user']['surname']:''?>'>
            <div id="surnameHelp" class="form-text"></div>
        </div>
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Електронна пошта</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value='<?=(isset($data['user']['email']))?$data['user']['email']:''?>'>
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
            <label for="login" class="form-label">Логін </label>
            <input type="text" name="login" class="form-control" id="login" aria-describedby="login" value='<?=(isset($data['user']['login']))?$data['user']['login']:''?>'>
            <div id="loginHelp" class="form-text"></div>
        </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input type="password" name='password'  class="form-control" id="exampleInputPassword1" value='<?=(isset($data['user']['password']))?$data['user']['password']:''?>'>
  </div>
  <br>
    <input type="submit" name='save' value='Продовжити' class="btn btn-primary">
  <!-- <button type="submit" name='send' class="btn btn-primary">Submit</button> -->
</form>
</div>