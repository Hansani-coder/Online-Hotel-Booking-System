<!--IT23157446 B.A.L.M.U. Bogoda Arachchi-->

<html>
    <head>
        <title> Login to Hotel Elegence </title>
        <link rel = "stylesheet" href ="css/loginPage.css">
        <style>
            body{
                background-image: url("images/loginBackground.jpg");
            }
        </style>    
            </head>
    </head>

    <body>
        <div class = "background2">
            <form action="loginPHP.php" method="post">
                <br><br>
                <h1> Login </h1>    <br><br>
                <center>
                    <div class ="textBox">
                    
                        <input type = "text" name="username" placeholder = "userId" required>
                     
                    </div>  <br>
                    <div class = "textBox">
                        <input type = "text" name="password" placeholder="password" required>
                    
                    </div>  <br>
                </center>
                <div class = "fogotPassword">
                    <a href = "Register.php"> Forgot Password </a>
                </div> <br>

                 <center>
                     <button type = "submit" name="login" class = "btn">Login</button>
                
                     <div class = "registerPage">
                           <a href = "register.php"> 
                             <p> Don't have an account? Create one </p>
                         </a>
                 </center>
                
           </div>

    </body>
</html>