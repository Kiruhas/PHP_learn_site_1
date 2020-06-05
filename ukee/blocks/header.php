<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="header_logo">
                <a class="logo_link" href="/">
                    <img src="../images/Header_icon.png" alt="">
                </a>
                <ul class="logo_categories">
                    <li class="category_films"><a href="">Фильмы</a></li>
                    <li class="category_serials"><a href="">Сериалы</a></li>
                    <li class="category_subscription"><a href="">Подписка</a></li>
                </ul>
            </div>
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