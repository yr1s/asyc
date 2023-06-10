<?php
include('asyc-topo.php');
?>

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

<body>

    <button class="btn btn-dark d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive"><i class="fa-solid fa-bars fa-xl" style="color: #ffffff;"></i></button>

    <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasResponsiveLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
        </div>
    <div class="offcanvas-body "> 

        <div class="col-md-2">

            <div class=" m-5" >
                <span class="fs-4">M E N U</span>
            </div>
            <hr>

            <ul class="nav flex-column ">
                <li class="nav-item m-3">
                    <a class="nav-link active fs-5 text-reset" aria-current="page" href="#">
                    <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
                        Visão Geral
                    </a>
                </li>
                <hr>
                <li class="nav-item m-3">
                    <a class="nav-link fs-5 text-reset" href="#">
                    <i class="fa-solid fa-money-check-dollar" style="color: #000000;"></i>
                    Orçamento
                    </a>
                </li>
                <hr>
                <li class="nav-item m-3">
                    <a class="nav-link fs-5 text-reset" href="#">
                    <i class="fa-solid fa-money-bill-trend-up" style="color: #000000;"></i>
                    Lançamentos
                    </a>
                </li>
                <hr>
                <li class="nav-item m-3">
                    <a class="nav-link fs-5 text-reset" href="asyc-formOrdemdeservico.php">
                    <i class="fa-solid fa-plus" style="color: #000000;"></i>
                    Criar
                    </a>
                </li>
            </ul>

        </div>
    </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>