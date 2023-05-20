<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class = "container my-5">
        <h2>List of Bookings</h2>
        <a class="btn btn-primary" href="/GOTravel/create.php" role="button">New Booking</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Number</th>
                    <th>Location</th>
                    <th>Arrivals</th>
                    <th>Leaving</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

use LDAP\Result;

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "booknow";
                
                $connection = new mysqli($servername, $username, $password, $database);

                if($connection->connect_error){
                    echo "$connection->connect_error";
                    die("Connection Failed : ". $connection->connect_error);
                }
                $sql = "SELECT * FROM book";
                $result = $connection->query($sql);
                if(!$result){
                    die("Invalid query : ". $connection->connect_error);
                }
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                    <td>$row[Name]</td>
                    <td>$row[Email]</td>
                    <td>$row[Password]</td>
                    <td>$row[Number]</td>
                    <td>$row[Location]</td>
                    <td>$row[Arrivals]</td>
                    <td>$row[Leaving]</td>
                    <td>$row[Address]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/GOTravel/edit.php?email=$row[Email]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/GOTravel/delete.php?email=$row[Email]'>Delete</a>
                    </td>
                </tr>
                    ";
                }
                ?>
                
            </tbody>
        </table>

    </div>
</body>
</html>
