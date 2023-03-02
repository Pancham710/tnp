<?php

    if(isset($_FILES['pfid']) && isset($_FILES['resumeid']) && isset($_POST['Submit'])){
        // echo "Hello";

        echo "<pre>";
        print_r($_FILES['pfid']);
        echo "</pre>";
    }else{
        header("Location: pfresumes.php");
    }
?>