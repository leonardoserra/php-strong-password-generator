<?php
session_start();
// $password = '';
// $password = $_SESSION['password'];














?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generated</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">

</head>
<body>
    <main>
        <div class="container w-50 mt-5">
            <div class="row text-center mt-2 my">
                
            <?php if(isset($_SESSION['password'])){?>
                <div class="alert alert-success mt-5" role="alert">
                    <?php echo 'la password unica è stata generata: ' . $_SESSION['password']; ?>
                </div>
                <?php }else{?>
                    <div class="alert alert-warning mt-5" role="alert">
                    <?php echo 'Non hai selezionato la lunghezza della password '; ?>
                </div>
                    <?php }?>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
                