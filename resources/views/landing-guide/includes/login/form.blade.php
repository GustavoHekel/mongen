<section id="fh5co-hero" class="js-fullheight" style="background-image: url({{ asset("dist/img/portada-3.jpg")}});" data-next="yes">
	<div class="fh5co-overlay"></div>
	<div class="container">
		<div class="fh5co-intro js-fullheight">
			<div class="fh5co-intro-text">
				<div class="fh5co-center-position">
					<h3 class="animate-box fadeInUp animated">Login</h3>
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form action="{{ url('/login') }}" method="post" class="animate-box fadeInUp animated">
								{{ csrf_field() }}
								@if (isset($errors))
									@if (count($errors) > 0)
										<div class="alert alert-danger">
									        <ul>
									            @foreach ($errors as $error)
									                <li>{{ $error }}</li>
									            @endforeach
									        </ul>
								        </div>
								    @endif
							    @endif
								<div class="form-group" style="text-align: left !important">
									<label>Email</label>
									<input type="email" class="form-control" placeholder="Ingrese su email" id="email" name="email" value="{{ old('email') }}">
								</div>
								<div class="form-group" style="text-align: left !important">
									<label>Contraseña</label>
									<input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
								</div>
								<div class="form-group">
									<label>
										<input type="checkbox" data-toggle="checkbox" value="">
										Recordarme
									</label>
								</div>
								<input type="submit" value="Enviar" class="btn btn-primary">
							</form>
							<a href="{{ route('recover') }}">Olvidé mi contraseña</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
