<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>PDF Export</title>
</head>
<body>
    <div class="container pb30">
        <center>
            <h1>SEGUNDO CONGRESO DE PREESCOLAR 2019</h1>
            <h3 style="text-transform: uppercase;">“EDUCACIÓN SOCIOECONÓMICA EN PREESCOLAR. PARADIGMA DEL SIGLO XXI”</h3>
            <hr>
            <div class="row">
                @foreach($usuario as $u)
                    <strong>NOMBRE COMPLETO</strong> <br>
                    {{$u->nombre}} <br> <br>


                    <strong>TALLER AL QUE ASISTIRÁS</strong> <br>
                    <p style="text-transform: uppercase;">{{$u->taller->titulo}}</p> <br> 


                    <strong>CÓDIGO DE CONFIRMACIÓN</strong>
                    <div class="alert alert-warning" role="alert">
                        <p style="font-size:500%; ">{{$u->codigo_confirmacion}}</p>
                    </div>                    

                    
                @endforeach                            
            </div>
        </center>
    </div>     
</body>
</html>