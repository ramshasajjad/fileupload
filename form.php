<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_FILES['image'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";   
    $files_name=$_FILES['image']['name'];
    $files_tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($files_tmp,"gallery/".$files_name);
    
    if($_FILES){
        echo "File uploaded successfully";
    }else{
        echo "Failed to upload file";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    
<input type="file" name="image"><br></br>
<input type="submit">

</form>
</body>
</html>


