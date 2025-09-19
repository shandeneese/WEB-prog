<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BMI Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $weight = $_POST['weight'];
          $height = $_POST['height'];

          $height_m = $height / 100;


          $bmi = $weight / ($height_m * $height_m);

          if ($bmi < 18.5) {
              $category = "Underweight";
              $alert = "warning";
              $emoji = "⚠️";
          } elseif ($bmi < 25) {
              $category = "Normal weight";
              $alert = "success";
              $emoji = "✅";
          } elseif ($bmi < 30) {
              $category = "Overweight";
              $alert = "warning";
              $emoji = "⚠️";
          } else {
              $category = "Obese";
              $alert = "danger";
              $emoji = "❌";
          }

          echo "<div class='card shadow'>
                  <div class='card-header bg-dark text-white'>
                    <h5 class='mb-0'>📊 BMI Result</h5>
                  </div>
                  <div class='card-body'>
                    <table class='table table-bordered'>
                      <tr>
                        <th>Weight</th>
                        <td>{$weight} kg</td>
                      </tr>
                      <tr>
                        <th>Height</th>
                        <td>{$height} cm</td>
                      </tr>
                      <tr>
                        <th>BMI</th>
                        <td><strong>".number_format($bmi, 2)."</strong></td>
                      </tr>
                      <tr>
                        <th>Category</th>
                        <td>{$category}</td>
                      </tr>
                    </table>
                    <div class='alert alert-{$alert} mt-3'>{$emoji} You are classified as <strong>{$category}</strong>.</div>
                    <a href='activty2.php' class='btn btn-primary w-100 mt-2'>🔙 Back</a>
                  </div>
                </div>";
      } else {
          echo "<div class='alert alert-danger'>No data received. Please go back and enter your details.</div>";
      }
      ?>

    </div>
  </div>
</div>

</body>
</html>