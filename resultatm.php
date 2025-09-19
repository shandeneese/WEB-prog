<!DOCTYPE html>
<html>
<head>
  <title>ATM Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #141e30, #243b55);
      color: white;
    }
    .atm-result {
      background: #111;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0px 0px 25px rgba(0,255,0,0.5);
      animation: slideUp 1s ease-in-out;
    }
    @keyframes slideUp {
      from {opacity: 0; transform: translateY(30px);}
      to {opacity: 1; transform: translateY(0);}
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
      transition: all 0.3s;
    }
    .atm-btn:hover {
      background: #1aff1a;
      box-shadow: 0px 0px 15px #0f0;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $balance = $_POST['balance'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];

    echo "<div class='atm-result'>";
    echo "<h3 class='text-center mb-3'>🏧 Transaction Result</h3>";

    if ($type == "deposit") {
        $newBalance = $balance + $amount;
        echo "<div class='atm-screen'>Deposit: ₱$amount</div>";
        echo "<div class='atm-screen'>New Balance: ₱$newBalance</div>";
        echo "<div class='alert alert-success'>✅ Deposit Successful!</div>";
    }
    else if ($type == "withdraw") {
        if ($amount > $balance) {
            echo "<div class='atm-screen'>Requested: ₱$amount</div>";
            echo "<div class='atm-screen'>Current Balance: ₱$balance</div>";
            echo "<div class='alert alert-danger'>❌ Insufficient Balance!</div>";
        } else {
            $newBalance = $balance - $amount;
            echo "<div class='atm-screen'>Withdrawn: ₱$amount</div>";
            echo "<div class='atm-screen'>New Balance: ₱$newBalance</div>";
            echo "<div class='alert alert-warning'>💵 Please take your cash.</div>";
        }
    }
    else {
        echo "<div class='alert alert-danger'>Invalid Transaction Type.</div>";
    }

    echo "<a href='atm.php' class='btn atm-btn w-100 mt-3'>🔙 Back to ATM</a>";
    echo "</div>";
} else {
    echo "<div class='alert alert-danger'>No data received.</div>";
}
?>


    </div>
  </div>
</div>

</body>
</html>