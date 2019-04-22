<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Kominfo</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<style type="text/css">
	body{
		background: url('https://image.freepik.com/free-vector/ethnic-floral-seamless-pattern_1159-3574.jpg') no-repeat center fixed;
		background-size: cover;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
	}

	.login-form-container {
    max-width: 400px;
    width: 100%;
    z-index: 1;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -200px;
    margin-top: -180px;
    background: white;
    border-radius: 8px;
    box-shadow: 7px 7px 10px 10px #24395b;
	}

	.login-form-header{
		text-align: center;
	}

	.login-form .input-container {
	border-bottom: 1px solid #CCCCCC;
    margin-top: 15px;
    font-size: 20px;
    color: #9e9e9e;
	padding-bottom: 5px;
	}

	.login-form button {
		margin-top: 15px;
	    width: 100%;
	    background: #2e7ec7;
	    color: #FFFFFF;
	    padding: 10px;
	    font-size: 15px;
		cursor: pointer;
	}

	.login-form .button:hover {
		background: #1f6eb7;
	}

	.input-container input{
		border: none;
	}

	form .input-container{
		margin-left: 20px;
		margin-right: 20px;
	}

</style>

</head>
<body>
<?php if ($this->session->flashdata('error')): ?>
	<div class="alert alert-danger">
		<?php echo $this->session->flashdata('error') ?>
	</div>
<?php endif ?>
<div class="login-form-container">
	<div class="login-form-content">
		<div class="login-form-header">
			<div class="logo">
				<img src="http://pixsector.com/cache/94bed8d5/av3cbfdc7ee86dab9a41d.png" style="height:100px; width=100px; ">
			</div>
			<h3>Login Admin Kominfo</h3>
		</div>
		<form action="<?php echo base_url() ?>index.php/C_Login/proses" method="post" class="login-form">
			<div class="input-container">
				<i class="fa fa-user"></i>
				<input type="text" class="input" name="username" placeholder="Username" style="width:92%;">
			</div>
			<div class="input-container">
				<i class="fa fa-lock"></i>
				<input type="password" class="input" name="password" placeholder="Password" style="width:92%;">
			</div>
			<button type="submit" class="btn btn-primary col-sm-11"><strong>Login</strong></button>
		</form>
	</div>
</div>

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>