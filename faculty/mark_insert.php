<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$conn = mysqli_connect("localhost:3308", "root", "","feedback_system");

    // Retrieve form data
    $CA1 = $_POST['CA1'];
    $MIDSEM = $_POST['MIDSEM'];
    $CA2 = $_POST['CA2'];
      $subject = $_POST['pro'];

    // Insert data into the database
    $sql = "INSERT INTO add_mark (CA1, MIDSEM, CA2,subject) VALUES ('$CA1', '$MIDSEM', '$CA2','$subject')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
