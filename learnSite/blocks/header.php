<div class="container">
    <header class="header">
        <h2 class="logo">Новости</h2>
        <div class="header_list">
            <a class="list_btn" href="new_article.php">Добавить статью</a>
            <?php if ($_COOKIE['user'] == 'Да'): ?>
                <a class="list_btn" href="index.php">Кабинет</a>
            <?php else: ?>
                <a class="list_btn" href="register.php">Регистрация</a>
                <a class="list_btn" href="auth.php">Войти</a>
            <?php endif ?>
        </div>
    </header>
</div>