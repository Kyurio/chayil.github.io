<section>
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Nosotros</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Nosotros</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Servicios</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blogs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Informacion</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="<?= RUTA_URL ?>documentation" class="nav-link p-0 text-muted">Documentación</a></li>
                        <li class="nav-item mb-2"><a href="<?= RUTA_URL ?>business" class="nav-link p-0 text-muted">Empresas</a></li>
                        <li class="nav-item mb-2"><a href="<?= RUTA_URL ?>faqs" class="nav-link p-0 text-muted">FAQs</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Social</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-youtube"></i> Youtube</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Suscríbete a nuestro boletín</h5>
                        <p>Resumen mensual de lo que es nuevo y emocionante de nosotros.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Ingresa tu correo aqui</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email" v-model="mail_suscribe">
                            <button class="btn btn-outline-dark" type="button" @click="cheackformSucribe">Subscribete</button>
                        </div>
                        <small class="text-danger">{{ error_mail_suscribe }}</small>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4">
                <p>&copy;<?= DEVELOPER ?></p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
</section>
