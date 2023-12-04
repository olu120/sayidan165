<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sayidan
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-content">
        <main>
            <div class="container">
                <div class="row">
                    <!--Col Main-->
                    <div class="col-main col-lg-8 col-md-7 col-xs-12">
                        <div class="blog-post-content">
                            <!--Blog Post-->
                            <div class="blog-post post-content">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <div class="area-img">
                                   <?php the_post_thumbnail( 'sayidan-blog', array('class' => 'img-responsive') ); ?>
                                </div>
                                <?php endif; ?>
                                <div class="area-content">
                                    <h2 class="text-regular text-uppercase"><?php echo get_the_title(); ?></h2>
                                    <div class="blog-stats">
                                        <span class="clock">
                                            <i class="fa fa-calendar stats-item"></i>
                                            <span class="text-center stats-item"><?php echo date_i18n( get_option( 'date_format' ), get_post_time( 'U', true ) ); ?></span>
                                        </span>
                                        <span class="comment">
                                            <i class="fa fa-comment stats-item"></i>
                                            <span class="text-center stats-item">
                                                <?php printf( _nx( 'one comment', '%1$s comments', get_comments_number(), '', 'sayidan' ), number_format_i18n( get_comments_number() ) ); ?>      
                                            </span>
                                        </span>
                                        <span class="user">
                                            <i class="fa fa-user stats-item"></i>
                                            <span class="text-content stats-item"><?php echo get_the_author(); ?></span>
                                        </span>
                                        <?php
                                        $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'sayidan' ) );
                                        if ( $categories_list ) {
                                            printf( '<span class="cat-links"><i class="fa fa-folder stats-item" aria-hidden="true"></i><span class="screen-reader-text">%1$s </span>%2$s</span>',
                                                _x( 'Categories', 'Used before category names.', 'sayidan' ),
                                                $categories_list
                                            );
                                        }

                                        $tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'sayidan' ) );
                                        if ( $tags_list ) {
                                            printf( '<span class="tags-links"><i class="fa fa-tag stats-item" aria-hidden="true"></i><span class="screen-reader-text">%1$s </span>%2$s</span>',
                                                _x( 'Tags', 'Used before tag names.', 'sayidan' ),
                                                $tags_list
                                            );
                                        }  ?>
                                    </div>
                                    <div class="clearfix" ></div>
                                    <div class="post-content-body">
                                    <?php
                                    the_content( sprintf(
                                             /* translators: %s: Name of current post. */
                                            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sayidan' ), array( 'span' => array( 'class' => array() ) ) ),
                                            the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                    ) );
                                    ?>
                                    </div>  

                                    
                                    <?php
                                    //pagination
                                    wp_link_pages( array(
                                         'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'sayidan' ) . '</span>',
                                         'after'       => '</div>',
                                         'link_before' => '<span>',
                                         'link_after'  => '</span>',
                                         'pagelink'    => '<span class="screen-reader-text">%</span>',
                                         'separator'   => '',
                                         ) );                                 
                                    ?>
                                </div>
                            </div>

                            <!--Share-->
                            <?php 
                            if ( 1 == get_theme_mod('social_blog', '') )
                                sayidan::sharing( $type = 'blog' );
                            
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif; ?>
                        </div>

                    </div>
                    <!--Sidrbar Right-->
                    <div class="sidebar blog-right col-lg-4 col-md-5 hidden-sm hidden-xs">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div><!-- #post-## -->
