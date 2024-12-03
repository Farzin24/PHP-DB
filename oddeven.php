<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        input, button {
            padding: 10px;
            margin: 10px;
            font-size: 16px;
        }
        .result {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Check If a Number is Odd or Even</h1>
    <label for="numberInput">Enter a number:</label>
    <input type="number" id="numberInput" />
    <button onclick="checkEvenOdd()">Check</button>
    <div class="result" id="result"></div>

    <script>
        function checkEvenOdd() {
            const number = document.getElementById('numberInput').value;
            const resultDiv = document.getElementById('result');
            
            if (number === "") {
                resultDiv.textContent = "Please enter a number.";
            } else {
                if (number % 2 === 0) {
                    resultDiv.textContent = "The number " + number + " is Even.";
                } else {
                    resultDiv.textContent = "The number " + number + " is Odd.";
                }
            }
        }
    </script>
</body>

