<?php
//sessions
if(isset($_POST["submit"])){
//cookie for gender 

setcookie('gender', $_POST['gender'], time()+ 86400);



    session_start();

    $_SESSION['name'] = $_POST['name'];

    header('Location:index.php');
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
    <input type="text" name="name" id="">
    <select name="gender" id="">
        <option value="male">male</option>
        <option value="female">female</option>
    </select>
    <input type="submit" name="submit" value="submit" id="">
</form>
    
</body>
</html>