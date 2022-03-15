<!DOCTYPE html>
<html lang="<?= str_replace('_', '-', app()->getLocale()) ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/calculator.js"></script>
</head>

<body>
    <div id="calculator">
        <h1>Calculator</h1>
        <div>
            <input id="one" type="number">+
            <input id="two" type="number">=
            <input id="result" disabled>
        </div>
        <br>
        <button onclick="add()" >Calculate</button>
    </div>

    
</body>

</html>