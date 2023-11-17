<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Boat Game</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    #boat {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 250px;
      height: 250px;
      background: url('kapal.png');
      background-size: cover;
    }

    #water {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 50%;
      background: url('air.png'); 
      background-size: cover;
    }

    .card-body {
      height: 300px;
      position: relative;
    }
  </style>
</head>

<body class="bg-light-subtle">
  <div class="card">
    <h5 class="card-header">Game Perahu</h5>
    <div class="card-body">
        <div id="water"></div>
        <div id="boat"></div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>

</html>
