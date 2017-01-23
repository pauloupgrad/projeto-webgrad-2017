<?php 

/**************************************
 *  THEME SUPORT
 **************************************/
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');

/**************************************
 * Registro Menu Personalizado
 **************************************/
add_theme_support('menus');
register_nav_menus( array(
    'primary' => __( 'Menu header', 'menu-header' ),
) );
add_theme_support('menus');
register_nav_menus( array(
    'links_uteis' => __( 'Links Uteis', 'menu-footer' ),
) );

/**************************************
 *  REGISTRO DE SIDEBAR
 **************************************/
if( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' =>__('Minha Conta'),
        'id' => 'sidebar-login',
        'description' => __('Formulário de login para acessar o Painel Admin.'),
        'before_title' => '<h3>',
        'after_title' =>  '</h3>',
    ));
    
    register_sidebar(array(
        'name' =>__('Normas do Site'),
        'id' => 'sidebar-normas',
        'description' => __('Aqui tem todas as normas de nosso site para conferir.'),
        'before_title' => '<h3>',
        'after_title' =>  '</h3>',
    ));
}


/**************************************
 *  SCRIPTS / CSS
 **************************************/
function wp_responsivo_scripts() {
  // Carregando CSS header
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  // Carregando Scripts header
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery') );

  //Carregando no footer
  //wp_enqueue_script('functions-js', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_responsivo_scripts' );

/**************************************
 * Registro Custom Post type Slider
 **************************************/
add_action('init', 'slider_registrer');
function slider_registrer(){
     $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => _x('Slider', 'post type singular name'),
        'add_new' => _x('Adicionar slider', 'slider'),
        'add_new_item' => __('Adicionar slider'),
        'edit_item' => __('Editar slider'),
        'new_item' => __('Novo slider'),
        'view_item' => __('Ver slider'),
        'search_items' => __('Procurar slider'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','editor','thumbnail'),
      );
    register_post_type('slider',$args);
}

/**************************************
 * Registro Custom Post type Serviços
 **************************************/
add_action('init', 'servicos_registrer');
function servicos_registrer(){
     $labels = array(
        'name' => _x('Serviços', 'post type general name'),
        'singular_name' => _x('Serviços', 'post type singular name'),
        'add_new' => _x('Adicionar serviço', 'serviço'),
        'add_new_item' => __('Adicionar serviço'),
        'edit_item' => __('Editar serviço'),
        'new_item' => __('Novo serviço'),
        'view_item' => __('Ver serviço'),
        'search_items' => __('Procurar serviço'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-pressthis',
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug'=>'servicos'), 
        'menu_position' => 6,
        'supports' => array('title','editor','thumbnail'),
      );
    register_post_type('servicos',$args);
}
// marca automatica
function m1_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm1_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        'label'    => __( 'Marca do Site', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'm1_logo',
    ) ) );
}
add_action( 'customize_register', 'm1_customize_register' );



// Add to admin_init function
add_filter('manage_edit-movies_columns', 'add_new_movies_columns');

	function add_new_movies_columns($movies_columns) {
		$new_columns['cb'] = '<input type="checkbox" />';
 		$new_columns['title'] = _x('Movie name', 'column name');
		$new_columns['poster'] = __('Poster');
		$new_columns['director'] = __('Director');
		$new_columns['genre'] = __('Genre');
		$new_columns['runtime'] = __('Runtime');		
 		$new_columns['date'] = _x('Date', 'column name');
 		return $new_columns;
	
	}
	
add_action('manage_movies_posts_custom_column', 'manage_movies_columns', 10, 2);
 
	function manage_movies_columns($column_name, $id) {
		global $post;
		switch ($column_name) {
		case 'id':
			echo $id;
		break;
 
		case 'poster':
			echo get_the_post_thumbnail( $post->ID, 'boxoffice_poster' ); 
		break;
			
		case 'runtime':
			$duration = get_post_meta( $post->ID, 'wtf_runtime', true );
			echo $duration;
		break;
		case 'director':
			$director = get_post_meta( $post->ID, 'wtf_dirctr', true );
			echo $director;
		break;
		case 'genre':
			//echo get_the_term_list( $post->ID, 'movie-genre', '', ' ', '' );
			$post_type = get_post_type($post_id);
			$terms = get_the_terms($post_id, 'movie-genre');
			if ( !empty($terms) ) {
				foreach ( $terms as $term )
            $post_terms[] = "<a href='edit.php?post_type=movies&movie-genre={$term->slug}'> " . esc_html(sanitize_term_field('name', $term->name, $term->term_id, $taxonomy, 'edit')) . "</a>";
				echo join( ', ', $post_terms );
			}
			else echo '<i>No terms.</i>';
		break;
	default:
			break;
		} // end switch
	}	