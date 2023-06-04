<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Add New Book</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    <li><a href="#hero" data-after="Home">Home</a></li>
                      <li>
                         <a href="#collection" data-after="collection">collection </i></a>     
                        </li>
                          
                          <li><a href="#about" data-after="About">About</a></li>
                          <li><a href="#contact" data-after="Contact">Contact</a></li>
                          <li><a href="logout.php" data-after="connecter">logout</a></li>
                 </ul>
                   
                   
              </div>
           </div>  
        </div>
  
    
  </div>
    </section>
   
    <div class="container">
            <div class="col-md-4 offest-md-4 form-div">
                <form rol="form"action="fun\back_add_book.php" method="post" enctype="multipart/form-data">
                    <h3 class="text-center">Add New Book</h3>
                    <!--<div class="alert alert-danger">
                        <li>Username required</li>
                    </div>-->
                    <div class="form-groupe">
                        <label for="username">Name of book</label>
                        <input type="text" name="Name_book" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe">
                        <label for="decription">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10"class="form-control form-control-lg"></textarea>
                    </div>
                    <div class="form-groupe">
                        <label for="file">Book file</label>
                        <input type="file" name="file" id="file" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe form-btn">
                       <button type="submit" name="Add" class="btn btn-primary btn-block btn-lg">Add book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        </section>
<!--end collection section-->


  
    <script src="./app.js"></script>
    <!--Bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
  </body>
  
  </html>