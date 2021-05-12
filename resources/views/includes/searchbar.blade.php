<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
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
  </body>
</html>
