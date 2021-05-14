<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <form action="search" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="searchInput"><h1>Search NAFTC Library</h1></label>
        <input type="text" class="form-control" id="searchInput" aria-describedby="searchinput" placeholder="Search by keyword">
      </div>
    </form>
    <div class="">
      Search by:
      <div class="row">
        <div class="btn col-sm-4">
          <div class="dropdown">
            <button class="btn btn-primary button btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Resource Format
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="search">Textbooks</a>
              <a class="dropdown-item" href="search">Videos</a>
              <a class="dropdown-item" href="search">Pamplets</a>
            </div>
          </div>
        </div>
        <div class="btn col-sm-4">
          <div class="dropdown">
            <button class="btn btn-primary button btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Topic
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="search">EV Recycling</a>
              <a class="dropdown-item" href="search">AFV First Responder</a>
              <a class="dropdown-item" href="search">Propane</a>
            </div>
          </div>
        </div>
        <div class="btn col-sm-4">
          <div class="dropdown">
            <button class="btn btn-primary button btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Release Date
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="search">Newest</a>
              <a class="dropdown-item" href="search">Oldest</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
