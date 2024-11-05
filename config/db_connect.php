<?php 


//MySQLi or PDO
//coonect to db

$conn = mysqli_connect('localhost', 'lex', 'test1234', 'ninja_pizza');
// check conn

if(!$conn){
    echo 'Connection Error: '.mysqli_connect_error();
}

?>