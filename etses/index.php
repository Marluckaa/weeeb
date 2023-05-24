<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="form sign up">
            <h2>Sign up</h2>
            <div class="inputBox">
                <input type="text" required="required">
                <i class="fa-regular fa-user"></i>
                <span>Username</span>
            </div>
            <div class="inputBox">
                <input type="email" required="required" name="email">
                <i class="fa-regular fa-envelope"></i>
                <span>Email address</span>
            </div>
            <div class="inputBox">
                <input type="password" required="required">
                <i class="fa-solid fa-lock"></i>
                <span>Create password</span>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="cpass">
                <i class="fa-solid fa-lock"></i>
                <span>Confirm password</span>
            </div>
            <div class="option">
                <select name="user_type">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
            </div>
            <div class="inputBox">
                <input type="submit" value="Create Account">
            </div>
            <p>Already a member? <a href="#"
            class="login" name="reg_submit">Log in</a></p>
        </div>
        <div class="form signin">
            <h2>Sign in</h2>
            <div class="inputBox">
                <input type="text" required="required">
                <i class="fa-regular fa-user"></i>
                <span>Username</span>
            </div>
            <div class="inputBox">
                <input type="password" required="required">
                <i class="fa-solid fa-lock"></i>
                <span>Password</span>
            </div>
            <div class="inputBox">
                <input type="submit" value="Login">
            </div>
            <p>Not Registered?<a href="#"
                class="create">Create an account</a></p>
        </div>
    </div>
</body>
</html>