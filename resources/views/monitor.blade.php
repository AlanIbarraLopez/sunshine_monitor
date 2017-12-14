<!DOCTYPE html>
<html>
<head>
    <title>Sunshine Monitor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center"><img src="../img/sun.png" width="40px" height="40px" alt="">Sunshine</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
        </ul>
    </div>
</nav>

<div class="container" style="margin-top: 3%">
    <canvas id="myChart" width="400" height="200"></canvas>
</div>

<script src="../js/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="../js/build.js"></script>
<script>
    build();

    setInterval(function () {
       build();
    },5000);
</script>
</body>
</html>