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
</body>

<div class="container">
        <div class="main">
            <div class="form-group">
                <label for="oamount">
                    Amount to Convert :
                </label>
                <input type="text" class="form-control searchBox" placeholder="0" id="oamount">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">From</span>
                        </div>
                        <select class="form-control from" id="sel1">
                            <option value="">Select One …</option>
                            <option value="Celcius">Celcius</option>
                            <option value="Fahrenheit">Fahrenheit</option>
                            <option value="Kelvin">Kelvin</option>
                        </select>
                    </div>
                </div>
 
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">To</span>
                        </div>
                        <select class="form-control to" id="sel2">
                            <option value="">Select One …</option>
                            <option value="Celcius">Celcius</option>
                            <option value="Fahrenheit">Fahrenheit</option>
                            <option value="Kelvin">Kelvin</option>
                        </select>
                    </div>
                </div>
            </div>
 
            <div class="text-center"></div>
 
                <!-- convert button -->
                <button class="btn btn-primary convert m-2" type="submit">
                    Convert
                </button>
                <!-- reset button -->
                <button class="btn btn-primary m-2" onclick="clearVal()">
                    Reset
                </button>
            </div>
 
        </div>



<!-- Import Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src="js/currency.js"></script>

</html>