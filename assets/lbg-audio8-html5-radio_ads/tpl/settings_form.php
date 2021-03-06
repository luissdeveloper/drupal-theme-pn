<script>
jQuery(document).ready(function() {

	// Uploading files

	jQuery('#upload_noImageAvailable_button').click(function(event) {
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
			jQuery('#noImageAvailable').val(attachment.url);
			jQuery('#noImageAvailable_preview').attr('src',attachment.url);
		});
		// Finally, open the modal
		file_frame.open();
	});

});
</script>





<div class="wrap">
	<div id="lbg_logo">
			<h2>Player Settings for player: <span style="color:#FF0000; font-weight:bold;"><?php echo $_SESSION['xname']?> - ID #<?php echo $_SESSION['xid']?></span></h2>
 	</div>

	<div style="text-align:center; padding:0px 0px 20px 0px;"><img src="<?php echo plugins_url('images/icons/magnifier.png', dirname(__FILE__))?>" alt="add" align="absmiddle" /> <a href="javascript: void(0);" onclick="showDialogPreview(<?php echo strip_tags($_SESSION['xid'])?>)">Preview Player</a></div>

	<div id="previewDialog"><iframe id="previewDialogIframe" src="" width="100%" height="600" style="border:0;"></iframe></div>

  <form method="POST" enctype="multipart/form-data" id="form-player-settings">
	<script>
	jQuery(function() {
		var icons = {
			header: "ui-icon-circle-arrow-e",
			headerSelected: "ui-icon-circle-arrow-s"
		};
		jQuery( "#accordion" ).accordion({
			icons: icons,
			autoHeight: false
		});
	});
	</script>


<div id="accordion">
  <h3><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Settings</a></h3>
  <div style="padding:30px;">
	  <table class="wp-list-table widefat fixed pages" cellspacing="0">

		  <tr>
		    <td align="right" valign="top" class="row-title" width="35%">Player Name</td>
		    <td align="left" valign="top" width="65%"><input name="name" type="text" size="40" id="name" value="<?php echo $_SESSION['xname'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Skin Name</td>
		    <td align="left" valign="middle"><select name="skin" id="skin">
		      <option value="darkHover" <?php echo (($_POST['skin']=='darkHover')?'selected="selected"':'')?>>darkHover</option>
		      <option value="lightHover" <?php echo (($_POST['skin']=='lightHover')?'selected="selected"':'')?>>lightHover</option>
            </select></td>
	      </tr>

		  <tr>
		    <td align="right" valign="top" class="row-title">Player Height</td>
		    <td align="left" valign="middle"><input name="playerHeight" type="text" size="25" id="playerHeight" value="<?php echo $_POST['playerHeight'];?>"/>
		    px</td>
	    </tr>
			<tr>
		    <td align="right" valign="top" class="row-title">Title Width</td>
		    <td align="left" valign="middle"><input name="titleWidth" type="text" size="25" id="titleWidth" value="<?php echo $_POST['titleWidth'];?>"/>
		    p</td>
	    </tr>
			<tr>
		    <td align="right" valign="top" class="row-title">Player Background Color</td>
		    <td align="left" valign="middle"><input name="playerBackgroundColor" type="text" size="25" id="playerBackgroundColor" value="<?php echo $_POST['playerBackgroundColor'];?>" style="background-color:#<?php echo $_POST['playerBackgroundColor'];?>" />
            <script>
jQuery('#playerBackgroundColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            px</td>
	      </tr>
				<tr>
					<td align="right" valign="top" class="row-title">Player Background Opacity</td>
					<td align="left" valign="middle"><script>
				jQuery(function() {
				jQuery( "#playerBackgroundOpacity-slider-range-min" ).slider({
				range: "min",
				value: <?php echo $_POST['playerBackgroundOpacity'];?>,
				min: 0,
				max: 100,
				slide: function( event, ui ) {
					jQuery( "#playerBackgroundOpacity" ).val(ui.value );
				}
				});
				jQuery( "#playerBackgroundOpacity" ).val( jQuery( "#playerBackgroundOpacity-slider-range-min" ).slider( "value" ) );
				});
						</script>
									<div id="playerBackgroundOpacity-slider-range-min" class="inlinefloatleft" style="width:200px;"></div>
						<div class="inlinefloatleft" style="padding-left:20px;">%
							<input name="playerBackgroundOpacity" type="text" size="10" id="playerBackgroundOpacity" style="border:0; color:#000000; font-weight:bold;"/>
							</div></td>
				</tr>
		  <!--<tr>
		    <td align="right" valign="top" class="row-title">Responsive</td>
		    <td align="left" valign="middle"><select name="responsive" id="responsive">
		      <option value="true" <?php echo (($_POST['responsive']=='true')?'selected="selected"':'')?>>true</option>
		      <option value="false" <?php echo (($_POST['responsive']=='false')?'selected="selected"':'')?>>false</option>
		      </select></td>
	      </tr>    -->
		  <tr>
		    <td align="right" valign="top" class="row-title">Sticky</td>
		    <td align="left" valign="middle"><select name="sticky" id="sticky">
              <option value="true" <?php echo (($_POST['sticky']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['sticky']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
			<tr>
	 <td align="right" valign="top" class="row-title">Start Minified (it needs Sticky set to true)</td>
	 <td align="left" valign="middle"><select name="startMinified" id="startMinified">
				 <option value="true" <?php echo (($_POST['startMinified']=='true')?'selected="selected"':'')?>>true</option>
				 <option value="false" <?php echo (($_POST['startMinified']=='false')?'selected="selected"':'')?>>false</option>
			 </select></td>
</tr>
	    <tr>
		    <td align="right" valign="top" class="row-title">Auto Play</td>
		    <td align="left" valign="middle"><select name="autoPlay" id="autoPlay">
              <option value="true" <?php echo (($_POST['autoPlay']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['autoPlay']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Default 'No Image Available'</td>
		    <td align="left" valign="top"><input name="noImageAvailable" type="text" id="noImageAvailable" size="80" value="<?php echo $_POST['noImageAvailable']?>" /> <input name="upload_noImageAvailable_button" type="button" id="upload_noImageAvailable_button" value="Change Image" />
		      <br />
		      Enter an URL or upload an image<br />
              <div id="noImageAvailable_preview_div" style="padding:5px 0;"> <img src="<?php echo $_POST['noImageAvailable']?>" alt="" name="noImageAvailable_preview" id="noImageAvailable_preview" /> </div></td>
	      </tr>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Grab Artist Photo</td>
		    <td align="left" valign="middle"><select name="grabLastFmPhoto" id="grabLastFmPhoto">
              <option value="true" <?php echo (($_POST['grabLastFmPhoto']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['grabLastFmPhoto']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	      </tr>
          <tr>
		    <td align="right" valign="top" class="row-title">Grab Stream Name and Genre</td>
		    <td align="left" valign="middle"><select name="grabStreamnameAndGenre" id="grabStreamnameAndGenre">
              <option value="true" <?php echo (($_POST['grabStreamnameAndGenre']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['grabStreamnameAndGenre']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Show Volume</td>
		    <td align="left" valign="middle"><select name="showVolume" id="showVolume">
              <option value="true" <?php echo (($_POST['showVolume']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showVolume']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Initial Volume Value</td>
		    <td align="left" valign="middle"><script>
	jQuery(function() {
		jQuery( "#initialVolume-slider-range-min" ).slider({
			range: "min",
			value: <?php echo $_POST['initialVolume'];?>,
			min: 0,
			max: 1.01,
			step: 0.1,
			slide: function( event, ui ) {
				jQuery( "#initialVolume" ).val(ui.value );
			}
		});
		jQuery( "#initialVolume" ).val( jQuery( "#initialVolume-slider-range-min" ).slider( "value" ) );
	});
	        </script>
                <div id="initialVolume-slider-range-min" class="inlinefloatleft" style="width:200px;"></div>
		      <div class="inlinefloatleft" style="padding-left:20px;">
		        <input name="initialVolume" type="text" size="10" id="initialVolume" style="border:0; color:#000000; font-weight:bold;"/>
	          </div></td>
	    </tr>

		  <tr>
		    <td align="right" valign="top" class="row-title">Volume Off State Color</td>
		    <td align="left" valign="middle"><input name="volumeOffColor" type="text" size="25" id="volumeOffColor" value="<?php echo $_POST['volumeOffColor'];?>" style="background-color:#<?php echo $_POST['volumeOffColor'];?>" />
            <script>
jQuery('#volumeOffColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Volume On State Color</td>
		    <td align="left" valign="middle"><input name="volumeOnColor" type="text" size="25" id="volumeOnColor" value="<?php echo $_POST['volumeOnColor'];?>" style="background-color:#<?php echo $_POST['volumeOnColor'];?>" />
            <script>
jQuery('#volumeOnColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>

		 <tr>
		    <td align="right" valign="top" class="row-title">Show Title</td>
		    <td align="left" valign="middle"><select name="showTitle" id="showTitle">
              <option value="true" <?php echo (($_POST['showTitle']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showTitle']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	   </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Song Title - Text Color</td>
		    <td align="left" valign="middle"><input name="songTitleColor" type="text" size="25" id="songTitleColor" value="<?php echo $_POST['songTitleColor'];?>" style="background-color:#<?php echo $_POST['songTitleColor'];?>" />
            <script>
jQuery('#songTitleColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>
		 <tr>
		    <td align="right" valign="top" class="row-title">Show Radio Station</td>
		    <td align="left" valign="middle"><select name="showRadioStation" id="showRadioStation">
              <option value="true" <?php echo (($_POST['showRadioStation']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showRadioStation']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	   </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Radio Station - Text Color</td>
		    <td align="left" valign="middle"><input name="radioStationColor" type="text" size="25" id="radioStationColor" value="<?php echo $_POST['radioStationColor'];?>" style="background-color:#<?php echo $_POST['radioStationColor'];?>" />
            <script>
jQuery('#radioStationColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Image Border Color</td>
		    <td align="left" valign="middle"><input name="imageBorderColor" type="text" size="25" id="imageBorderColor" value="<?php echo $_POST['imageBorderColor'];?>" style="background-color:#<?php echo $_POST['imageBorderColor'];?>" />
            <script>
jQuery('#imageBorderColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>
           <tr>
             <td align="right" valign="top" class="row-title">Bars Color</td>
             <td align="left" valign="middle"><input name="barsColor" type="text" size="25" id="barsColor" value="<?php echo $_POST['barsColor'];?>" style="background-color:#<?php echo $_POST['barsColor'];?>" />
               <script>
jQuery('#barsColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
           </tr>
           <tr>
             <td align="right" valign="top" class="row-title">Show Gradient Over Bars</td>
             <td align="left" valign="middle"><select name="showGradientOverBars" id="showGradientOverBars">
               <option value="true" <?php echo (($_POST['showGradientOverBars']=='true')?'selected="selected"':'')?>>true</option>
               <option value="false" <?php echo (($_POST['showGradientOverBars']=='false')?'selected="selected"':'')?>>false</option>
             </select></td>
           </tr>
           <tr>
             <td align="right" valign="top" class="row-title">Translate Radio Station</td>
             <td align="left" valign="middle"><input name="translateRadioStation" type="text" size="45" id="translateRadioStation" value="<?php echo $_POST['translateRadioStation'];?>"/></td>
           </tr>
           <tr>
             <td align="right" valign="top" class="row-title">Translate Reading Data</td>
             <td align="left" valign="middle"><input name="translateReadingData" type="text" size="45" id="translateReadingData" value="<?php echo $_POST['translateReadingData'];?>"/></td>
           </tr>
           <tr>
             <td align="right" valign="top" class="row-title">Translate All Radio Stations</td>
             <td align="left" valign="middle"><input name="translateAllRadioStations" type="text" size="45" id="translateAllRadioStations" value="<?php echo $_POST['translateAllRadioStations'];?>"/></td>
           </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Refresh Interval for Now-Playing Info</td>
		    <td align="left" valign="middle"><input name="nowPlayingInterval" type="text" size="25" id="nowPlayingInterval" value="<?php echo $_POST['nowPlayingInterval'];?>"/> seconds</td>
	    </tr>
			<tr>
					<td align="right" valign="top" class="row-title">Player Loading Delay</td>
					<td align="left" valign="middle"><input name="delay" type="text" size="25" id="delay" value="<?php echo $_POST['delay'];?>"/> seconds</td>
			</tr>
		 <tr>
		   <td align="right" valign="top" class="row-title">Show Twitter Button</td>
		   <td align="left" valign="middle"><select name="showTwitterBut" id="showTwitterBut">
		     <option value="true" <?php echo (($_POST['showTwitterBut']=='true')?'selected="selected"':'')?>>true</option>
		     <option value="false" <?php echo (($_POST['showTwitterBut']=='false')?'selected="selected"':'')?>>false</option>
		     </select></td>
	      </tr>


		 <tr>
		    <td align="right" valign="top" class="row-title">Show FaceBook Button</td>
		    <td align="left" valign="middle"><select name="showFacebookBut" id="showFacebookBut">
              <option value="true" <?php echo (($_POST['showFacebookBut']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showFacebookBut']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	   </tr>
		 <tr>
		   <td align="right" valign="top" class="row-title">FaceBook AppID</td>
		   <td align="left" valign="middle"><input name="facebookAppID" type="text" size="25" id="facebookAppID" value="<?php echo $_POST['facebookAppID'];?>"/></td>
	      </tr>
		 <tr>
		   <td align="right" valign="top" class="row-title">FaceBook Share Title</td>
		   <td align="left" valign="middle"><input name="facebookShareTitle" type="text" size="45" id="facebookShareTitle" value="<?php echo $_POST['facebookShareTitle'];?>"/></td>
	      </tr>
		 <tr>
		   <td align="right" valign="top" class="row-title">FaceBook Share Description</td>
		   <td align="left" valign="middle"><textarea name="facebookShareDescription" id="facebookShareDescription" cols="45" rows="5"><?php echo $_POST['facebookShareDescription'];?></textarea></td>
	      </tr>
         <tr>
           <td align="right" valign="top" class="row-title">Show Popup But</td>
           <td align="left" valign="middle"><select name="showPopupBut" id="showPopupBut">
             <option value="true" <?php echo (($_POST['showPopupBut']=='true')?'selected="selected"':'')?>>true</option>
             <option value="false" <?php echo (($_POST['showPopupBut']=='false')?'selected="selected"':'')?>>false</option>
           </select></td>
         </tr>
         <tr>
           <td align="right" valign="top" class="row-title">Popup Width</td>
           <td align="left" valign="middle"><input name="popupWidth" type="text" size="25" id="popupWidth" value="<?php echo $_POST['popupWidth'];?>"/>
             px</td>
         </tr>
         <tr>
           <td align="right" valign="top" class="row-title">Popup Height</td>
           <td align="left" valign="middle"><input name="popupHeight" type="text" size="25" id="popupHeight" value="<?php echo $_POST['popupHeight'];?>"/>
             px</td>
         </tr>
         <tr>
		    <td align="right" valign="top" class="row-title">Minimize Button Text</td>
		    <td align="left" valign="middle"><input name="minimizeButtonText" type="text" size="25" id="minimizeButtonText" value="<?php echo $_POST['minimizeButtonText'];?>"/> <i>(if you leave it empty an arrow  will appear)</i></td>
	      </tr>
					 <tr>
					   <td align="right" valign="top" class="row-title">Minimize Button Color</td>
					   <td align="left" valign="middle"><input name="minButtonColor" type="text" size="25" id="minButtonColor" value="<?php echo $_POST['minButtonColor'];?>" style="background-color:#<?php echo $_POST['minButtonColor'];?>" />
					     <script>
					 jQuery('#minButtonColor').ColorPicker({
					 onSubmit: function(hsb, hex, rgb, el) {
					 jQuery(el).val(hex);
					 jQuery(el).css("background-color",'#'+hex);
					 jQuery(el).ColorPickerHide();
					 },
					 onBeforeShow: function () {
					 jQuery(this).ColorPickerSetColor(this.value);
					 }
					 })
					 .bind('keyup', function(){
					 jQuery(this).ColorPickerSetColor(this.value);
					 });
					    </script></td>
					 </tr>
					 <tr>
					   <td align="right" valign="top" class="row-title">Minimize Button Color - Hover</td>
					   <td align="left" valign="middle"><input name="minButtonHoverColor" type="text" size="25" id="minButtonHoverColor" value="<?php echo $_POST['minButtonHoverColor'];?>" style="background-color:#<?php echo $_POST['minButtonHoverColor'];?>" />
					     <script>
					 jQuery('#minButtonHoverColor').ColorPicker({
					 onSubmit: function(hsb, hex, rgb, el) {
					 jQuery(el).val(hex);
					 jQuery(el).css("background-color",'#'+hex);
					 jQuery(el).ColorPickerHide();
					 },
					 onBeforeShow: function () {
					 jQuery(this).ColorPickerSetColor(this.value);
					 }
					 })
					 .bind('keyup', function(){
					 jQuery(this).ColorPickerSetColor(this.value);
					 });
					    </script></td>
					 </tr>
					 <tr>
	                 <td align="right" valign="top" class="row-title">Activate For Footer</td>
	                 <td align="left" valign="middle"><select name="activateForFooter" id="activateForFooter">
	                   <option value="true" <?php echo (($_POST['activateForFooter']=='true')?'selected="selected"':'')?>>true</option>
	                   <option value="false" <?php echo (($_POST['activateForFooter']=='false')?'selected="selected"':'')?>>false</option>
	                 </select></td>
	            </tr>
		   <tr>
				 <td align="right" valign="top" class="row-title">&nbsp;</td>
		   <td align="left" valign="middle">&nbsp;</td>
	      </tr>

      </table>
  </div>
  <h3><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Playlist & Categories Settings</a></h3>
  <div style="padding:30px;">
	  <table class="wp-list-table widefat fixed pages" cellspacing="0">
        <tr>
		    <td align="right" valign="top" class="row-title" width="30%">Show Playlist Button</td>
		    <td align="left" valign="middle" width="70%"><select name="showPlaylistBut" id="showPlaylistBut">
              <option value="true" <?php echo (($_POST['showPlaylistBut']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showPlaylistBut']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	   </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Playlist Top Position</td>
		    <td align="left" valign="middle"><input name="playlistTopPos" type="text" size="25" id="playlistTopPos" value="<?php echo $_POST['playlistTopPos'];?>"/>
		    px</td>
	      </tr>
          <tr>
		    <td align="right" valign="top" class="row-title">Playlist Background Color</td>
		    <td align="left" valign="middle"><input name="playlistBgColor" type="text" size="25" id="playlistBgColor" value="<?php echo $_POST['playlistBgColor'];?>" style="background-color:#<?php echo $_POST['playlistBgColor'];?>" />
            <script>
jQuery('#playlistBgColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Playlist Record Background Off Color</td>
		    <td align="left" valign="middle"><input name="playlistRecordBgOffColor" type="text" size="25" id="playlistRecordBgOffColor" value="<?php echo $_POST['playlistRecordBgOffColor'];?>" style="background-color:#<?php echo $_POST['playlistRecordBgOffColor'];?>" />
            <script>
jQuery('#playlistRecordBgOffColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Playlist Record Background On Color</td>
		    <td align="left" valign="middle"><input name="playlistRecordBgOnColor" type="text" size="25" id="playlistRecordBgOnColor" value="<?php echo $_POST['playlistRecordBgOnColor'];?>" style="background-color:#<?php echo $_POST['playlistRecordBgOnColor'];?>" />
            <script>
jQuery('#playlistRecordBgOnColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Playlist Record Bottom Border Off Color</td>
		    <td align="left" valign="middle"><input name="playlistRecordBottomBorderOffColor" type="text" size="25" id="playlistRecordBottomBorderOffColor" value="<?php echo $_POST['playlistRecordBottomBorderOffColor'];?>" style="background-color:#<?php echo $_POST['playlistRecordBottomBorderOffColor'];?>" />
            <script>
jQuery('#playlistRecordBottomBorderOffColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Playlist Record Bottom Border On Color</td>
		    <td align="left" valign="middle"><input name="playlistRecordBottomBorderOnColor" type="text" size="25" id="playlistRecordBottomBorderOnColor" value="<?php echo $_POST['playlistRecordBottomBorderOnColor'];?>" style="background-color:#<?php echo $_POST['playlistRecordBottomBorderOnColor'];?>" />
            <script>
jQuery('#playlistRecordBottomBorderOnColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Playlist Record Text Off Color</td>
		    <td align="left" valign="middle"><input name="playlistRecordTextOffColor" type="text" size="25" id="playlistRecordTextOffColor" value="<?php echo $_POST['playlistRecordTextOffColor'];?>" style="background-color:#<?php echo $_POST['playlistRecordTextOffColor'];?>" />
            <script>
jQuery('#playlistRecordTextOffColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Playlist Record Text On Color</td>
		    <td align="left" valign="middle"><input name="playlistRecordTextOnColor" type="text" size="25" id="playlistRecordTextOnColor" value="<?php echo $_POST['playlistRecordTextOnColor'];?>" style="background-color:#<?php echo $_POST['playlistRecordTextOnColor'];?>" />
            <script>
jQuery('#playlistRecordTextOnColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	      </tr>

		  <tr>
		    <td align="right" valign="top" class="row-title">Number Of Items Per Screen</td>
		    <td align="left" valign="top"><input name="numberOfThumbsPerScreen" type="text" size="25" id="numberOfThumbsPerScreen" value="<?php echo stripslashes($_POST['numberOfThumbsPerScreen']);?>"/></td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Playlist Padding</td>
		    <td align="left" valign="middle"><input name="playlistPadding" type="text" size="25" id="playlistPadding" value="<?php echo $_POST['playlistPadding'];?>"/>
		    px</td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Show Playlist Number</td>
		    <td align="left" valign="middle"><select name="showPlaylistNumber" id="showPlaylistNumber">
		      <option value="true" <?php echo (($_POST['showPlaylistNumber']=='true')?'selected="selected"':'')?>>true</option>
		      <option value="false" <?php echo (($_POST['showPlaylistNumber']=='false')?'selected="selected"':'')?>>false</option>
		      </select></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">&nbsp;</td>
		    <td align="left" valign="middle">&nbsp;</td>
	      </tr>
		  <tr>
		    <td colspan="2" align="center" valign="top" class="lbg_regGray">- The Categories -</td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Show Categories</td>
		    <td align="left" valign="middle"><select name="showCategories" id="showCategories">
		      <option value="true" <?php echo (($_POST['showCategories']=='true')?'selected="selected"':'')?>>true</option>
		      <option value="false" <?php echo (($_POST['showCategories']=='false')?'selected="selected"':'')?>>false</option>
		      </select></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Category Record Background Off Color</td>
		    <td align="left" valign="middle"><input name="categoryRecordBgOffColor" type="text" size="25" id="categoryRecordBgOffColor" value="<?php echo $_POST['categoryRecordBgOffColor'];?>" style="background-color:#<?php echo $_POST['categoryRecordBgOffColor'];?>" />
		      <script>
jQuery('#categoryRecordBgOffColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Category Record Background On Color</td>
		    <td align="left" valign="middle"><input name="categoryRecordBgOnColor" type="text" size="25" id="categoryRecordBgOnColor" value="<?php echo $_POST['categoryRecordBgOnColor'];?>" style="background-color:#<?php echo $_POST['categoryRecordBgOnColor'];?>" />
		      <script>
jQuery('#categoryRecordBgOnColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Category Record Bottom Border Off Color</td>
		    <td align="left" valign="middle"><input name="categoryRecordBottomBorderOffColor" type="text" size="25" id="categoryRecordBottomBorderOffColor" value="<?php echo $_POST['categoryRecordBottomBorderOffColor'];?>" style="background-color:#<?php echo $_POST['categoryRecordBottomBorderOffColor'];?>" />
		      <script>
jQuery('#categoryRecordBottomBorderOffColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Category Record Bottom Border On Color</td>
		    <td align="left" valign="middle"><input name="categoryRecordBottomBorderOnColor" type="text" size="25" id="categoryRecordBottomBorderOnColor" value="<?php echo $_POST['categoryRecordBottomBorderOnColor'];?>" style="background-color:#<?php echo $_POST['categoryRecordBottomBorderOnColor'];?>" />
		      <script>
jQuery('#categoryRecordBottomBorderOnColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Category Record Text Off Color</td>
		    <td align="left" valign="middle"><input name="categoryRecordTextOffColor" type="text" size="25" id="categoryRecordTextOffColor" value="<?php echo $_POST['categoryRecordTextOffColor'];?>" style="background-color:#<?php echo $_POST['categoryRecordTextOffColor'];?>" />
		      <script>
jQuery('#categoryRecordTextOffColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Category Record Text On Color</td>
		    <td align="left" valign="middle"><input name="categoryRecordTextOnColor" type="text" size="25" id="categoryRecordTextOnColor" value="<?php echo $_POST['categoryRecordTextOnColor'];?>" style="background-color:#<?php echo $_POST['categoryRecordTextOnColor'];?>" />
		      <script>
jQuery('#categoryRecordTextOnColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">&nbsp;</td>
		    <td align="left" valign="middle">&nbsp;</td>
	      </tr>
		  <tr>
		    <td colspan="2" align="center" valign="top" class="lbg_regGray">- Selected Category -</td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">&nbsp;</td>
		    <td align="left" valign="middle">&nbsp;</td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">First Selected Category<br />
		      <span class="small_text">Write the exact name of the category you want to be set as first.
		      If no value is selected, since the categories will be alphabetically ordered, the first one will be displayed as the first selected category</span></td>
		    <td align="left" valign="middle"><input name="firstCateg" type="text" size="25" id="firstCateg" value="<?php echo $_POST['firstCateg'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Selected Category Background Color</td>
		    <td align="left" valign="middle"><input name="selectedCategBg" type="text" size="25" id="selectedCategBg" value="<?php echo $_POST['selectedCategBg'];?>" style="background-color:#<?php echo $_POST['selectedCategBg'];?>" />
		      <script>
jQuery('#selectedCategBg').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Selected Category Off Color</td>
		    <td align="left" valign="middle"><input name="selectedCategOffColor" type="text" size="25" id="selectedCategOffColor" value="<?php echo $_POST['selectedCategOffColor'];?>" style="background-color:#<?php echo $_POST['selectedCategOffColor'];?>" />
		      <script>
jQuery('#selectedCategOffColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Selected Category On Color</td>
		    <td align="left" valign="middle"><input name="selectedCategOnColor" type="text" size="25" id="selectedCategOnColor" value="<?php echo $_POST['selectedCategOnColor'];?>" style="background-color:#<?php echo $_POST['selectedCategOnColor'];?>" />
		      <script>
jQuery('#selectedCategOnColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Selected Category Bottom Margin </td>
		    <td align="left" valign="middle"><input name="selectedCategMarginBottom" type="text" size="25" id="selectedCategMarginBottom" value="<?php echo $_POST['selectedCategMarginBottom'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">&nbsp;</td>
		    <td align="left" valign="middle">&nbsp;</td>
	      </tr>
		  <tr>
		    <td colspan="2" align="center" valign="top" class="lbg_regGray">- Search Area -</td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Show Search Area</td>
		    <td align="left" valign="middle"><select name="showSearchArea" id="showSearchArea">
		      <option value="true" <?php echo (($_POST['showSearchArea']=='true')?'selected="selected"':'')?>>true</option>
		      <option value="false" <?php echo (($_POST['showSearchArea']=='false')?'selected="selected"':'')?>>false</option>
	        </select></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Search Area Background Color</td>
		    <td align="left" valign="middle"><input name="searchAreaBg" type="text" size="25" id="searchAreaBg" value="<?php echo $_POST['searchAreaBg'];?>" style="background-color:#<?php echo $_POST['searchAreaBg'];?>" />
	        <script>
jQuery('#searchAreaBg').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Search Input Text</td>
		    <td align="left" valign="middle"><input name="searchInputText" type="text" size="50" id="searchInputText" value="<?php echo $_POST['searchInputText'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Search Input Background Color</td>
		    <td align="left" valign="middle"><input name="searchInputBg" type="text" size="25" id="searchInputBg" value="<?php echo $_POST['searchInputBg'];?>" style="background-color:#<?php echo $_POST['searchInputBg'];?>" />
		      <script>
jQuery('#searchInputBg').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Search Input Border Color</td>
		    <td align="left" valign="middle"><input name="searchInputBorderColor" type="text" size="25" id="searchInputBorderColor" value="<?php echo $_POST['searchInputBorderColor'];?>" style="background-color:#<?php echo $_POST['searchInputBorderColor'];?>" />
		      <script>
jQuery('#searchInputBorderColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Search Input Text Color</td>
		    <td align="left" valign="middle"><input name="searchInputTextColor" type="text" size="25" id="searchInputTextColor" value="<?php echo $_POST['searchInputTextColor'];?>" style="background-color:#<?php echo $_POST['searchInputTextColor'];?>" />
		      <script>
jQuery('#searchInputTextColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">&nbsp;</td>
		    <td align="left" valign="middle">&nbsp;</td>
	      </tr>

      </table>
  </div>
  <h3><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banner Settings</a></h3>
	<div style="padding:30px;">
	  <table class="wp-list-table widefat fixed pages" cellspacing="0">
		<tr>
		    <td align="right" valign="top" class="row-title">Show Banner</td>
		    <td align="left" valign="middle"><select name="showBanner" id="showBanner">
              <option value="true" <?php echo (($_POST['showBanner']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showBanner']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	   </tr>
		  <tr>
		    <td width="35%" align="right" valign="top" class="row-title">Banner Width</td>
		    <td width="65%" align="left" valign="middle"><input name="bannerWidth" type="text" size="25" id="bannerWidth" value="<?php echo $_POST['bannerWidth'];?>"/>
		    px</td>
	    </tr>
		<tr>
		    <td align="right" valign="top" class="row-title">Banner Height</td>
		    <td align="left" valign="middle"><input name="bannerHeight" type="text" size="25" id="bannerHeight" value="<?php echo $_POST['bannerHeight'];?>"/>
		    px</td>
	    </tr>
       <tr>
		    <td align="right" valign="top" class="row-title">Banner Change Interval</td>
		    <td align="left" valign="middle"><input name="bannerIntervalSeconds" type="text" size="25" id="bannerIntervalSeconds" value="<?php echo $_POST['bannerIntervalSeconds'];?>"/>
		    seconds</td>
	    </tr>
		<tr>
		    <td align="right" valign="top" class="row-title">Banner Link Target</td>
		    <td align="left" valign="middle"><select name="bannerLinkTarget" id="bannerLinkTarget">
		      <option value="_blank" <?php echo (($_POST['bannerLinkTarget']=='_blank')?'selected="selected"':'')?>>_blank</option>
		      <option value="_self" <?php echo (($_POST['bannerLinkTarget']=='_self')?'selected="selected"':'')?>>_self</option>
            </select></td>
	      </tr>
      </table>
  </div>


</div>

<div style="text-align:center; padding:20px 0px 20px 0px;"><input name="Submit" type="submit" id="Submit" class="button-primary" value="Update Player Settings"></div>

</form>
</div>
