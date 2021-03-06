<?php

/**
 * @file
 * Default theme implementation to display a single Backdrop page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->langcode ?>" lang="<?php print $language->langcode ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print backdrop_get_html_head(); ?>
  <title><?php print $head_title; ?></title>
  <?php print backdrop_get_css(); ?>
  <?php print backdrop_get_js(); ?>
</head>
<body class="<?php print implode(' ', $classes); ?>">
  <div class="l-container">

    <header role="banner">
      <?php if (!empty($logo)): ?>
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div class="name-and-slogan">
          <?php if ($site_name): ?>
            <strong class="site-name">
              <?php print $site_name; ?>
            </strong>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div class="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /.name-and-slogan -->
      <?php endif; ?>

      <?php print $header; ?>
    </header>

    <main role="main">
      <?php if (!empty($title)): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>

      <?php if (!empty($messages)): print $messages; endif; ?>

      <?php print $content; ?>
    </main>

    <?php if (!empty($sidebar_first)): ?>
      <aside class="l-sidebar-first" role="complementary">
        <?php print $sidebar_first; ?>
      </aside> <!-- /.l-sidebar-first -->
    <?php endif; ?>

    <?php if (!empty($sidebar_second)): ?>
      <aside class="l-sidebar-second" role="complementary">
        <?php print $sidebar_second; ?>
      </aside> <!-- /.l-sidebar-second -->
    <?php endif; ?>

    <?php if (!empty($footer)): ?>
      <footer role="contentinfo">
        <?php print $footer; ?>
      </footer>
    <?php endif; ?>

  </div> <!-- /.l-container -->

</body>
</html>
