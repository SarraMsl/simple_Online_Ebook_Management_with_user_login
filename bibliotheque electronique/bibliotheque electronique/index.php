
<style>
  

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
}

.product-card {

    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 15px;
    border: 1px solid #bd21304d;
    border-radius: 5px;
    box-shadow: 0 2px 4px #bd213085;
    overflow: hidden;
}


.product-card:hover {
  transform: translateY(-5px);
}

.product-image img {
  width: 70%;
  height: 100%;
  border-radius: 4px;
  margin-left:15%;

}

.product-details {
  margin-top: 20px;
  text-align: center;
}

.product-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}
.product-description {
  flex-grow: 1;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: pre-line;

}
.header.container {
    max-width: 1600px; /* Set the maximum width for the header container */
    margin: 0 auto; /* Center the header container horizontally */
    /* Add any other desired styling for the header container */
  }


.product-actions {
  margin-top: 20px;
}

.add-to-cart {
  background-color: #4caf50;
  color: #ffffff;
  border: none;
  padding: 8px 16px;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.add-to-cart:hover {
  background-color: #45a049;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .product-title {
    font-size: 16px;
  }

  .product-description {
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Set the desired number of lines before truncating */
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-bottom: 10px;
}

}

@media (max-width: 576px) {
  .product-title {
    font-size: 14px;
  }

  .product-description {
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Set the desired number of lines before truncating */
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-bottom: 10px;
}

}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>bibliothèque électronique</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
   
    
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
                          
                          
                          <li><a href="#contact" data-after="Contact">Contact</a></li>
                          <li><a href="Login.php" data-after="connecter">Se connecter</a></li>
                 </ul>
                   
                   
              </div>
           </div>  
        </div>
      <div>

    
  </div>
    </section>
   
    <!-- End header -->
    <!-- hero section -->
    <section id="hero">
           <form action="" method="post">
  <div class="search">
      <input class="srch" type="search" name="bookName" placeholder="type to text">
     <button class="btn" name="btn"> search</button>
    </div>
</form>
    <div class="hero container">
        <div>
            <h1>Bibliothèque <span></span></h1>
            <h1> Electronique <span></span></h1>
        </div> 
        </div>
    </section>
    <!-- end hero section -->
   <!-- collection section -->
   <section class="collection" id="collection">

    <h1 class="heading">Our <span>Books</span> </h1>
    <form action="" method="post"><center> <button class="btn" name="all"> All Books</button></center>
</form>
    <div class="books">
  <div class="row product-grid">
    <?php
 if (isset($_POST['btn'])) {
  // Get the book name from the form input
  $bookName = $_POST['bookName'];

  // Perform the search query using the book name
  include("connect.php");

  $sql = "SELECT * FROM `book` WHERE `Name_book` LIKE '%$bookName%'";
  $result = $conn->query($sql);


  // Display the search results
  while ($row = $result->fetch_assoc()) {
      ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="product-card">
          <div class="product-image">
            <img src="fun/upload/<?php echo $row['image']; ?>" class="card-img-top">
          </div>
          <div class="product-details">
            <h4 class="product-title">
              <?php echo $row['Name_book']; ?>
            </h4>
            <div class="product-description">
            <p><?php echo $row['description']; ?></p>

            </div>
            <div class="product-actions">
            <a href="book.php?id_book=<?php echo $row['id_book']; ?>" class="add-to-cart">more</a>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    $conn->close();}
    else if (isset($_POST['all'])) {
      include("connect.php");

      $sql = $conn->query("SELECT * FROM `book`");
      while ($row = $sql->fetch_assoc()) {
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-card">
            <div class="product-image">
              <img src="fun/upload/<?php echo $row['image']; ?>" class="card-img-top">
            </div>
            <div class="product-details">
              <h4 class="product-title">
                <?php echo $row['Name_book']; ?>
              </h4>
              <div class="product-description">
              <p><?php echo $row['description']; ?></p>
  
              </div>
              <div class="product-actions">
              <a href="book.php?id_book=<?php echo $row['id_book']; ?>" class="add-to-cart">more</a>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      $conn->close();}
else{
  include("connect.php");

    $sql = $conn->query("SELECT * FROM `book`");
    while ($row = $sql->fetch_assoc()) {
      ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="product-card">
          <div class="product-image">
            <img src="fun/upload/<?php echo $row['image']; ?>" class="card-img-top">
          </div>
          <div class="product-details">
            <h4 class="product-title">
              <?php echo $row['Name_book']; ?>
            </h4>
            <div class="product-description">
            <p><?php echo $row['description']; ?></p>

            </div>
            <div class="product-actions">
            <a href="book.php?id_book=<?php echo $row['id_book']; ?>" class="add-to-cart">more</a>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    $conn->close();}
    ?>
  </div>
</div>

</div>




        </div>
      </div>
    </div>

    
</section>
<section class="contact section" id="contact">

    <div class="container">
        <div class="row"    style="width:100%;">
            <div class="col-md-4 offest-md-4 form-div">
            <form action="send.php"method="post">
                <title>Send Email</title>
                <h1 class="heading">Contact <span>Me</span> </h1>

                    <div class="form-groupe">
                        <label for="email"> Email </label>
                        <input type="email" name="email" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe">
                        <label for="text"> Subject</label>
                        <input type="text" name="subject" class="form-control form-control-lg">
                    </div>
                    <div class="form-groupe">
                        <label for="text"> Message</label>
                        <textarea type="text" name="message" class="form-control form-control-lg"></textarea>
                    </div>
                    <div class="form-groupe form-btn">
                       <button type="submit" class="add-to-cart" name="send" class="btn btn-primary btn-block btn-lg">Send</button>
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
  
  <!--contact section-->
 
</body>
</html>