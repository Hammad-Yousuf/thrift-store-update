<?php

$con = mysqli_connect('localhost','root','','fashionthrift');

if(isset($_POST['btn1'])){
    $name1 = mysqli_real_escape_string($conn, $_POST['name1']); 
    $email1 = mysqli_real_escape_string($conn, $_POST['email1']); 
    $contact1 = mysqli_real_escape_string($conn, $_POST['contact1']); 
    $address1 = mysqli_real_escape_string($conn, $_POST['address1']); 
    $city1 = mysqli_real_escape_string($conn, $_POST['city1']); 
    $province1 = mysqli_real_escape_string($conn, $_POST['province1']); 
    $password1 = mysqli_real_escape_string($conn, $_POST['password1']); 
    $cpassword1 = mysqli_real_escape_string($conn, $_POST['cpassword1']); 


    $pass =password_hash($password1, PASSWORD_BCRYPT);
    $cpass =password_hash($cpassword1, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $emailquery = "select * from users where email = '$email1'";
    $query = mysqli_query($conn , $emailquery);

    $emailcount = mysqli_num_rows($query);
    if($emailcount > 0){
        ?>
            <script>
                alert("Email Already Exists");
            </script>
            <?php
    }else{
        if($password1 === $cpassword1){

            $insertquery = "insert into users (name,email,contact,address,city,province,password,token) values ('$name1','$email1','$contact1','$address1','$city1','$province1','$pass','$token')";
            
            $iquery = mysqli_query($conn , $insertquery);
            if($iquery){
               
               $subject = "Email Activation";
               $body = "Hi, $name1 . Click here too activate your account
               http://localhost/project/index.php?token= $token ";

               $sender_email = "From: smehmil370@gmail.com";

               if(mail($email1, $subject, $body, $sender_email)){
               $_SESSION['msg'] = "Check you mail to activate your account $email1";
               header('location: login.php');
               }else{
                echo "Failed Email";
               }
            }else{
                ?>
                <script>
                    alert("Connection Failed");
                </script>
                <?php
            }
        }else{
            ?>
            <script>
                alert("Password does not match");
            </script>
            <?php

        }
    }

}


if(isset($_POST['btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginquery = "select * from users where email = '$email'";
    $loginquery_run = mysqli_query($conn , $loginquery);

    $email_count = mysqli_num_rows($loginquery_run);
    if($email_count){
        $email_pass = mysqli_fetch_assoc($loginquery_run);
        $db_pass = $email_pass['password'];
        $_SESSION['name'] = $email_pass['name'];
        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            ?>
            <script>
                alert("Login successfully");
                location.replace("cart.php");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Password does not match");
            </script>
            <?php
        }
    }else{
        ?>
        <script>
            alert("Invalid Email");
        </script>
        <?php
        }
    }


?>