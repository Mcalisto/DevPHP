@extends ('layout')

@section('content')

<div class="container">

  <form action="/curso/editar/{{ $curso->id}}" method="post">
    @csrf
    <div class="">
      <div >
        <label for="name">Nome do Curso:
        <input type="text" class="form-control" placeholder="Nome" name="name" value="{{ $curso->name}}">
        </label>
      </div>
      <div>
        <label for="codigo">Codigo do Curso:
        <input type="text" class="form-control" placeholder="Codigo do curso" name="codigo" value="{{$curso->codigo}}">
        </label>
      </div>
    </div>
    <div class="mt-4">
      <button type="submit" class="btn btn-primary">Editar</button>
    </div>

  </form>

</div>


</body>
@endsection
