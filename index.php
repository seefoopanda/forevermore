<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="app.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css"/>

    <title>Popup Box</title>

</head>

<body>

<div id="popUpOverlay"></div>

<div id="popUpBox">

    <div id="box">

        <i class="fas fa-check-circle fa-5x"></i>

        <h1>Here Goes Your Popup</h1>

        <div id="closeModal"></div>

    </div>

</div>

<button onclick="Alert.render('You look very pretty today.')" class="btn">Show Alert</button>

<script src="./app.js"></script>

</body>

</html>