<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="usu.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign-Up</title>
        <link rel="stylesheet" href="modul2.css">
    </head>
    
    
    <body style="background-image: url(login.jpg); background-size: cover; background-repeat: repeat; height: 100%">
        <form method="post" action="aksi_signup.php">
            <table id="untukTable">
                <tr>
                    <td class="brand">Sign Up</td>
                </tr>
                <tr>
                    <td style="border-width: 100%; border: 1 px solid black">Username<br><input autocomplete="off" name="username" type="text" placeholder="Your Username"></td>
                </tr>
                <tr>
                    <td>Password<br><input  name="password" type="password" placeholder="Your Password"></td>
                </tr>
                <tr> 
                    <td><input type="submit" name="signup" value="SignUp"></td>
                </tr>
            </table>
        </form>
    </body>
    
    <footer><p>&copy; 2019 Tycket Company S.L. All rights reserved.</p></footer>

</html>