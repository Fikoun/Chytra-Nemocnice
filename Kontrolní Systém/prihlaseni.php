<?php include 'php/header.php'; ?>

<link rel="stylesheet" href="./assets/css/login-page.css">


<title>Příhlášení</title>
</head>

<body>

<div class="container">		
		
	<div class="container">
	<div class="row">
	  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	    <div class="card card-signin my-5">
	      <div class="card-body">
	        <h5 class="card-title text-center">Přihlaste se</h5>
	        <form class="form-signin" action="./php/login.php" method="POST">
	          <div class="form-label-group">
	            <input type="user" id="inputUser" class="form-control" placeholder="user" required autofocus>
	            <label for="inputUser">Přihlašovací jméno</label>
	          </div>

	          <div class="form-label-group">
	            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	            <label for="inputPassword">Heslo</label>
	          </div>

	          <div class="custom-control custom-checkbox mb-3">
	            <input type="checkbox" class="custom-control-input" id="customCheck1">
	            <label class="custom-control-label" for="customCheck1">Pamatovat si heslo </label>
	          </div>
	          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Přihlásit</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	</div>

</div>

<?php include 'php/footer.php'; ?>