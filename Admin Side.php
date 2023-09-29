<?php
// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "nn";

// Create a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the "nn" table, including the "Guardian's_Cnt" column
$sql = "SELECT name, age, roll_number, batch, reason, `Guardian's_Cnt` FROM nn";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Table Data Retrieval</title>
</head>
<body>
    <h1>Data from Table "nn"</h1>

    <?php
    
    // Check if there are rows in the result set
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Age</th><th>Roll Number</th><th>Batch</th><th>Reason</th><th>Guardian's Contact</th><th>Actions</th></tr>";

        // Output data from each row with approve and deny buttons
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["roll_number"] . "</td>";
            echo "<td>" . $row["batch"] . "</td>";
            echo "<td>" . $row["reason"] . "</td>";
            echo "<td>" . $row["Guardian's_Cnt"] . "</td>"; // Display the Guardian's Contact
            echo "<td><button onclick='approve(" . $row["roll_number"] . ")'>Approve</button> <button onclick='deny(" . $row["roll_number"] . ")'>Deny</button></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data found in the 'nn' table.";
    }

    // Close the database connection
    $conn->close();
    ?>

    <script>
        function approve(rollNumber) {
            // You can add JavaScript code here to handle the approval logic
            alert("Approved for Roll Number: " + rollNumber);
        }

        function deny(rollNumber) {
            // You can add JavaScript code here to handle the denial logic
            alert("Denied for Roll Number: " + rollNumber);
        }
    </script>
</body>
</html>
