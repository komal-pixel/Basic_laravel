@include('layouts/header');
@include('layouts/sidebar');

<div class="content-wrapper">
	<div class="container">
			<div class="card">
				<div class="card-body">
					<div class="text-center mb-2">
						<h3>Add Member Form</h3>
					</div>
						<form method="post" action="save">
							@csrf
						<div class="row">
							<div class="col-md-5">
								<label>Your Name</label>
								<input class="form-control" type="name" name="name" placeholder="Enter Your Name">
							</div>
							<div class="col-md-5">
								<label>Your Email</label>
								<input class="form-control" type="email" name="email" placeholder="Enter Your Email">
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<label>Your Mobile No.</label>
								<input class="form-control" type="name" name="mobile_no" placeholder="Enter Your Mobile No">
							</div>
							<div class="col-md-5">
								<label>Your Addres</label>
								<input class="form-control" type="name" name="address" placeholder="Enter Your Address">
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
		<div class="container">
			<table class="table table-reponsive table-striped table-hover">
				<tr>
					<th>Sr. No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile No</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
				<?php $i=1; ?>
				@foreach($members as $member)	
				<tr>
					<td>{{$i}}</td>
					<td>{{$member['name']}}</td>
					<td>{{$member['email']}}</td>
					<td>{{$member['mobile_no']}}</td>
					<td>{{$member['address']}}</td>
					<td><a href="edit/{{$member['id']}}"><i class="fas fa-edit"></i></a>
						<a href="delete/{{$member['id']}}"><i class="fas fa-trash"></i></a>
				   </td>
				</tr>
				<?php  $i++;?>
				@endforeach
				<div class="float-right mt-5">
					{{$members->links()}}
				</div>
			</table>
				<div class="float-right mt-5">
					{{$members->links()}}
				</div>
		</div>
		
</div>
@include('layouts/footer');
