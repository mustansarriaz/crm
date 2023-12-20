<?php
include("pages/connection.php");

if (isset($_GET['id'])) {
    $courses_id = $_GET['id'];

    // Check if the customer exists
    $customer_query = mysqli_query($conn, "SELECT * FROM courses WHERE id='$courses_id'");
    $customer = mysqli_fetch_assoc($customer_query);

    if (!$customer) {
        echo "Customer not found!";
        exit();
    }

    // Delete the customer record from the database
    $delete_query = mysqli_query($conn, "DELETE FROM courses WHERE id='$courses_id'");

    if ($delete_query) {
        header("location: courses.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo " ID not provided!";
    exit();
}
?>
