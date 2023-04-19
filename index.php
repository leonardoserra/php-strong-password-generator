<?php
session_start();
require_once __DIR__ . '/function.php';















?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <div class="wrapper">

        
            <header class="my-header">
                <div class="container w-50">
                    <div class="row text-center mt-5">
                        <div class="col-12">
                            <h1>Strong Password Generator</h1>
                            <h2>Genera una Password Sicura</h2>
                        </div>
                    </div>
                </div>
            </header>

            <main class="my-main">
                <div class="container w-50">
                    <div class="row text-center mt-2 my">
                    <div class="alert alert-info" role="alert">Nessun parametro valido inserito</div>
                    </div>
                </div>
                <div class="container w-50">
                    
                    <div class="row text-center mt-2 my">
                        <div class="col">
                            <form class="col">

                                <div class="row">
                                    <div class="col-6 text-start">
                                        <div class="mb-3">
                                            <label for="pswlength" class="form-label">Inserisci lunghezza Password</label>
                                        </div>
                                        <div class="mb-3">
                                            <div for="charRepetition" class="form-label">Attiva ripetizione di caratteri</div>
                                        </div>
                                        
                                    </div>
                                        
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <input name="pswlength" type="number" class="form-control" id="pswlength">
                                        </div>
                                        <div class="mb-3">
                                            <label for="charRepetition" class="form-label">Si </label>
                                            <input type="radio" class="form-check-input" name="charRepetition" id="charRepetition">
                                        </div>
                                        <div class="mb-3">
                                            <label for="charRepetition" class="form-label">No </label>
                                            <input type="radio" class="form-check-input" name="charRepetition" id="charRepetition">
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                    

                </div>
            </main>
        </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>