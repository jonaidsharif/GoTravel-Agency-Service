<?php

    if(isset($_GET["email"])){
        
        $Email = $_GET["email"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "booknow";

       $connection = new mysqli($servername, $username, $password, $database);
    echo $Email;
    
    $sql = "DELETE FROM book WHERE Email='$Email'";
    echo $sql;

    $connection->query($sql);
}

header("location: /GOTravel/book.php");
exit;

?>