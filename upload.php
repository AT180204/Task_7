<?php

$folder_path = 'uploads';
$file_path = $folder_path.$_FILES['fileUpload']['name'];
$flag = true;

if(file_exists($file_path)){
    echo 'File exist!';
    $flag = false;
}

if($_FILES['fileUpload']['size']>5242880){
    echo 'Size to large!';
    $flag = false;
}

if($flag){
    move_uploaded_file($_FILES['fileUpload']['tmp_name'], $file_path);
    echo 'File uploaded successfully!';
}
else{
    echo 'Upload failed!';
}

?>
