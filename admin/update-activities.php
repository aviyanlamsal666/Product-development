<?php
// Include database connection (replace with your details)
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $title = $_POST['title'];

  // Video upload handling (optional)
  $newVideoPath = null;
  if (isset($_FILES['video']) && $_FILES['video']['error'] === 0) {
    $fileName = $_FILES['video']['name'];
    $fileSize = $_FILES['video']['size'];
    $tmpName = $_FILES['video']['tmp_name'];
    $error = $_FILES['video']['error'];

    // Allowed extensions (adjust as needed)
    $allowedExtensions = array('mp4', 'avi', 'mov');

    // Validate file
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
    if (!in_array($extension, $allowedExtensions)) {
      echo "Error: Invalid video file type. Only " . implode(', ', $allowedExtensions) . " allowed.";
      exit;
    }

    // Upload directory (adjust path as needed)
    $uploadDir = 'videos/';

    // Upload the file
    $uploadPath = $uploadDir . $fileName;
    if (move_uploaded_file($tmpName, $uploadPath)) {
      $newVideoPath = $uploadPath;
    } else {
      echo "Error uploading video file.";
      exit;
    }
  }

  // Prepare update query
  $sql = "UPDATE games SET title = ?, path = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);

  // Bind parameters
  $stmt->bind_param("sss", $title, $newVideoPath, $id);

  // Execute query
  if ($stmt->execute()) {
    echo "<script>window.alert('Activity updated successfully!')</script>";
    echo "<script>location='add-activities.php'</script>";
  } else {
    echo "<script>window.alert('Error updating activity:  . $conn->error ')</script>";
    echo "<script>location='add-activities.php'</script>";
    
  }

  $stmt->close();
} else {
  echo "<script>window.alert('Error: Invalid request method!')</script>";
  echo "<script>location='add-activities.php'</script>";
}
?>