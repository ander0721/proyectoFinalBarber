@extends('cliente.index2')


@section('contenido')
<div class="container">
					<ul class="breadcrumb breadcrumb-style-02 py-7">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item">Full Map Listing - List View</li>
					</ul>
					<div class="page-container row">
						<div class="sidebar col-lg-4 order-1 order-lg-0 mb-8 mb-lg-0">
							<div class="card search bg-white mb-6 border-0 rounded-0 px-6">
								<div class="card-header bg-transparent border-0 pt-4 pb-0 px-0">
									<h5 class="card-title mb-0">Search</h5>
								</div>
								<div class="card-body px-0 pb-42">
									<div class="form-search form-search-style-03">
										<div class="form-group">
											<div class="input-group d-flex align-items-center">
												<label for="what" class="input-group-prepend text-dark
													font-weight-semibold">What</label>
												<input type="text" autocomplete="off" class="form-control
													bg-transparent" id="what" placeholder="Any keywords...">
											</div>
										</div>
										
										<button type="submit" class="btn btn-primary btn-block btn-icon-left">
											<i class="fal fa-search"></i>
											Search
										</button>
									</div>
								</div>
							</div>
							<div class="card widget-filter bg-white mb-6 border-0 rounded-0 px-6">
								<div class="card-header bg-transparent border-0 pt-4 pb-0 px-0">
									<h5 class="card-title mb-0">más</h5>
								</div>
								<div class="card-body px-0">
								<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="cabello"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>

											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="barba"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>

											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="cepillado"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>
											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="manicure"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>
											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="manicure"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>
											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="manicure"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>
											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="manicure"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>
								</div>
							</div>
							<div class="card widget-filter bg-white mb-6 border-0 rounded-0 px-6">
								<div class="card-header bg-transparent border-0 pt-4 pb-0 px-0">
									<h5 class="card-title mb-0">marcas</h5>
								</div>
								<div class="card-body px-0">
								<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="marcel france"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>

											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="ego"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>

											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="american crew"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>
											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="hair wax"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>
											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="pacinos"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>
											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="proraso"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">
												</div>
											</div>
											
								</div>
							</div>
						</div>
						<div class="page-content col-12 col-lg-8 order-0 order-lg-1">
							<div class="explore-filter d-lg-flex align-items-center d-block">
								<div class="text-dark font-weight-semibold font-size-md mb-4 mb-lg-0">56
									Results found</div>
								<div class="form-filter d-flex align-items-center ml-auto">
									<div class="form-group row no-gutters align-items-center">
										<label for="sort-by" class="col-sm-3 text-dark font-size-md
											font-weight-semibold mb-0">Sort
											by</label>
										<div class="select-custom col-sm-9">
											<select id="sort-by" class="form-control">
												<option value="0">Latest</option>
												<option value="1">New York</option>
												<option value="1">LA</option>
											</select>
										</div>
									</div>
									<div class="format-listing ml-auto">
										<a href="explore-full-map-grid.html"><i class="fas fa-th"></i></a>
										<a href="#" class="active"><i class="fal fa-bars"></i></a>
									</div>
								</div>
							</div>
							@foreach($barberia as $barberia)

							<div class="store-listing-style store-listing-style-01">
								<div class="mb-6">
									<div class="store media align-items-stretch bg-white">
										
										<div class="media-body pt-4 pb-3 px-5">
											<a href="listing-details-full-image.html" class="h5 text-dark
												d-inline-block mb-2"><span class="letter-spacing-25">{{ $barberia->nombreB }}</span></a>
											<ul class="list-inline store-meta mb-4 font-size-sm d-flex
												align-items-center flex-wrap">
												
												<li class="list-inline-item separate"></li>
												
												<li class="list-inline-item separate"></li>
											</ul>
											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="direccion"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">{{ $barberia->direccion }}
												</div>
											</div>
											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="telefono"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">{{ $barberia->telefono }}
												</div>
											</div>
											<div class="media">
												<a href="#" class="d-inline-block mr-3"><img
														src="{{asset('images/listing/testimonial-1.png')}}" alt="horario"
														class="rounded-circle">
												</a>
												<div class="media-body lh-14 font-size-sm">{{  $barberia->horario }}
												</div>
											</div>
											
											<div class="border-top pt-3 mt-5 lh-12">
												<span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
													</i>
												</span>
												<a href="#" class="text-secondary text-decoration-none address">{{ $barberia->direccion }}</a>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							@endforeach

							<ul class="pagination pagination-style-02 justify-content-center pb-13">
								<li class="page-item"><a href="#" class="page-link"><i class="fal
											fa-chevron-left"></i></a>
								</li>
								<li class="page-item"><a href="#" class="page-link current bg-white">1</a></li>
				

					</div>
				</div>
				<div class="footer-last mt-12">
					<div class="container">
						<div class="row align-items-center footer-last-container">
							<div class="col-lg-8 mb-3 mb-lg-0">
								<div>
									&copy; 2020 <a href="home-shopping.html" class="link-hover-dark-primary
										font-weight-semibold">The
										Dir.</a> All Rights Resevered. Design by <a href="http://g5plus.net/"
										class="link-hover-dark-primary font-weight-semibold">G5Theme</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="social-icon light-color d-flex align-items-center
									flex-wrap">
									<span class="d-inline-block mr-4">Follow us on:</span>
									<ul class="list-inline">
										<li class="list-inline-item mr-5">
											<a target="_blank" title="Twitter" href="#">
												<i class="fab fa-twitter">
												</i>
												<span>Twitter</span>
											</a>
										</li>
										<li class="list-inline-item mr-5">
											<a target="_blank" title="Facebook" href="#">
												<i class="fab fa-facebook-f">
												</i>
												<span>Facebook</span>
											</a>
										</li>
										<li class="list-inline-item mr-5">
											<a target="_blank" title="Google plus" href="#">
												<svg class="icon icon-google-plus-symbol">
													<use xlink:href="#icon-google-plus-symbol"></use>
												</svg>
												<span>Google plus</span>
											</a>
										</li>
										<li class="list-inline-item mr-5">
											<a target="_blank" title="Instagram" href="#">
												<svg class="icon icon-instagram">
													<use xlink:href="#icon-instagram"></use>
												</svg>
												<span>Instagram</span>
											</a>
										</li>
										<li class="list-inline-item mr-5">
											<a target="_blank" title="Rss" href="#">
												<i class="fas fa-rss"></i>
												<span>Rss</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="back-top text-left text-md-right gtf-back-to-top">
						<a href="#" class=""><i class="fal fa-chevron-circle-up"></i></a>
					</div>
				</div>
                @endsection
