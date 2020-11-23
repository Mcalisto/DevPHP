@extends ('layout')

@section('content')

<?php if (!empty($msg) ): ?>
  <div class="alert alert-success text-center">
      {{ $msg }}
  </div>
<?php endif; ?>

<h2>Tabela de Alunos</h2>

<div class="mt-5">
  <a class="btn btn-outline-primary" href="/aluno/cadastrar">Cadastrar Aluno</a>
</div>
<br>
<div class="table-responsive mt-5">
  <table id="tabela" class="table table-striped table-hover dt-responsive nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th></th>
        <th>Nome</th>
        <th>Matricula</th>
        <th>Turma</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>

      @foreach ($alunos as $aluno)
        <tr>
          <td>{{ $aluno->id }}</td>
          <td><img src="{{url('$aluno->foto')}}" /></td>
          <td>{{ $aluno->name }}</td>
          <td>{{ $aluno->matricula }}</td>
          <td>{{ $aluno->turma }}</td>
          <td> <a class="btn btn-warning" href="/aluno/editar/{{ $aluno->id }}">Editar</td>
          <td> <form action="/aluno/remover/{{ $aluno->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Exlcuir</button>
          </form> </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>


@endsection
