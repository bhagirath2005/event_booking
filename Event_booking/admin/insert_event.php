<?php
include ("connect.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $total_seats = $_POST['seats'];
    $available_seats = $_POST['available_seats'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    // Handle image upload
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = basename($_FILES['image']['name']);
        $target_dir = "uploads/";
        $target_file = $target_dir . time() . "_" . $image_name;

        // Create uploads directory if not exists
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if (move_uploaded_file($image_tmp, $target_file)) {
            $image = $target_file;
        }
    }

    // Insert query
    $query = "INSERT INTO events 
        (title, description, city, address, event_date, total_seats, available_seats, price, category, status, image) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sssssiidsss", 
        $title, $description, $city, $address, $date, 
        $total_seats, $available_seats, $price, $category, $status, $image);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Event added successfully'); window.location.href='add_event.php';</script>";
    } else {
        echo "<script>alert('Error: Unable to add event');</script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    echo "<script>alert('Invalid access'); window.location.href='add_event.php';</script>";
}
?>
