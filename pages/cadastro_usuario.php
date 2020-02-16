<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Auto Gerenciamento Acadêmico</title>
      <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" href="../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
      <link rel="stylesheet" href="../css/style.css"/>
      <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
      <script type='text/javascript' src='../js/cep.js'></script>
      <link rel="shortcut icon" href="../images/favicon.png"/>
  </head>

  <body>
    <div class="content-wrapper full-page-wrapper">      
      <h3 class="text-primary mb-12">Cadastro de usuário</h3>
      <div class="card">
        <form  method="POST" action="../controller/add_usuario.php">    
          <div class="card-block">

            <div class="row">
              <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome completo do usuário" required="">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label for="funcao">Curso</label>
                <input type="text" class="form-control" id="funcao" name="funcao" placeholder="Digite a Curso do usuário" required="">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label for="email">nome de usuário</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite o nome do usuário" required="">
              </div>
            </div>
    
            <div class="row">
              <div class="form-group col-md-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="Password" id="senha1" name="senha1" class="form-control p_input" placeholder="Senha" required="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="Password" id="senha2" name="senha2" class="form-control p_input" placeholder="Repita Senha" required="">
                </div>
              </div>
            </div>
    
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </div>
            
          </div>
        </form>
      </div>
    </div>
  </body>