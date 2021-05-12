<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NAFTC University</title>
  </head>
  <body class="text-center">
    <div>
      @include('includes.header')
    </div>
    <div class="w-25 mx-auto my-5">
      <div class="login-form">
      <form action="/examples/actions/confirmation.php" method="post" data-bitwarden-watching="1">
          <h2 class="text-center">Log in</h2>
          <div class="form-group">
              <input type="text" class="form-control" placeholder="Username" required="required">
          </div>
          <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" required="required">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Log in</button>
          </div>
          <div class="clearfix">
              <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
              <a href="#" class="float-right">Forgot Password?</a>
          </div>
      </form>
        <p class="text-center"><a href="#">Create an Account</a></p>
      </div>
    </div>
    <div style="background-color: white">
      @include('includes.footer')
    </div>
  </body>
</html>