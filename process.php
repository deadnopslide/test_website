<?php
// SQL Injection Vulnerability
$username = $_POST['username'];
$query = "SELECT * FROM users WHERE username='$username'"; 
$result = mysqli_query($conn, $query); 

// ... (rest of the code to handle the query result) ... 
?>