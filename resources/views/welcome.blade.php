
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body style="background-color: #eeeeee">
      <div>
        @include('includes.header')
      </div>
      <div class="banner">
        <div class="banner-content">
          <h1 class="banner-text">OPEN <br/>  EDUCATION <br/> RESOURCES</h1>
        </div>
      </div>
      <div class="container pt-1 my-5 py-3 h-100" style="background-color: #dedede">
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
      <div class="container mt-5">
        <h1>About NAFTC University</h1>
        <p>NAFTC University is an online educational resource for alternative fuel training centers and our partners. In our library, curriculum and materials can be shared between our organizations and partners to supplement education for alternative fuel vehicles.</p>
        <h3>To gain access, please contact our headquarters at</h3>
        <h4>P: (304) 293-7882</h4>
        <h4>E: <a href="mailto:naftc@mail.wvu.edu">naftc@mail.wvu.edu</a></h4>
      </div>
      <div style="background-color: white">
        @include('includes.footer')
      </div>
  </body>
  
</html>
