<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Student Photo</title>
</head>
<body>
    <h2>Upload Student Photo</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="studentName">Student Name:</label>
        <input type="text" name="studentName" id="studentName" required><br><br>

        <label for="photo">Student Photo:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
<!--         <input type="file" name="photo" id="photo" accept="image/*" required><br><br> -->
        <input type="submit" name="submit" value="Upload Image">
    </form>
</body>
</html>
