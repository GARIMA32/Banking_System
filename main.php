<!--

/*include 'dbconnection.php';
session_start();
if(!$_SESSION['email'])
{
	$_SESSION['login_first']="Please Login First!";
	header('Location:index.php');
}*/
-->

<!DOCTYPE html>
<html>
	<head>
		<title>Responsive Menu</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- include font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<script>
	jQuery(document).ready(function($){
		$('#toggler').click(function(event){
			{
			event.preventDefault();
			$('#wrap').toggleClass('toggled');
			}
		});
	});
</script>

	</head>
	<body>
		
		<div class="d-flex" id="wrap">
			<div class="sidebar bg-light border-light">
				<div class="sidebar-heading">
					<p class="text-center">Online Banking System</p>
				</div>
				<ul class="list-group list-group-flush">
					<a href="main.php" class="list-group-item list-group-item-action">
						<i class="fa fa-vcard-o"></i>Dashboard</a>
						<a href="dbconnection.php" class="list-group-item list-group-item-action">
						<i class="fa fa-user"></i>Add Customers</a>
						<a href="list_customers.php" class="list-group-item list-group-item-action">
						<i class="fa fa-user"></i>All Customers List</a>
						<a href="transection.php" class="list-group-item list-group-item-action">
						<i class="fa fa-money"></i>Transection Section</a>
						
					
						<a href="index.php" class="list-group-item list-group-item-action">
						<i class="fa fa-sign-out"></i>LogOut</a>
				</ul>
			</div>

			<div class="main-body">
				<button class="btn btn-outline-light bg-success mt-3 " id="toggler">
					<i class="fa fa-bars"></i>
				</button>

				

					</div>
				</section>
			</div>

		</div>
	</body>
</html>