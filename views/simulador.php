<?php
require_once("../templates/header.php");
?>

<section>
    <div class="container col-xxl-8 px-4 py-5 mb-10">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-8">

                <div class="mx-auto" data-aos="fade-left">

                    <form class="p-4 p-md-5 border rounded-3 bg-light">

                        <h5 class="text-dark mb-4">Factoriza tus facturas</h5>
                        <br><br>
                        <span class="text-dark">Datos De cliente</span>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="111111111-1">
                                    <label for="floatingInput">Rut Empresa</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Roberto Martinez">
                                    <label for="floatingInput">Nombre Cliente</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="phone" placeholder="+569 88273928">
                            <label for="floatingInput">Fono Contacto</label>

                        </div>

                        <div class="form-floating mb-3">
                            <input type="Email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>



                        <br><br>
                        <span class="text-dark">Datos Contacto</span>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="111111111-1">
                                    <label for="floatingInput">Rut Deudor</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Nombre Deudor</label>
                                </div>
                            </div>
                        </div>


                        <br><br>
                        <span class="text-dark">Datos Factura</span>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-floating mb-3">
                                    <input type="number" min="0" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Nro Factura</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Monto Factura</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Fecha Emision</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Fecha Vencimiento (30, 60, 90)</label>
                                </div>
                            </div>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Enviar</button>
                    </form>
                </div>

            </div>
            <div class="col-lg-4">
                <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
require_once("../templates/footer.php");
?>
