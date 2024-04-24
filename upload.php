<?php


$folder = "upload/"; //target_dir

if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
}

$F_name = $_FILES["file"]["name"]; //File name

$target_file = $folder . $F_name;
$tmp = $_FILES["file"]["tmp_name"];


move_uploaded_file($tmp, $target_file);


echo "File uploaded successfully";


//Adam el khamsi ,Morocco , "Moroccan Hacker ☠️" PHP FILE :MOVE THIS FILE ON YOUR WEB HOSTING WITH CREATE NEW FOLDER NAMED "upload"
?>
