<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Learning!</title>
    <?php
        $conn_string = "host=localhost port=5438 dbname=phpLearn user=postgres password=dg4ao9hv";
        $db_connection = pg_connect($conn_string);
        $query_text = 'SELECT Заголовок, Содержание FROM "public"."Новости" WHERE id=' . $_GET['edit_id'];
        $res = pg_fetch_object(pg_query($db_connection, $query_text));
    ?>
</head>
<body>  
    <div class="container">
        <div class="form">
            <h2>Изменить статью</h2>
            <form action="check_edit.php?edit_id=<?php echo $_GET['edit_id']?>" method="post" class="edit_form">
                <input type="text" name="header" class="edit_form_input" placeholder="Введите заголовок" value = "<?php echo $res -> Заголовок ?>">               
                <textarea name="content" class="edit_form_input" placeholder="Введите текст"><?php echo $res -> Содержание ?></textarea>
                <button type="submit" name="btn" class="add_form_submit">Сохранить</button>
            </form>
        </div>
    </div>
</body>


<?php 
    pg_close($db_connection);
?>
</html>