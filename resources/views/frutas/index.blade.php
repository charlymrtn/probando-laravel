<h1>lista de frutas</h1>

<a href="{{action('FrutasController@naranjas')}}">ir a naranjas</a>

<a href="{{action('FrutasController@manzanas')}}">ir manzanas</a>

<ul>
  @foreach ($frutas as $fruta)
    <li>{{$fruta}}</li>
  @endforeach
</ul>

<h1>formulario en laravel</h1>
<form class="" action="{{url('recibir')}}" method="post">
  <p>
    <label for="nombre">nombre de la fruta</label>
    <input type="text" name="nombre" value="">
  </p>
  <p>
    <label for="descripcion">descripcion de la fruta</label>
    <textarea name="descripcion"></textarea>
  </p>
  <input type="submit" name="" value="Enviar">
</form>
