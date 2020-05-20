<?php @session_start();

    if (isset($_SESSION['user'])) {
        header("location:../principal");
    }

include '../includes/header.php'; ?>
<div class="container center">
    <div class="row" style="margin:0,auto; width:75%;">
        <h4 class="header">Iniciar Sesión</h4>
        <div class="card horizontal">
            <div class="login-img col s5 card-image">
                <img src="../images/img-login.jpg" />
            </div>
            <div class="col s5 card-stacked">
                <div class="card-content">
                    <!-- Formulario del login -->
                    <form id="inicioSesion" autocomplete="off" @submit.prevent="login">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" name="email" class="validate" />
                                <label for="email">Correo</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="pass" type="password" name="pass" class="validate" />
                                <label for="pass">Contraseña</label>
                            </div>
                        </div>

   

                        <button class="btn waves-effect waves-light" value="Entrar" type="submit">Entrar
                        <i class="material-icons right">input</i>
                        </button>

                        <br />

                    </form>
                </div>
                <div class="card-action ringt">
                    <a href="registro.php">Crear un cuenta</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footerLogin.php'; ?>
