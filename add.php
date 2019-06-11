<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$name = filter_input(INPUT_POST, 'name');
$age = filter_input(INPUT_POST, 'age');
$post = filter_input(INPUT_POST, 'post');
$salary = filter_input(INPUT_POST, 'salary');
$phone = filter_input(INPUT_POST, 'phone');

$sql = "insert into emp3(name,age,post,salary,phone) values('$name','$age','$post','$salary','$phone')";
$conn->query($sql);
header("Location: home.php")

?>
