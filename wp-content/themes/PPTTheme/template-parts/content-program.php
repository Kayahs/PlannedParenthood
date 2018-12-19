<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<?php
$categories = array_reverse(get_the_terms(get_the_ID(), 'programcat'));            

  if ($categories[0]->name != 'form') : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'large' ); ?>
      <?php endif; ?>
      </header><!-- .entry-header -->

      <div class="entry-content">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <?php the_excerpt(); ?>

        <?php if ( 'program' === get_post_type() ) : ?>
        <div class="entry-meta">
          <span>
          <?php echo '<a href="'. get_post_permalink() .'">read more</a>' ?>
          <?php 
/*              $categories = get_the_terms(get_the_ID(), 'programcat');    */        
              foreach($categories as $category){
              if ($category->name != 'others') :
                $linkWithSlash = esc_url( get_post_permalink() );               
                $linkWithoutSlash = substr($linkWithSlash,0,strlen($linkWithSlash)-1);
                echo sprintf( '<a href="%1$s-%2$s" rel="bookmark"> / %3$s</a>', $linkWithoutSlash, $category->slug, $category->name);
              endif;
            }
          ?>
          </span>
        </div><!-- .entry-meta -->
        <?php endif; ?>
      </div><!-- .entry-content -->
    </article><!-- #post-## -->
  <?php endif;
/*}*/ ?>



