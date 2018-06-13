<h1>Crear nota</h1>

<form method="POST" action="{{isset($nota) ? url('notas/'.$nota->id) : url('notas')}}" >
  @isset($nota)
    @method('PUT')
  @endisset
  @csrf
  <input type="text" name="titulo" placeholder="titulo de la nota" value="{{isset($nota) ? $nota->titulo : ''}}">
  <br>
  <input type="text" name="descripcion" placeholder="descripcion" value="{{isset($nota) ? $nota->descripcion : ''}}">
  <br>
  <input type="submit" name="" value="Guardar">
</form>

<a href="{{url('notas')}}">volver al listado</a>
