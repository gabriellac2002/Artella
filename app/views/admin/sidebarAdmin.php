<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <title>Admin Sidebar</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../public/css/navbarAdmin.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div class="sidebar">
      <div class="logo-details">
        <img src="../../../public/assets/LogoMinimalista.png" id="img" alt="Logo Artella">
        <div class="logo_name">Artella</div>
          <i class='bx bx-menu' id="btn" ></i>
      </div>
      <ul class="nav-list">
        <li>
          <a href="#">
            <i class='bx bx-user'></i>
            <span class="links_name">Usuários</span>
          </a>
           <span class="tooltip">Usuários</span>
        </li>
        <li>
         <a href="#">
          <i class='bx bx-shopping-bag'></i>
          <span class="links_name">Produtos</span>
         </a>
         <span class="tooltip">Produtos</span>
       </li>
       <li>
         <a href="#">
          <i class='bx bx-category'></i>
          <span class="links_name">Categorias</span>
         </a>
         <span class="tooltip">Categorias</span>
       </li>
       <li class="profile">
           <div class="profile-details">
             <img src="https://teachprivacy.com/wp-content/uploads/Hacker5.jpg" alt="profileImg">
             <div class="name_job">
               <div class="name">Roberto</div>
               <div class="job">CEO</div>
             </div>
           </div>
           <i class='bx bx-log-out' id="log_out" ></i>
       </li>
      </ul>
    </div>
    <section class="home-section">
        

    <script src="../../../public/js/sidebarAdmin.js"></script>
  </body>

</html>