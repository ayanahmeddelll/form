<?php
include_once("./style.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body?>


    <header>
        <h2 class="logo">logo</h2>
        <nav class="navidgation">
            <a href="#">home</a>
            <a href=" #">About</a>
            <a href="#">services</a>
            <a href="#">contact</a>
            <button class="btnlogin-popup">Login Agent</button>
        </nav>
    </header>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box lognin">
            <h2>Agent login</h2>
            <form action="./logic.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" class="form-control" name="signInEmail" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label"> Email:</label>

                </div>
                
                
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="signInCode" class="form-control" id="exampleInputPassword1">
                    <label for="exampleInputcode1" class="form-label"> CODE:</label>
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox"> Remember me
                    </label>
                    <a href="#">Forgot passwrod?</a>
                </div>
                <button type="submit" class="btn" name="signinBtn"> login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">register</a></p>
                </div>
            </form>
        </div>
        <div class="form-box register">
            <h2>Forget code </h2>
            <form action="./l" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle"></ion-icon></span>
                    <input type="email" class="form-control" name="signInEmail" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label">Agent name</label>

                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="signInPassword" class="form-control" id="exampleInputPassword1">
                    <label for="exampleInputPassword1" class="form-label">Last PASSWORD </label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="signInCode" class="form-control" id="exampleInputPassword1">
                    <label for="exampleInputcode1" class="form-label"> Last CODE</label>
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox"> I agree to the team & i am agent </label>
                </div>
                <button type="submit" class="btn" name="signBtn">sign as agnet</button>
                <div class="login-link">
                    <p>remeber have an code?<a href="#" class="register-link">go to login</a></p>
                </div>

            </form>
        </div>
    </div>
    <script src="why.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

</html>