<?php

/**
 *  generic settings
 */
class GravityGenericSettingsPage{
	
	private $optionsGroup;
	function __construct($optsGroup) {
		$this->optionsGroup = $optsGroup;
		add_action('admin_init', array($this, 'registerSettingsGroups'));
	}
	
	//register settings group
	public function registerSettingsGroups(){
		register_setting($this->optionsGroup, $this->optionsGroup);
	}	
	
	//get option group
	protected function getOptionGroup(){
		return $this->optionsGroup;
	}	
}


/**
 * RXOptionPage
 */
class GravityOptionPage extends GravityGenericSettingsPage {
	
	public function settings_page(){
		$options = get_option($this->getOptionGroup());							
		?>
		<div class="spacer10"></div>
		<form method="post" action="options.php">
			<?php settings_fields($this->getOptionGroup()); ?>				
		  
		  <!--options wrapper-->
		  <div id="optionsWrapper">	
		  	<h1 class="optionsMainTitle">Parallax Gravity Options</h1>

		  	<!--re-write-->
		  	<div class="whiteOptionBox">
		  		<h2 class="optionsSecondTitle">Re-Write slug</h2>
		  		<div class="hLineTitle"></div>
		  		<p class="sk_notice"><strong>NOTE!</strong> The re-write slug will affect the way permalinks look, ex: http://website.com/slug/item-name. If you change the slug, in order the changes to take effect, go to Administration Panels > Settings > Permalinks, change the permalink structure to a different structure, save the changes, and change it back to the desired structure.</p>
		  		<p class="sk_notice"><strong>NOTE!</strong> Do not add spaces within the slug! Make sure you do not have the same slug as the slug of a static page.</p>		  		
		  		<?php
		  			$skReWriteSlug = (isset($options['skReWriteSlug']))?$options['skReWriteSlug']:'gravity-landing';
		  		?>
		  		<input type="text" name="<?php echo $this->getOptionGroup();?>[skReWriteSlug]" value="<?php echo $skReWriteSlug;?>" />
		  	</div>
		  	<!--/re-write-->

			<p class="submit">
				<input type="submit" class="button-primary pull-right" value="<?php _e('Save Changes', GRP_PLUGIN_TEXTDOMAIN) ?>" />
	        </p>		  	

		</form>		
		
		<?php
	}






	public function documentation_page(){								
		?>
		<div class="spacer10"></div>

		  <!--options wrapper-->
		  <div id="optionsWrapper">	
		  	<h1 class="optionsMainTitle">Parallax Gravity Documentation</h1>

		  	<!--re-write-->
		  	<div class="whiteOptionBox">
		  		<h2 class="optionsSecondTitle">Usage overview</h2>
		  		<div class="hLineTitle"></div>
		  		<p>Parallax Gravity is a WordPress plugin that allows you to create unlimited landing pages. With Parallax Gravity you can add multiple sections within each page, for each section you can set a background, add any type of content including shortcodes from third party plugins and much more.</p>
		  		<ul style="list-style-type: decimal;padding-left: 20px;">
		  			<li>Go to Admin > Parallax Gravity > New Landing Page</li>
		  			<li>Add sections, than add content for each section, you can change the section's order just by drag and drop.</li>		  					  			
		  		</ul>
		  	</div>
		  	<!--/re-write-->
		  
	  	

		  	<!--shortcodes-->
		  	<div class="whiteOptionBox">
		  		<h2 class="optionsSecondTitle">Available Shortcodes</h2>
		  		<div class="hLineTitle"></div>
		  		<p class="sk_notice"><strong>NOTE!</strong> Below you can find available Shortcodes for the Parallax Gravity Lite version, check out the <a target="_blank" href="http://www.sakuraplugins.com/parallax-gravity-wordpress-landing-page-builder/">PRO VERSION</a> which includes additional shortcodes, parallax module, menu support, custom CSS support, Google Analytics Integration, Dectivate/Redirect support, other premium plugins included and much more.</p>	  		
		  		<ul>
		  			<li>feature</li>
		  		</ul>


		  		<h3 class="shortcodeTitle">[sk_row]</h3>		  		
		  		<div class="skOptionsContent">
                    <p class="sk_notice">NOTE! Within the row you should add one half and one third shortcodes.</p>
                    <p><b>Usage example</b></p>
                    <div class="shortcodeInfoBox">[sk_row]content here[/sk_row]</div>                 
		  		</div>

		  		<!--one half-->
		  		<h3 class="shortcodeTitle">[sk_one_half]</h3>		  		
		  		<div class="skOptionsContent">
                    <p><b>Usage example</b> - Create two columns</p>
                    <div class="shortcodeInfoBox">

[sk_row]
[sk_one_half]content1[/sk_one_half]
[sk_one_half]content2[/sk_one_half]
[/sk_row]	

					</div>                 
		  		</div>
		  		<!--/one half-->


		  		<!--one third-->
		  		<h3 class="shortcodeTitle">[sk_one_third]</h3>		  		
		  		<div class="skOptionsContent">
                    <p><b>Usage example</b> - Create three columns</p>
                    <div class="shortcodeInfoBox">

[sk_row]
[sk_one_third]content1[/sk_one_third]
[sk_one_third]content2[/sk_one_third]
[sk_one_third]content3[/sk_one_third]
[/sk_row]	

					</div>                 
		  		</div>	
		  		<!--/one third-->



		  		<!--two thirds-->
		  		<h3 class="shortcodeTitle">[sk_two_thirds]</h3>		  		
		  		<div class="skOptionsContent">
                    <p><b>Usage example</b> - Create two columns (2/3 and 1/3) </p>
                    <div class="shortcodeInfoBox">

[sk_row]
[sk_two_thirds]content1[/sk_two_thirds]
[sk_one_third]content2[/sk_one_third]
[/sk_row]	

					</div>                 
		  		</div>	
		  		<!--/two thirds-->		  			  		

		  	</div>		  	
		  	<!--/shortcodes-->		        		        

	      </div>
	      <!--options wrapper-->
		
		<?php
	}














}


?>