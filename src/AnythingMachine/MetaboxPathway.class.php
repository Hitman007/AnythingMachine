<?php

namespace AnythingMachine;

//"Meta boxes" appear in the add new and edit post admin pages.
class MetaboxPathway{
	
	public function __construct() {
		add_action( 'add_meta_boxes_idea', array($this, 'doAddMetaBox') );
	}
	
	public function doAddMetaBox(){
		add_meta_box('pathway-meta-box', __( 'Pathways'),array( $this,'echoPathwaySelector'), 'idea', 'side', 'high');

	}
	
	public function echoPathwaySelector(){
		echo "working <input type = 'hidden' value = 'xxx' name = 'yyy' id = 'yyy' />";
		
		$args=array(
				'post_type' => 'pathway'
		);
		
		$childpages = new \WP_Query($args);
		
		if($childpages->post_count > 0) { /* display the children content  */
			while ($childpages->have_posts()) {
				$childpages->the_post();
				echo "" . get_the_title()."<br />";
			}
		}
		wp_reset_query();
		global $post;
		$this_post_id = $post->ID;
		echo ("ID: $this_post_id");
	}
}