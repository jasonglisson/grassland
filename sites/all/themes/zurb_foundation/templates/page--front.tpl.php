<div class="mobile-menu">
	<div class="row">
	  <?php if ($top_bar_main_menu) :?>
	    <?php print $top_bar_main_menu; ?>
	  <?php endif; ?>
	  <?php if ($top_bar_secondary_menu) :?>
	    <?php print $top_bar_secondary_menu; ?>
	  <?php endif; ?>
	</div>
</div>
<div class="post-menu hide-for-large-up">
	<div class="row">
		<div class="small-9 columns"><a href="/" class="mobile-home"><img src="../sites/all/themes/zurb_foundation/images/mobile-logo.png" alt="Grassland Bluegrass Band Virginia" title="Grassland Bluegrass Band" class="mobile-logo"></a></div>
		<div class="small-3 columns">
			<div class="show-mobile-menu">
				<div class="menu-tag">Menu</div>
			    <div class="mobile-menu-icon">
			        <span></span>
			        <span></span>
			        <span></span>
			    </div>
			</div>
		</div>
	</div>
</div>
<!--.page -->
<div role="document" class="page">

  <!--.l-header -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
        <div class="hide-for-large-up small-menu">
	      <?php endif; ?>
	      <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>
	        <ul class="title-area">
	          <li class="name"><h1><?php print $linked_site_name; ?></h1></li>
	          <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
	        </ul>
	        <section class="top-bar-section">
	          <?php if ($top_bar_main_menu) :?>
	            <?php print $top_bar_main_menu; ?>
	          <?php endif; ?>
	          <?php if ($top_bar_secondary_menu) :?>
	            <?php print $top_bar_secondary_menu; ?>
	          <?php endif; ?>
	        </section>
	      </nav>
	      <?php if ($top_bar_classes): ?>
        </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
      <section class="row <?php print $alt_header_classes; ?>">
		<div class="social-links">
			<div><a href="http://www.reverbnation.com/grasslandbluegrassband" target="_blank" class="reverb">Reverbnation</a></div>
			<div><a href="http://twitter.com/Bluegrassland" target="_blank" class="twitter">Twitter</a></div>
			<div><a href="http://www.facebook.com/grasslandbluegrassband" target="_blank" class="facebook">Facebook</a></div>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=270997929592089";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like" data-href="http://www.facebook.com/grasslandbluegrassband" data-send="true" data-layout="button_count" data-width="200" data-show-faces="false"></div>		
		</div>
        <?php if ($linked_logo): print $linked_logo; endif; ?>

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name" class="element-invisible">
              <strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>

        <?php if ($alt_main_menu): ?>
          <nav id="main-menu" class="navigation" role="navigation">
            <?php print ($alt_main_menu); ?>
          </nav> <!-- /#main-menu -->
        <?php endif; ?>

        <?php if ($alt_secondary_menu): ?>
          <nav id="secondary-menu" class="navigation" role="navigation">
            <?php print $alt_secondary_menu; ?>
          </nav> <!-- /#secondary-menu -->
        <?php endif; ?>

      </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="large-12 columns">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <main role="main" class="row l-main">
	  <img src="../sites/all/themes/zurb_foundation/images/logo-mobile-top.png" alt="Grassland Bluegrass Band Virginia" title="Grassland Bluegrass Band" class="mobile-large-logo show-for-small">
    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>
  	<div class="large-7 columns" id="front-pic"><img src="../sites/all/themes/zurb_foundation/images/front-pic.png" alt="Grassland Bluegrass Band Virginia" title="Grassland Bluegrass Band"></div>
    <div class="large-5 main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
    <!--/.l-main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> l-sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> l-sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
    
      <?php if (!empty($page['above_footer'])): ?>
        <div id="above-footer" class="large-12 columns">
          <?php print render($page['above_footer']); ?>
        </div>
        <div class="large-12 columns show-for-small-only">
	        <div class="mobile-signup">
						<?php
						$block = module_invoke('webform','block_view','client-block-15');
						print $block['content'];
						?>
	        </div>
        </div>	
      <?php endif; ?>
    
      <?php if (!empty($page['footer_first']) || !empty($page['footer_last']) || !empty($page['footer_bottom'])): ?>
    <!--.l-footer-->
    <footer class="l-footer panel row" role="contentinfo">
      <?php if (!empty($page['footer_first'])): ?>
      	<iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Atk421jag%3Aplaylist%3A6O1jeh8naaTobCLLJgW8qP" width="400" height="380" frameborder="0" allowtransparency="true" class="show-for-small"></iframe>
        <div id="footer-first" class="large-6 columns hide-for-small">
          <?php print render($page['footer_first']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_last'])): ?>
        <div id="footer-last" class="large-6 columns">
          <?php print render($page['footer_last']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_bottom'])): ?>
        <div id="footer-bottom" class="large-12 columns">
          <?php print render($page['footer_bottom']); ?>
        </div>
      <?php endif; ?>
      <?php if ($site_name) :?>
        <div class="copyright large-12 columns">
          &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
        </div>
      <?php endif; ?>
    </footer>
    <!--/.footer-->
  <?php endif; ?>
  </main>
  <!--/.l-main-->



  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->