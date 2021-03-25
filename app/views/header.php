<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ASSETS?>pa/css/normalize.css">
    <link rel="stylesheet" href="<?= ASSETS?>pa/css/style.css">
    <link rel="shortcut icon" href="<?= ASSETS?>pa/img/x-logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Warframe Fandom</title>
</head>


<body>
    <div class="wrapper">
        <header>
            <div class="header__row">
                <div class="header__container">
                    <!-- site logo -->
                    <div class="header__logo">
                        <a href="<?= ROOT?>index">
                            <img src="<?= ASSETS?>pa/img/logo.png" alt="Logo">
                            <span class="header__name">Kotik</span>
                        </a>
                    </div>
                    <!-- block with user information/ registration/ log in -->
                    <?php
                        $login = false;
                        if(!$login)
                        {
                            echo '
                                <div class="header__user__reg" id="user__reg">
                                    <a href="login" class="header__login button">log in</a>
                                    <a href="signup" class="header__registration button">sign up</a>
                                </div>
                            ';
                        }else{
                            echo '
                            <!-- user -->
                            <div id="header__user">
                                <div class="header__dropdown__menu">
                                    <img src="<?= ASSETS?>pa/img/user_avatar.png" alt="user__avatar" class="user__avatar dropdown__menu">
                                    <div class="dropdown__content">
                                        <a href="">message</a>
                                        <a href="">my profile</a>
                                        <a href="">settings</a>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    
                    ?>

                </div>
            </div>
            <div class="content__banner">
                <div class="content__link">
                    <ul>
                        <li><a href="<?= ROOT?>index">
                                <div class="content__li">Main Page</div>
                            </a></li>
                        <li><a href="<?= ROOT?>about">
                                <div class="content__li">About Project</div>
                            </a></li>
                        <li><a href="<?= ROOT?>donation">
                                <div class="content__li">Donation</div>
                            </a></li>
                    </ul>
                </div>
            </div>
        </header>