<script>
jQuery(document).ready(function() {
 
	// Uploading files
	
	jQuery('#upload_imgbanner_button').click(function(event) {
		var file_frame;
		event.preventDefault();
		// If the media frame already exists, reopen it.
		if ( file_frame ) {
			file_frame.open();
			return;
		}
		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
			title: jQuery( this ).data( 'uploader_title' ),
			button: {
			text: jQuery( this ).data( 'uploader_button_text' ),
			},
			multiple: false // Set to true to allow multiple files to be selected
		});
		// When an image is selected, run a callback.
		file_frame.on( 'select', function() {
			// We set multiple to false so only get one image from the uploader
			attachment = file_frame.state().get('selection').first().toJSON();
			// Do something with attachment.id and/or attachment.url here
			//alert (attachment.url);
			jQuery('#banner').val(attachment.url);
		});
		// Finally, open the modal
		file_frame.open();
	});
	

 
});
</script>
<div class="wrap">
	<div id="lbg_logo">
			<h2>Manage Banners - Add New Banner</h2>
 	</div>

    <form method="POST" enctype="multipart/form-data" id="form-add-playlist-record">
		<table class="wp-list-table widefat fixed pages" cellspacing="0">
		  <tr>
		    <td align="left" valign="middle" width="35%">&nbsp;</td>
		    <td align="left" valign="middle" width="65%"><a href="?page=LBG_AUDIO8_HTML5_SHOUTCAST_Manage_Banners" style="padding-left:25%;">Back to Manage Banners</a></td>
		  </tr>
		  <tr>
		    <td width="25%" align="right" valign="middle" class="row-title">Banner Title*</td>
		    <td width="77%" align="left" valign="top"><input name="bannerTitle" type="text" id="bannerTitle" size="80" value="<?php echo $_POST['bannerTitle']?>" /></td>
		  </tr>
		  <tr>
		    <td align="right" valign="middle"><span class="row-title">Banner Image*</span></td>
		    <td align="left" valign="top"><input name="banner" type="text" id="banner" size="80" value="<?php echo $_POST['banner']?>" />
		      <input name="upload_imgbanner_button" type="button" id="upload_imgbanner_button" value="Upload Image" />
		      <br />
		      Enter an URL or upload an image</td>
	      </tr>
	      <tr>
		    <td align="right" valign="top" class="row-title">Banner link</td>
		    <td align="left" valign="top"><input name="bannerLink" type="text" size="80" id="bannerLink" value="<?php echo $_POST['bannerLink'];?>"/></td>
		    </tr>		    
		  <tr>
		  <tr>
		    <td colspan="2" align="left" valign="middle">*Required fields</td>
		  </tr>
		  <tr>
		    <td colspan="2" align="center" valign="middle"><input name="Submit" id="Submit" type="submit" class="button-primary" value="Add New"></td>
		  </tr>
		</table>    
  </form>






</div>				