<?php
/*
Plugin Name:Current Job Opening
Description: This is a simple plugin for wordpress for Current Job Opening
Version: 1.0.0
Author: Shristi Jha
*/


//constant

define("PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
define("PLUGIN_URL", plugins_url());
define("PLUGIN_VERSION", "1.0.0");
function cpt_plugin() {
	$args = array(
		'public'    => true,
		'label'     => 'Current Job Opening',
		'menu_icon' => 'dashicons-admin-post',
		'has_archive' => true,
		'supports'=>array('title', 'editor', 'thumbnail', 'excerpt', 'comments')
	);
	register_post_type( 'current job opening', $args );
}
add_action( 'init', 'cpt_plugin' );


function responsibilities_register_metabox()
{


//CPT

	add_meta_box("responsibilities-cpt-id", "Responsibilities", "responsibilities_cpt_function", "current job opening", "normal", "low");
	add_meta_box("skills-cpt-id", "Required Skills", "skills_cpt_function", "current job opening", "normal", "low");

	add_meta_box("qualification-cpt-id", "Qualifications", "qualification_cpt_function", "current job opening", "normal", "low");

	add_meta_box("emptype-cpt-id", "Employee Type", "emptype_cpt_function", "current job opening", "normal", "low");

	add_meta_box("joblocation-cpt-id", "Job Location", "jobloc_cpt_function", "current job opening", "normal", "low");

	add_meta_box("exp-cpt-id", "Experience", "exp_cpt_function", "current job opening", "normal", "low");

	add_meta_box("sal-cpt-id", "Base Salary", "sal_cpt_function", "current job opening", "normal", "low");
}
add_action("add_meta_boxes", "responsibilities_register_metabox");


//Responsibility

//this is the callback function of cpt metabox
function responsibilities_cpt_function($post)
{
	wp_nonce_field(basename(__FILE__), "responsibilities_cpt_nonce");
	?>
	<!-- <p>This is custom owt metabox for custom post type</p> -->
	<div>
		<label for="txtresponsibilities">Responsibilities</label>
		<?php 
		$responsibilities_title_name=get_post_meta($post->ID, "res_name", true);
		?>
		<textarea rows="5"  name="txtresponsibilities" value="<?php echo $responsibilities_title_name; ?>" placeholder="Responsibilities Name"><?php echo $responsibilities_title_name; ?></textarea>
	</div>
	<?php
}
add_action("save_post", "responsibilities_save_metabox_data", 10, 2);

function responsibilities_save_metabox_data($post_id, $post)
{

	//we have verified the nonce
	if(!isset($_POST['responsibilities_cpt_nonce']) || !wp_verify_nonce($_POST['responsibilities_cpt_nonce'],basename(__FILE__))){
		return $post_id;
	}

//verifying slug value
	$post_slug= "currentjobopening";
	if($post_slug != $post->post_type){
		return;
	}
//save value to db field
	$res_name='';
	if(isset($_POST['txtresponsibilities']))
	{
		$res_name=sanitize_text_field($_POST['txtresponsibilities']);
	}
	else{
		$res_name='';
	}
	update_post_meta($post_id, "res_name", $res_name);
}



//SkillS 

//this is the callback function of custom post type metabox
function skills_cpt_function()
{
	// wp_nonce_field(basename(__FILE__), "skills_cpt_nonce");
	
	global $post;

	$mytext =   get_post_meta($post->ID, 'skills_title_name', true);
	?>
	<div class="input_fields_wrap">
		<a class="add_field_button button-secondary">Add Field</a>
		<?php
		if(isset($mytext) && is_array($mytext)) {
			$i = 1;
			$output = '';

			foreach($mytext as $text){
            //echo $text;
				$output = '<div><input type="text" name="txtskill[]" value="' . $text . '">';
				if( $i !== 1 && $i > 1 ) $output .= '<a href="#" class="remove_field">Remove</a>';
				else $output .= '</div>';

				echo $output;
				$i++;
			}
		} else {
			echo '<div><input type="text" name="txtskill[]"></div>';
		}
		?>
		</div>	<?php
	}
	add_action("save_post", "skills_save_metabox_data", 10, 2);

	function skills_save_metabox_data($post_id, $post)
	{

	//we have verified the nonce
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our current user can't edit this post, bail
		if( !current_user_can( 'edit_post' ) ) return;

    // now we can actually save the data
		$allowed = array(
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
    // If any value present in input field, then update the post meta
		if(isset($_POST['txtskill'])) {
        // $post_id, $meta_key, $meta_value
			update_post_meta( $post_id, 'skills_title_name', $_POST['txtskill'] );
		}

	}


//Qualification 

//this is the callback function of cpt metabox
	function qualification_cpt_function($post)
	{
		global $post;

		$mytext =   get_post_meta($post->ID, 'qualification_title_name', true);
		?>
		<div class="input_wrap">
			<a class="add_button button-secondary">Add Field</a>
			<?php
			if(isset($mytext) && is_array($mytext)) {
				$i = 1;
				$output = '';

				foreach($mytext as $text){
            //echo $text;
					$output = '<div><input type="text" name="txtqualification[]" value="' . $text . '">';
					if( $i !== 1 && $i > 1 ) $output .= '<a href="#" class="remove_field_quali">Remove</a>';
					else $output .= '</div>';

					echo $output;
					$i++;
				}
			} else {
				echo '<div><input type="text" name="txtqualification[]"></div>';
			}
			?>
			</div>	<?php	
		}
		add_action("save_post", "qualifications_save_metabox_data", 10, 2);

		function qualifications_save_metabox_data($post_id, $post)
		{

	//we have verified the nonce
			if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our current user can't edit this post, bail
			if( !current_user_can( 'edit_post' ) ) return;

    // now we can actually save the data
			$allowed = array(
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
    // If any value present in input field, then update the post meta
			if(isset($_POST['txtqualification'])) {
        // $post_id, $meta_key, $meta_value
				update_post_meta( $post_id, 'qualification_title_name', $_POST['txtqualification'] );
			}

		}


//Employee Type 

//this is the callback function of cpt metabox
		function emptype_cpt_function($post)
		{
			wp_nonce_field(basename(__FILE__), "emptype_cpt_nonce");
			$empans =   get_post_meta($post->ID, 'emptype_title_name', true);
			?>
			<!-- <p>This is custom owt metabox for custom post type</p> -->
			<div>

					<div class="fields">
        <select name="txtemptype">
            <option value="">Select Option</option>
            <option value="Full-time" <?php if($empans == 'Full-time') echo 'selected'; ?>>Full-time</option>
            <option value="Part-time" <?php if($empans == 'Part-time') echo 'selected'; ?>>Part-time</option>
            
        </select>
    </div>
			</div>
			<?php
		}
		add_action("save_post", "emptype_save_metabox_data", 10, 2);

		function emptype_save_metabox_data($post_id, $post)
		{

	//we have verified the nonce
			if(!isset($_POST['emptype_cpt_nonce'])|| !wp_verify_nonce($_POST['emptype_cpt_nonce'],basename(__FILE__))){
				return $post_id;
			}

//verifying slug value
			$post_slug= "currentjobopening";
			if($post_slug != $post->post_type){
				return;
			}
//save value to db field
			$emptype_name='';
			if(isset($_POST['txtemptype']))
			{
				$emptype_name=sanitize_text_field($_POST['txtemptype']);
			}
			else{
				$emptype_name='';
			}
			update_post_meta($post_id, "emptype_title_name", $emptype_name);
		}


//Job Location

//this is the callback function of cpt metabox
		function jobloc_cpt_function($post)
		{
			wp_nonce_field(basename(__FILE__), "jobloc_cpt_nonce");
			?>
			<!-- <p>This is custom owt metabox for custom post type</p> -->
			<div>
				<label for="txtjobloc">Job Location</label>
				<?php 
				$jobloc=get_post_meta($post->ID, "jobloc_title_name", true);
				?>
				<input type="text" name="txtjobloc" value="<?php echo $jobloc; ?>" placeholder="Job Location" >
			</div>
			<?php
		}
		add_action("save_post", "jobloc_save_metabox_data", 10, 2);

		function jobloc_save_metabox_data($post_id, $post)
		{

	//we have verified the nonce
			if(!isset($_POST['jobloc_cpt_nonce'])|| !wp_verify_nonce($_POST['jobloc_cpt_nonce'],basename(__FILE__))){
				return $post_id;
			}

//verifying slug value
			$post_slug= "currentjobopening";
			if($post_slug != $post->post_type){
				return;
			}
//save value to db field
			$jobloc_name='';
			if(isset($_POST['txtjobloc']))
			{
				$jobloc_name=sanitize_text_field($_POST['txtjobloc']);
			}
			else{
				$jobloc_name='';
			}
			update_post_meta($post_id, "jobloc_title_name", $jobloc_name);
		}



//Experience

//this is the callback function of cpt metabox
		function exp_cpt_function($post)
		{
			wp_nonce_field(basename(__FILE__), "exp_cpt_nonce");
			?>
			<!-- <p>This is custom owt metabox for custom post type</p> -->
			<div>
				<label for="txtexp">Experience</label>
				<?php 
				$exp=get_post_meta($post->ID, "exp_title_name", true);
				?>
				<input type="text" name="txtexp" value="<?php echo $exp; ?>" placeholder="Experience" >
			</div>
			<?php
		}
		add_action("save_post", "exp_save_metabox_data", 10, 2);

		function exp_save_metabox_data($post_id, $post)
		{

	//we have verified the nonce
			if(!isset($_POST['exp_cpt_nonce'])|| !wp_verify_nonce($_POST['exp_cpt_nonce'],basename(__FILE__))){
				return $post_id;
			}

//verifying slug value
			$post_slug= "currentjobopening";
			if($post_slug != $post->post_type){
				return;
			}
//save value to db field
			$exp_name='';
			if(isset($_POST['txtexp']))
			{
				$exp_name=sanitize_text_field($_POST['txtexp']);
			}
			else{
				$exp_name='';
			}
			update_post_meta($post_id, "exp_title_name", $exp_name);
		}


//Salary

//this is the callback function of cpt metabox
		function sal_cpt_function($post)
		{
			wp_nonce_field(basename(__FILE__), "sal_cpt_nonce");
			?>
			<!-- <p>This is custom owt metabox for custom post type</p> -->
			<div>
				<label for="txtsal">Base Salary</label>
				<?php 
				$sal=get_post_meta($post->ID, "sal_title_name", true);
				?>
				<input type="text" name="txtsal" value="<?php echo $sal; ?>" placeholder="Base Salary" >
			</div>
			<?php
		}
		add_action("save_post", "sal_save_metabox_data", 10, 2);

		function sal_save_metabox_data($post_id, $post)
		{

	//we have verified the nonce
			if(!isset($_POST['sal_cpt_nonce'])|| !wp_verify_nonce($_POST['sal_cpt_nonce'],basename(__FILE__))){
				return $post_id;
			}

//verifying slug value
			$post_slug= "currentjobopening";
			if($post_slug != $post->post_type){
				return;
			}
//save value to db field
			$sal_name='';
			if(isset($_POST['txtsal']))
			{
				$sal_name=sanitize_text_field($_POST['txtsal']);
			}
			else{
				$sal_name='';
			}
			update_post_meta($post_id, "sal_title_name", $sal_name);
		}

		add_filter( 'single_template', 'override_single_template' );
		function override_single_template( $single_template ){
			global $post;

			$file = ABSPATH . 'wp-content/plugins/jobopening/single-currentjobopening.php';

			if( file_exists( $file ) ) $single_template = $file;

			return $single_template;
		}

// table generation code
		function custom_job_table()
		{
			global $wpdb;
			require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
			if(count($wpdb->get_var('"SHOW TABLES LIKE "wp_current_opening"'))==0){
				$sql_query_to_create_table="CREATE TABLE `wp_current_opening` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`name` varchar(40) NOT NULL,
				`phone` varchar(40) NOT NULL,
				`email` varchar(40) NOT NULL,
				`linkedin` varchar(40) NOT NULL,
				`college` varchar(40) NOT NULL,
				`education` varchar(40) NOT NULL,
				`technology` varchar(40) NOT NULL,
				`experience` varchar(40) NOT NULL,
				`current_comp` varchar(40) NOT NULL,
				`current_sal` varchar(40) NOT NULL,
				`expected_sal` varchar(40) NOT NULL,
				`notice` varchar(40) NOT NULL,
				`reason` varchar(40) NOT NULL,
				`hobbies` varchar(40) NOT NULL,
				`branch` varchar(40) NOT NULL,
				`resume` varchar(40) NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			dbDelta($sql_query_to_create_table);
		}
	}
	register_activation_hook(__FILE__, "custom_job_table");

	function job_open()
	{
		ob_start();
		require("post.php");
		return ob_get_clean();
	}
	add_shortcode("my_shdcode", "job_open" );


	function job_apply()
	{
		ob_start();
		require("apply.php");
		return ob_get_clean();
	}
	add_shortcode("my_shdcode_jobapply", "job_apply" );

	function assets()
	{
		wp_enqueue_style("my-style", PLUGIN_URL."/jobopening/assets/css/style.css", "", PLUGIN_VERSION);
		wp_enqueue_style("chosen-style", PLUGIN_URL."/jobopening/assets/css/chosen.min.css", "", PLUGIN_VERSION);

		wp_enqueue_script("my-script", PLUGIN_URL."/jobopening/assets/js/script.js", "", PLUGIN_VERSION, true);
		wp_enqueue_script("val-js", PLUGIN_URL."/jobopening/assets/js/jquery.validate.min.js", "", PLUGIN_VERSION, true);
		wp_enqueue_script("swal-js", PLUGIN_URL."/jobopening/assets/js/sweetalert.min.js", "", PLUGIN_VERSION, true);

		wp_enqueue_script("chosen-js", PLUGIN_URL."/jobopening/assets/js/chosen.jquery.min.js", "", PLUGIN_VERSION, true);


	}
	add_action("init","assets");


	add_action('admin_menu', 'plugin_information');

	function plugin_information(){

		add_submenu_page(
                     'edit.php?post_type=currentjobopening', //$parent_slug
                     'Plugin Information',  //$page_title
                     'Plugin Information',        //$menu_title
                     'manage_options',           //$capability
                     'plugin_information',//$menu_slug
                     'plugin_info_func'//$function
                 );

	}


	function plugin_info_func() {

		echo '<h2>Here is the shortcode for display post [my_shdcode]. Paste this code into your page. </h2>';
		echo '<h2>Here is the shortcode for display Apply form [my_shdcode_jobapply]. Paste this code into your page. </h2>';

	}

	add_action( 'wp_ajax_nopriv_post_word_count', 'post_word_count' );
	add_action( 'wp_ajax_post_word_count', 'post_word_count' );
	function post_word_count() {

		global $wpdb;

		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$linkedin = $_POST['linkedin'];
		$college = $_POST['college'];
		$education = $_POST['education'];
		$technology = $_POST['technology'];
		$experience = $_POST['experience'];
		$current_comp = $_POST['current_comp'];
		$current_sal = $_POST['current_sal'];
		$expected_sal = $_POST['expected_sal'];
		$notice = $_POST['notice'];
		$reason = $_POST['reason']; 
		$hobbies = $_POST['hobbies'];
		$branch = $_POST['branch'];
		$upload = wp_upload_bits( $_FILES['resume']['name'], null, file_get_contents( $_FILES['resume']['tmp_name'] ) );
		$wp_filetype = wp_check_filetype( basename( $upload['file'] ), null );
		$wp_upload_dir = wp_upload_dir();
		$attachment = array(
			'guid' => $wp_upload_dir['baseurl'] . _wp_relative_upload_path( $upload['file'] ),
			'post_mime_type' => $wp_filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename( $upload['file'] )),
			'post_content'   => '',
			'post_status'    => 'inherit'
		);
		$attach_id = wp_insert_attachment( $attachment, $upload['file']);
		require_once(ABSPATH . 'wp-admin/includes/image.php');
		$attach_data = wp_generate_attachment_metadata( $attach_id, $upload['file'] );
		wp_update_attachment_metadata( $attach_id, $attach_data );



		$value=$wpdb->insert("wp_current_opening", array(
			'name' => $name,
			'phone' => $phone,
			'email' => $email,
			'linkedin' => $linkedin,
			'college' => $college,
			'education' => $education,
			'technology' => $technology,
			'experience' => $experience,
			'current_comp' => $current_comp,
			'current_sal' => $current_sal,
			'expected_sal' => $expected_sal,
			'notice' => $notice,
			'reason' => $reason,
			'hobbies' => $hobbies,
			'branch' => $branch,
			'resume' => $attach_id,
		));
		echo $value;

		die();
	}


