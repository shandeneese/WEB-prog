<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Registration Successful</h4>
        </div>
        <div class="card-body"   >
<?php
            if ($_SERVER ['REQUEST_METHOD'] == "POST") {
            $fullname = $POST['fullname'];
            $Email = $POST['Email'];
            $Address = $POST['Address'];
            $Birthday = $POST['Birthday'];
            $Course = $POST['Course'];
            $Gender = $POST['Gender'];
            } else {
             echo "<div class ='alert alert-danger> No data received!</div>";
             exit;
            }
            
            ?>

            <p class="lead">Here are the details you submitted:</p>
           
            <ul class="list-group">
                <li class="list-group-item"><strong>Full Name:</strong> <?=$fullname; ?></li>
                <li class="list-group-item"><strong>Email:</strong> <?=$Email; ?></li>
                <li class="list-group-item"><strong>Address:</strong> <?=$Address; ?></li>
                <li class="list-group-item"><strong>Birthdate:</strong> <?=$Birthday; ?></li>
                <li class="list-group-item"><strong>Course:</strong> <?=$Course; ?></li>
                <li class="list-group-item"><strong>Gender:</strong> <?=$Gender; ?></li>
            </ul>

            <div class="mt-4">
                <a href="index.php" class="btn btn-primary">Generate Payslip</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>