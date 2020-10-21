<?php get_header();?>
<div class="row category">
    <div class="col-md-8 text-justify">
        <div class="row">
        <?php while ( have_posts() ) : the_post();?>
        <div class="col-md-6">
            <div class="post-list border-0 card clearfix">
                <div class="card-body">
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                </div>
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('medium');?>
                </a>
                <div class="card-body">
                    <p><?php echo wp_trim_words(get_the_excerpt(),15,'');?></p>
                </div>
            </div>
        </div>
        
        <?php endwhile;appharu_paging();?>
        </div>
        <!-- .row -->
    </div>
    <!-- .col-md-8 -->
    <div class="col-md-4">
        <?php get_sidebar();?>
    </div>
</div>
<!-- .row -->
<?php get_footer();?>