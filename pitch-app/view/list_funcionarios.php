<?php
header("Content-type:text/html; charset=utf8");

require_once "../model/Conexao.class.php";
require_once "../model/Manager.class.php";
$Listar = new Manager();

if($_GET["cod"] < 1){
  header('location: view/page_login.php');
}
else{
  $id = $_GET["cod"];

  $empresa = $Listar->list_empresa_id($_GET["cod"]);

  if($empresa){
    $nomeEmpresa = $empresa[0]['nome_empresa'];
    $idEmpresa = $empresa[0]['id'];
  }
  else{
    header('location: view/page_login.php');
  }
}
  






?>

<!DOCTYPE html>
<!-- Created by CondingLab // Edit by GRIFO -->

<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--MENU LINK CSS-->
    <link rel="stylesheet" href="../styles/menu_style.css">
    <!--MENU LINK JS-->
    <link rel="stylesheet" href="../styles/menu_js.js">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<!--MENU INICIO-->    
<div class="sidebar close">
    <!--LOGO-->
    <div class="logo-details">
      <i> <!--Colocar logomarca--></i>
      <span class="logo_name">GRIFO</span>
    </div>
    <!--Inicio dos icones-->
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
      </li>
      
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Tarefas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Tarefas</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Funcionários</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Funcionários</a></li>
        </ul>
      </li>
    
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Obras</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Obras</a></li>
        </ul>
      </li>

      <li>
        <a href="view/page_register_funcionarios.php">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Registrar funcionários</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="view/page_register_funcionarios.php">Registrar funcionários</a></li>
        </ul>

        <li>
          <a href="view/page_register_obras.php">
            <i class='bx bx-compass' > <!--MUDAR ICON--></i>
            <span class="link_name" >Registrar obras</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="view/page_register_obras.php">Registrar obras</a></li>
          </ul>
        </li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      
      <!--Icone do trem-->
      <div class="name-job">
        <div class="profile_name"><?= $nomeEmpresa ?></div>
        <div class="job">ID - <?= $idEmpresa ?></div>
      </div>
      <a href="index.php"><i class='bx bx-log-out' ></i></a>
      
    </div>
  </li>
</ul>
</div>
<!--MENU FINAL-->

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Dashboard</span>
    </div>
  </section>

<!--JS-->
<script>
let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});
</script>

</body>
</html>