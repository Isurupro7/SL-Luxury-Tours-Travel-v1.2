<?php get_header(); ?>
<section class="section">
  <div class="container">
    <div class="section-title">
      <h3>Latest Updates</h3>
      <span>News and travel inspiration from SL Luxury Tours & Travel.</span>
    </div>
    <div class="grid grid-3">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article class="card">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <div class="card">
          <h4>No posts found</h4>
          <p>Stay tuned for travel updates and curated itineraries.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
