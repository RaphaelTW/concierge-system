<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8" dir="ltr" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="" />

    <title>Bem Vindo!</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/style.css">
  </head>

  <body>

    <div class="father">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-4">
            <div class="card">

              <div class="card-body">
                <h1>Tela de Login</h1>
              </div>

              <div class="card-body">
                <form action="login.php" method="POST">
                  <div>
                    <div class="mb-3">
                      <label for="" class="form-label">E-mail</label>
                      <input type="email" name="email" class="form-control" id="" placeholder="Digite o seu e-mail">
                    </div>
                  </div>

                  <div>
                    <div class="mb-3">
                      <label for="" class="form-label">Senha</label>
                      <input type="password" name="senha" class="form-control" id="" placeholder="Digite a sua senha">
                    </div>
                  </div>

                  <div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
