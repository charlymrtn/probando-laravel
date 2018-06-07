@include('contacto.cabecera',array('nombre',$nombre))

  <h1>Pagina de contacto {{$nombre}} {{isset($edad) && !is_null($edad) ? $edad : 'No existe la edad'}}</h1>

  @if (is_null($edad))
    No existe la edad
  @else
    Si existe la edad: {{$edad}}
  @endif

  @php
    $numero = 5;
  @endphp
  <p>Tabla del {{$numero}}</p>
  @for ($i=1; $i <= 10; $i++)
    <br>{{$numero.' x '.$i.' = '.($i*$numero)}}
  @endfor
