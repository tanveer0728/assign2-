<?php
include 'connect.php'; // Include your database connection file

// Fetch all records from the 'crud' table
$sql = "SELECT * FROM `crud`";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Records:</h2>";
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No records found";
}

mysqli_close($con);
?>
