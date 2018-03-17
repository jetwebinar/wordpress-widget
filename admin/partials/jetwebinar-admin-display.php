<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.jetwebinar.com
 * @since      1.0.0
 *
 * @package    Jetwebinar
 * @subpackage Jetwebinar/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h1>JetWebinar Registration Widget Integration</h1>
 <form method="post" action="options.php">
 <?php settings_fields( 'jw-settings' ); ?>
 <?php do_settings_sections( 'jw-settings' ); ?>
<table class="form-table">
	<tbody>
	<tr>
		<th scope="row"><label for="blogname">Website URL</label></th>
		<td>
			<input name="jw_url" type="text" id="jw_url" value="<?=get_option("jw_url")?>" placeholder="{account}.jetwebinar.com" class="regular-text">
			<p class="description" id="tagline-description">Enter in the domain name of your JetWebinar account ({account}.jetwebinar.com) or your CNAME address.</p>
		</td>
	</tr>
	</tbody>
</table>
    <?php submit_button(); ?><br /><br>
    <h2>Usage Instructions</h2>
<textarea class="regular-text" readonly style="width:600px;height:200px">
Shortcode To Embed A Fixed Registration Widget:

[jetwebinar id=123]

*Replace '123' with the ID of the webinar (accessible in the Registration Page tab)
</textarea>
    