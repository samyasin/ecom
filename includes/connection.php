<?php
// open connection 
    $link = mysqli_connect("localhost","root","","ecommerce");
    if(!$link){
        die("cannot connect to DB");
    }
    