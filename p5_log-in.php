
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/nav-bar.css" />



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<script>
			$(function(){
				$('#grocery-navbar').load('common/nav-bar.html');
				$('#grocery-footer').load('common/footer.html');
			});
		</script>

    <title>Fresh Market - Login</title>
</head>
<body>
  <!--Header-->
  <div id="grocery-navbar"></div>
<main class="login-form bg-secondary text-white">
    <div class="container">
        <div class="row">
            <div class="col">
                  <h2 class="ml-5 mt-5 text-center"> Login </h3> 
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-2 col-form-label text-md-right">E-Mail</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-2 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-2">
                                  <a href="#" class="btn btn-link text-dark">
                                      I forgot my password
                                    </a>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-2 mb-4">
                                <input type="submit" class="btn btn-dark bt" name="submit" value="Sign in">
                          </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>
</main>
<div id="grocery-footer"></div>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
