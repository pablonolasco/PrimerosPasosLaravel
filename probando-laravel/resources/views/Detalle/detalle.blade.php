<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{-- esto es un comentario --}}
   <!-- <h1>Mi nombre es {!! $nombre !!} {{ $edad }} &nbsp;<?=$edad?></h1>-->
    <h2>{{ isset($edad) && !is_null($edad)? $edad:'No existe la edad' }}</h2>
    @if($edad>18)
        'Es mayor de edad'
    @else
        'No es mayor de edad'
    @endif
  <p>
<?php $numero=4?>
<br/> Tabla del {!! $numero !!}
</p>
    @for($i=1; $i<=10; $i++)
        {{ $i.'x'.$numero.'=' .($i*$numero) }}<br/>
    @endfor

{!! $j=0 !!}
    @while($j<7)
    {!! 'hola mundo '.$j !!}
   <?php $j++;?>
    @endwhile
</body>
</html>