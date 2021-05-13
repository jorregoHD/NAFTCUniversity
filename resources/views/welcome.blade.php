
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
      <div class="container pt-1 my-5 py-3 h-100" id="search" style="background-color: #dedede">
        @include('includes.searchbar')
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
