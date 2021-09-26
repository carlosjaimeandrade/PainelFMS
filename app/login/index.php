<?php
ob_start("ob_gzhandler");
require_once '../../config.php';
require_once(CONNECT);

?>
<!DOCTYPE html>
<html lang="pt-br" data-ng-app="app">

<head>
  <meta charset="utf-8" />
  <title><?php echo $empresa; ?> Home</title>
  <meta name="description" content="FASTMEDIASOCIAL" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASEURL; ?>images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASEURL; ?>images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASEURL; ?>images/favicon-16x16.png">
  <link rel="mask-icon" href="<?php echo BASEURL; ?>images/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#bbbfbe">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/bootstrap/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/app/app.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/app/login.css" type="text/css" />

</head>

<body>
  <div app class="login">
    <div class="login-container">
      <div class="img-login">
        <img src="<?php echo BASEURL ?>images/logo_site.png" >
      </div>
      <form class="form-container" action="">
        <div class="login-content">
          <input placeholder="Digite o seu usuário" type="text">
          <input placeholder="Digite a sua senha" type="password">
          <button>Entrar</button>
        </div>
        <p class='info-login'>Não possui login? entre em contato 35 9 98308037</p>
      </form>
    </div>
  </div>
</body>

</html>


<script>
  document.body.onresize = function() {
    const app = document.querySelector('[app]')
    if ((document.body.clientWidth < 768) && (app.className != "app2")) {
      const aside = document.querySelector('[aside]')
      aside.style.display = "none"
    }
    if (document.body.clientWidth > 768) {
      const aside = document.querySelector('[aside]')
      aside.style.display = "block"
    }
  };

  function openMenu(event) {
    const menu = document.querySelector('[wm-menuOption]')
    menu.style.display = 'block';


    window.onclick = e => {
      if (event.target != e.target) {
        menu.style.display = 'None';
      }
    }
  }


  function openAside(event) {
    const width = document.body.clientWidth;
    if (width > 768) {
      const aside = document.querySelector('[aside]')
      aside.style.display = "block"
      const app = document.querySelector('[app]')
      if (app.className == 'app') {
        app.classList.remove('app')
        app.classList.add('app2')
      } else {
        app.classList.remove('app2')
        app.classList.add('app')
      }
      const infMenu = document.querySelectorAll('[infMenu]')
      infMenu.forEach(e => {
        e.style.display = e.style.display == "block" ? "none" : "block"
      })

    }

    if (width <= 768) {
      const aside = document.querySelector('[aside]')
      aside.style.display = aside.style.display == "block" ? "none" : "block"


      const app = document.querySelector('[app]')
      if (app.className == "app") {
        app.classList.remove(app.className)
        app.classList.add("app2")
      } else {
        app.classList.remove(app.className)
        app.classList.add("app")
      }

      const infMenu = document.querySelectorAll('[infMenu]')
      infMenu.forEach(e => {
        e.style.display = e.style.display == "block" ? "none" : "block"
      })



      window.onclick = e => {
        const app = document.querySelector('[app]')
        if ((e.target != event.target) && (width <= 768) && (app.className == "app2")) {
          const aside = document.querySelector('[aside]')
          aside.style.display = aside.style.display == "block" ? "none" : "block"


          const app = document.querySelector('[app]')
          if (app.className == "app") {
            app.classList.remove(app.className)
            app.classList.add("app2")
          } else {
            app.classList.remove(app.className)
            app.classList.add("app")
          }

          const infMenu = document.querySelectorAll('[infMenu]')
          infMenu.forEach(e => {
            e.style.display = e.style.display == "block" ? "none" : "block"
          })
        }
      }

    }


  }
</script>
<script src="<?php echo BASEURL; ?>bower_components/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo BASEURL; ?>bower_components/jquery/jquery.js"></script>