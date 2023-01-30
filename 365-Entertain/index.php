<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>365-Entertain-login</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="bg">
        <div class="in">
            <nav class=class="navbar navbar-light" style="background-color:#254964;">
              <div class="container-fluid">
               <h1><span id="sp"> 365-</span>Entertain</h1>
              </div>
            </nav>
         </div>       
        <div class="login-form">
            
            <div class="button-box">             
                <div id="btn"></div>
                <button type="button " class="toggle" onclick="login()">Sign In</button>
                <button type="button" class="toggle" onclick="register()">Sign Up</button>
            </div>
            <form  id="login" action="process2.php" class="input-group" method="post">
                <input type="text" name="namelog" class="input-field" id="passvalues" placeholder="User Name" required>
                <input type="password" name="passlog" class="input-field" placeholder="Enter Password" required><br><br><br>
                <button type="submit"class="submit-btn" onclick="funj()">Sign in</button>
            </form>
            <form  id="register" action="process.php" class="input-group" method="post" onsubmit="login()">
                <input type="name" name="username" class="input-field passvalues" placeholder="User Name" required>
                <input type="email" name="email-id" class="input-field" placeholder="Email Id" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required><br><br><br>
                <button type="submit"class="submit-btn">Sign up</button>
            </form>
        </div> 
    </div>   
    <script src="js.js">

    </script>  
</body>
</html>