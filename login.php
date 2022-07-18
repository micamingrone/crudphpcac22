<?php
if(isset($_POST['usuario'])){
    $usuario = $_POST["usuario"];
    $password = md5($_POST["password"]);
    if(!isset($usuario) || !isset($password)){
        $error =1;
    } else{
        require_once('Conexion.php');

        $conectar = new Conexion();
        $usuario = $conectar->consultar("select usuario, password from users where usuario ='$usuario' and password ='$password'");
        if(count($usuario)>0){
            session_start();
            $_SESSION['logueado'] = true;
            $_SESSION['user'] = $usuario;
            header('Location: panel.php');
        }else{
            $error = 2;
        }
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingreso al administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="login.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ee2d30d4e.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-image: url("img/Biblioteca.png");
        height: 937px;
    }
</style>
<body class="img js-fullheight" >
    
<section class="ftco-section">
    <div class="container card" style="background: transparent; width: 36rem; border: solid 3px white !important;">
          
        <div class="row justify-content-center" style="margin-top: 5rem;">
        <div class="row justify-content-center">
                <div class="col-md-10 text-center mb-5">
                    <h2 class="heading-section">¡Bienvenido!</h2>
                    <img class="img-fluid w-50" src="img/Biblioteuca-removebg-preview.png" alt="">
                </div>
            </div>
            <div class="col-md-8 col-lg-6 mb-5">
                <div class="login-wrap p-0">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="signin-form" method="POST">
                        <div class="form-group">
                            <input type="text" name="usuario" class="form-control border" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control border" placeholder="Contraseña">
                         </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3 mt-5">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.9eD6_Mep8S.js"></script><script>eval(mod_pagespeed_T07FyiNNgg);</script>
<script>eval(mod_pagespeed_zB8NXha7lA);</script>
<script>eval(mod_pagespeed_xfgCyuItiV);</script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;72bfe62dd819ba77&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.6.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
<?php if($error ==1){ ?>
    Swal.fire({
  title: 'Cuidado',
  text: 'Las credenciales son incorrectas',
  icon: 'error',
  confirmButtonText: 'Entendido'
}).then(()=>{
    <?php $error = 0; ?>
})
<?php } elseif ($error == 2) { ?>
    Swal.fire({
  title: 'Cuidado',
  text: 'El usuario no existe',
  icon: 'error',
  confirmButtonText: 'Entendido'
}).then(()=>{
    <?php $error = 0; ?>
})
<?php } ?>
</script>


</body>

</html>