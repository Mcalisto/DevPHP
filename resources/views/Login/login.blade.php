<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Login Teste</title>
</head>
<body>
  <div class="container-fluid mt-5">
    <div class="container d-flex justify-content-center mt-auto">
      <div class="card border-secondary">
        <div class="card-header bg-info" align="center">
            <h4 class="card-title"><b>Login</b></h4>
        </div>
        <div class="card-body mx-auto p-5 text-center">

          <form action="/login" method="post">
            @csrf
            <div class="container">
              <span class="d-block">
                <label for="email"><b>Email: </b></label>
                <input type="text" placeholder="Digite o email" name="email" required>
              </span>
              <span class="d-block">  <label for="password"><b>Senha: </b></label>
                <input type="password" placeholder="Digite a senha" name="password" required>
              </span>

              <button class="btn btn-info m-3" type="submit" >Login</button>
            </div>
          </form>
        </div>
      </div>

    </div>


  </div>
</body>
</html>
