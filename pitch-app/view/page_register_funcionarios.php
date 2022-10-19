<!DOCTYPE html>
<!-- Created By CodingLab - Edit by GRIFO -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---LINK CSS--->
    <link rel="stylesheet" href="../styles/style-funcionarios.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container">
    
    <div class="title">Registro de funcionário</div>
    
    <div class="content">
    <!--Inicio do forms-->
      <form action="../controller/insert_funcionarios.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome Completo</span>
            <input type="text" placeholder="Nome do funcionário" name="nome" required>
          </div>
          <div class="input-box">
            <span class="details">Usuário</span>
            <input type="text" placeholder="Usuário" name="usuario" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Confirmar email</span>
            <input type="text" placeholder="Confirmar email" required>
          </div>
          <div class="input-box">
            <span class="details">CPF</span>
            <input type="text" placeholder="CPF" name="CPF" required maxlenght="14">
          </div>
          <div class="input-box">
            <span class="details">Telefone</span>
            <input type="tel" placeholder="Telefone" name="telefone" required minlength="10" maxlength="11">
          </div>
          <div class="input-box">
            <span class="details">ID da Empresa</span>
            <input type="number" placeholder="ID da empresa" name="empresa_id" required>
          </div>
          <div class="input-box">
            <span class="details">Cargo</span>
            <input type="text" placeholder="Cargo" name="cargo" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="homem">
          <input type="radio" name="gender" id="dot-2" value="mulher">
          <span class="gender-title">Sexo</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Homem</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Mulher</span>
            </label>
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
