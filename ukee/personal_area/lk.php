<?php
    $conn_string = "host=localhost port=5438 dbname=ukkeMovies user=postgres password=dg4ao9hv";
    $db_connection = pg_connect($conn_string);
?>

<?php require "../blocks/html_structure_open.php" ?>
<?php require "../blocks/header.php" ?>

<?php if ($_COOKIE['log'] == 'Да'): ?>
<div class="container">
    <?php 
        $query = pg_query_params($db_connection, 'SELECT * FROM users WHERE id = $1', array($_COOKIE['id']));
        $res = pg_fetch_object($query);
    ?>
    <div class="personal">
        <div class="personal_header">
            <div class="personal_header_name"><?php echo $res -> username ?></div>
            <div class="personal_header_email"><?php echo $res -> email ?></div>
        </div>
        <div class="personal_content">
            <div class="personal_finance">
                <div class="finance_sub">
                    <div class="sub_content">
                        <div class="sub_head">Подписка</div>
                        <?php if (($res -> subscription) == 't'): ?>
                            <div class="sub_timeout">истекает <?php echo $res -> subscription_date ?></div>
                        <?php else: ?>
                            <div class="sub_timeout">Не оплачено</div>
                        <?php endif ?>
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
                    <div class="back_change_name">
                        <a href="" class="back_change_word">Сменить пароль</a>
                    </div> 
                </div>
                <div class="back_out">
                    <img src="../images/login.png" alt="">
                    <div class="back_out_name">
                        <a href="auth_exit.php" class="back_out_word">Выйти</a>
                    </div>
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
                <a href="" id="auth_btn">Войти</a>
            </div>
            <div class="authorizate_ili"> или </div>
            <div class="authorizate_register">
                <a href="=" id="reg_btn">Зарегистрироваться</a>
            </div>
        </div>
    </div>
    <div class="input_data">
        <div class="authorizate_form" id="auth_form">
            <div class="auth_form">
                <form action="check_auth.php" method="post" class="add_form">
                <input type="text" name="login" class="add_form_input" placeholder="Введите логин">
                <input type="text" name="password" class="add_form_input" placeholder="Введите пароль">              
                <button type="submit" name="btn" class="add_form_submit">Вход</button>
            </form>
            </div>
        </div>
        <div class="registrate_form" id="reg_form">
            <div class="reg_form">
                <form action="check_register.php" method="post" class="add_form">
                    <input type="text" name="login" class="add_form_input" placeholder="Введите логин">
                    <input type="text" name="password" class="add_form_input" placeholder="Введите пароль"> 
                    <input type="text" name="password_check" class="add_form_input" placeholder="Повторите пароль">
                    <input type="text" name="email" class="add_form_input" placeholder="Введите почту">                
                    <button type="submit" name="btn" class="add_form_submit">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endif ?>



<?php pg_close($db_connection) ?>
<?php require "../blocks/html_structure_close.php" ?>