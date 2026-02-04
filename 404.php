<?php get_header(); ?>
<section class="section">
  <div class="container">
    <div class="section-title">
      <h3>Page Not Found</h3>
      <span>We couldn't find the page you were looking for.</span>
    </div>
    <div class="card">
      <p>Try exploring our luxury tours, fleet, and gallery for more inspiration.</p>
      <a class="button" href="<?php echo esc_url(home_url('/')); ?>">Return to Home</a>
    </div>
  </div>
</section>
<?php get_footer(); ?>
