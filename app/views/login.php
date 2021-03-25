<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ASSETS . "pa" ?>/css/normalize.css">
    <link rel="stylesheet" href="<?= ASSETS . "pa" ?>/css/form-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= ASSETS . "pa" ?>/img/x-logo.png" type="image/x-icon">
    <title>Warframe Fandom</title>
</head>

<body>
    <div class="wrapper">
        <img class="form__background__image" src="<?= ASSETS . "pa" ?>/img/Excalibur.jpg" alt="">
        <div class="form__wrapper">
            <form action="POST">
                <h2>Login</h2>
                <div>
                    <label for="form__login">Login</label>
                    <input type="text" id="login__login" name="form__login" placeholder="Login" autocomplete="off">
                </div>
                <div>
                    <label for="form__password">Password</label>
                    <input type="password" id="login__password" placeholder="Password" autocomplete="off">
                    <small class="error_msg">password or login is not correct</small>
                </div>
                <input type="submit" name="form__button" id="login__button" class="button" value="Sing Up">
                <h6><a href="#" class="form__help">Forgot password?</a></h6>
            </form>
            <div class="registration">
                <a href="signup" class="form__help">Have no account yet? Sign Up</a>
            </div>
        </div>
        <script src="<?= ASSETS . "pa" ?>/js/login.js"></script>
    </div>
</body>

</html>