 <footer role="contentinfo">
    
  <section>
    <?php if ( function_exists( 'dynamic_sidebar' ) ) : ?>
    <?php dynamic_sidebar('footer widget') ?>
    <?php endif; ?>
  </section>
  
  <!-- vCard -->
  <?php $options = get_option( 'wpflex_theme_options' ); ?>
  <?php if( $options || empty($options) ): ?>
  
  <!-- fn org -->
  <section>
    <ul class="vcard">
      <!-- fn org -->
      <?php if( ! empty( $options['fnorg'] ) ): ?>
      <li class="fn org"><small><?php echo ( $options['fnorg'] ); ?>,</small></li>
      
      <!-- fn org fallback -->
      <?php else : ?>
      <li><small>My Super Awesome Company</small></li>
      <?php endif; ?>
        
      <!-- adr -->
      <?php if( $options['street'] && $options['locality'] && $options['region'] && $options['postal'] ): ?>
      <li class="adr">
        <small>
          <span class="street-address"><?php echo ( $options['street'] ); ?></span>, <span class="locality"><?php echo ( $options['locality'] ); ?></span>, 
          <span class="region"><abbr title="<?php echo ( $options['region'] ); ?>"><?php echo ( $options['region'] ); ?></abbr></span>
          <span class="postal-code"><?php echo ( $options['postal'] ); ?></span>
		    </small>
	    </li>
      
      <!-- adr fallback -->
      <?php else : ?>
        <li class="adr"><small>555 Fake Street, My Awesome City Name, NY 55555</small></li>
      <?php endif; ?>
        
      <!-- tel -->
      <?php if( $options['teltype'] && $options['telvalue'] ): ?>
      <li class="tel">
        <small><span class="type"><?php echo ( $options['teltype'] ); ?></span>: <span class="value"><?php echo ( $options['telvalue'] ); ?></span></small></li>
        
        <!-- tel fallback -->
        <?php else : ?>
        <li class="tel"><small>Office: 555&ndash;555-5555</small></li>
        <?php endif; ?>
          
        <!-- url fn org -->
        <?php if( $options['url'] ): ?>
        <li class="url fn org"><small><a rel="bookmark" href="http://<?php echo ( $options['url'] ); ?>" title="visit us online"><?php echo ( $options['url'] ); ?></a></small></li>
          
        <!-- url fn org fallback -->
        <?php else : ?>
        <li class="url fn org"><small><a rel="bookmark" href="http://www.grayghostvisuals.com" title="visit the designer and coder online">http://www.grayghostvisuals.com</a></small></li>
        <?php endif; ?>
        
        <!-- add to address book -->
        <li class="add-vcard"><small><a href="http://h2vx.com/vcf/<?php echo ( $options['addrbook'] ); ?>" rel="vcard">&bull; Add Us To Your Address Book</a></small></li>
      </ul>
    </section>
    <?php endif; ?>
    
    <section id="footer-socials">
      <!-- facebook -->
      <?php $options = get_option( 'wpflex_theme_options' ); ?>
      <?php if( $options[ 'facebookurl' ] ) : ?>
      <article id="footer-fb">
        <div class="facebook">
		      <a href="<?php echo ( $options[ 'facebookurl' ] ); ?>" rel="external"><?php echo ( $options[ 'facebookurl' ] ); ?></a>
        </div>
      </article>
      <?php endif; ?>

      <!-- twitter -->
      <?php $options = get_option( 'wpflex_theme_options' ); ?>
      <?php if( $options[ 'twitterurl' ] ) : ?>
      <article id="footer-twitter">
        <div class="twitter">
		      <a href="https://twitter.com/<?php echo ( $options[ 'twitterurl' ] ); ?>" rel="external">follow<?php echo( $options[ 'twitterurl' ] ); ?></a>
        </div>
      </article>
      <?php endif; ?>
      
      <!-- It is completely optional, but if you like WP-Flex I would appreciate it if you keep the credit link at the bottom -->
      <section id="copyright">
      	<small>Created with the WP&ndash;Flex boilerplate foundation by <a href="" rel="external">http://grayghostvisuals.com</a></small>
      </section>
    </section>
  </footer>

  <!-- JavaScript at the bottom for fast page loading -->
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <!-- end scripts -->
  
  <!-- Asynchronous Google Analytics snippet. mathiasbynens.be/notes/async-analytics-snippet -->
  <!-- 
  Why not add this to your Analytics Snippet? 
  ['_setDomainName', 'www.your-site-uri.com']
  This allows us to create a cookieless sub-domain 
  http://www.ravelrumba.com/blog/static-cookieless-domain
  -->
  <script>
  var _gaq=[['_setAccount','XX-XXXXXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
   
  <?php 
  /* 
   * Always have wp_footer() just before the closing </body>
   * tag of your WP theme, or you will break many plugins, which
   * generally use this hook to reference JavaScript files.
   *
   */
  wp_footer(); 
  ?>
</body>
</html>
