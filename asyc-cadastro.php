<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>ASYC - sistema ERP</title>
</head>
<body>
    <section>
        <!-- img -->
        <div class="d-flex justify-content-center mt-4 mb-3">
            <img src="assets/img/asyc_text_versao_padrao.png" width="180px">
        </div>

        <!-- formulario -->
        <div class="card shadow-lg me-auto ms-auto col-md-7 h-75 mb-5">
            <div class="card-body p-5 ">
                <h1 class="display-4">Faça seu cadastro</h1>
                <form action="">
        
                    <div class="mb-3">
                        
                        <!-- nome -->
                        <label  class="form-label">Nome</label>
                        <input class="form-control" type="text" id="name" placeholder="Digite seu nome">
                        
                    </div>


                    <div class="mb-3">
        
                        <!-- email -->
                    
                        <label class="form-label">Email/Celular</label>
                        <input class="form-control" type="text" placeholder="Digite seu email ou celular">
                        
                    </div>
    
                    <div class="mb-3">
                        <!-- senha -->
                    
                        <label  class="form-label">Senha</label>
                        <input class="form-control" type="password" placeholder="Digite sua senha" >
                    </div>


                    <div class="mb-3">
                        <!-- senha -->
                        <label class="form-label">Confirmar senha</label>
                        <input class="form-control" type="password" placeholder="confirmar senha">
        
                    </div>

                </form>

                <div class="d-grid gap-2">
                    <input class="btn btn-danger" type="button" type="submit" value="Criar conta" >
                </div>
                
                <a href="asyc-login.php">Já possui cadastro? Entrar</a>
            </div>
        </div>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        
</body>
</html>