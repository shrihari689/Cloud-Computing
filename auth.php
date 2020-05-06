<?php

    // HTML PAge - Retirve
    $username= $_POST['uname'] ;
    $password=$_POST['psw'];

    $conn = mysqli_connect('3.22.190.141', '192CT149', '192CT149','192CT149');

    // TABLE - attendance;
    if($conn){

        // Databse - Schema
        $sql="SELECT * FROM `login` WHERE username='$username' AND password='$password'";
        $res= mysqli_query($conn,$sql);
        if($res){
            
            if(mysqli_num_rows($res) > 0){
               
                echo "Ok";
                header('Location: http://www.example.com/');

            }
            else{
                echo "Password"; //Wrong
            }
           
        }else{
            echo "Not OK";
        }

    }
    else{

        echo "Sorry!";
    }
    

?>