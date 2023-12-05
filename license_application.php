<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 170vh;
        }

        .navbar {
            background-color: #28a745; /* Change header background color to green */
            color: white;
            position: fixed;
            width: 100%;
            top: 0;
            padding: 10px;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .navbar li {
            display: inline;
            margin-right: 20px;
            float: left;
        }

        .navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 4px 16px;
            text-decoration: none;
        }

        .navbar li a:hover {
            background-color: #218838; /* Change header hover background color to a darker green */
        }

        .container {
            background-color: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
            width: 50%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        textarea {
            width: calc(100% - 16px);
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="file"] {
            margin-bottom: 8px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: #ff0000;
        }
    </style>

    <script>
        function validateForm() {
            // Add any form validation logic here if needed
        }
    </script>

    <title>License Application Form</title>

</head>

<body>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="license_application.php">License Forms</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="map.html">Location</a></li>
        </ul>
    </nav>
    <br><br><br>

    <div class="container">
        <h2>License Application Form</h2>
        <form name="licenseForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            <?php
            if (isset($_GET["err_msg"])) {
                echo "<div class='alert alert-danger' role='alert'>" . $_GET["err_msg"] . "</div>";
            } else if (isset($_GET["success_msg"])) {
                echo "<div class='alert alert-success' role='alert'>" . $_GET["success_msg"] . "</div>";
            }
            ?>
            <div class="mb-3"><label class="form-label" for="name">Your Name</label><input class="form-control item" type="text" id="name" name="name" required></div>
            <div class="mb-3"><label class="form-label" for="subject">NID No</label><input class="form-control item" type="text" id="nid" name="nid" required></div>
            <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control item" type="email" id="email" name="email" required></div>
            <div class="mb-3"><label class="form-label" for="name">Vehicle No</label><input class="form-control item" type="text" id="vehicleNo" name="vehicleNo" required></div>
            <div class="mb-3"><label class="form-label" for="name">Vehicle Chassis No</label><input class="form-control item" type="text" id="chassisNo" name="chassisNo" required></div>
            <div class="mb-3"><label class="form-label" for="name">Present Address</label><input class="form-control item" type="text" id="presentAddress" name="presentAddress" required></div>
            <div class="mb-3"><label class="form-label" for="name">Permanent Address</label><input class="form-control item" type="text" id="permanentAddress" name="permanentAddress" required></div>
            <div class="mb-3"><label class="form-label" for="name">Your Photo</label><input class="form-control" type="file" accept="image/*" id="profile_pic" name="profile_pic" required></div>
            <div class="mb-3"><label class="form-label" for="name">NID Soft Copy (PDF)</label><input class="form-control" accept="application/pdf" id="nidSoftCopy" name="nidSoftCopy" type="file" required></div>
            <div class="mb-3 mt-4"><button class="btn btn-primary btn-lg d-block w-100" name="submit_btn" type="submit">Submit</button></div>
        </form>
    </div>
    <br><br>
</body>

</html>
