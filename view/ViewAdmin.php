<?php
include "../database/admin/AdminBd.php";


    $objBD = new AdminBd();
    $objBD->conn();

    if (!empty($_POST['titulo'])) {
        $result = $objBD->pesquisar($_POST);
      //  var_dump($result);
        //exit;
    } else {
        $result = $objBD->select();
        $numRows = $objBD->select()->rowCount();

    }

    if (!empty($_GET['id_usuario'])) {

        $objBD->remover($_GET['id_usuario']);
        header("location: ./AgendaList.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>MEPI-Administrador</title>
</head>

<body>
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="../index.php">MEPI- Monitoramento de EPIs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Início <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Minha Agenda</a> <!-- Corrigido o link para a página de agenda -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Meus Contatos</a> <!-- Corrigido o link para a página de contatos -->
      </li>
    </ul>
  </div>
</nav>


<br>
      <h2 class="display-5" style= "text-align: center">Dashboard do Admin</h2>
    <br>
    <p>O número de registros retornadas pela consulta é: <?php echo $numRows; ?></p>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>login</th>
                        <th>data</th>
                        <!-- Adicione mais colunas conforme necessário -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row): ?>
                        <tr>
                            <td><?php echo $row['id_usuario']; ?></td>
                            <td><?php echo $row['login']; ?></td>
                            <td><?php echo $row['dta_cadastro']; ?></td>
                            
                            <!-- Adicione mais colunas conforme necessário -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    </body>

</html>