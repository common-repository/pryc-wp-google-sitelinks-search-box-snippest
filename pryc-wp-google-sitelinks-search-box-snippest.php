<?php
/*
 * Plugin Name: PRyC WP: Google Sitelinks Search Box
 * Plugin URI: http://PRyC.pl
 * Description: Plugin add to homepage code required to activate new Sitelinks Search Box @ Google search
 * Author: PRyC
 * Author URI: http://PRyC.pl
 * Version: 1.0.7
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

 
if ( ! defined( 'ABSPATH' ) ) exit; 
 
/* CODE: */

function pryc_wp_google_sitelinks_search_box_snippet() {
	if(is_home()) {
		$site_url = network_site_url('/');
		#echo $site_url;
		
		?>
		<!-- PRyC WordPress: Google Sitelinks Search Box snippet: -->
		<script type="application/ld+json">
		{
		   "@context":"http://schema.org",
		   "@type":"WebSite",
		   "url": "<?php echo $site_url ?>",
		   "potentialAction": {
			 "@type":"SearchAction",
			 "target": "<?php echo $site_url ?>?s={search_term}",
			 "query-input": "required name=search_term"
		   }            
		}
		</script>   	
		<!-- /PRyC WordPress: Google Sitelinks Search Box snippet -->  	
		<?php
	}
}
add_action('wp_head', 'pryc_wp_google_sitelinks_search_box_snippet');


/* END */

