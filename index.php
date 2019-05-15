<!doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
                <script>
                    var attempts=5;
                    function LogIn(){
                        //user-credential variables
                        var email=document.getElementById("Email").value;
                        var password=document.getElementById("Password").value;
                        
                        //enter these credentials to successfully log in
                        if(email=="user" && password=="password"){
                            alert(email + " logged in");
                            document.getElementById("Email").value="";
                            document.getElementById("Password").value="";
                        }
                            else{
                                if(attempts == 0){
                                    alert("Account Locked");
                                    alert("Please contact an administrator to unlock account.")
                                }
                                    else{
                                        attempts=attempts -1;
                                        alert("email or password does not match " + attempts + 
                                                " login attempts left");
                                        // disable unput after 5 failed attemptes
                                            if(attempts == 0){
                                                document.getElementById("Email").disabled=true;
                                                document.getElementById("Password").disabled=true;
                                            }
                                    }
                            }
                                return false;
                    }	
                </script>
        </head>
            <body>
                <form method="post" action="" onsubmit="return LogIn();">
                    <p>Enter Username and Password</p>
                    <input type="text" id="Email" placeholder="User Email">
                        <br>
                    <input type="password" id="Password" placeholder="User Password">
                        <br>
                    <input type="submit" value="Log-In">
                    </br>
                        <br>
                </form>
            </body>
    </html>
