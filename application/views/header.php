<?php 
use ItForFree\SimpleMVC\Config;
use ItForFree\SimpleMVC\Url;

$User = Config::getObject('core.user.class');


//vpre($User->explainAccess("homepage/index"));

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
        <title>SimpleMVC | Учебный проект</title>
        
        <link rel="stylesheet" type="text/css" href="/CSS/bootstrap.css">
        
        <script src="/JS/jquery-3.2.1.js"></script>
        <script src="/JS/popper.js"></script>
        <script src="/JS/bootstrap.js"></script>

        <!--<script src="/JS/likes.js"></script>-->
        <!--<script src="/JS/searchGoods.js"></script>-->
    </head>
    <body>
        <h1>Самый лучший сайт</h1>
        <hr></hr>

<!-- Это блок навигации по сайту -->
        <p>
            <a href="/">Главная</a>
            
            <?php  if ($User->isAllowed("login/login")): ?>
                <a href="<?= Url::link("login/login")?>">[Вход]</a>
            <?php endif; ?>

            <?= 
                $User->returnIfAllowed("admin/adminusers/add", 
                   "<a href=" . Url::link("admin/adminusers/add") . ">+ Добавить пользователя</a>");

            ?>
            <?php  if ($User->isAllowed("login/logout")): ?>
            <a href="<?= Url::link("login/logout")?>">Выйти (<?= $User->userName ?>)</a>
         <?php endif; ?>  
        </p>
        
        
<!-- Это начало страницы сайта-->
       <div id="container">
        