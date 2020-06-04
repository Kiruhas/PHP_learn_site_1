<?php
    setcookie('user', '', time() - 3600, '/');
    setcookie('privilege', '', time() - 3600, '/');
    header('Location: /');
?>