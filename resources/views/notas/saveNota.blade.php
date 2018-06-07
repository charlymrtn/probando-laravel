<h1>Crear nota</h1>

<form class="" action="{{url('notas')}}" method="post">
  <input type="text" name="titulo" value="" placeholder="titulo de la nota">
  <br>
  <input type="text" name="descripcion" value="" placeholder="descripcion">
  <br>
  <input type="submit" name="" value="Guardar">
</form>

<a href="{{url('notas')}}">volver al listado</a>
