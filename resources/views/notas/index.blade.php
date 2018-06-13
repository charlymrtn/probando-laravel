<h1>Mis notas</h1>
<h3>listados de notas</h3>

<p> <a href="{{url('notas/create')}}">Crear nota</a></p>

@if (session('status'))
  <p style="background:yellow;">{{session('status')}}</p>
@endif
<ul>
  @foreach ($notas as $nota)
    <li>
      <ul>
        <li>{{$nota->titulo}}</li>
        <li><a href="{{url('notas/'.$nota->id)}}">ver</a></li>
        <li><a href="{{url('borrar-nota/'.$nota->id)}}">borrar</a></li>
        <li><a href="{{url('notas/'.$nota->id.'/edit')}}">editar</a></li>
      </ul>
    </li>
  @endforeach
</ul>
