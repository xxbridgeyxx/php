<?php
$res = $_POST["mark"]; //recieve the post request
if ($res > 100 || $res < 0){
    echo "Wrong input";
}elseif($res > 90){
    echo "A";
}elseif ($res > 80){
    echo "B";
}elseif ($res >= 50){
    echo "C";
}elseif ($res < 50){
    echo "D";
}