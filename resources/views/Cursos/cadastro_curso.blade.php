@extends ('layout')

@section('content')

<div class="container">

  <form action="/curso/cadastrar" method="post" enctype="multipart/form-data">
    @csrf
    <div class="">
      <div >
        <label for="name">Nome do Curso:
        <input type="text" class="form-control" placeholder="Nome" name="name">
        </label>
      </div>
      <div>
        <label for="codigo">Codigo do Curso:
        <input type="text" class="form-control" placeholder="Codigo do curso" name="codigo">
        </label>
      </div>
    </div>
    <div class="mt-4">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>

  </form>

</div>


</body>
@endsection
