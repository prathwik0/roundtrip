<!DOCTYPE html>
<html>
  <head>
    <title>Entry form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
    <body>
	    <div class="container">
			<div class="row col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading text-center">
						<h1>Entry Form</h1>
					</div>
					<div class="panel-body">
					
						<form action="link.php" method="post">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name here" autofocus>
						</div>
						<div class="form-group">
							<label for="area">Area</label>
							<input type="text" name="area" id="area" class="form-control" placeholder="Enter the area here">
						</div>
						<div class="form-group">
							<label for="num">Number</label>
							<input type="number" name="number" id="num" class="form-control">
						</div>
						<div class="form-group">
							<label for="mem">Members</label>
							<input type="number" name="member" id="mem" class="form-control">
						</div> 

						<div class="form-group">
							<label for="gender">Gender</label>
							<div>
								<label for="male" class="radio-inline">
								<input type="radio" name="gender" value="m" id="male"/>
								Male</label>
								<label for="female" class="radio-inline">
								<input type="radio" name="gender" value="f" id="female"/>
								Female</label>
								<label for="both" class="radio-inline">
								<input type="radio" name="gender" value="b" id="both"/>
								Both</label>
							</div>
						</div>
						<div class="form-group">
							<label for="cat2">Category 2</label>
						     <div>
							    <label for="op2_1" class="radio-inline">							
							    <input type="radio" name="cat2" value="a" id="op2_1">
							    Option 1</label>
							    <label for="op2_2" class="radio-inline">
							    <input type="radio" name="cat2" value="b" id="op2_2"> 
							    Option 2</label>
							    <label for="op2_3" class="radio-inline">
							    <input type="radio" name="cat2" value="c" id="op2_3">
							    Option 3</label>
							</div>
						</div>
						<div class="form-group">
							<label for="cat3">Category 3</label>
						     <div>
							    <label for="op3_1" class="radio-inline">							
							    <input type="radio" name="cat3" value="a" id="op3_1">
							    Option 1</label>
							    <label for="op3_2" class="radio-inline">
							    <input type="radio" name="cat3" value="b" id="op3_2"> 
							    Option 2</label>
							    <label for="op3_3" class="radio-inline">
							    <input type="radio" name="cat3" value="c" id="op3_3">
							    Option 3</label>
							</div>
						</div>
						<input type="submit" class="btn btn-primary" />
						<button>Submit</button>
						</form>
					
					</div>
				</div>
			</div>
		</div>			
		
    </body>
</html>