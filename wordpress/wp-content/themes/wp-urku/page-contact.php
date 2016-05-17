<?php /* Template Name: Contact Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('ae-container-fluid ae-container-fluid--inner rk-main'); ?>>
      <div class="ae-grid">
        <div class="ae-grid__item item-lg-6 item-lg--offset-7">
          <h4 class="ae-u-bolder au-mb-3 conatct__title">Contact Us</h4>
          <p class="au-mb-4 contact__desc">Say hello using the <a href="#contact-form">contact form </a>below! <br>We're standing by to help.</p>
        </div>
      </div>
      <div class="ae-grid">
        <div class="ae-grid__item item-lg-6">
          <div class="acf-map">
            <?php $location = get_field('map'); if( !empty($location) ): ?>
              <div id="map">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="ae-grid__item item-lg-6">

          <div class="ae-grid ae-grid--collapse">
            <div class="ae-grid__item item-lg-2 au-v-hidden au-lg-v-visible">
              <button id="map-arrow" class="arrow-button arrow-button--nospace arrow-button--center arrow-button--flip">
                <svg>
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#arrow"></use>
                </svg>
              </button>
            </div>
            <div class="ae-grid__item item-lg-10 au-xs-ta-center au-lg-ta-left">
              <?php the_content(); ?>
            </div>
            <div class="contact_spacer au-none au-lg-block"></div>
          </div>

          <div class="ae-grid ae-grid--collapse">
            <div class="ae-grid__item item-lg-12">
              <?php echo do_shortcode('[contact-form-7 id="121" title="Contact form"]'); ?>
            </div>
          </div>

        </div>
      </div>

    </div>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript">
    !function(a){function b(b){var e=b.find(".marker"),f={zoom:16,center:new google.maps.LatLng(0,0),mapTypeId:google.maps.MapTypeId.ROADMAP},g=new google.maps.Map(b[0],f);return g.markers=[],e.each(function(){c(a(this),g)}),d(g),g}function c(a,b){var c=new google.maps.LatLng(a.attr("data-lat"),a.attr("data-lng")),d=new google.maps.Marker({position:c,map:b});if(b.markers.push(d),a.html()){var e=new google.maps.InfoWindow({content:a.html()});google.maps.event.addListener(d,"click",function(){e.open(b,d)})}}function d(b){var c=new google.maps.LatLngBounds;a.each(b.markers,function(a,b){var d=new google.maps.LatLng(b.position.lat(),b.position.lng());c.extend(d)}),1==b.markers.length?(b.setCenter(c.getCenter()),b.setZoom(16)):b.fitBounds(c)}var e=null;a(document).ready(function(){a(".acf-map").each(function(){e=b(a(this))})})}(jQuery);
    </script>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>
