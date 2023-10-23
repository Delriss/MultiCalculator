<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency Converter</title>

  <!--Stylesheets-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
  <div class="pageArea">
    <div class="contentBox d-flex w-100 h-100 p-3 mx-auto flex-column">

      <!-- Header and Nav-->
      <header class="mb-5">
        <div>
          <h3 class="float-md-start mb-0 title fs-1">MultiCalculator</h3>
          <nav class="nav navHeader justify-content-center float-md-end bg-default subHeader">
              <a class="navLinks active" aria-current="page" href="#">Currency Converter</a>
              <a class="navLinks" href="#">Temperature Converter</a>
          </nav>
        </div>
      </header>
      <!-- Header and Nav END-->

      <!-- Main Content -->
      <main class="px-5">
          <h1 class="display-1 title">Currency Converter</h1>


          <p class="lead">Please choose your chosen currencies to convert between from the dropdowns.</p>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Convert From:</span>
            <select id="currencyFrom" class="form-select" aria-label="CurrencySelect">
              <option selected>Choose Currency</option>
              <option value="1">GBP</option>
              <option value="2">USD</option>
              <option value="3">EUR</option>
              <option value="4">JPY</option>
              <option value="5">AUD</option>
            </select>
          </div>

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Convert To:</span>
            <select id="currencyTo" class="form-select" aria-label="CurrencySelect">
              <option selected>Choose Currency</option>
              <option value="GBP">GBP</option>
              <option value="USD">USD</option>
              <option value="EUR">EUR</option>
              <option value="JPY">JPY</option>
              <option value="AUD">AUD</option>
            </select>
          </div>

          <hr>

          <p class="lead">Please enter the amount you wish to convert.</p>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Amount to Convert:</span>
            <input id="currencyAmount" type="text" class="form-control" placeholder="Enter Amount" aria-label="ConversionAmount" aria-describedby="addon-wrapping">
          </div>
    
          <hr>
          <button id="btnCurrencyCalc">Convert</button>
          <div class="d-flex flex-column">
            <p class="lead">Your converted amount is:</p>
            <p id="currencyResult" class="fs-5"></p>
          </div>
          
      </main>
      <!-- Main Content END-->

    </div>

  </div>

</body>

<!-- Import Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>

</html>