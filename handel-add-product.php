<?php
if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $description = $_POST['description'];
    $price=$_POST['price'];
}
$errors=[];
//username check vaild 
if(empty($username)){
$errors="enter user name.";
}elseif(! is_string($username)){
$errors="username must be a string.";
}elseif(strlen($username)>255||strlen($username)<0){
$errors="user name should be between 255 & 0";
}

//username check vaild
if(!empty($description)){
    if(!is_string($description)){
    $errors="description should be string";
    }
} 
// price check vaild
if(empty($price)){
    $errors="enter user price.";
}elseif(! is_numeric($price)){
    $errors="price should be number.";
}
if(!empty($errors)){
    echo $errors;

}else if(empty($errors)){
    echo "all is OK.";
}
