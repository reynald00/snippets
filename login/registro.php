<?php include '../includes/header.php'; ?>
<div class="container center">
    <div class="row" style="margin: 0, auto; width: 75%;">
        <h4 class="header">Crear una nueva cuenta</h4>
        <div class="card horizontal">
            <div class="login-img col s5 card-image">
                <img src="../images/img-login.jpg" />
            </div>
            <div class="col s5 card-stacked">
                <div class="card-content">
                    <!-- Formulario del login -->
                    <form id="formRegistro" autocomplete="off" @submit.prevent="registro" enctype="multipart/form-data">
                        <div class="row">
                          <div class="input-field col s12">
                                <input id="user" type="text" name="user" class="validate" />
                                <label for="user">Usuario</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="nombre" type="text" name="nombre" class="validate" />
                                <label for="nombre">Nombre</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="apellido" type="text" name="apellido" class="validate" />
                                <label for="apellido">Apellido</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" v-model="correo" name="email"  @blur="validarCorreo"/>
                                <label for="email">Correo</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input id="password" v-model="pass" type="password" name="pass" class="validate" />
                                <label for="password">Contraseña</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="password2" v-model="passC" type="password"  class="validate" />
                                <label for="password2">Confirmar Contraseña</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Imagen del perfil</span>
                                <input type="file" name="foto"/>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" />
                            </div>
                        </div>

                        

                        <input type="submit" value="Registrarse" :class="boton" >
                        <br />
                    </form>
                </div>
                <div class="card-action ringt">
                    <a href="index.php">Iniciar sesión</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footerLogin.php'; ?>
