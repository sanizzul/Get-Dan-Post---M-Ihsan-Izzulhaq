<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="title">LOGIN</div>
            <form action="Index.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <label class="details">Username</label>
                        <input name="Username" type="text" placeholder="Username" required>
                    </div>
                    <div class="input-box">
                        <label class="details">Password</label>
                        <input name="Password" type="password" placeholder="*****" required>
                    </div>
                </div>
                <div class="input-box">
                    <p class="details">Don't Have an Account ? <a href="Register.php">Register Here</a> </p>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-danger" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- <?php 
        if( isset($_POST["Register"]) ) {
            
            if( Registrasi($_POST) > 0 ) {
                echo "<script>
                        alert('Registration Succeed !')
                     </script>";
            }

        }
    ?> -->

</body>

</html>