<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo bloginfo('name'); ?> | <?php echo bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/styling/main.css">
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/9543e08d94.js"
      crossorigin="anonymous"
    ></script>
    <!-- favicon -->
    <link rel="icon" href="<?= get_template_directory_uri();?>/media/icons/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="header-background">
      <div id="header-banner" class="wrapper">
        <!-- logotype -->
        <div id="logotype">
          <a href="<?= get_home_url(); ?>">
            <img src="<?= get_template_directory_uri();?>/media/icons/icon-transparent.png" alt="logotype" />
          </a>
        </div>

        <!-- burgar meny -->
        <div id="drop-nav">
          <button class="menu-btn open" id="open-menu">
            <i class="fa-solid fa-bars" style="color: #000000"></i>
          </button>
          <nav id="burger-nav">
            <button class="menu-btn close" id="close-menu">
              <i class="fa-solid fa-x" style="color: #000000"></i>
            </button>
            <!-- php burger-nav -->
             <!-- php burgar meny -->
             <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
          </nav>
        </div>

        <div id="desktop-nav">
          <nav>
            <!-- php huvudmeny -->
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
          </nav>
        </div>
      </div>
    </div>
      <div id="hero-img">
        <img src="<?= get_template_directory_uri();?>/media/lakecomo01.jpg" alt="View over lake como" />
      </div>
    </header>
