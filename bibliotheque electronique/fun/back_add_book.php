
<?php

include('connect.php');

if(isset($_POST['Add']))
{	 
    $Name_book = $_POST['Name_book'];
    $description = $_POST['description'];
  
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;


    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $path1 = "upload/".$imageName;

     $sql = "INSERT INTO  book(`Name_book`,`description`,`file`,`image`) VALUES ('$Name_book','$description','$fileName','$imageName')";

     $run = mysqli_query($conn,$sql);
        
     if($run){
         move_uploaded_file($fileTmpName,$path);
         echo "success";
         move_uploaded_file($imageTmpName,$path1);
         echo "success";
     }
     else{
         echo "error".mysqli_error($conn);
     }
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);}
     header("location:C:admin_dashboard.php");
	 mysqli_close($conn);
}
?>
