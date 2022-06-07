<section>
    <div class="container">

        <div class="row align-items-center g-lg-5 mb-5">


            <div class="col-lg-6 text-center text-lg-start" data-aos="fade-right">
                <h1 class="display-4 fw-bold lh-1 mb-3">Contactanos</h1>
                <p class="col-lg-10 fs-4">Si necesitas asesoría o tienes algún proyecto en particular que necesites trabajar, no dudes en escribirnos.</p>
            </div>

            <!-- form -->
            <div class="col-md-10 mx-auto col-lg-6" data-aos="fade-left">
                <form class="p-4 p-md-5 border rounded-3 bg-light" @submit="cheackformMail" method="post" novalidate="true">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" v-model="nombre">
                            <label for="nombre">Nombre</label>
                        </div>
                        <span class="text-danger">{{ nombre_error }}</span>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="correo" placeholder="name@example.com" v-model="correo">
                            <label for="correo">Correo</label>
                        </div>
                        <span class="text-danger">{{ correo_error }}</span>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="asunto" placeholder="text" v-model="asunto">
                            <label for="asunto">Asunto</label>
                        </div>
                        <span class="text-danger">{{ asunto_error }}</span>
                    </div>
                    <div class="form-floating mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="escribe tu duda" id="mensaje" v-model="mensaje"></textarea>
                            <label for="mensaje">Mensaje</label>
                        </div>
                        <span class="text-danger">{{ mensaje_error }}</span>
                    </div>
                    <button class="btn btn-outline-dark" type="submit">Enviar</button>
                </form>
            </div>
            <!-- end form -->


        </div>
    </div>
</section>
