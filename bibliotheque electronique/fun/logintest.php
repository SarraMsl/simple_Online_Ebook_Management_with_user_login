

<?php
include ('../connect.php');

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$sql = "SELECT * FROM wuser WHERE wusername='$n1' AND wpassword='$n2'";
$result = $conn->query($sql);

$count = $result->num_rows;

if ($count > 0) {
    $row = $result->fetch_assoc();
    $role = $row['wrole'];

    if ($role == 'admin') {
        header('Location: http://localhost/bibliotheque%20electronique/admin_dashboard.php');
    } elseif ($role == 'user') {
        header('location:http://localhost/bibliotheque%20electronique/index(2).php');
    } 
} else {
    header('Location: http://localhost/bibliotheque%20electronique/login.php');
}
?>
