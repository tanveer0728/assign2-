<?php
include 'connect.php'; // Include your database connection file

if(isset($_POST['submit'])){
    $user_name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number']; // corrected variable name
    $password = $_POST['password'];

    // Prepare SQL insert statement
    $sql = "INSERT INTO `crud` (name, email, mobile, password) 
            VALUES ('$user_name', '$email', '$phone_number', '$password')";

    $result = mysqli_query($con, $sql);

    if($result){
        echo "Data inserted successfully";
    } else {
        die(mysqli_error($con)); // Display MySQL error if query fails
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Welcome to the evaluation of games</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" 
                    placeholder="Enter your name"
                    name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" 
                    placeholder="Enter your email"
                    name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-control" 
                    placeholder="Enter your phone number"
                    name="phone_number" autocomplete="off"> <!-- corrected name attribute -->
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" 
                    placeholder="Enter your password"
                    name="password" autocomplete="off">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and other scripts if needed -->
</body>
</html>
