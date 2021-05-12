<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h1><?=$data['title']?></h1>
    <p>Contackt with Us</p><br>
    <form action="test" method='POST'>
    <input type="text" name='name' placeholder='name'><br> 
    <input type="text" name='tel' placeholder='tel'><br>
    <textarea name="question" >question</textarea><br>
    <input type="submit" name='send'><br>
    </form>
</body>
</html>