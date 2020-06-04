<?php
    $conn_string = "host=localhost port=5438 dbname=phpLearn user=postgres password=dg4ao9hv";
    $db_connection = pg_connect($conn_string);

    $header = $_POST['header'];
    $content = $_POST['content'];
    $id = $_GET['edit_id'];

    $error = '';
    if (trim($header) == ''){
        $error = 'Введите заголовок!';
    } else if (trim($content) == ''){
        $error = 'Введите содержание статьи!';
    } else if (trim(strlen($content) < 10)){
        $error = 'Содержание должно содержать более 10 символов!';
    }

    if ($error != ''){
        echo $error;
        pg_close($db_connection);
        exit;
    }

    $query_text = "UPDATE Новости SET Заголовок = '$header', Содержание = '$content' WHERE id = $id";

    $res = pg_query($db_connection, $query_text);

    pg_close($db_connection);
    if ($res){
        echo 'Данные успешно обновлены!';
    } else {
        echo 'Неудача!';
    }
?>
<br>
<a href="index.php">На главную</a>