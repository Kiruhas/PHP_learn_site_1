<?php require "../blocks/html_structure_open.php" ?>
<?php require "../blocks/header.php" ?>

<div class="container">
    <div class="form">
        <h2>Авторизация</h2>
        <form action="check_auth.php" method="post" class="add_form">
            <input type="text" name="login" class="add_form_input" placeholder="Введите логин">
            <input type="text" name="password" class="add_form_input" placeholder="Введите пароль">              
            <button type="submit" name="btn" class="add_form_submit">Войти</button>
        </form>
    </div>
</div>

<?php require "../blocks/html_structure_close.php" ?>