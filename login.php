<?php
 
 include 'code.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="img/favicon.png">
    <title></title>
  </head>
  <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        font-family: "Poppins" , sans-serif;
         box-sizing: "border-box"; 
        
        }
        
        body{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
             /* background-color: #FF8C00;  */
             background-image: radial-gradient(orange,);
            padding: 30px;
        }
        .container{
            position: relative;                  
            max-width: 850px;
            width: 100%;
            background: #fff;
            padding: 40px 30px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
            perspective: 2700px; 
        }
        .container .cover{
            position: absolute;
            height: 100%;
            width: 50%;
            top: 0;
            left: 50%;
            z-index: 98;
            transition:  all 1s ease;
            transform-style: preserve-3d;
            transform-origin: left;
        }

       .form .container .cover::before{
         content: '';
         position: absolute;
         height: 100%;
         width: 100%;
         background: #ffc107;
         opacity: 0.5;
         z-index: 100;

        }

        .form .container .cover::after{
         content: '';
         position: absolute;
         height: 100%;
         width: 100%;
         background: #ffc107;
         opacity: 0.5;
         z-index: 100;
         transform: rotateY(180deg);
        }

         .container #flip:checked ~ .cover{
            transform: rotateY(-180deg);
        } 
        /* .container .cover:hover {
  width: 100px;
  height: 100px;
  transform: rotate(180deg);
} */

       .container .cover img{
        position: absolute;
        height: 100%;
        width: 100%;
        object-fit: cover;
        z-index: 12;
        backface-visibility: hidden;
        }

        .container .cover .back .backImg{
        transform: rotateY(180deg);
        
        }

        .container .cover .text{
            position: absolute;
            z-index: 111;
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .cover .text .text-1,
        .cover .text .text-2{
            font-size: 30px;
            font-weight: 600px;
            color: #fff;
            text-align: center;
            backface-visibility: hidden;
        }

        
        .cover .back .text .text-1,
        .cover .back .text .text-2{
            transform: rotateY(180deg);
        }

        .cover .text .text-2{
         font-size: 15px;
         font-weight: 500px;
        }
        
       .container .form{                     
          height: 100%;
          width: 100%;
          background: #fff;
        }

        .container .form-content{
           display:flex;
           align-items: center;
           justify-content: space-between;
        }

        .form-content .login-form,
        .form-content .signup-form{
         width: calc(100% / 2 - 25px);
         /* background: red; */
        }

       .form-content .title{
            position: relative;
            font-size: 24px;
            font-weight: 500;
            color: #333;
        }

         .form-content .title:before{
            left: 0;
            bottom: 0;
            content: '';
            position: absolute;
            height: 3px;
            width: 25px;
            background: #FF8C00;
        }

        .signup-form .title:before{
         width: 20px;
        }

        .form-content .input-boxes{
            margin-top: 30px;
        }

        .form-content .input-box{
            display: flex;
            align-items: center;
            height:50px;
            width: 100%;
            margin: 10px 0;
            position: relative;

        }
        .form-content .input-box input{
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            padding: 0 30px;
            font-size: 16px;
            font-weight: 500px;
            border-bottom: 2px solid rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }
        .form-content .input-box input:focus,
        .form-content .input-box input:valid{
            border-color: #FF8C00;
        }
        .form-content .input-box i{
           position: absolute;
           color: #FF8C00;
           font-size: 17px;
        }

         .form-content .text{
            font-size: 14px;
            font-weight: 500;
            color: #FF8C00;
        }

        .form-content .text a{
            text-decoration: none;
        }

        .form-content .text a:hover{
            text-decoration: underline;
        } 
        .form-content .button{
            color: #fff;
            margin-top: 40px;
        }

        .form-content .button input{
            color: #fff;
            background: #FF8C00;
            border-radius: 6px;
            padding: 0;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .form-content .button input:hover{
            background: #FFA500;
        }
        .form-content label{
            color: #000000;
            cursor: pointer;
        }
        .form-content label:hover{
            text-decoration: underline;
        }
        .form-content .login-text,
        .form-content .sign-up-text{
            text-align: center;
            margin-top: 25px;
        }

         </style>
  <body>
    
<div class="container">
    <input type="checkbox" id = "flip">
 <div class="cover">
    <div class="front">
        <img src="img/t.jpg" alt="img-fluid">
        <!-- <div class="text">
        <span class= "text-1">TShirts are now selling.</span>
        <span class= "text-2">Get Register and Login now.</span>
        </div> -->
    </div>

    <!-- <div class="back">
        <img class = "backImg" src="img/testimonial_img_3.png" alt="img-fluid">
        <div class="text">
        <span class= "text-1">EBook are now selling.</span>
        <span class= "text-2">Get Register and Login now.</span>
        </div>
    </div> -->
    </div> 


    <!-- <div class="back">
        <img class = "backImg" src="img/special_cource_3.png" alt="">
        <div class="text">
        <span class= "text-1">EBook are now selling.</span>
        <span class= "text-2">Get Register and Login now.</span>
        </div>
    </div> -->
    
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method= "post">
        <div class="form-content">
        <div class="login-form">
            <div class="title">Login</div>
            <div class="input-boxes">
                <div class="input-box">
                    <i class= "fas fa-envelope"></i>
                    <input type="email" name = "email" placeholder = "Enter Email" required>
                </div>

                <div class="input-box">
                    <i class= "fas fa-envelope"></i>
                    <input type="password" name = "password" placeholder = "Enter Password" required>
                </div>

                <!-- <div class="text"><a href="#" style = 'color: #FF8C00'>Forgot password</a></div> -->
                <div class="button input-box">
                    
                    <input type="submit" name = "btn" value = "Submit">
                </div>

                <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
            </div>
        </div>
    </form>

        
    
        <div class="signup-form">
            <div class="title">Signup</div>
            <?php 
            if(isset($_SESSION['msg'])){
               ?> 
               <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?php $_SESSION['msg'] ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
               
             <?php
                unset($_SESSION['msg']);
            }
            ?>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method= "post">
            <div class="input-boxes">
  
            <div class="input-box">
                    <i class= "fas fa-user"></i>
                    <input type="text" name = "name1" required placeholder = "Enter Name">
                </div>

                <div class="input-box">
                    <i class= "fas fa-envelope"></i>
                    <input type="email" name = "email1" required placeholder = "Enter Email" >
                </div>

                <div class="input-box">
                    <i class= "fas fa-phone"></i>
                    <input type="number" name = "contact1" required placeholder = "Enter Contact Number" >
                </div>

                <div class="input-box">
                    <i class= "fas fa-address-card"></i>
                    <input type="text" name = "address1" required placeholder = "Enter Address" >
                </div>

                <div class="input-box">
                    <i class= "fas fa-city"></i>
                    <input type="text" name = "city1" required placeholder = "Enter City">
                </div>

                <div class="input-box">
                    <i class= "fas fa-map"></i>
                    <input type="text" name = "province1" required placeholder = "Enter Province">
                </div>

                <div class="input-box">
                    <i class= "fas fa-envelope"></i>
                    <input type="password" name = "password1" required placeholder = "Enter Password" >
                </div>

                <div class="input-box">
                    <i class= "fas fa-envelope"></i>
                    <input type="password" name = "cpassword1" required placeholder = "Enter Confirm Password" >
                </div>

                <!-- <div class="text"><a href="#">Forgot password</a></div> -->
                <div class="button input-box">
                    
                    <input type="submit" name = "btn1" value = "Submit">
                </div>
                <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
            </div>
        </div>

            </form>
            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>