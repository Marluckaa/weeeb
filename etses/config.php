<?php

session_start();
$host = "localhost";
$user = "root";
$pass = ""; 
$dbname = "cs2a";

$con = mysqli_connect($host, $user, $pass, $dbname);

if(!$con){
die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected!";

if(isset($_POST['reg_submit'])){
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $email = $_POST['email'];


    $sql = "INSERT INTO user(username, password,email) 
             VALUES('$username', '$password','$email')";
    if(mysqli_query($con, $sql)){
        echo "new user successfully added!";
    }
    else{
        echo "error". $sql . " " . mysqli_error($con);
    }
}


if(isset($_POST['but_submit'])){
    $uname = mysqli_real_escape_string($con, $_POST['txt_name']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pass']);
    
    if($uname != "" && $password != ""){
        $sql_query = "SELECT count(*) AS id FROM user
        WHERE username='".$uname." 'AND password='".$password." ' ";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        
        $count = $row['id'];

        $pmission = "SELECT id, permission FROM user
        WHERE username='".$uname." 'AND password='".$password." ' ";
        $pmresult = mysqli_query($con, $pmission);
        $pmrow = mysqli_fetch_array($pmresult);


        if($count > 0 ){
            $_SESSION['permission']=$pmrow['permission'];
            $_SESSION['uname']=$uname;
            if( $_SESSION['permission']=='admin'){
                header("location: admin.php");
            }else{
                header("location: main.php");
            }
            
           
        }
        else{
            echo "invalid username and password ";
        }

    }
}


?>