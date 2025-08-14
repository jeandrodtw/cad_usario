<?php /* Styled light-blue login page */ 
    session_start();
    if(!isset($_SESSION["id_usuario"])){
        header('Location: ../../index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="home.css">
</head>
<body> 
    <div classe="menu-bar">
      <div class="btn_usuario">
        <form method="POST" action="../../routers/homeRouter.php?acao=cad-usuario">
          
          <div class="actions">
            <button class="btn" type="submit">Usuario</button>
          </div>
        </form>       
      </div>
      <div class="btn_logout">
        <form method="POST" action="../../routers/homeRouter.php?acao=logout">
          
          <div class="actions">
            <button class="btn" type="submit">Logout</button>
          </div>
        </form>       
      </div>
    </div>   
  </main>
</body>
</html>