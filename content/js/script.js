$('#btnCurrencyCalc').click(function(){
    let currencyAmount = $("#currencyAmount").val();
    let currencyFrom = $("#currencyFrom").val();
    let currencyTo = $("#currencyTo").val();
    let exchangeRate = 0; 
    let currencySymbol = "";

    //Find the exchange rate based on the currencyFrom and currencyTo
    switch(currencyTo){
        case "USD":
            exchangeRate = 1.0;
            currencySymbol = "$";
            break;
        case "EUR":
            exchangeRate = 1.18;
            currencySymbol = "€";
            break;
        case "GBP":
            exchangeRate = 1.31;
            currencySymbol = "£";
            break;
        case "AUD":
            exchangeRate = 0.71;
            currencySymbol = "$";
            break;
        case "JPY":
            exchangeRate = 0.0095;
            currencySymbol = "¥";
            break;
    }

    //Calculate the currency amount
    let result = currencyAmount * exchangeRate;

    //Display the result
    console.log(result);
    $("#currencyResult").html(currencySymbol + result);
});
