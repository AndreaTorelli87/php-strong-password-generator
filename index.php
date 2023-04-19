<?php require __DIR__ . '/function.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Password Generator</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-danger text-white">
   <div class="container">
      <header class="mt-5">
         <h1 class="display-1 fw-bold text-center">Password Generator</h1>
         <form class="d-flex justify-content-between p-5" action="./" method="GET">
            <h5>Seleziona la lunghezza della password</h5>
            <input type="range" class="form-range w-25" min="6" max="30" step="1" id="range" name="lunghezza">
            <div>
               <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" name="numeri">
                  <label class="form-check-label" for="numeri">0-9</label>
               </div>
               <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" name="lettereMinuscole">
                  <label class="form-check-label" for="lettereMinuscole">a-z</label>
               </div>
               <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" name="lettereMaiuscole">
                  <label class="form-check-label" for="lettereMaiuscole">A-Z</label>
               </div>
               <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" name="caratteriSpeciali">
                  <label class="form-check-label" for="caratteriSpeciali">!@#</label>
               </div>
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
         </form>
      </header>
      <main>
         <h2 class="text-center text-black bg-white p-5 rounded-5">
            <?php echo generaColoreRandom($_GET['lunghezza'],$numeri,$lettereMinuscole,$lettereMaiuscole,$caratteriSpeciali) ?>
         </h2>
      </main>
   </div>
</body>
</html>