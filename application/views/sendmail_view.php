<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guimail</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				
			</div>
			<div class="col-sm-6">
			<form action="Sendmail/do_send" method="post" >
				<h1 class="display-4">Nhập mail</h1>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input name="ten" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Tên người gửi </label>
		    <input name="nguoigui" type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên người gửi">
		  </div>
				   <div class="form-group">
		    <label for="exampleFormControlTextarea1">Nội dung</label>
		    <textarea name="noidung"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
		</div>
	</div>
</body>
</html>