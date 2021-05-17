<main>
    <link rel="stylesheet" href="..\public\css\login.css"> <!-- Styling for SIGNUP page from CSS file -->
    @include('includes.header')
    <div class="bg-cover">
        <div class="h-100 container center-me" class="zoomIn">
            <!-- Placing the Form Container in the Center -->
            <div class="my-auto">
                <!-- Signup Form Elements -->
                <div class="login-form">
                    <form action="includes/login-helper.php" method="post">
                   <div class="text-center" p>
                    <img alt="NAFTC Logo"  src="http://naftc.wvu.edu/wp-content/uploads/2017/05/naftcLogo2.png" style="padding-top: 35px;">
                    <h2>Please Sign In</h2>
                        <p style="color:midnightblue;">We Missed you. WELOCME BACK!!</p>
                        
                
                        <div class="form-group">
                            <!-- Input for User Name -->
                            <label for="inputEmail" class="sr-only">Username</label>
                            <input type="text" class="form-control" name="uname" placeholder="e.g. gordon.gee" required="required">
                        </div>
                        <div class="form-group">
                            <!-- Input for Password -->
                            <input type="password" class="form-control" name="pwd" placeholder="e.g. LetsGoMountaineers123" required="required">
                        </div>
                        <div class="form-group">
                            <!-- Register/Submit Button -->
                            <button type="submit" class="btn btn-outline-success btn-md btn-circle" name="signup-submit">Log In</button>
                        </div>
                        <div class="text-center">Not a member? <a href="..views\layouts\signup.blade.php">Create an Account</a></div>
                        <div class="text-center">Follow us on
                            <hr class="my-2">
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <!-- Allows to connect to Social MEDIA -->
                            <a href="https://www.facebook.com/NAFTCWVU/" class="fa fa-facebook" type="submit"></a>
                            <a href="https://twitter.com/naftcwvu?lang=en" class="fa fa-twitter" type="submit"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

