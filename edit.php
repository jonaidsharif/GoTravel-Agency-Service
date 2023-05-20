<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "booknow";

$connection = new mysqli($servername, $username, $password, $database);

$Name = "";
$Email = "";
$Password = "";
$Number = "";
$Location = "";
$Arrivals = "";
$Leaving = "";
$Address = "";

$errorMessage = "";
$successMessage = "";
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(!isset($_GET["email"])){
        header("location : /GOTravel/book.php");
        exit;
    }

    $Email = $_GET["email"];

    $sql = "SELECT * FROM book WHERE Email='$Email'";

    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    if(!$row)
    {
        header("location: /GOTravel/book.php");
        exit;
    }
    $Name = $row['Name'];
    $Email = $row['Email'];
    $Password = $row['Password'];
    $Number = $row['Number'];
    $Location = $row['Location'];
    $Arrivals = $row['Arrivals'];
    $Leaving = $row['Leaving'];
    $Address = $row['Address'];

}
else{
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $number = $_POST['Number'];
    $location = $_POST['Location'];
    $arrivals = $_POST['Arrivals'];
    $leaving = $_POST['Leaving'];
    $address = $_POST['Address'];

    do{

        if(empty($name)|| empty($email)|| empty($password)|| empty($number)||empty($location)||empty($arrivals)||empty($leaving)||empty($address)){
            $errorMessage = "All the fields are required";
            break;
        }

        $Email = $_GET["email"];
        
        
    $sql = "UPDATE book SET name = '$name', email = '$email' , password = '$password' ,number = $number , location = '$location' , arrivals = '$arrivals' , leaving = '$leaving' , address = '$address' WHERE Email = '$Email'";


    //echo $sql;

    $result = $connection->query($sql);

    if(!$result){
        $errorMessage = "Invalid query: ". $connection->connect_error;
         break;
    }

    $successMessage = "Client updated successfully";

    header("location: /GOTravel/book.php");
    exit;

}
while(false);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container my-5">
        <h2>New Booking</h2>
        <?php
            if(!empty($errorMessage)){
                echo "
                <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>$errorMessage</strong>
                                <button type='button' class='btn-close' data-bs-dissmiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                </div>";
            }
            ?>
        <form method="post">
        
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Name" value="<?php echo $Name; ?>">
                </div>
            </div>
            <input type="hidden" name="Email" value="<?php echo $Email; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Email" value="<?php echo $Email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Password" value="<?php echo $Password; ?>">
                    </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Number</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Number" value="<?php echo $Number; ?>">
                </div>

            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Location</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Location" value="<?php echo $Location; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Arrivals</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="Arrivals" value="<?php echo $Arrivals; ?>">
                    </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Leaving</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="Leaving" value="<?php echo $Leaving; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Address" value="<?php echo $Address; ?>">
                </div>
            </div>

            <?php
            if(!empty($successMessage)){
                echo "
                <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dissmiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                </div>";
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/GOTravel/book.php" role="button">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>