<div class="wrap">
	<div id="lbg_logo">
			<h2>Playlist for player: <span style="color:#FF0000; font-weight:bold;"><?php echo $_SESSION['xname']?> - ID #<?php echo $_SESSION['xid']?></span></h2>
 	</div>
  <div id="lbg_audio8_html5_shoutcast_updating_witness"><img src="<?php echo plugins_url('images/ajax-loader.gif', dirname(__FILE__))?>" /> Updating...</div>
<div style="text-align:center; padding:0px 0px 20px 0px;"><img src="<?php echo plugins_url('images/icons/add_icon.gif', dirname(__FILE__))?>" alt="add" align="absmiddle" /> <a href="?page=LBG_AUDIO8_HTML5_SHOUTCAST_Playlist&xmlf=add_playlist_record">Add new</a>  &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; <img src="<?php echo plugins_url('images/icons/magnifier.png', dirname(__FILE__))?>" alt="add" align="absmiddle" /> <a href="javascript: void(0);" onclick="showDialogPreview(<?php echo strip_tags($_SESSION['xid'])?>)">Preview Player</a></div>
<div style="text-align:left; padding:10px 0px 10px 14px;">#Initial Order --- Stream Link</div>

<div id="previewDialog"><iframe id="previewDialogIframe" src="" width="100%" height="600" style="border:0;"></iframe></div>

<ul id="lbg_audio8_html5_shoutcast_sortable">
	<?php foreach ( $result as $row ) 
	{
		$row=lbg_audio8_html5_shoutcast_unstrip_array($row); ?>
	<li class="ui-state-default cursor_move" id="<?php echo $row['id']?>">#<?php echo $row['ord']?> --- <span id="mov_title_<?php echo $row['id']?>"><?php echo $row['xradiostream']?></span> <div class="toogle-btn-closed" id="toogle-btn<?php echo $row['ord']?>" onclick="mytoggle('toggleable<?php echo $row['ord']?>','toogle-btn<?php echo $row['ord']?>');"></div><div class="options"><a href="javascript: void(0);" onclick="lbg_audio8_html5_shoutcast_delete_entire_record(<?php echo $row['id']?>,<?php echo $row['ord']?>);" style="color:#F00;">Delete</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="?page=LBG_AUDIO8_HTML5_SHOUTCAST_Playlist&amp;id=<?php echo strip_tags($_SESSION['xid'])?>&amp;name=<?php echo strip_tags($_SESSION['xname'])?>&amp;duplicate_id=<?php echo $row['id']?>">Duplicate</a></div>
	<div class="toggleable" id="toggleable<?php echo $row['ord']?>">
    <form method="POST" enctype="multipart/form-data" id="form-playlist-html5-audio8-<?php echo $row['ord']?>">
	    <input name="id" type="hidden" value="<?php echo $row['id']?>" />
        <input name="ord" type="hidden" value="<?php echo $row['ord']?>" />
		<table width="100%" cellspacing="0" class="wp-list-table widefat fixed pages" style="background-color:#FFFFFF;">
		  <tr>
		    <td align="left" valign="middle" width="30%"></td>
		    <td align="left" valign="middle" width="70%"></td>
		  </tr>
		  <tr>
		    <td align="right" valign="middle" class="row-title">Stream*</td>
		    <td align="left" valign="top"><input name="xradiostream" type="text" size="80" id="xradiostream" value="<?php echo $row['xradiostream'];?>"/></td>
		    </tr>
		  <tr>
		    <td align="left" valign="middle">&nbsp;</td>
		    <td align="left" valign="top"><span class="small_text"><u>Shoutcast link structure:</u> http://[ip]:[port]/;<br />
		      <u>Icecast link structure:</u> http://[domain]:[port]/mountpoint</span></td>
		    </tr>
		  <tr>
		    <td align="right" valign="middle" class="row-title">Stream Title (optional)<br />
		      <span class="small_text">it will be automatically obtained</span></td>
		    <td align="left" valign="top"><input name="xstation" type="text" size="80" id="xstation" value="<?php echo $row['xstation'];?>"/></td>
		    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Category (optional)<br />
<span class="small_text">it will be automatically obtained</span></td>
		    <td align="left" valign="top"><?php foreach ( $result_categ as $row_categ ) 
				{
					$row_categ=lbg_audio8_html5_shoutcast_unstrip_array($row_categ); 
					$checked_var='';
					if (preg_match_all('/\b'.$row_categ["id"].'\b/', $row['category'], $matches)) { $checked_var='checked="checked"'; }
					?>
		      				<p><input name="category[]" id="category" type="checkbox" value="<?php echo $row_categ['id'];?>" <?php echo $checked_var; ?> /> <?php echo $row_categ['categ'];?></p>
				<?php }	?></td>
		    </tr>
			<tr>
			  <td align="right" valign="top" class="row-title">Banners (optional)<br />
                <span class="small_text">- Check the banners you want to associate for this radio stream. <br>
                Use Drag & Drop to change the order.</span><br />
                <span class="small_text">- If you want to the show the banners, you need to set Show Banners: true<br>
in Manage Players->Player Settings->Banner Settings<br>
					- You can manage the banners from <a href="?page=LBG_AUDIO8_HTML5_SHOUTCAST_Manage_Banners">here</a>
                </span></td>
			  <td align="left" valign="top">
			  		<ul class="lbg_audio8_html5_shoutcast_sortable_banners ui-sortable ui-sortable-disabled">
						<?php
							if ($row['banners']!=''){
								$selected_banners_arr=explode(";",$row['banners']);
								$row['banners']=';'.$row['banners'].';';
								foreach ($selected_banners_arr as $banner_id) { ?>
											<li class="ui-state-default cursor_move ui-sortable-handle"><input name="banners[]" id="banners[]" type="checkbox" value="<?php echo $banner_id;?>" checked="checked" /> <?php echo $all_banners_arr[$banner_id].' (id: '.$banner_id.')';?></li>

						<?php 
								}
							}	
						foreach ($all_banners_arr as $key => $value) { 
									if (strpos($row['banners'],';'.$key.';')===false) {  ?>
											<li class="ui-state-default cursor_move ui-sortable-handle"><input name="banners[]" id="banners[]" type="checkbox" value="<?php echo $key;?>" /> <?php echo $value.' (id: '.$key.')';?></li>
								<?php } 
						} ?>
				  	</ul>
			  </td>
		    </tr>
		  <tr>
		    <td align="right" valign="middle" class="row-title">&nbsp;</td>
		    <td align="left" valign="middle">&nbsp;</td>
		    </tr>
		  <tr>
		    <td colspan="2" align="left" valign="middle">*Required fields</td>
		  </tr>
		  <tr>
		    <td colspan="2" align="center" valign="middle"><input name="Submit<?php echo $row['ord']?>" id="Submit<?php echo $row['ord']?>" type="submit" class="button-primary" value="Update Playlist Record"></td>
		  </tr>
		</table>    
        </form>
            <div id="ajax-message-<?php echo $row['ord']?>" class="ajax-message"></div>
    </div>
    </li>
	<?php } ?>
</ul>





</div>		
<script>
jQuery(document).ready(function() {
	
		jQuery( '.lbg_audio8_html5_shoutcast_sortable_banners' ).sortable({
			placeholder: "ui-state-highlight"
		});
	
});
</script>