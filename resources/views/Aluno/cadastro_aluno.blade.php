@extends ('layout')

@section('content')

<div class="container">
  <form action="/aluno/cadastrar" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col">
        <label for="name">Nome
        <input type="text" class="form-control" placeholder="Nome" name="name" required>
        </label>
      </div>
      <div class="col">
        <label for="matricula">Matricula
        <input type="text" class="form-control" placeholder="Matricula" name="matricula" required>
        </label>
      </div>
      <div class="col">
        <label for="situacao">Situação :
        <br/><br>
        Ativo <input type="radio" name="situacao" value="Ativo" checked>
        Inativo <input type="radio" name="situacao" value="Inativo">
        </label>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <label>Cep:
        <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-4">
        <label>Rua:
        <input class="form-control" name="rua" type="text" id="rua" size="50" /></label><br />
      </div>
      <div class="col-4">
        <label>Bairro:
        <input class="form-control" name="bairro" type="text" id="bairro" size="30" /></label><br />
      </div>
      <div class="col-4">
        <label>Numero:
        <input class="form-control" type="text" name="numero" size="6"></label><br>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-4">
        <label for="">Complemento:
        <input class="form-control" type="text" name="complemento"></label>
      </div>
      <div class="col-4">
        <label>Cidade:
        <input class="form-control" name="cidade" type="text" id="cidade" size="40" /></label><br />
      </div>
      <div class="col-4">
        <label>Estado:
        <input class="form-control" name="estado" type="text" id="estado" size="2" /></label><br />
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-4">
        <label for="curso">Curso:
        <input class="form-control" type="text" name="curso" value=""></label>
      </div>
      <div class="col-4">
        <label for="turma">Turma:
        <input class="form-control" type="text" name="turma" value=""></label>
      </div>
      <div class="col-4">
        <label for="data_matricula">Data de Matrícula:
        <input class="form-control" type="date" name="data_matricula" value=""> </label>
      </div>
    </div>
    <div class="row mt-5">
      <div class="">
        <label for="foto">Foto do Aluno:
        <input class="form-control" type="file" name="foto" ></label>
      </div>
    </div>
    <div class="text-center mt-5">
      <input class="btn btn-info" type="submit" name="" value="Enviar">
    </div>

  </form>

</div>


</body>
@endsection
