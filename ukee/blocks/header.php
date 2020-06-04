<header class="header">
    <div class="container">
        <div class="header_inner">
            <a class="header_logo" href="/">Тут будет логотип</a>
            <div class="nav">       
                <?php if ($_COOKIE['user'] == 'Да'): ?>
                    <?php if ($_COOKIE['privilege'] == 'Администратор'): ?>
                        <a class="nav_btn" href="new_article.php">Добавить статью</a>
                    <?php endif ?>
                    <a class="nav_btn" href="/">Кабинет</a>
                    <a class="nav_btn" href="auth_exit.php">Выйти</a>
                <?php else: ?>
                    <a class="nav_btn" href="register.php">Регистрация</a>
                    <a class="nav_btn" href="auth.php">Войти</a>
                <?php endif ?>
            </div>
        </div>
    </header>
</div>