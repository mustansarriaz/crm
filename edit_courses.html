<?php
include("pages/connection.php");

if (isset($_GET['id'])) {
    $courses_id = $_GET['id'];

    // Fetch the publication details from the database
    $publication_query = mysqli_query($conn, "SELECT * FROM courses WHERE id='$courses_id'");
    $publication = mysqli_fetch_assoc($publication_query);

    if (!$publication) {
        echo "Courses not found!";
        exit();
    }

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];

        // Check if a new image is uploaded
        $new_image_uploaded = isset($_FILES["image"]) && $_FILES["image"]["error"] != 4;

    

        // Handle file upload for the image
        if ($new_image_uploaded) {
            $uploadDir = "uploads/"; // Specify your upload directory
            $uploadFile = $uploadDir . basename($_FILES["image"]["name"]);

            if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
                    // File uploaded successfully
                } else {
                    echo "Image upload failed.<br>";
                    exit(); // Exit the script to avoid further execution
                }
            } else {
                echo "Image upload error: " . $_FILES["image"]["error"] . "<br>";
                exit(); // Exit the script to avoid further execution
            }
        }

        

        // Perform basic validation (you can add more as needed)
        if (empty($name) || empty($description)) {
            echo "Name and Description are required fields.";
        } else {
            // Sanitize data before updating in the database
            $name = mysqli_real_escape_string($conn, $name);
            $description = mysqli_real_escape_string($conn, $description);

            // Update publication details in the database, including image and file if new ones are provided
            $update_query = "UPDATE courses SET name='$name', description='$description'";
            if ($new_image_uploaded) {
                $imagePath = mysqli_real_escape_string($conn, $uploadFile);
                $update_query .= ", image='$imagePath'";
            }
            
            $update_query .= " WHERE id='$courses_id'";

            $update_result = mysqli_query($conn, $update_query);

            if ($update_result) {
                header("location: courses.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
} else {
    echo "courses ID not provided!";
    exit();
}
include("pages/header.php");
?>
<!-- Your HTML form remains unchanged -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Courses</h4>
                        <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $publication['name']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <?php
                                    if (!empty($publication['image_path'])) {
                                        echo '<img src="' . $publication['image_path'] . '" alt="Publication Image" style="max-width: 100%;">';
                                    } else {
                                        echo 'No image available';
                                    }
                                    ?>
                                    <br>
                                    <input type="file" class="form-control" name="image">
                                    <small class="form-text text-muted">Select a new image to update. Leave blank to keep the existing image.</small>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="description" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" placeholder="Description" name="description"><?php echo $publication['description']; ?></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2" name="update">Update</button>
                            <a href="publicationrecord.php" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("pages/footer.php"); ?>