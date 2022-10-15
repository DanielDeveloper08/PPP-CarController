<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarController</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
</head>

<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya has sido registrado?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-recuperar">
                    <h3>¿ Olvidaste tu contraseña ?</h3>
                    <p>Te ayudamos a recuperarla</p>
                    <button id="btn__recuperar">Recuperar contraseña</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-recuperar">

                <!--Login-->
                <form action="./views/inventarioViews/home.php" method="POST" class="formulario__login">
                    <img src="assets/images/logo-empresa.png" alt="logo-empresa" class="logo-empresa">
                    <h2>Iniciar Sesión</h2>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" style="font-size: 14px;"> <i class="bi bi-envelope-fill"></i> &nbsp;Ingrese su correo</label>
                        <p class="mt-2 d-none" id="pOcultoValidacion" style="color: rgb(236, 35, 35); font-size: 14.5px;">Tu correo electrónico debe ser: name@example.com</p>
                    </div>
                    <div class="form-floating position-relative">
                        <input id="campo-password-valitaion" type="password" class="form-control" placeholder="Password">
                        <label for="floatingPassword" style="font-size: 14px;"><i class="bi bi-lock-fill"></i> &nbsp;Ingrese su contraseña</label>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <button onclick="functionVisibilidadPassword()" type="button" class="configuracion-boton-icon"><i id="icono-eye" class="bi bi-eye-slash-fill"></i></button>
                        </div>
                    </div>
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="" class="formulario__recuperar">
                    <img src="assets/images/logo-empresa.png" alt="logo-empresa" class="logo-empresa">
                    <h2>Recuperar contraseña</h2>
                    <div class="form-floating mb-1">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput"  style="font-size: 14px;"> <i class="bi bi-envelope-fill"></i> &nbsp;Ingrese su correo</label>
                        <p class="mt-2 d-none" id="pOcultoValidacion" style="color: rgb(236, 35, 35); font-size: 14.5px;">Tu correo electrónico debe ser: name@example.com</p>
                    </div>
                    <button>Enviar Email</button>
                </form>
            </div>
        </div>

    </main>

    <script src="assets/js/animacion.js"></script>
</body>

</html>