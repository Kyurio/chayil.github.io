<section id="contacto">
    <div class="container">

        <div class="contact">
            <div class="row">

                <div class="col-sm-6">
                    <h1 class="display-4 fw-bold lh-1 mb-3" data-aos="fade-right" data-aos-duration="1500">Si necesitas asesoría o tienes algún proyecto en particular
                        que necesites trabajar, no dudes en escribirnos.</h4>
                        <p class="fs-4">contactanos</p>
                </div>

                <div class="col-sm-6" data-aos="fade-up-left"  data-aos-duration="1000">
                    <div class="card">
                        <div class="card-body">
                            <form class="p-4 p-md-5 rounded-3 bg-light" @submit="cheackformMail" method="post"
                                novalidate="true">
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre"
                                            v-model="nombre">
                                        <label for="nombre">Nombre</label>
                                    </div>
                                    <span class="text-danger">{{ nombre_error }}</span>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="correo"
                                            placeholder="name@example.com" v-model="correo">
                                        <label for="correo">Correo</label>
                                    </div>
                                    <span class="text-danger">{{ correo_error }}</span>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="asunto" placeholder="text"
                                            v-model="asunto">
                                        <label for="asunto">Asunto</label>
                                    </div>
                                    <span class="text-danger">{{ asunto_error }}</span>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="escribe tu duda" id="mensaje"
                                            v-model="mensaje"></textarea>
                                        <label for="mensaje">Mensaje</label>
                                    </div>
                                    <span class="text-danger">{{ mensaje_error }}</span>
                                </div>
                                <button class="btn btn-default" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>