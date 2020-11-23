@extends ('layout')

@section('content')

<div class="container">
  <form action="/aluno/{{ $aluno->id}}/editar" method="post">
    @csrf
    <div class="row">
      <div class="col">
        <label for="name">Nome:
        <input type="text" class="form-control" placeholder="Nome" name="name" value="{{ $aluno->name }}" required>
        </label>
      </div>
      <div class="col">
        <label for="matricula">Matricula:
        <input type="text" class="form-control" placeholder="Matricula" name="matricula" value="{{ $aluno->matricula }}" required>
        </label>
      </div>
      <div class="col">
        <label for="situacao">Situação :
        <br/><br>
        <?php if ($aluno->situacao == "Ativo"): ?>
          Ativo <input type="radio" name="situacao" value="Ativo" checked>
          Inativo <input type="radio" name="situacao" value="Inativo">
        <?php else: ?>
          Ativo <input type="radio" name="situacao" value="Ativo" >
          Inativo <input type="radio" name="situacao" value="Inativo" checked>
        <?php endif; ?>

        </label>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <label>Cep:
        <input class="form-control" name="cep" type="text" id="cep" value="{{ $aluno->cep }}" size="10" maxlength="9"
               onblur="pesquisacep(this.value); " ></label><br />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-4">
        <label>Bairro:
        <input class="form-control" name="bairro" type="text" id="bairro" size="30" value="{{ $aluno->bairro }}" required/></label><br />
      </div>
      <div class="col-4">
        <label>Numero:
        <input class="form-control" type="text" name="numero" size="6" value="{{ $aluno->numero }}" required></label><br>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-4">
        <label for="">Complemento:
        <input class="form-control" type="text" name="complemento" value="{{ $aluno->complemento }}" required></label>
      </div>
      <div class="col-4">
        <label>Cidade:
        <input class="form-control" name="cidade" type="text" id="cidade" size="40" value="{{ $aluno->cidade }}" required/></label><br />
      </div>
      <div class="col-4">
        <label>Estado:
        <input class="form-control" name="estado" type="text" id="estado" size="2" value="{{ $aluno->estado }}" required/></label><br />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-4">
        <label for="curso">Curso:
        <input class="form-control" type="text" name="curso" value="{{ $aluno->curso }}" required></label>
      </div>
      <div class="col-4">
        <label for="turma">Turma:
        <input class="form-control" type="text" name="turma" value="{{ $aluno->turma }}" required></label>
      </div>
      <div class="col-4">
        <label for="data_matricula">Data de Matrícula:
        <input class="form-control" type="date" name="data_matricula" value="{{ $aluno->data_ }}" required> </label>
      </div>
    </div>
    <input class="btn btn-info" type="submit" name="" value="Enviar">
  </form>

</div>


</body>
@endsection
