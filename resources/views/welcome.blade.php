
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
          <div class="btn">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Resource Format
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Textbooks</a>
                <a class="dropdown-item" href="#">Videos</a>
                <a class="dropdown-item" href="#">Pamplets</a>
              </div>
            </div>
          </div>
          <div class="btn">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Topic
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">EV Recycling</a>
                <a class="dropdown-item" href="#">AFV First Responder</a>
                <a class="dropdown-item" href="#">Propane</a>
              </div>
            </div>
          </div>
          <div class="btn">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Release Date
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Newest</a>
                <a class="dropdown-item" href="#">Oldest</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="background-color: white">
        @include('includes.footer')
      </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</html>
