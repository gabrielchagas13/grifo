
<!DOCTYPE html>
<!-- Created By CodingLab - Edit by GRIFO -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---LINK CSS--->
    <link rel="stylesheet" href="../styles/style-obras.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container">
    
    <div class="title">Registro de obras</div>
    
    <div class="content">
    <!--Inicio do forms-->
      <form action="../controller/insert_obras.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome da obra</span>
            <input type="text" placeholder="Nome da obra" name="nome" required>
          </div>
          <div class="input-box">
            <span class="details">Endereço</span>
            <input type="text" placeholder="Endereço" name="endereco" required>
          </div>
          <div class="input-box">
            <span class="details">ID funcionário responsavel</span>
            <input type="number" placeholder="Funcionário responsavel" name="id_funcionario" required>
          </div>
          <div class="input-box">
            <span class="details">Data</span>
            <input type="date" name="data_obra" required>
          </div>
          <div class="input-box">
            <span class="details">Tipo de obra</span>
            <input type="text" placeholder="Tipo de obra" name="tipo" required>
          </div>
          <div class="input-box">
            <span class="details">CEP</span>
            <input type="text" placeholder="CEP" name="cep" required maxlength="11">
          </div>
        </div>

        <div class="button">
          <input type="submit" value="Registrar">
        </div>
      </form>
      <!--Final do forms-->
    </div>

  </div>

</body>
</html>
