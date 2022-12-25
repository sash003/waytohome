<?php

//header("Content-Type: application/json", true);
//print_r($_SERVER);
//print_r($_POST);
//print_r($_GET);
//exit;

if($_GET['href']){
  $href = $_GET['href'];
  $file = include __DIR__."/template/views".$href;
  exit($file);
}

