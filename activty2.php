<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BMI Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">⚖️ BMI Calculator</h4>
        </div>
        <div class="card-body">
          <!-- Front-end Form -->
          <form method="post" action="result.php">
            <div class="mb-3">
              <label for="weight" class="form-label">Weight (kg)</label>
              <input type="number" step="0.1" class="form-control" id="weight" name="weight" required>
            </div>
            <div class="mb-3">
              <label for="height" class="form-label">Height (cm)</label>
              <input type="number" step="0.1" class="form-control" id="height" name="height" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Calculate BMI</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>