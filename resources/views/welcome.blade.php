
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NAFTC University</title>
  </head>
  <body style="background-color: #eeeeee">
      <div>
        @include('includes.header')
      </div>
      <div class="banner">
        <div class="banner-content">
          <h1 class="banner-text">OPEN <br/>  EDUCATION <br/> RESOURCES</h1>
        </div>
      </div>
      <div class="container pt-1 my-5 h-100" style="background-color: #dedede">
        <form>
          <div class="form-group">
            <label for="searchInput"><h1>Search NAFTC Library</h1></label>
            <input type="text" class="form-control" id="searchInput" aria-describedby="searchinput" placeholder="Search by keyword">
          </div>
        </form>
        <div class="">
          Search by:
        </div>
      </div>
      <div style="background-color: white">
        @include('includes.footer')
      </div>
  </body>
</html>
