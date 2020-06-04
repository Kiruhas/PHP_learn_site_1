<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Learning!</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <div class="container">
        <div class="form">
            <h2>Добавить статью</h2>
            <form action="check_add.php" method="post" class="add_form">
                <input type="text" name="header" class="add_form_input" placeholder="Введите заголовок">               
                <textarea name="content" class="add_form_input" placeholder="Введите текст" ></textarea>
                <button type="submit" name="btn" class="add_form_submit">Добавить статью</button>
            </form>
        </div>
    </div>
</body>

</html>