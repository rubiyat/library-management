@if(Session::get('message'))
<h3 class="text-center alert alert-success">{{ Session::get('message') }}</h3>
@endif
@if(Session::get('type'))
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	swal({
	  title: "Good job!",
	  text: "New Item added successfully!",
	  icon: "success",
	});
</script>
@endif