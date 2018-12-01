<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../includes/connection.php';

$query="delete from category where cat_id={$_GET['cat_id']}";

mysqli_query($link, $query);

header("location:manage_cat.php");
