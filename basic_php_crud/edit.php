<?php 
session_start();
require 'connect.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD Basic</title>
	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

</head>
<body>

	<?php 

	if(isset($_GET['postId'])){

		$upid = $_GET['postId'];
		
		$sql = mysqli_query($db,"SELECT * FROM posts WHERE id =$upid");

		if(mysqli_num_rows($sql) == 1)
		{
			foreach ($sql as $row) {

				$postTitle = $row['title'];
				$postDescription= $row['description'];
				$id             = $row['id'];
			}
		}

	}

	//Update

	$titleerror='';
	$descerror ='';

	if(isset($_POST['update_btn']))
	{
		// echo "Yes fcvgbhjnkm";
		$id    = $_POST['post_id'];
		$title = $_POST['title'];
		$desc  = $_POST['description'];


		// echo $title;

		if (empty($title)){
			$titleerror = "The title field is required";
		}
		if (empty($desc)){
			$descerror = "The description field is required";
		}

		if(!empty($title) && !empty($desc)){

			$sql = "UPDATE posts SET title='$title', description='$desc' WHERE id = $id";
		$_SESSION['success'] = 'A Book Updated Successfully';

		mysqli_query($db,$sql);

		 header('location:index.php');


		}

		


	}

	 ?>

<div class="container">

	<div class="row">

		<div class="col-md-12">

			

			<div class="card my-5">

				<div class="card-header">
					<div class="row">

						<div class="col-md-6">
							<div class="card-title text-primary" style="font-size: 35px;">
						       Update Your Book
					        </div>
						</div>
						<div class="col-md-6">
							
								<a href="index.php">
								<button class="btn btn-primary float-right">
									<i class="fas fa-backspace"></i>
									Back
							    </button>
							    </a>
							
						</div>
						
					</div>
				</div>

				<div class="card-body">

					<form method="POST" action="edit.php">

						<input type="hidden" name="post_id" value="<?= $id  ?>">
						
						<div class="form-group">
							<label class="text-secondary">Title</label>
						<input type="text"  name="title" value="<?= $postTitle ?>" class="form-control <?php if($titleerror !=''): ?> is-invalid <?php endif ?>" placeholder="Enter post title">


						<span class="text-danger"></span>
						</div>
						<div class="form-group">

							<label class="text-secondary">Description</label>
						<textarea class="form-control <?php if($descerror !=''): ?> is-invalid <?php endif ?>" name="description" placeholder="something.....">
							<?= $postDescription ?>
						</textarea>
							<span class="text-danger"></span>
						</div>

						<div class="card-footer">

					<button class="btn btn-info" name="update_btn" type="submit">
						<i class="fas fa-sync"></i>
					Update</button>
					
				</div>

					</form>

				</div>
				
				
			</div>
			
		</div>
		
	</div>
	
</div>




















<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>