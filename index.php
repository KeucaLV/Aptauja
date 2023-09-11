<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aptauja</title>
</head>
<body>
    <div class="main">
        <form id="form" class="box">
            <div class="flex-column">
                <label>Ievadi vārdu</label>
                <input id="name" name="vards">
            </div>
            <div class="flex-column">
                <label>Ievadi uzvārdu</label>
                <input id="surname" name="uzvards">
            </div>
            <button onclick="accept()">Apstiprināt</button> 
            <div class="flex-row">
                <p>Jūsu vārds ir </p>
                <p class="bold" id="success"></p>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>