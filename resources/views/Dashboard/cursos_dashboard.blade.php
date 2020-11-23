@extends ('layout')

@section('content')

<?php if (!empty($msg) ): ?>
  <div class="alert alert-success text-center">
      {{ $msg }}
  </div>
<?php endif; ?>


<h2>Tabela de Cursos</h2>

<div class="row mt-5">
  <div class="col-5">
    <a class="btn btn-outline-primary" href="/curso/cadastrar">Cadastrar Curso</a>
  </div>
  <div class="col-5">
    <form  action="/curso/import" method="post" enctype="multipart/form-data">
      @csrf
      <label for="xml">Upload De Arquivo: <br>
      <input type="file" name="xml" value=""><input type="submit" name="" value="Enviar"> </label>


    </form>
  </div>
</div>


<br>
<div class="table-responsive mt-5">
  <table id="tabela" class="table table-striped table-hover dt-responsive nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Codigo</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cursos as $curso)
        <tr>
          <td>{{ $curso->id }}</td>
          <td>{{ $curso->name }}</td>
          <td>{{ $curso->codigo }}</td>
          <td> <a class="btn btn-warning" href="/curso/editar/{{ $curso->id }}">Editar</td>
          <td><form action="/curso/remover/{{ $curso->id }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Exlcuir</button>
            </form></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>


@endsection
