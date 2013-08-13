<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="description" content="Color iPhone, iPad or iPod . Repair or customize your iphone, iPad or iPod . Repair broken screen. Sell your iPhone, iPad or iPod.">
    <title>Color iPhone</title>
    <link href="css/cmi.css" rel="stylesheet">
    <link href="css/cmi-carousel.css" rel="stylesheet">
    <link href="css/ecwid-overrides.css" rel="stylesheet">
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#">color-my-i</a>
            <div class="nav-collapse collapse">
              <ul class="nav navbar-nav">
              <?php

                $pages = array(
                  'Home'    => '',
                  'Store'   => 'store#!/~/product/category=0&id=9492999',
                  'Contact' => 'contact'
                );

                $this_page = basename($_SERVER['PHP_SELF']);

                foreach ($pages as $pageTitle => $pageLink) {
                  echo '<li';

                  if($this_page == $pageLink) echo ' class="active"';
                  echo '><a href="'.$pageLink.'">'.$pageTitle.'</a></li>';
                }

              ?>

              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>