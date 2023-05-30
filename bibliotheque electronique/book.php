<style>.add-to-cart {
  background-color: #4caf50;
  color: #ffffff;
  border: none;
  padding: 8px 16px;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}</style><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                          
                          <li><a href="#about" data-after="About">About</a></li>
                          <li><a href="#contact" data-after="Contact">Contact</a></li>
                 </ul>
              </div>
           </div>  
        </div>
        <!--start show book-->
        <?php
// book.php

// Check if the book ID is provided in the query parameter
if (isset($_GET['id_book'])) {
  $bookId = $_GET['id_book'];

  // Perform the query to fetch the book details using the provided ID
  include("connect.php");

  $sql = $conn->prepare("SELECT * FROM `book` WHERE `id_book` = ?");
  $sql->bind_param('i', $bookId);
  $sql->execute();
  $result = $sql->get_result();

  // Check if the book exists
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>
    <div class="books">
      <div class="container">
        <div class="book">
          <div class="row">
            <div class="col-md-4">
              <div class="book-cover">
                <img src="fun/upload/<?php echo $row['image']; ?>" alt="Book cover">
              </div>
            </div>
            <div class="col-md-8">
              <div class="book-content">
                <h4><?php echo $row['Name_book']; ?></h4>
                <hr>
                <p><?php echo $row['description']; ?></p>
     
                
                  <a href="signup.php" class="add-to-cart">Download</a>

   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  } else {
    echo "Book not found.";
  }

  $conn->close();
} else {
  echo "Invalid book ID.";
}
?>

        <!--end show book-->
        <script src="./app.js"></script>
    <!--Bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
  </body>
  
  </html>