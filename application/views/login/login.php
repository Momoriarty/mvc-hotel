<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>
        Webleb
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>" />
</head>

<body style="display: flex; justify-content:center ; align-items: center;height: 100vh;overflow: hidden;">
    <div class="form-wrap">
        <div class="tabs">
            <h3 class="signup-tab"><a class="active" href="#signup-tab-content"
                    style="border-top-left-radius: 7px;">Sign Up</a></h3>
            <h3 class="login-tab"><a href="#login-tab-content" style="border-top-right-radius: 7px;">Login</a></h3>
        </div>
        <div class="tabs-content">
            <div id="signup-tab-content" class="active">
                <form class="signup-form" action="<?= base_url('login/register') ?>" method="post">
                    <input type="text" class="input" id="user_email" autocomplete="off" name="nama_user"
                        placeholder="Name">
                    <input type="text" class="input" id="user_name" autocomplete="off" name="username"
                        placeholder="Username">
                    <input type="password" class="input" id="user_pass" autocomplete="off" name="password"
                        placeholder="Password">
                    <input type="submit" class="button" value="Sign Up">
                </form>
                <div class="help">
                    <p>By signing up, you agree to our</p>
                    <p><a href="https://www.web-leb.com/">Terms of service</a></p>
                </div>
            </div>
            <div id="login-tab-content">
                <form class="login-form" action="<?= base_url('login/login') ?>" method="post">
                    <input type="text" class="input" id="user_name" autocomplete="off" name="username"
                        placeholder="Username">
                    <input type="password" class="input" id="user_pass" autocomplete="off" name="password"
                        placeholder="Password">
                    <input type="checkbox" class="checkbox" id="remember_me">
                    <label for="remember_me">Remember me</label>
                    <input type="submit" class="button" value="Login">
                </form>
                <div class="help">
                    <p><a href="https://www.web-leb.com/">Forget your password?</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('assets/js/login.js') ?>"></script>
</body>

</html>