@include('layouts/header');
@include('layouts/sidebar');
<div class="content-wrapper">
	<div class="container">
			<div class="card">
				<div class="card-body">
					<div class="text-center mb-2">
						<h3>Update Member Form</h3>
					</div>
						<form method="POST" action="/update">
							@csrf
							<input type="hidden" name="id" value="{{$edit_member['id']}}">
						<div class="row">
							<div class="col-md-5">
								<label>Your Name</label>
								<input class="form-control" type="name" name="name" value="{{$edit_member['name']}}" placeholder="Enter Your Name">
							</div>
							<div class="col-md-5">
								<label>Your Email</label>
								<input class="form-control" type="email" name="email" value="{{$edit_member['email']}}" placeholder="Enter Your Email">
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<label>Your Mobile No.</label>
								<input class="form-control" type="name" name="mobile_no" value="{{$edit_member['mobile_no']}}" placeholder="Enter Your Mobile No">
							</div>
							<div class="col-md-5">
								<label>Your Addres</label>
								<input class="form-control" type="name" name="address" value="{{$edit_member['address']}}" placeholder="Enter Your Address">
						</div>
						<div class="text-center p-4">
							<a href="admin" class=" btn btn-danger" name="submit">cancel</a>
							<button type="submit" class="btn btn-success" name="submit">Submit</button>
							<button type="reset" class="btn btn-warning" name="reset">Reset</button>
						</div>						
						</form>
					</div>
		</div>		
	</div>
</div>
	
</div>
@include('layouts/footer');
