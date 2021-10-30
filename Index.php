<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>

<style>
    .body{
        background-image: url(images/Back-Image-Doplas.png);
    }
</style>

<body>
    <nav class="navbar navbar-expand-md bg-danger">
        <div class="container-fluid">
            <div class="pe-3">
                <img src="images/DOPLAS.png" alt="DOPLAS" align="left">
            </div>
            <div class="pe-3">
                <a href="Login.php">
                <img src="images/logout.png" alt="Logout" align="right"
                width="30px" height="30px">
                </a>
            </div>
        </div>
    </nav>

    <?php
    
        $username = $_POST['Username'];

    ?>

    <div class="container d-flex justify-content-center">
        <div class="d-flex justify-content-center mt-4">
            <h3>Welcome, <?= $username ?> !</h3>
        </div>
    </div>
    <div class="container d-flex justify-content-center pt-3">
        <img src="images/Lifesavers - Hand.png">
    </div>
    <div class="container d-flex justify-content-center pt-4">
        <h4 style="text-align: center">Doplas Coming Soon, <br> Be Patient</h4>
    </div>
</body>
</html>