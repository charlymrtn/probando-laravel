<h1>lista de frutas</h1>

<a href="{{action('FrutasController@naranjas')}}">ir a naranjas</a>

<a href="{{action('FrutasController@manzanas')}}">ir manzanas</a>

<ul>
  @foreach ($frutas as $fruta)
    <li>{{$fruta}}</li>
  @endforeach
</ul>
