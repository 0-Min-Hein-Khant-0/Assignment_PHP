
<?php 
session_start();
require 'connect.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>LIBRARY</title>
	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

<style type="text/css">
	.lab,.love
	{
		color: green;
	}
	.lab:hover
	{
		color: blue;
	}
	.love:hover
	{
		color: red;
	}
</style>

</head>
<body>
<h1 class="text-center text-info my-5 display-3">Library Office </h1>

<hr>
<div class="container">

	<div class="row">

		<div class="col-md-12">

			

			<div class="card my-5">

				<div class="card-header">

					<div class="row">

						<div class="col-md-6">
							<div class="card-title text-primary" style="font-size: 35px;">
						       Books
					        </div>
						</div>
						<div class="col-md-6">
							
								<a href="create.php">
								<button class="btn btn-primary float-right my-3">
									<i class="fas fa-upload"></i>
								Upload Book
							    </button>
							    </a>
							
						</div>
						
					</div>
					
				</div>

				<div class="card-body">
					<?php if(isset($_SESSION['success'])): ?>
					<div class="alert alert-success alert-dismissible fade show text-center">

						<?php echo $_SESSION['success']; unset($_SESSION['success']);?>

						<button class="close" data-dismiss="alert">&times;</button>
					</div>
					<?php endif ?>
					<table class="table my-5 table-bordered text-center">
				<tbody>

					<?php 

					$sql = "SELECT * FROM posts";
					$result = mysqli_query($db,$sql);

					foreach($result as $row) {

					?>



<tr>
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">






        <button class="btn btn-link btn-block text-left collapsed" style="text-decoration: none;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <b><?= $row['id'].'.' ?></b>&nbsp;&nbsp;&nbsp;<?php echo $row['title'] ?>
        </button>

       

      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <?php echo $row['description'] ?>

      </div>
      <div class="card-footer">
      	<a href="edit.php?postId=<?= $row['id'] ?>">
								<button class="btn btn-outline-warning">
								<i class="far fa-edit"></i></i>EDIT
							</button>
		</a>	
		<i class="far fa-thumbs-up fa-2x lab" style="margin-left: 400px;"></i>
		&nbsp;&nbsp;&nbsp;
		<i class="far fa-heart fa-2x love"></i>
		
		<a onclick="return confirm('Are You sure You Want to delete?')" href="index.php?postId=<?= $row['id'] ?>">
								<button class="btn btn-outline-danger float-right my-1">
								<i class="fas fa-trash-alt"></i>DELETE
							</button>
		</a>
      </div>
    </div>
  </div>
</div>
</tr>
				<?php } ?>
					
				</tbody>
			</table>
			<div class="card">

					<p class="text-center text-primary" style="font-size: 40px;">

						Developed By MIN HEIN KHANT
						
					</p>
						
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>















<?php 

if(isset($_GET['postId']))
{

	$id = $_GET['postId'];

	mysqli_query($db,"DELETE FROM posts WHERE id=$id");
	$_SESSION['success'] = 'A Book Deleted Successfully';
	// echo $id;
	// echo "Yes I am Hre";
	header('location:index.php');
}

 ?>




<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>