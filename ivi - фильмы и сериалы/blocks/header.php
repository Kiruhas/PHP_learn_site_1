<div class="container">
    <header class="header">
        <a class="logo" href="/">Новости будних дней</a>
        <div class="header_list">       
            <?php if ($_COOKIE['user'] == 'Да'): ?>
                <?php if ($_COOKIE['privilege'] == 'Администратор'): ?>
                    <a class="list_btn" href="new_article.php">Добавить статью</a>
                <?php endif ?>
                <a class="list_btn" href="/">Кабинет</a>
                <a class="list_btn" href="auth_exit.php">Выйти</a>
            <?php else: ?>
                <a class="list_btn" href="register.php">Регистрация</a>
                <a class="list_btn" href="auth.php">Войти</a>
            <?php endif ?>
        </div>
    </header>
</div>