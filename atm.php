<!DOCTYPE html>
<html>
<head>
  <title>ATM Machine</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: white;
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
      content: "💳 ATM CARD";
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
    .atm-form {
      opacity: 0;
      animation: fadeIn 1s ease forwards;
      animation-delay: 3s;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
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
      <div class="atm-box">
        <div class="atm-card"></div>
        <h3 class="text-center mb-3">🏧 Welcome to ATM</h3>
        <form method="post" action="resultatm.php" class="atm-form">
          <div class="atm-screen">
            <label>Current Balance (₱)</label>
            <input type="number" name="balance" class="form-control bg-dark text-success" required>
          </div>
          <div class="atm-screen">
            <label>Transaction Amount (₱)</label>
            <input type="number" name="amount" class="form-control bg-dark text-success" required>
          </div>
          <div class="atm-screen">
            <label>Transaction Type</label>
            <select name="type" class="form-select bg-dark text-success" required>
              <option value="">-- Select --</option>
              <option value="deposit">Deposit</option>
              <option value="withdraw">Withdraw</option>
            </select>
          </div>
          <button type="submit" class="btn atm-btn w-100 mt-2">Process Transaction</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>