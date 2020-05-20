const app = new Vue({
    el:'#app',
    data:{
        pass:'',
        passC:'',
        respuesta:'',
        correo:'',
        boton:'btn disabled',
        menu:false
    },
    methods: {
        registro(){
            if (this.pass == this.passC) {
                const form = document.getElementById('formRegistro')
                axios.post('../api/loginRegistro/registro.php', new FormData(form))
                .then( res =>{
                    this.respuesta = res.data
                    this.direccionamiento()   
                })
            }else {
                swal("Las contraseñas no son iguales")
            }
        },
        direccionamiento(){
            if (this.respuesta == 'success') {
                location.href = 'index.php'
            } else {
                swal('No se pudo registrar')
            }
        },
        validarCorreo(){
           if (this.validEmail(this.correo)) {
            const formData = new FormData()
            formData.append('correo',this.correo)
            axios.post('../api/loginRegistro/validarEmail.php', formData)
                .then( res =>{
                    this.respuesta = res.data
                    if (res.data == 'success') {
                        this.boton = 'btn red lighten-2'
                    } else {
                        swal('El correo ya existe')                        
                    } 
                })
           } else {
               swal('Escribe correctamente su correo')
           }
        },
        validEmail: function (email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        },
        login (){
            const form = document.getElementById('inicioSesion')
                axios.post('../api/loginRegistro/login.php', new FormData(form))
                .then( res =>{
                    this.respuesta = res.data
                    if (res.data == 'success') {
                        location.href = '../principal'
                    } else {
                        swal('Los datos del usuario o contraseña son incorrectos')                        
                    }   
                })
        }    
    }
})