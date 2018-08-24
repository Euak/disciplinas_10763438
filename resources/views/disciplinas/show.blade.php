<h1>{{ $disciplina->titulo }}</h1>
<p>{{$disciplina->ementa}}</p>
<form method="GET" action="/disciplinas/{{ $disciplina->id }}/edit">
  <button type="submit">Editar</button>
</form>
<form method="POST" action="/disciplinas/{{ $disciplina->id }}">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <button type="submit">Apagar</button>
</form>
