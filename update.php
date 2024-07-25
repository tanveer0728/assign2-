<?php
include 'connect.php'; // Include your database connection file

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $user_name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];

    // Prepare SQL update statement
    $sql = "UPDATE `crud` SET name='$user_name', email='$email', mobile='$phone_number', password='$password' WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    echo "Form submission error";
}

mysqli_close($con);
?>
