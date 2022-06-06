<section>
	<div class="news">
		<div class="container col-xl-10 col-xxl-8 px-4 py-5">
			<div class="mt-5 mb-5">
				<h2 class="fw-bold" data-aos="fade-right" ata-aos-duration="1000">
					Noticias
				</h2>
				<div class="row mb-2" data-aos="fade-left" ata-aos-duration="1000">
					<div class="col-md-6" v-for="item in postshome">

						<a href="<?= RUTA_URL?>post">
							<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
								<div class="col p-4 d-flex flex-column position-static">
									<strong class="d-inline-block mb-2 text-primary">{{ item.etiquetas}}</strong>
									<h3 class="mb-0">{{ item.titulo }}</h3>
									<div class="mb-1 text-muted">{{ item.fecha }}</div>
									<p class="card-text mb-auto">{{ item.detalle }}</p>
									<a href="<?= RUTA_URL?>post" class="stretched-link">Continue reading</a>
								</div>
								<div class="col-auto d-none d-lg-block">
									<svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
								</div>
							</div>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
