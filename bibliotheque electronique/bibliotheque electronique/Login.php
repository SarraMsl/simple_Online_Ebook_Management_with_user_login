<!DOCTYPE html >
<html long="en">
    <head>
     <!--bootstrap 4 CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
    <meta charset="UTF-8">
    <title> Login </title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
function prevenBack(){window.history.forward()};
setTimeout("prevenBack()",0);
window.onunload=function(){null;}
   </script>
</head>
<body>

    <!-- header -->
    
    
    <section id="header">
        <div class="header container">
          <div class="nav-bar">
            <div class="icon">
            </div>
            <div class="brand">
              <a href="#hero"><h1><span>E</span>LEC <span>B</span>IBLIO</h1></a>
            </div>
               <div class="nav-list">
                <div class="hamburger">
                  <div class="bar"></div>
               </div>
                 <ul>
                    <li><a href="index.php#hero" data-after="Home">Home</a></li>
                      <li>
                         <a href="index.php#collection" data-after="collection">collection </i></a>     
                        </li>
                          
                          
                          <li><a href="index.php#contact" data-after="Contact">Contact</a></li>
                          <li><a href="Login.php" data-after="connecter">Se connecter</a></li>
                 </ul>
                   
                   
              </div>
           </div>  
        </div>
      <div>

    
  </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offest-md-4 form-div">
                <form action="fun/logintest.php" method="get">
                    <h3 class="text-center">Login</h3>
                    <!--<div class="alert alert-danger">
                        <li>Username required</li>
                    </div>-->
                    <div class="form-groupe">
                        <label for="username">Username or Email</label>
                        <input type="text" name="n1" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe">
                        <label for="password">Password</label>
                        <input type="password" name="n2" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe form-btn">
                       <button type="submit" name="Login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                    </div>
                    <p class="text-center">Not yet a member? <a href="signup.php">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>