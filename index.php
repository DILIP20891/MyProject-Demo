<!DOCTYPE html>
<html lang="en" ng-app="FoodApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js"></script>
    <script src="app.js"></script>
</head>
<body>
    <div class="form-container">
        <div class="login-container" id="reg" style="display:none;">
            <div class="login-header">
                <img src="logo.png" alt="Logo" class="logo">
                <h1>Order App</h1>
                <p>FOOD DELIVERY</p>
            </div>
            <h1 class="form-title">Register</h1>
            <form method="post" action="register.php">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" ng-model="username" placeholder="User  Name" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <label for="register-email">Email</label>
                    <input type="text" id="email" name="email" ng-model="user.email" placeholder="Email" required ng-keyup="validateEmail()">
                    <p class="error" ng-show="emailError">@ is missing in email</p>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <label for="register-password">Password</label>
                    <input type="password" name="password" id="password" ng-model="user.password" placeholder="Password" required ng-keyup="validatePassword()">
                    <p class="error" ng-show="passwordError">Password must be at least 8 characters</p>
                </div>
                <div class="button-group">
                    <button type="submit" class="btn1" value="signUp" ng-disabled="emailError || passwordError" name="signUp">Register</button>
                    <p class="p1">Already Have Account?</p>
                    <button id="loginButton" class="btn">login</button>
                </div>
            </form>
            <br>
        </div>

        <div class="login-container" ng-controller="LoginController" id="log">
            <div class="login-header">
                <img src="logo.png" alt="Logo" class="logo">
                <h1>Order App</h1>
                <p>FOOD DELIVERY</p>
            </div>
            <div class="catchy-phrase">
                <p>{{ phrase }}</p>
            </div><br>
            <h1 class="form-title">Login</h1>
            <form method="post" action="register.php" >
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <label for="login-email">Email</label>
                    <input type="text" id="email" name="email" ng-model="user.email" placeholder="Email" required ng-keyup="validateEmail()">
                    <p class="error" ng-show="emailError">@ is missing in email</p>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <label for="login-password">Password</label>
                    <input type="password" name="password" id="password" ng-model="user.password" placeholder="Password" required ng-keyup="validatePassword()">
                    <p class="error" ng-show="passwordError">Password must be at least 8 characters</p>
                </div>
                <p class="recover">
                    <a href="#">Recover Password</a>
                </p>
                <div class="button1-group">
                    <button type="submit" class="btn1" value="signIn" ng-disabled="emailError || passwordError" name="signIn">Login</button>
                    <p class="p1">dont have account...?</p>
                    <a href="" id="registerButton" class="btn2">Register</a>
                </div>
            </form>
            <p class="description">Discover the best foods from over 1,000 restaurants and fast delivery to your doorstep.</p>
        </div>
    </div>
    <script defer src="script.js"></script>
</body>
</html>
