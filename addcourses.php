<?php
include("pages/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $description = isset($_POST["description"]) ? $_POST["description"] : "";

    // Handle file upload for the image
    if (isset($_FILES["image"])) {
        $uploadDir = "uploads/"; // Specify your upload directory
        $imageFile = $uploadDir . basename($_FILES["image"]["name"]);

        if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $imageFile)) {
                // File uploaded successfully
            } else {
                echo "Image upload failed.<br>";
                exit(); // Exit the script to avoid further execution
            }
        } else {
            echo "Image upload error: " . $_FILES["image"]["error"] . "<br>";
            exit(); // Exit the script to avoid further execution
        }
    } else {
        echo "Image is required.<br>";
        exit(); // Exit the script to avoid further execution
    }

    

    // Perform basic validation (you can add more as needed)
    if (empty($name) || empty($description) || empty($imageFile) ) {
        echo "Title, Description, Image are required fields.";
    } else {
        // Sanitize data before inserting into the database
        $name = mysqli_real_escape_string($conn, $name);
        $description = mysqli_real_escape_string($conn, $description);
        $imagePath = mysqli_real_escape_string($conn, $imageFile);
       

        // Insert data into the database
        $query = "INSERT INTO courses (name, description, image) VALUES ('$name', '$description', '$imagePath')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Services added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    // Handle invalid requests
    echo "Invalid request method";
}

// Close the database connection
mysqli_close($conn);
?>

<?php


include("pages/header.php");
?>

<div class="main-panel">
    <div class="content-wrapper">
      
        <div class="row flex-wrap">
            <form class="grid-margin stretch-card row" action="" method="POST"enctype="multipart/form-data">
                <div class="card col-md-6">
                    <div class="card-body">
                        <h4 class="card-title">Add Courses</h4>
                        <hr>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                            </div>
                        </div>
                        <div class="forms-sample">
                            <div class="form-group row">
                                <label for="image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="image" placeholder="image" name="image">
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="quantity" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                               <textarea class="form-control" id="description"  placeholder="Enter description" name="description" rows="4"></textarea>
                            </div>
                        </div>
                        
                        
                        <button class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php include("pages/footer.php"); ?>
</body>


</html>