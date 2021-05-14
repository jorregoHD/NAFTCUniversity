<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body style="background-color: #eeeeee">
      <div>
        @include('includes.header')
      </div>
      <div class="container h-100 py-3">
        <div class="row justify-content-between">
          <div class="col-md-6">
            <h1>Item Name</h1>
          </div>
          <div class="col-md-3">
            <div id="hide-on-mobile" class="btn btn-primary button btn-block" onclick="goBack()">Go Back</div>

              <script>
              function goBack() {
                window.history.back();
              }
              </script>
          </div>
        </div>

        <p>Item Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Date Created: [Date]</p>
        <iframe src="{{ asset('tmp/MediaOverview.pdf')}}" style="width: 100%; height: 100vh;"></iframe>
      </div>
      <div style="background-color: white">
        @include('includes.footer')
      </div>
  </body>

</html>
