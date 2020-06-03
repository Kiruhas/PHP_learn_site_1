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
    ?>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <div class="container">
        <div class="states">
            <?php 
                $query_text = 'DELETE FROM "public"."Новости" WHERE id =' . $_GET['del_id'];
                if (isset($_GET['del_id'])){
                    $query = pg_query($db_connection, $query_text);
                    pg_free_result($query);
                }

                $query_text = 'SELECT * FROM "public"."Новости" ORDER BY id';
                $query = pg_query($db_connection, $query_text);
                // echo '<div>' . $_COOKIE['user'] . $_COOKIE['privilege'] . '</div>'; Проверка куки
                while ($res = pg_fetch_object($query)):
            ?>
                <div class="states_item">
                    <div class="item_header"><?php echo $res -> Заголовок ?></div>
                    <div class="item_content"><?php echo $res -> Содержание ?></div>
                    <a class="btns_edit" href="edit.php?edit_id=<?php echo $res -> id ?>">Редактировать</a>
                    <a class="btns_delete" href="?del_id=<?php echo $res -> id ?>">Удалить</a>
                </div>
            <?php endwhile; pg_free_result($query);?>
        </div>
    </div>
</body>
<?php 
    pg_close($db_connection);
?>
</html>
