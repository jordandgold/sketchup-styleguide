<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SketchUp Style Guide</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/styles.css" rel="stylesheet">

    <!-- Dashboard core CSS -->
    <link href="styles/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="assets/SU_FullColor.svg" alt="SketchUp" />
          </a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Colors</a></li>
            <li><a href="#">Typography</a></li>
            <li><a href="#">Forms</a></li>
            <li><a href="">Buttons</a></li>
            <li><a href="">Icons</a></li>
            <li><a href="">Lists</a></li>
            <li><a href="">Instructions</a></li>
            <li><a href="">Product Mockups</a></li>
            <li><a href="">Photography</a></li>
            <li><a href="">Scrims</a></li>
            <li><a href="">Dropshadows</a></li>
            <li><a href="">Scale Figures</a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <?php include('sections/colors.php'); ?>

          <?php include('sections/typography.php'); ?>

          <section id="buttons">
            <div class="row">
              <div class="col-sm-12">
                <h1>Buttons &amp; Dropdowns</h1>
                <div class="row">
                  <div class="col-sm-4">
                    <h4 class="sub-section__header">Buttons</h4>
                    <div class="sub-section">
                      <a href="#" class="btn btn-primary">Primary Button</a>
                    </div>
                    <div class="sub-section">
                      <a href="#" class="btn btn-primary">Icon Button</a>
                    </div>
                    <div class="sub-section">
                      <a href="#" class="btn btn-outline">Outlined Button</a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="sub-section">
                      <h4 class="sub-section__header">Dropdowns</h4>
                      <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Dropdown
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          <li><a href="#">Option 1</a></li>
                          <li><a href="#">Option 2</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="forms">
            <div class="row">
              <div class="col-sm-12">
                <h1>Forms</h1>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="sub-section">
                      <h4 class="sub-section__header">Text Input</h4>
                      <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="placeholder text">
                      </div>
                    </div>
                    <div class="sub-section">
                      <h4 class="sub-section__header">Option Menu</h4>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Select Option</option>
                          <option>This is an option</option>
                          <option>This is another option</option>
                        </select>
                      </div>
                    </div>
                    <div class="sub-section">
                      <h4 class="sub-section__header">Textarea</h4>
                      <div class="form-group">
                        <textarea class="form-control input-lg" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="sub-section">
                      <h4 class="sub-section__header">Radio Buttons</h4>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Radio Selected
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Radio Unmarked
                        </label>
                      </div>
                      <div class="radio disabled">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                          Radio Disabled
                        </label>
                      </div>
                    </div>
                    <div class="sub-section">
                      <h4 class="sub-section__header">Checkboxes</h4>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="" checked>
                          Checkbox Checked
                        </label>
                      </div>
                      <div class="checkbox disabled">
                        <label>
                          <input type="checkbox" value="" disabled>
                          Checkbox Disabled
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="dropshadows">
            <div class="row">
              <div class="col-sm-12">
                <h1>Dropshadows</h1>
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="shadow-box shadow-1">
                      <div class="shadow-box__content">
                        shadow 1<br />
                        rgba (89, 88, 104, 32)<br />
                        x-offset: 0px<br />
                        y-offset: 2px<br />
                        blur: 7px<br />
                        spread: 0px
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="shadow-box shadow-2">
                      <div class="shadow-box__content">
                        shadow 2<br />
                        rgba (89, 88, 104, 32)<br />
                        x-offset: 0px<br />
                        y-offset: 2px<br />
                        blur: 10px<br />
                        spread: 4px<br />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="shadow-box shadow-3">
                      <div class="shadow-box__content">
                        shadow 3<br />
                        rgba (89, 88, 104, 32)<br />
                        x-offset: 0px<br />
                        y-offset: 2px<br />
                        blur: 14px<br />
                        spread: 6px<br />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="shadow-box shadow-4">
                      <div class="shadow-box__content">
                        shadow 4<br />
                        rgba (89, 88, 104, 32)<br />
                        x-offset: 0px<br />
                        y-offset: 2px<br />
                        blur: 20px<br />
                        spread: 9px<br />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
