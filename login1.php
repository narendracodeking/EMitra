<?php session_start();


    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="users";
    $conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(isset($_POST['login']))
{
    
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    
     
        $sql="SELECT * from login where username=$name";
        $result=mysqli_query($conn,$sql);
         $resultcheck=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
                
                    
                        if($row['password']==$password)
                        {   $_SESSION=array();
							$_SESSION['name']=$row['name'];
							header("location:index.php");
							
                        }
                    
                    else
                    {
                        echo "<script type='text/javascript'>alert('Sorry, No such record found..!!!')</script>";
                    }
                
    
}



if(isset($_POST['signup']))
{
    
    $username=mysqli_real_escape_string($conn,$_POST['usernamesignup']);
    $password=mysqli_real_escape_string($conn,$_POST['passwordsignup']);
    $name=mysqli_real_escape_string($conn,$_POST['namesignup']);
    
     
        $sql="insert into login values('$name','$password','$name')";
        $result=mysqli_query($conn,$sql);
    
        
                    echo "<script type='text/javascript'>alert('Now You can LogIn!')</script>";
					header("location:index.php");
        
    

                
}
?>