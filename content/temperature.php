<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency Converter</title>

  <!--Import BS5-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>

<body>
  <h1>Currency Converter</h1>

    <div class="container">
        <div class="main">
            <!-- Celcius input -->
            <p>
                <label>Celcius</label>
                <input id="inputCelcius" type="number" placeholder="Celcius" oninput="tempConvertC(this.value)">
            </p>
            <!-- Fahrenheit input -->
            <p>
                <label>Fahrenheit</label>
                <input id="inputFahrenheit" type="number" placeholder="Fahrenheit" oninput="tempConvertF(this.value)">
            </p>
            <!-- Kelvin input -->
            <p>
                <label>Kelvin</label>
                <input id="inputKelvin" type="number" placeholder="Kelvin" oninput="tempConvertK(this.value)">
            </p>    

            <!-- reset button -->
            <button class="btn btn-primary m-2" onclick="clearVal()">Reset</button>
        </div>

        <script>
            // Converts Celcius to Fahrenheit and Kelvin
            function tempConvertC(valNum) {
                valNum = parseFloat(valNum);
                document.getElementById("inputFahrenheit").value = (valNum*1.8) + 32;
                document.getElementById("inputKelvin").value = valNum + 273.15;
            };
            
            // Converts Fahrenheit to Celcius and Kelvin
            function tempConvertF(valNum) {
                valNum = parseFloat(valNum);
                document.getElementById("inputCelcius").value = (valNum-32) / 1.8;
                document.getElementById("inputKelvin").value = ((valNum-32)/1.8)+273.15;
            };

            // Converts Kelvin to Celcius and Fahrenheit
            function tempConvertK(valNum) {
                valNum = parseFloat(valNum);
                document.getElementById("inputCelcius").value = valNum-273.15;
                document.getElementById("inputFahrenheit").value = ((valNum-273.15)*1.8)+32;
            };

            // Clears all the input fields when the user clicks the reset button
            function clearVal() {
                window.location.reload();
            };
        </script>
            
    </div>
</body>





<!-- Import Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>

</html>