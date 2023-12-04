<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="container">
        <div class="alumni-directory">
            <?php if ( $instance['search_bar'] == 1 ) : ?>

	            <div class="top-section">
	                <div class="row">
	                    <div class="title-page text-left col-md-6 col-sm-12 col-xs-12">
	                        <h4 class="text-regular"><?php echo esc_attr( $title ); ?></h4>
	                    </div>
	                    <div class="search-alumni-directory text-right col-md-6 col-sm-12 col-xs-12">
	                    	<?php $q = '';
							if( isset( $_GET['q'] ) ){ $q = sanitize_text_field( $_GET['q'] ); };
	                    	?>
	                        <form class="navbar-form no-margin no-padding" action="<?php echo sayidan_clean_url(); ?>" >
	                            <input type="text" name="q" class="form-control input-search" value="<?php echo esc_html( $q ); ?>" placeholder="<?php esc_html_e( 'Keywords (e.g. name, city, school...)', 'sayidan' ); ?>" autocomplete="off">
	                            <button type="submit" class=" bg-color-theme text-center text-regular"><?php esc_html_e( 'Search', 'sayidan' ); ?></button>
	                        </form>
	                    </div>
	                </div>
	            </div>

            <?php endif; ?>
            <div class="alumni-directory-content">
                <ul class="list-item">
                    <li class="label-content">
                        <span class="user"><?php esc_html_e( 'Name', 'sayidan' ); ?></span>
                        <span class="year"><?php esc_html_e( 'Diploma', 'sayidan' ); ?></span>
                        <span class="city"><?php esc_html_e( 'Graduation Date', 'sayidan' ); ?></span>
                        <span class="scholl"><?php esc_html_e( 'Location', 'sayidan' ); ?></span>
                        <span class="department"><?php esc_html_e( 'Department', 'sayidan' ); ?></span>
                    </li>
                    <?php

	                    if ( function_exists( 'um_fetch_user' ) ) {
		          
							$params['records_per_page'] = $instance['records_per_page'];

													    global $ultimatemember, $wpdb, $post;

							$q = '';
							if( isset( $_GET['q'] ) ){ $q = sanitize_text_field( $_GET['q'] ); };

						    extract($params);

						    $profiles_per_page = $params['records_per_page'];
						    $query_params = array();
						    $query_params = apply_filters( 'um_prepare_user_query_params', $query_params, $params );
						    
						    // Prepare for BIG SELECT query
						    $wpdb->query('SET SQL_BIG_SELECTS=1');
						    
						    $query_params['number'] = $profiles_per_page;

						    if( isset( $params['number'] ) ){
						      $query_params['number'] = $params['number'];
						    }

						    if( isset( $params['page'] ) ){
						      $members_page = $params['page'];
						    }else{
						      $members_page = isset( $_REQUEST['members_page'] ) ? $_REQUEST['members_page'] : 1;
						    }

						   	if($q!=''){

						   		$query_params['meta_query'] = array('relation'=>'OR');
						   		$temp = array(
					                'key'       => 'first_name',
					                'compare'   => 'LIKE',
					                'value'     => $q,
					            );
					            array_push( $query_params['meta_query'], $temp ); 

						   		$temp = array(
					                'key'       => 'last_name',
					                'compare'   => 'LIKE',
					                'value'     => $q,
					            );
					            array_push( $query_params['meta_query'], $temp ); 

						   		$temp = array(
					                'key'       => 'field1',
					                'compare'   => 'LIKE',
					                'value'     => $q,
					            );
					            array_push( $query_params['meta_query'], $temp ); 


						   		$temp = array(
					                'key'       => 'field2',
					                'compare'   => 'LIKE',
					                'value'     => $q,
					            );
					            array_push( $query_params['meta_query'], $temp ); 

					            $temp = array(
					                'key'       => 'field3',
					                'compare'   => 'LIKE',
					                'value'     => $q,
					            );
					            array_push( $query_params['meta_query'], $temp ); 

					            $temp = array(
					                'key'       => 'field4',
					                'compare'   => 'LIKE',
					                'value'     => $q,
					            );
					            array_push( $query_params['meta_query'], $temp ); 
							}


						    $query_params['paged'] = $members_page;
			    			$query_params['paged'] = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	
						    if( ! um_user('can_view_all') && is_user_logged_in() ){
						      unset( $query_params );
						    }
						    
						    do_action('um_user_before_query', $query_params );
						    
						    $users = new WP_User_Query( $query_params );

						    do_action('um_user_after_query', $query_params, $users );

						    $array['users'] = isset( $users->results ) && ! empty( $users->results ) ? $users->results : array();

						    $array['total_users'] = (isset( $max_users ) && $max_users && $max_users <= $users->total_users ) ? $max_users : $users->total_users;

						    $array['page'] = $members_page;


						    $array['total_pages'] = ceil( $array['total_users'] / $profiles_per_page );

						    $array['users_per_page'] = $array['users'];

						    for( $i = $array['page']; $i <= $array['page'] + 2; $i++ ) {
						      if ( $i <= $array['total_pages'] ) {
						        $pages_to_show[] = $i;
						      }
						    }

						    if ( isset( $pages_to_show ) && count( $pages_to_show ) < 5 ) {
						      $pages_needed = 5 - count( $pages_to_show );

						      for ( $c = $array['page']; $c >= $array['page'] - 2; $c-- ) {
						        if ( !in_array( $c, $pages_to_show ) && $c > 0 ) {
						          $pages_to_add[] = $c;
						        }
						      }
						    }

						    if ( isset( $pages_to_add ) ) {

						      asort( $pages_to_add );
						      $pages_to_show = array_merge( (array)$pages_to_add, $pages_to_show );

						      if ( count( $pages_to_show ) < 5 ) {
						        if ( max($pages_to_show) - $array['page'] >= 2 ) {
						          $pages_to_show[] = max($pages_to_show) + 1;
						          if ( count( $pages_to_show ) < 5 ) {
						            $pages_to_show[] = max($pages_to_show) + 1;
						          }
						        } else if ( $array['page'] - min($pages_to_show) >= 2 ) {
						          $pages_to_show[] = min($pages_to_show) - 1;
						          if ( count( $pages_to_show ) < 5 ) {
						            $pages_to_show[] = min($pages_to_show) - 1;
						          }
						        }
						      }

						      asort( $pages_to_show );

						      $array['pages_to_show'] = $pages_to_show;

						    } else {

						      if ( isset( $pages_to_show ) && count( $pages_to_show ) < 5 ) {
						        if ( max($pages_to_show) - $array['page'] >= 2 ) {
						          $pages_to_show[] = max($pages_to_show) + 1;
						          if ( count( $pages_to_show ) < 5 ) {
						            $pages_to_show[] = max($pages_to_show) + 1;
						          }
						        } else if ( $array['page'] - min($pages_to_show) >= 2 ) {
						          $pages_to_show[] = min($pages_to_show) - 1;
						          if ( count( $pages_to_show ) < 5 ) {
						            $pages_to_show[] = min($pages_to_show) - 1;
						          }
						        }
						      }

						      if ( isset( $pages_to_show ) && is_array( $pages_to_show ) ) {

						        asort( $pages_to_show );

						        $array['pages_to_show'] = $pages_to_show;

						      }

						    }

						    if ( isset( $array['pages_to_show'] ) ) {

						      if ( $array['total_pages'] < count( $array['pages_to_show'] ) ) {
						        foreach( $array['pages_to_show'] as $k => $v ) {
						          if ( $v > $array['total_pages'] ) unset( $array['pages_to_show'][$k] );
						        }
						      }

						      foreach( $array['pages_to_show'] as $k => $v ) {
						        if ( (int)$v <= 0 ) {
						          unset( $array['pages_to_show'][$k] );
						        }
						      }

						    }
						    $q =  apply_filters('um_prepare_user_results_array', $array );

						    $recentPosts = $q;
						    $max_num_pages  = ceil($recentPosts['total_users'] / $instance['records_per_page']);

	                        if ( sizeof($recentPosts['users']) > 0 ) :
	                    
	                            foreach( $recentPosts['users'] as $rec ) :

									if(!array_key_exists('administrator', $rec->caps)){

									um_fetch_user( $rec->ID ); 
									$img_url = um_get_user_avatar_url();
									if(strlen($img_url)<5){
										$img_url = plugins_url().'/ultimate-member/assets/img/default_avatar.jpg';
									}
	                            	?>

	                                <li class="box-content">
	                                    <span class="user">
											    <a href="<?php echo um_user_profile_url(); ?>" >
	                                        <img width="128" height="128" src="<?php echo esc_url( $img_url ); ?>" class="img-responsive wp-post-image" alt="<?php echo esc_attr( $name ); ?>" srcset="<?php echo esc_url( $img_url ); ?> 128w, <?php echo esc_url( $img_url ); ?> 93w" sizes="(max-width: 128px) 100vw, 128px">
	                                      </a>
	                                      <span class="label-name">
	                                        <a href="<?php echo um_user_profile_url(); ?>" >
	                                        	 <?php echo um_user('display_name'); ?>
	                                        </a>
	                                      </span>
	                                    </span>
	                                    <span class="year"><?php echo um_user('field1'); ?></span>
	                                    <span class="city"><?php echo um_user('field2'); ?></span>
	                                    <span class="scholl"><?php echo um_user('field3'); ?></span>
	                                    <span class="department"><?php echo um_user('field4'); ?></span>
	                                </li>
	                                <?php } ?>
	                            <?php endforeach;
	                        endif; 
                       	} ?>
                </ul>
            </div>
            
            <?php 
            sayidan_pagination_directory( $recentPosts, $max_num_pages ); ?>
        </div>
    </div>
</div>
<!--End content wrapper-->