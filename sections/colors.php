<?php

function render_color_swatch($hexColor, $colorTitle, $colorVariable, $lightOrDark) {

  $hexColor = 
  $hex = $hexColor;
  list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
  $rgb = 'rgb(' . $r . ',' . $g . ',' . $b . ')';

  echo '<div class="color-box">';
  echo '<div class="color-box__swatch ' . $colorVariable . '">';
  echo '<span class="color-box__swatch__name ' . $lightOrDark . '">' . $colorTitle . '</span>';
  echo '<div class="color-box__swatch--lighter ' . $colorVariable . '--lighter"></div>';
  echo '<div class="color-box__swatch--darker ' . $colorVariable . '--darker"></div>';
  echo '</div>';
  echo '<span class="color-box__hex">';
  echo $hexColor;
  echo '</br>';
  echo $rgb;
  echo '</span>';
  echo '</div>';

}

function render_gray_swatch($hexColor, $colorTitle, $colorVariable, $lightOrDark) {

  $hexColor = 
  $hex = $hexColor;
  list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
  $rgb = 'rgb(' . $r . ',' . $g . ',' . $b . ')';

  echo '<div class="color-box">';
  echo '<div class="color-box__swatch--gray ' . $colorVariable . '">';
  echo '<span class="color-box__swatch__name ' . $lightOrDark . '">' . $colorTitle . '</span>';
  echo '</div>';
  echo '<span class="color-box__hex">';
  echo $hexColor;
  echo '</br>';
  echo $rgb;
  echo '</span>';
  echo '</div>';

}

?>

          <section id="colors">
            <div class="row">
              <div class="col-sm-12">

                <div class="row">
                  <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <h1>Colors</h1>
                    <p>
                      We use color deliberately and in a non disruptive way. We want color to enhance experiences. Color should not be distracting without reason. This is why our primary color is Dark Gray, our secondary color is Trimble Light blue and SketchUp red is an accent. We use red to call attention to the important stuff — without being aggressive.
                    </p>
                  </div>
                  <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="sub-section">
                      <h4 class="sub-section__header">primary colors</h4>
                      <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-6">
                          <?php render_color_swatch('#363545', 'Trimble Gray', 'trimble-gray', 'light'); ?>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6">
                          <?php render_color_swatch('#009ad9', 'Trimble Light Blue', 'trimble-light-blue', 'light'); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sub-section">
                  <h4 class="sub-section__header">secondary colors</h4>
                  <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_color_swatch('#ec2227', 'SketchUp Red', 'sketchup-red', 'light'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_color_swatch('#005f9e', 'Trimble Mid Blue', 'trimble-mid-blue', 'light'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_color_swatch('#afafb3', 'Trimble Gray 4', 'trimble-gray-4', 'light'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_color_swatch('#d0d0d7', 'Trimble Gray 2', 'trimble-gray-2', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_color_swatch('#eaeaef', 'Trimble Gray 4', 'trimble-gray-light', 'dark'); ?>
                    </div>
                  </div>
                </div>
                <div class="sub-section">
                  <h4 class="sub-section__header">trimble grays</h4>
                  <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#F9F9FB', '', 'gray-1', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#F3F3F7', '', 'gray-2', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#EAEAEF', '', 'gray-3', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#E2E2E7', '', 'gray-4', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#D0D0D7', '', 'gray-5', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#BFBFC6', '', 'gray-6', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#AEAEB6', '', 'gray-7', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#9D9DA6', '', 'gray-8', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#8C8B96', '', 'gray-9', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#7B7A86', '', 'gray-10', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#6A6976', '', 'gray-11', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#595868', '', 'gray-12', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#474655', '', 'gray-13', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#363545', '', 'gray-14', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#262533', '', 'gray-15', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#1B1A26', '', 'gray-16', 'dark'); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                      <?php render_gray_swatch('#0B0A12', '', 'gray-17', 'dark'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>