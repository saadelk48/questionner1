

<?php 
$title_page="maladie";
?>

<?php





?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">


	<title>AdminHub</title>
</head>
<body>


	<?php include("php/SIDEBAR.php");?>


	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div>
				<div class="left">
					<h1 class="display-6">Maladies</h1>
				</div>
			</div>
			<!--modal button-->
			<div class="container ms-7">
					<div class="text-end ">
						<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">
						<i class="fa-solid fa-plus"></i>
							Ajouter une maladie
						</button>
					</div>
			</div>
			<!--modal it self-->
			<div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
				<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
											<h1 class="modal-title fs-5" id="modal-title">Ajouter une nouvelle maladie</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
						 		<div class="modal-body">
			
										<div class="mb-3">
											<label for="recipient-name" class="col-form-label">Nom du maladie</label>
											<input type="text" name="name" class="form-control" id="recipient-name">
										</div>
										<div class="mb-3">
											<label for="recipient-description" class="col-form-label">Description</label>
											<input type="text" name="description" class="form-control" id="recipient-description">
											
										</div>
										<div class="mb-3">
											<label for="recipient-status" class="col-form-label">Status</label>
											<input type="text" name="status"  class="form-control" id="recipient-status">
										</div>

											<div class="modal-footer">
												<button type="button"  name="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="addmalad()">ajouter</button>
												<button type="reset" class="btn btn-secondary">reset</button>
											</div>

								</div>
							</div>
				</div>	
			</div>
		<!--	<div class="modal fade" id="modify-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
				<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
											<h1 class="modal-title fs-5" id="modal-title">modifier maladie</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
						 		<div class="modal-body">
									<form action="" method="post">
										<div class="mb-3">
											<label for="recipient-name" class="col-form-label">Nouveau nom du maladie</label>
											<input type="text" name="nv_name" class="form-control" id="recipient-name">
										</div>
										<div class="mb-3">
											<label for="recipient-description" class="col-form-label">Nouvelle description</label>
											<input type="text" name="nv_description" class="form-control" id="recipient-description">
											
										</div>
										<div class="mb-3">
											<label for="recipient-status" class="col-form-label">changer Status</label>
											<input type="text" name="nv_status"  class="form-control" id="recipient-status">
										</div>

											<div class="modal-footer">
												<button type="submit" name="submit_1" class="btn btn-primary" data-bs-dismiss="modal">modifier</button>
												<button type="reset" class="btn btn-secondary">reset</button>
											</div>

									</form>
								</div>
							</div>
				</div>	
			</div>-->

			<div class="container mt-4">
				<div class="text-center">
					<table class="table table-bordered">
							<thead>
								<tr>
								<th scope="col">ID</th>	
								<th scope="col">Nom du maladie</th>
								<th scope="col">Description</th>
								<th scope="col">Status</th>
								<th scope="col">Options</th>
								</tr>
							</thead>
							<tbody>

						
							
							</tbody>
							</table>



				</div>

			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
	<script src="tools/js/bootstarp.bundle.min.js"></script>
	<script src="tools/bootstarp.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
	

	<script>
		function addmalad(){
			var nameAdd=('#recipient-name').val;
			var descriptionAdd=('#recipient-description').val;
			var statusAdd=('#recipient-status').val;

			$.ajax({
				url:"insert.php",
				type:"post",
				data:{
					namesend:nameAdd,
					descriptionsend:descriptionAdd,
					statussend:statusAdd
				},
				success:function(data,status){
					//function to display data
					console.log(status);
				}
			});

 
		}
	</script>						

</body>
</html>