<?php
if (!function_exists('text_color_styles'))  
{
	function text_color_styles()
	{
		echo '<style type="text/css" >';
		$color_value 	= get_theme_mod('header_textcolor', '');
		$append_color 	= sprintf( 'color: %s;',  $color_value );
		if ( $color_value ) 
		{
			echo "\n" . '#top-header a , .openmenu-nav{' . $append_color . '}';
		}
		echo "\n". "</style>". "\n";
	}
}
add_action( 'wp_head', 'text_color_styles' );

if (!function_exists('grit_paragraph_font_family'))  
{
	function grit_paragraph_font_family()
	{
		echo '<style type="text/css">';
		$fontfamily_value 	= get_theme_mod('grit_paragraph_font', '');
		$append_family 		= sprintf( 'font-family: %s;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) 
		{
			echo "\n" .'#about-us-block p{'.$append_family.'}' ."\n".'#process-block p{'.$append_family.'}'."\n".'#process-block process-content p{'.$append_family.'}'."\n".'#testimonials-block p{'.$append_family.'}'."\n".'.widget ul li{'.$append_family.'}'."\n".'.widget_recent_entries ul li .media-body p a{'.$append_family.'}'."\n".'.widget ul li{'.$append_family.'}'."\n".'.widget{'.$append_family.'}'."\n" .'.single .single-post p{'.$append_family.'}';
		}
		echo "\n". "</style>". "\n";
	}
}// Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_paragraph_font_family' );

if (!function_exists('grit_paragraph_font_color'))  
{
	function grit_paragraph_font_color()
	{
		echo '<style type="text/css" >';
		$color_value 		= get_theme_mod('grit_paragraph_font_color', '');
		$append_color 		= sprintf( 'color: %s !important;',  $color_value );
			// Output the styles.
		if ( $color_value ) 
		{
			echo "\n" . '#about-us-block p{'.$append_color.'}' ."\n".'#process-block p{'.$append_color.'}'."\n".'#process-block .process-content p{'.$append_color.'}'."\n".'#testimonials-block p{'.$append_color.'}'."\n" .'.single .single-post p{'.$append_color.'}' ;
		}
		echo "\n". "</style>". "\n";
	}
} // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_paragraph_font_color' );

if (!function_exists('grit_paragraph_font_size_styles')) 
{
	function grit_paragraph_font_size_styles()
	{
		echo '<style type="text/css" >';
		$fontparagraphfamily_value 	= get_theme_mod('grit_paragraph_font_size', '');
		$append_para_family_font 	= sprintf( 'font-size: %spx !important;',  $fontparagraphfamily_value );
			// Output the styles.
		if ( $fontparagraphfamily_value ) 
		{
			echo "\n" . '.single .single-post p{' . $append_para_family_font . '}';
		}
		echo "\n". "</style>". "\n";
	}
}// Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_paragraph_font_size_styles' );

if (!function_exists('grit_font_family'))  
{
	function grit_font_family()
	{
		echo '<style type="text/css" >';
		$fontfamily_value 	= get_theme_mod('grit_font_family', '');
		$append_family 		= sprintf( 'font-family: %s;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) 
		{
			echo "\n" . 'h1{' . $append_family . '}'."\n".'h2{'.$append_family.'}'."\n".'h3{'.$append_family.'}'.
                "\n".'h4{'.$append_family.'}'."\n".'h5{'.$append_family.'}'."\n".'h6{'.$append_family.'}' ;
		}
		echo "\n". "</style>". "\n";
	}
}// Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_font_family' );

if (!function_exists('grit_font_size_styles'))  
{
	function grit_font_size_styles()
	{
		echo '<style type="text/css" >';
		$fontfamily_value 	= get_theme_mod('grit_font_size', '');
		$append_family_font = sprintf( 'font-size: %spx !important;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) 
		{
			echo "\n" . 'h1{' . $append_family_font . '}'."\n".'h2{'.$append_family_font.'}'."\n".'h3{'.$append_family_font.'}'.
                "\n".'h4{'.$append_family_font.'}'."\n".'h5{'.$append_family_font.'}' ;
		}
		echo "\n". "</style>". "\n";
	}
} // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_font_size_styles' );

if (!function_exists('grit_font_color'))  
{
	function grit_font_color()
	{
		echo '<style type="text/css" id="rijo-css">';
		$color_value 		= get_theme_mod('grit_font_color', '');
		$append_color 		= sprintf( 'color: %s;',  $color_value );
			// Output the styles.
		if ( $color_value ) 
		{
			echo "\n" . 'h1{' . $append_color . '}'."\n".'h2{'.$append_color.'}'."\n".'h3{'.$append_color.'}'.
                "\n".'h4{'.$append_color.'}'."\n".'h5{'.$append_color.'}' ."\n".'h6{'.$append_color.'}'."\n".'#process-block .process-content h6{'.$append_color.'}'."\n".'#latest-news-block h2{'.$append_color.'}';
		}
		echo "\n". "</style>". "\n";
	}
}// Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_font_color' );

if (!function_exists('grit_accent_color'))  
{
	function grit_accent_color()
	{
		echo '<style type="text/css" id="rijo-css">';
		$color_value 		= get_theme_mod('grit_accent_color', '');
		$append_color 		= sprintf( 'background-color: %s;border: 2px %s solid',  $color_value, $color_value );
        $icon_color 		= sprintf( 'color: %s', $color_value );
        $process_color 		= sprintf( 'background: %s', $color_value );
		$button_color 		= sprintf( 'background: %s;border: 1px %s solid',  $color_value, $color_value );
			// Output the styles.
		if ( $color_value ) 
		{
			echo "\n" . '.section-title a:hover{' . $append_color . '}'. "\n" .  'ul.about-features li:hover i{' . $icon_color . '}' ."\n" . '#process-block .nav-tabs > li.active i{'.$icon_color.'}' ."\n". '#process-block .nav > li > a:hover i{'.$icon_color.'}' ."\n". '#process-block .nav > li > a:hover i:after{'.$process_color.'}'."\n".'#process-block .nav-tabs > li.active i:after{'.$process_color.'}'."\n" . '#home-contact-block a{' . $button_color . '}'."\n".'#process-block .process-content a{'.$icon_color.'}'."\n".'blockquote {border-left-color:'. $color_value.'}'."\n".'.author-box .author-box-title{'.$icon_color.'}'."\n".'.author-box .author-box-title a{'.$process_color.'}'."\n".'.single .single-post ul li:before, .page .page-block ul li:before{'.$process_color.'}'."\n".'aside .widget_search button{'.$process_color.'}'."\n" .'p a{'.$icon_color.'}' ;
		}
		echo "\n". "</style>". "\n";
	}
}// Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_accent_color' );

if (!function_exists('grit_header_background'))  
{
	function grit_header_background()
	{
		echo '<style type="text/css" id="rijo-css">';
		$color_value 		= get_theme_mod('grit_header_background_color', '');
        $opacity_value 		= get_theme_mod('grit_transparnt', '');
		$append_color 		= sprintf( 'background-color: %s;',  $color_value );
        $append_opacity 	= sprintf( 'opacity: %s;',  $opacity_value );
			// Output the styles.
		if ( $color_value ) 
		{
			echo "\n" . '#home-banner:before{' . $append_color . '}'. "\n" . '#home-banner:before{' . $append_opacity . '}';
		}
		echo "\n". "</style>". "\n";
	}
} // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_header_background' );

if (!function_exists('grit_count_background_color'))  
{
	function grit_count_background_color()
	{
		echo '<style type="text/css" id="rijo-css">';
		$color_value 		= get_theme_mod('grit_counter_background_color', '');
        $opacity_value 		= get_theme_mod('grit_counter_transparnt', '');
		$append_color 		= sprintf( 'background: %s;',  $color_value );
        $append_opacity 	= sprintf( 'opacity: %s;',  $opacity_value );
			// Output the styles.
		if ( $color_value ) 
		{
			echo "\n" . '#company-counter:after{' . $append_color . '}'. "\n" . '#company-counter:after{' . $append_opacity . '}';
		}
		echo "\n". "</style>". "\n";
	}
}// Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_count_background_color' );