<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATM Product List</title>
  <style>
    body {
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: white;
      font-family: Arial, sans-serif;
    }
    .atm-box {
      background: #111;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0px 0px 25px rgba(0,255,0,0.5);
      position: relative;
      overflow: hidden;
    }
    .atm-card {
      width: 250px;
      height: 150px;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      border-radius: 10px;
      position: absolute;
      top: -180px;
      left: 50%;
      transform: translateX(-50%);
      animation: insertCard 3s ease forwards;
      box-shadow: 0px 5px 15px rgba(0,0,0,0.5);
    }
    .atm-card::before {
      content: "💳 List of Product";
      position: absolute;
      bottom: 10px;
      left: 20px;
      font-weight: bold;
      color: #fff;
    }
    @keyframes insertCard {
      0% { top: -180px; }
      60% { top: 30px; }
      100% { top: -50px; }
    }
    .atm-screen {
      background: #222;
      color: #0f0;
      font-family: "Courier New", monospace;
      padding: 15px;
      border-radius: 10px;
      margin-bottom: 15px;
      box-shadow: inset 0px 0px 10px rgba(0,255,0,0.3);
    }
    .atm-btn {
      background: #0f0;
      border: none;
      color: black;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s;
    }
    .atm-btn:hover {
      background: #1aff1a;
      box-shadow: 0px 0px 15px #0f0;
    }
    .atm-result {
      margin-top: 20px;
      background-color: #000;
      padding: 15px;
      border-radius: 10px;
      box-shadow: inset 0px 0px 10px rgba(0,255,0,0.3);
      font-family: "Courier New", monospace;
      color: #0f0;
    }
  </style>
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="atm-box">
          <div class="atm-card"></div>

          <form action="" method="post" class="atm-form">
            <div class="atm-screen">
              <input type="checkbox" name="items[]" value="50"> Notebook (P50.00)<br>
            </div>
            <div class="atm-screen">
              <input type="checkbox" name="items[]" value="30"> Pencil (P30.00)<br>
            </div>
            <div class="atm-screen">
              <input type="checkbox" name="items[]" value="100"> Bag (P100.00)<br>
            </div>
            <div class="atm-screen">
              <input type="checkbox" name="items[]" value="75"> Shoes (P75.00)<br>
            </div>
            <div class="atm-screen">
              <input type="checkbox" name="items[]" value="25"> Eraser (P25.00)<br>
            </div>
            <div class="atm-screen">
              <input type="submit" value="Compute Total" name="submit" class="product-btn">
            </div>
          </form>

          <?php
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
              echo "<div class='product-result'>";
              if (isset($_POST['items']) && !empty($_POST['items'])) {
                  $total = 0;
                  foreach ($_POST['items'] as $price) {
                      $total += (int)$price;
                  }
                  echo "<strong>Total is: ₱$total.00</strong><br>";
              } else {
                  echo "⚠️ No product selected.";
              }
              echo "</div>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
