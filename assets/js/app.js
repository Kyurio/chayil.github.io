var app = new Vue({

    el: '#app',
    data: {

        //about
        about: {},

        //blog
        posts: {},
        postshome: {},

        //clinetes
        clientes: {},

        //comentarios
        comments: {},

        titulo_about: null,
        detalle_about: null,

        //mensajes
        nombre: null,
        nombre_error: null,
        correo: null,
        correo_error: null,
        fono: null,
        fono_error: null,
        asunto: null,
        asunto_error: null,
        mensaje: null,
        mensaje_error: null,

    },

    mounted: function () {

        this.ListadoPost();
        this.ListadoAbout();
        this.ListadoComments();
        this.ListadoPostHome();

    },

    computed: {


    },

    methods: {

        ListadoPostHome () {
            axios.get('/chayil/config/control/ListadoPostHomeController.php', {}).then(function (response) {
                app.postshome = response.data;
            });
        },

        ListadoPost () {
            axios.get('/chayil/config/control/ListPostController.php', {}).then(function (response) {
                app.posts = response.data;
            });
        },

        ListadoAbout() {
            axios.get('/chayil/config/control/ListadoAboutController.php', {}).then(function (response) {

                var data;
                data = response.data

                data.forEach(function (elemento) {
                    app.titulo_about = elemento.titulo;
                    app.detalle_about = elemento.detalle;
                });

            });
        },

        ListadoComments() {
            axios.get('/chayil/config/control/ListadoCommentsController.php', {}).then(function (response) {
                app.comments = response.data;
            });
        },

        ListadoMensajes() {

            axios.get('/chayil/config/control/LisMensajesController.php', {}).then(function (response) {
                app.posts = response.data;
            });

        },

        PostSeleccionado(titulo, detalle, imagen, etiquetas, fecha) {

        },

        Mail() {

            alert("awdadaw");

            axios({
              method: 'POST',
              url: '/chayil/config/control/Mail.php',
              data: {

                str_nombre: app.nombre,
                str_correo: app.correo,
                str_fono: '',
                str_asunto: app.asunto,
                str_mensaje: app.mensaje,

              }

            }).then(function (response) {
              // handle success
              console.log(response.data);

              if(response.data == true){
                swal("¡Mensaje Enviado!" ,"¡tu mensaje fue recibido con exito!" ,"success");
              }else{
                swal("Error al enviar mensaje" ,"¡no pudimos recibir tu mensaje!" ,"warning");
              }

            }).catch(function (response) {

              console.log(response);

            });


        },

        cheackformMail(e) {

            e.preventDefault();

            if(!this.nombre){
                this.nombre_error = 'El nombre es requerdio';
            }else{
                this.nombre_error = null;
            }

            if(!this.correo){
                this.correo_error = 'El correo es requerdio';
            }else if(!this.validEmail(this.correo)){
                this.correo_error = 'El correo no es valido';
            }else {
                this.correo_error = null;
            }

            // if(!this.fono){
            //     this.fono_error = 'El telefono es requerido';
            // }else{
            //     this.fono_error = null;
            // }

            if(!this.asunto){
                this.asunto_error = 'El asunto es requerdio';
            }else{
                this.asunto_error = null;
            }

            if(!this.mensaje){
                this.mensaje_error = 'El mensaje es requerdio';
            }else{
                this.mensaje_error = null;
            }

            if(!this.nombre_error && !this.correo_error  && !this.asunto_error && !this.mensaje_error){

                this.Mail();

            }
        },

        validEmail: function (email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        },


        //end app
    }

})
