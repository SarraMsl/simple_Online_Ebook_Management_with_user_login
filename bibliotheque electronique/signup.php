 <!DOCTYPE html >
<html long="en">
    <head>
     <!--bootstrap 4 CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
    <meta charset="UTF-8">
    <title> Register </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offest-md-4 form-div">
                <form action="fun/signup.php" method="get" >
                    <h3 class="text-center">Register</h3>
                    <!--<div class="alert alert-danger">
                        <li>Username required</li>
                    </div>-->
                    <div class="form-groupe">
                        <label for="wusername">Username</label>
                        <input type="text" name="wusername" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe">
                        <label for="wemail">Email</label>
                        <input type="email" name="wemail" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe">
                        <label for="wpassword">Password</label>
                        <input type="password" name="wpassword" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe">
                        <label for="wconfirmpassword">Confirm password</label>
                        <input type="password" name="wconfirmpassword" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe form-btn">
                       <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                    </div>
                    <p class="text-center">Already a member? <a href="Login.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
