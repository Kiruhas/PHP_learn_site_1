<?php
    $conn_string = "host=localhost port=5438 dbname=phpLearn user=postgres password=dg4ao9hv";
    $db_connection = pg_connect($conn_string);

    $header = $_POST['header'];
    $content = $_POST['content'];

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

    $add_mas = [
        'Заголовок' => $header,
        'Содержание' => $content
    ];

    $res = pg_insert($db_connection, 'Новости',$add_mas);
    pg_close($db_connection);
    if ($res){
        echo 'Данные успешно добавлены!';
    } else {
        echo 'Неудача!';
    }
?>
<br>
<a href="index.php">На главную</a>