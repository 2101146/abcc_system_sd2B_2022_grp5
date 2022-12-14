<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="./css/login.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
  </head>
  <body>
  	<form name="login_form" action="login_check.php" method="post">
    		<div class="form-wrapper">
  				<h1>GOHAN</h1>
   	 		</div>
    		<div class="form-item">
  				<input type='email' name='email' placeholder="ユーザーID">
    		</div>
    		<div class="form-item">
  				<input type='password' name='password' placeholder="パスワード">
    		</div>
  			<div class="button-panel">
      			<button class="btn btn-secondary" type="submit">ログイン</button>
 		 	</div>
  		<a class="text-dark" href=signup.php>会員登録がまだの方はこちら</a>
	</form>
  </body>
</html>

