
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <div class="contepadre">
        <div class="text-center">
        <img src="./img/sputnik.jpg" class="object-fit w-100" alt="">
            <h1>BIENVENIDO </h1>
            <br>
            <?php
             $nombre = $_REQUEST["nombres"];
             $apellidos = $_REQUEST["apellidos"];
             $correo = $_REQUEST['correo'];
             $telefono = $_REQUEST['telefono'];
             $lenguages = $_REQUEST['lenguajes'];
             $ingles = $_REQUEST['niveling'];

             if(count($lenguages) <= 2 && count($lenguages) > 0 &&  $ingles == '1' ) {
                 echo'<h1>FELICIDADES HAZ SIDO ADMITIDO</h1>';
                 echo'<br/>';
                 echo'Hola ', $nombre , $apellidos , ' tienes ', count($lenguages) , ' lenguajes de programacion ademas de cierto nivel de ingles por tanto eres aceptado en apolo' ;
             }
             elseif(count($lenguages ) > 2 && count($lenguages) < 4 && $ingles == '2'  ){
                 echo'<h1>FELICIDADES HAZ SIDO ADMITIDO</h1>';
                 echo'<br/>';
                 echo'Hola ', $nombre , $apellidos , ' tienes ', count($lenguages) , ' lenguajes de programacion ademas de cierto nivel de ingles por tanto eres aceptado en artemis';
             }
             elseif(count($lenguages  ) > 4  && $ingles == '3'){
                 echo'<h1>FELICIDADES HAZ SIDO ADMITIDO</h1>';
                 echo'<br/>';
                 echo'Hola ', $nombre , $apellidos , ' tienes ', count($lenguages) , ' lenguajes de programacion ademas de cierto nivel de ingles por tanto eres aceptado en sputnik'; 
             }
             else{
                 echo'<h1>MAS SUERTE EN LA PROXIMA>';
                 echo'<br/>';
                 echo'<p>no haz sido aceptado</p>';

             };
         
            ?>
        </div>
    </div>
</body>
</html>