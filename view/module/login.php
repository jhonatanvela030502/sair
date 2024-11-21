<!DOCTYPE html>
      <html lang="es">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Concertemos Login</title>
<style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-image: url('../img/justicia-bg.png');
    background-size: cover;
    display: flex;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: white;
    border: 1px solid #ddd;
    padding: 30px;
    border-radius: 10px;
    width: 400px;
    text-align: center;
    position: absolute;
    left: 100px;
    top: 260px;
    margin-left: 20px;
}

.logo {
    margin-bottom: 20px;
}

.concertemos {
    font-size: 36px;
    font-weight: bold;
    position: absolute;
    top: 200px;
    left: 180px;
    color: #FFC107;
}

.highlight {
    color: #0047AB;
}

.small {
    font-size: 24px;
    color: #FFC107;
}

.login-form {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.submit-btn {
    width: 100%;
    padding: 10px;
    background-color: #0047AB;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.submit-btn:hover {
    background-color: #003380;
}

.info-text {
    margin-top: 20px;
    color: #888;
}

.footer {
    margin-top: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.peru-logo {
    background-image: url('../img/minlogo.png');
    width: 500px; 
    height: 150px;
    bottom: 10px;
    position: absolute;
    left: 0px;
    background-size: auto;
    background-repeat: no-repeat;
}
</style>
      </head>
      <div class="peru-logo"></div>
      <body>
          <h1 class="concertemos">CONCER<span class="highlight">TEMOS</span></h1>
          <div class="login-container">
              <div class="logo">
              </div>
              <form class="login-form" method="post" id="formIngreso" onsubmit="returnvalidarIngreso()">
                  <input class="form-control" type="text" required placeholder="Ingrese su Usuario" name="ingUsuario" id="usuarioIngreso">
                  <input class="form-control" type="password" placeholder="Ingrese su Contraseña" name="ingPassword" id="passwordIngreso">
                  <button type="submit" class="submit-btn">Ingresar</button>
      
          <?php

            $login = new ControladorUsuarios();
            $login -> ctrIngresoUsuario();

          ?>
      
              </form>
              <p class="info-text">Centro de Conciliacion Extrajudicial</p>
              <div class="footer"></div>
          </div>
      
          
      <script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>
      <!--====  Fin de FORMULARIO DE INGRESO  ====-->
      </body>
      </html>