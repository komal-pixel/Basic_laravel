@include('layouts.header')
<div class="container">
	<div class="text-center mt-2">
		<h3>Fom Validation</h3>
		
	</div>
	<div class="row">
			<div class="card-body">
				<form method="post" action="/submit" enctype="multipart/form-data">
					@csrf
						<div class="col-md-10">
						   <label>Name</label>
					       <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
					    @error('name')
					       <span class="text-danger">
					       	 {{$message}}
					       </span>
					    @enderror

					    </div>
						<div class="col-md-10">
							<label>Email</label>
					        <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
					        @error('email')
					          <span class="text-danger">
					          	{{$message}}
					          </span>
					        @enderror
					    </div>
					    <div class="col-md-10">
					    	<label>Upload File</label>
					       <input type="file" name="doc" class="form-control">
					       @error('doc')
					       <span class="text-danger">
					       	{{$message}}
					       </span>
					       	@enderror
					    </div>
					    <div class="text-center m-3">
					      <button class="btn btn-success" type="submit">Submit</button>
					    </div>
					</form>
			</div>
	</div>
</div>