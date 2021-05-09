<div class="wrap">
	<div id="lbg_logo">
			<h2>Manage Banners</h2>
			<p>From this section you manage the banners.</p>
 	</div>
  <div id="lbg_audio8_html5_shoutcast_updating_witness"><img src="<?php echo plugins_url('images/ajax-loader.gif', dirname(__FILE__))?>" /> Updating...</div>
<div style="text-align:center; padding:0px 0px 20px 0px;"><img src="<?php echo plugins_url('images/icons/add_icon.gif', dirname(__FILE__))?>" alt="add" align="absmiddle" /> <a href="?page=LBG_AUDIO8_HTML5_SHOUTCAST_Add_New_Banner&xmlf=add_banner_record">Add new (banner)</a></div>
<div style="text-align:left; padding:10px 0px 10px 14px;">#Banner ID--- Banner Title</div>


<ul id="lbg_audio8_html5_shoutcast_not_sortable_banners">
	<?php foreach ( $result as $row )
	{
		$row=lbg_audio8_html5_shoutcast_unstrip_array($row); ?>
	<li class="ui-state-default cursor_move" id="<?php echo $row['id']?>">#<?php echo $row['id']?> --- <span id="mov_title_<?php echo $row['id']?>"><?php echo $row['bannerTitle']?></span> <div class="toogle-btn-closed" id="toogle-btn<?php echo $row['id']?>" onclick="mytoggle('toggleable<?php echo $row['id']?>','toogle-btn<?php echo $row['id']?>');"></div><div class="options"><a href="javascript: void(0);" onclick="lbg_audio8_html5_shoutcast_delete_entire_record_banners(<?php echo $row['id']?>);" style="color:#F00;">Delete</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="?page=LBG_AUDIO8_HTML5_SHOUTCAST_Manage_Banners&amp;duplicate_id=<?php echo $row['id']?>">Duplicate</a></div>
	<div class="toggleable" id="toggleable<?php echo $row['id']?>">
    <form method="POST" enctype="multipart/form-data" id="form-banners-html5-audio8-<?php echo $row['id']?>">
	    <input name="id" type="hidden" value="<?php echo $row['id']?>" />
		<table width="100%" cellspacing="0" class="wp-list-table widefat fixed pages" style="background-color:#FFFFFF;">
		  <tr>
		    <td align="left" valign="middle" width="30%"></td>
		    <td align="left" valign="middle" width="70%"></td>
		  </tr>
		  <tr>
		    <td align="right" valign="middle" class="row-title">Banner Title*</td>
		    <td align="left" valign="top"><input name="bannerTitle" type="text" size="80" id="bannerTitle" value="<?php echo $row['bannerTitle'];?>"/></td>
		    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Banner Image*</td>
		    <td align="left" valign="top"><input name="banner" type="text" id="banner" size="80" value="<?php echo $row['banner']?>" />
		      <input name="upload_banner_button_html5Audio8_<?php echo $row['id']?>" type="button" id="upload_banner_button_html5Audio8_<?php echo $row['id']?>" value="Upload Image" />
		      <br />
		      Enter an URL or upload an image<br />
		      <div id="lbg-html5-audio2_bannersimg_div_<?php echo $row['id']?>" style="padding:5px 0;"> <img src="<?php echo $row['banner']?>" alt="" name="banner_<?php echo $row['id']?>" id="banner_<?php echo $row['id']?>" /></div></td>
		    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Banner link</td>
		    <td align="left" valign="top"><input name="bannerLink" type="text" size="80" id="bannerLink" value="<?php echo $row['bannerLink'];?>"/></td>
		    </tr>
		  <tr>
		    <td align="right" valign="middle" class="row-title">&nbsp;</td>
		    <td align="left" valign="middle">&nbsp;</td>
		    </tr>
		  <tr>
		    <td colspan="2" align="left" valign="middle">*Required fields</td>
		  </tr>
		  <tr>
		    <td colspan="2" align="center" valign="middle"><input name="Submit<?php echo $row['id']?>" id="Submit<?php echo $row['id']?>" type="submit" class="button-primary" value="Update Banner"></td>
		  </tr>
		</table>
        </form>
            <div id="ajax-message-<?php echo $row['id']?>" class="ajax-message"></div>
    </div>
    </li>
	<?php } ?>
</ul>





</div>
