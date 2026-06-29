<!--IT23164826
     DISANAYAKA E.S-->
<html>
    <head>
        <tile> </tile>
        <link rel = "stylesheet" href ="css/Register.css">
        <style>
            body{
                background-image: url("images/EregisterBackground.jpg");
            }
            table{
                border-spacing: 0 10px;
                column-gap: 5px;
				
                margin-left: auto;
                margin-right: auto;
            } 
        </style>
    </head>
    <body>
        <div class = "background1">
            <form action = "Einsert.php" method = "post">
                <h1> Create an account </h1>
                <div class = "input1">
                    
                      <table>
                        <tr>
                         <td>
                                <label for = "firstName"></label>
                                <input type = "text" placeholder = "First Name" name = "firstName" required id="fisrtName">
						</td>
                            </tr>
							
                            <tr>
                            <td>							
                                <label for = "lastName"></label>
                                <input type = "text" placeholder = "Last Name" name = "lastName" required id="lastName">
							</td>
                           
                        </tr>
						<tr>
                         <td>
                                <label for = "NIC"></label>
                                <input type = "text" placeholder = "NIC" name = "NIC" required id="NIC">
						</td>
                            </tr>
							
						
                        <tr>
                          
                        </tr>
                        <tr>
                            <td>
                                <label for = "email"></label>
                                <input type = "email" name = "email" placeholder="email" id = "email" required>
								</td>
                         </tr>   
                         <tr>
                           <td>
                                <label for = "mobile"></label>
                                <input type= "tel" placeholder = "Mobile Number" name = "MobileNumber" id ="mobileNumber" required>
							</td>
                        </tr>
                        <tr>
                           
					      <td>
                                <label for="password"></label>
                                <input type = "password" placeholder="password" name = "password" id ="password" required>
							</td>
                            
                            
                        </tr>
                        </table> 
                                <div class ="text3">
						            <input type = "checkbox" id = "terms" required name = "Agree to terms & Conditions"><br><br>
                                    <label for ="terms">Agree to terms & conditions</label>
                                </div>
                        
                            <div class ="loginPage">
                                <center>
                                  <button type = "submit" class = "btn">Create Account</button>
                                </center>
                            </div>

                            <div class="text2"></div>
                                    <a href ="login.php">
                                        <p><center>Already have an Account? Login</center></p></a>
            </form>
	 </div>
	
    </body>
</html>