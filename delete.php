<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$id = filter_input(INPUT_GET, "id");
$conn->query("delete from emp3 where id=".$id);
echo 'Successfully deleted';
echo "<a href='home.php'>View Result</a>";
?>