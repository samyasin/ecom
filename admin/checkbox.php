<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../includes/connection.php';




/////////////////////////////////
$former = $_POST['former'];
  if(empty($former))
  {
    echo("You didn't select any checkbox.");
  }
  else
  {
    $N = count($former);
    //echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      //echo($former[$i] . " ");
        $query="delete from category where cat_id={$former[$i]}";
//echo $query;
//echo "</br>";
//echo $former[$i];
//echo "</br>";
mysqli_query($link, $query);
        }
  }
///////////////////////////////////////



header("location:manage_cat.php");
