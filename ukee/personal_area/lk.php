<?php
    $conn_string = "host=localhost port=5438 dbname=ukkeMovies user=postgres password=dg4ao9hv";
    $db_connection = pg_connect($conn_string);
?>

<?php require "../blocks/html_structure_open.php" ?>
<?php require "../blocks/header.php" ?>

<?php if ($_COOKIE['login' == 'Да']): ?>
<div class="container">
    <div class="personal">
        <div class="personal_header">
            <div class="personal_header_name">kiruhas46</div>
            <div class="personal_header_email">kiruhas46@gmail.com</div>
        </div>
        <div class="personal_content">
            <div class="personal_finance">
                <div class="finance_sub">
                    <div class="sub_content">
                        <div class="sub_head">Подписка</div>
                        <div class="sub_timeout">истекает 10 июля</div>
                        <div class="sub_control">Управлять</div>
                    </div>
                </div>
                <div class="finance_money">
                    <div class="money_content">
                        <div class="money_head">0 ₽</div>
                        <div class="money_timeout">на счете</div>
                        <div class="money_control">Пополнить</div>
                    </div>
                </div>
            </div>
            <div class="personal_back">
                <div class="back_changepass">
                    <img src="../images/Change_pass.png" alt="">
                    <div class="back_change_name">Сменить пароль</div> 
                </div>
                <div class="back_out">
                    <img src="../images/login.png" alt="">
                    <div class="back_out_name">Выйти</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="container">
    <div class="authorizate">
        <div class="authorizate_center">
            <div class="authorizate_login">
                <a href="auth.php">Войти</a>
            </div>
            <div class="authorizate_ili"> или </div>
            <div class="authorizate_register">
                <a href="register.php">Зарегистрироваться</a>
            </div>
        </div>
    </div>
</div>
<?php endif ?>

<?php pg_close($db_connection) ?>
<?php require "../blocks/html_structure_close.php" ?>