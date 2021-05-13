<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body class="text-center">
    <div>
      @include('includes.header')
    </div>
    <div class="container py-5">
      @include('includes.searchbar')
    </div>
    <div class="container">
      <h1>Results</h1>
        <div class="row" id="Header">
          <div class="col-md-3">
            File Name
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            File Type
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            File Size
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            Date Modified
          </div>
        </div>
        <hr/>
        <div class="row py-2" id="result">
          <div class="col-md-3">
            Training Manual
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            pdf
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            20M
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            5/13/2021
          </div>
        </div>
        <div class="row py-2" id="result">
          <div class="col-md-3">
            First Responder Video
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            mp4
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            500M
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            5/13/2021
          </div>
        </div>
        <div class="row py-2" id="result">
          <div class="col-md-3">
            Textbook
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            pdf
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            332M
          </div>
          <div class="col-md-3" id="hide-on-mobile">
            5/13/2021
          </div>
        </div>
    </div>
    <div style="background-color: white">
      @include('includes.footer')
    </div>
  </body>
</html>
