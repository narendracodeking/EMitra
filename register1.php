<?php session_start();
    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="users";
    $conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
function NewUser() 
{ 
    $fullname = $_POST['name']; 
    $userName = $_POST['user']; 
    $email = $_POST['email']; 
    $password = $_POST['pass']; 
    $query = "INSERT INTO websiteusers (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')"; 
    $data = mysql_query ($query)or die(mysql_error()); 
    if($data) 
        { 
            echo "YOUR REGISTRATION IS COMPLETED..."; 
        } 
} 
function SignUp() 
{ 
    if(!empty($_POST['user'])) 
    { 
        $query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
        if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
            { 
                newuser(); 
            } 
            else 
                {
                 echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
                } 
    } 
} 
if(isset($_POST['submit'])) 
    { 
        SignUp(); 
    } 
?>