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
    
    
    <title>ASYC - Contas</title>
    
    <body>
    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars fa-xl" style="color: #ffffff;"></i> Menu</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class=" m-3" >
            <span class="fs-4">M E N U</span>
          </div>
          <hr>
        
          <ul class="nav flex-column ">
            <li class="nav-item m-2">
              <a class="nav-link active fs-5 text-reset" aria-current="page" href="#">
                <i class="fa-solid fa-magnifying-glass-dollar" style="color: #000000;"></i>
                Visão Geral
              </a>
            </li>
          <hr>
            <li class="nav-item m-2">
              <a class="nav-link fs-5 text-reset" href="#">
                <i class="fa-solid fa-money-bill-transfer" style="color: #000000;"></i>
                Movimentações
              </a>
            </li>
          <hr>
            <li class="nav-item m-3">
              <a class="nav-link fs-5 text-reset" href="financeiroLancamento.php">
                <i class="fa-solid fa-money-bill-trend-up" style="color: #000000;"></i>
                Lançamentos
              </a>
            </li>
          <hr>
            <li class="nav-item m-3">
              <a class="nav-link fs-5 text-reset" href="financeiroConta.php">
                <i class="fa-solid fa-file-invoice-dollar" style="color: #000000;"></i>
                Contas
              </a>
            </li>
          </ul>
  </div>
</div>
  <div class="row">

    <div class="d-flex justify-content-around mt-5">
      <p class="fs-3">
        Contas bancarias
        </p>
      
        <button type="button" class="btn btn-danger ">
          <a class="text-reset" href="asyc-formConta.php">Nova conta</a>
        </button>
      </div>
      
      
      <div class="card col-md-9 ms-auto me-auto mt-2">
         <div class="card-body">
         
          <div class=" me-auto ms-auto ">
        <table class="table table-hover table-striped ">
          <thead>
            <tr>
              <th scope="col">Banco</th>
              <th scope="col">Tipo</th>
              <th scope="col">Saldo geral</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">Caixa</td>
              <td>CC</td>
              <td>2000</td>
              <td>Ativo</td>
            </tr>
            <tr>
              <td scope="row">Nubank</td>
              <td>CC</td>
              <td>24.0000</td>
              <td>Ativo</td>
            </tr>
            <tr>
              <td scope="row">Santander</td>
              <td>CP</td>
              <td>3000</td>
              <td>ativo</td>
            </tr>
          </tbody>
        </table>
            </div>
         
         </div>      
      </div>
  








  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>