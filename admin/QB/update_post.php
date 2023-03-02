<?php
  if(isset($_POST['editor'])){
    $editorText =$_POST['editor'];
    $id = $_POST['id'];
    include('connect.php');

    $query = mysqli_query($con ,"UPDATE 'ck_tab' SET 'text'= '$editorText'  WHERE id = '$id'");
    if($query){
        header("Location : article.php?success=1");
    }
    else{
        header("Location :update.php?success=0");
    }
  }