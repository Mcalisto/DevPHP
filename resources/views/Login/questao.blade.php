@extends ('layout')

@section('content')



<div class="container mt-5">
  <div class="card border-secondary">
    <div class="card-head text-center">
      <h4 class="card-title"><b>Questão 6</b></h4>
    </div>
    <div class="card-body">
    <p>const valores =  Array(10,11,16,20,54,22,8,2);</p>
    <p>let total = 0;
    <p>for(let index = 0; index < valores.length; index++){
    <p> const element = valores[index];
    <p> if( (element % 3) == 0){            //element substitui a variavel index
    <p>     total += element;
    <p>    }
    <p>}

    <p>console.log("Total: "  + total)
      <br>

    <p><b> A correção deve ser feita trocando a variavel index por element, e assim o resultado será 54</b></p>
    </div>
  </div>
</div>


@endsection
