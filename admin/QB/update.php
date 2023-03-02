<?php include('connect.php'); ?>
<?php
    if(isset($_GET['id'])){
        $id =$_GET['id'];
    }
    else{
        header('all_articles.php?sucess=0');
    }


    ?>

    <!DOCTYPE html>
    <html>
    <head>
        
        <title>Update Data</title>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <form action ="update_post.php" method= "post">
            <textarea class ="ckeditor" name="editor">
                <?php $query = mysqli_query($con, "SELECT * FROM ck_tab WHERE id= '$id' ");
                     $row = mysqli_fetch_array($query);
                ?>
                <?= $row['text']; ?>     
            </textarea>
            <input type="hidden" name="id" value="<?= $id">
            <button type="submit">Update Data </button>
        </form>
    </body>
    </html>