<!DOCTYPE html>
<html  lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- estilo customizado -->
    <link rel="stylesheet" href="assets/css/">

    <title>ASYC - sistema ERP</title>
</head>
<body>
<section class=" d-flex align-items-center justify-content-center mt-4 pt-4">
        <div class=" row align-items-center justify-content-around  mb-5 mt-5 pt-5 ">
             <!-- img -->
        <div class="col-md-6 ">
            <img class="img-fluid" src="assets/img/logo-asyc-white.jpeg" width="600px">
        </div>


        <!-- form -->
        <div class="card shadow-lg h-50 col-md-6 col-sm-9 ">
            
            <div class="card-body p-5">
                <h1 class="display-4">Login</h1>
                <form action="">
                    <div class="mb-3">
                        <i class="fa-solid fa-user"></i>
                        <label class="form-label" for="email-usuario">Email</label>
                        <input class="form-control" type="text" id="email-usuario" placeholder="Digite seu email">
                    </div>

                    <div class="mb-3">
                        <i class="fa-solid fa-key"></i>
                        <label class="form-label" for="senha-usuario">Senha</label>
                        <input class="form-control" type="password" id="senha-usuario" placeholder="Digite sua senha">
                    </div>

                </form>

                <div class="d-grid gap-2">
                    <input class="btn btn-danger" type="button" type="submit" value="Logar" >
                </div>

                <a class="mt-2" href="asyc-cadastro.php">Cadastre-se</a>
           
            </div>
        </div>

        </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>