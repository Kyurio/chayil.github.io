
<div id="carouselExampleControls" class="carousel slide mt-5 py-5 mx-5 mb-5" data-bs-ride="carousel" data-aos="fade-in" ata-aos-duration="1000">
	<div class="container-sm">
		<div class="carousel-inner">
			<div class="carousel-item active"  v-for="item in comments">
				<q cite="" class="mb-5">
					<p class="text-center mt-5 py-5 mx-5">{{ item.comentario }}</p>
				</q>
			</div>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>
