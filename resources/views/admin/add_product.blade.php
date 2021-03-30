@include('layouts/header');
@include('layouts/sidebar');

<div class="content-wrapper">
	<h2>This is Add Product Page</h2>
	<form method="post" action="upload" enctype="multipart/form-data">
		@csrf
		<input type="file" name="file">
		<input type="submit" name="upload"/>
	</form>
</div>
@include('layouts/footer');
