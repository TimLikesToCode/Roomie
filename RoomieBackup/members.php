<?php  

if (isset($_SESSION['name']) && isset($_SESSION['id'])) {
    
    $sql = "SELECT * FROM user_form ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);
}
