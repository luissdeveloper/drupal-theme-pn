<style>

.lbg_list-1 {
	list-style-type: none;
	padding: 0px;
	margin: 0px;
	line-height:27px;
	margin: 0 0 1.5em 0;
}

.lbg_list-1 li {
	background-image: url(list-1.png);
	background-repeat: no-repeat;
	background-position: 0px 5px;
	padding-left: 25px;
}
.lbg_list-1 a {
	text-decoration:underline;
}
table {
	background:#EEEEEE;
	border-right:1px solid #CCCCCC;
	border-bottom:1px solid #CCCCCC;
}
table td {
	padding:5px;
	border-left:1px solid #CCCCCC;
	border-top:1px solid #CCCCCC;
}
.row-title {
	font-weight:bold;
}
.lbg_subtitle {
	color:#21759b;
	font-weight:bold;
	font-size:14px;
}
.lbg_regGray {
	font-size:12px;
	color:#999999;
	font-style:italic;
}
.regb {	font-weight:bold;
}
</style>
<div class="wrap">
<div id="lbg_logo">
			<h2>Help</h2>
  </div>
<p>This plugin requires at least WordPress 3.0</p>
<ul class="lbg_list-1">
  <li><a href="#videotutorials">Video Tutorials</a></li>
  <li><a href="#manage">Manage Players</a></li>
  <li><a href="#categories">Manage Categories</a></li>
   <li><a href="#banners">Manage Banners</a></li>
  <li><a href="#settings">Player Settings</a></li>
  <li><a href="#shoutcast">Shoutcast and Iceast Link Structure</a></li>
  <li><a href="#playlist">Playlist</a></li>
  <li><a href="#shortcode">ShortCode</a></li>
  <li><a href="#facebook_share">Facebook Share</a></li>
</ul>
<p>&nbsp;</p>
<p><span class="lbg_subtitle"><a name="videotutorials" id="videotutorials"></a> Video Tutorials</span></p>
<p>&nbsp;</p>
<p><span class="lbg_subtitle"><a name="videotutorials" id="videotutorials"></a> Video Tutorials</span></p>
<p> Installation - <a href="https://www.youtube.com/watch?v=km5cVH-iH_8" target="_blank">https://www.youtube.com/watch?v=km5cVH-iH_8</a><br />
How To Use The Player - <a href="https://www.youtube.com/watch?v=DVLHNopEpXw" target="_blank">https://www.youtube.com/watch?v=DVLHNopEpXw</a><br />
Manage The Banners - <a href="https://www.youtube.com/watch?v=i4CWseyJmLc" target="_blank">https://www.youtube.com/watch?v=i4CWseyJmLc</a></p>
<p>&nbsp;</p>
<p class="lbg_subtitle"><a name="manage" id="manage"></a> Manage Players</p>
<p class="">From this section you can:<br />
- add a new player <br />
-
select the player you want to edit by clicking &quot;Player Settings&quot;<br />
- add/edit playlist radio streams by clicking &quot;Playlist&quot;
<br />
- delete an existing player by clicking &quot;Delete&quot;
</p>
<p class="">&nbsp;</p>
<p class="lbg_subtitle"><a name="manage" id="manage"></a> Manage Categories</p>
<p class="">From this section you can:<br />
- add a new category <br />
 - edit an existing category
<br />
- delete an existing category
</p>
<p class="">&nbsp;</p>
<p class="lbg_subtitle"><a name="banners" id="banners"></a> Manage Banners</p>
<p class="">From this section you can:<br />
  - add a new banner <br />
  - edit an existing banner <br />
  - delete an existing banner<br />
  - duplicate an existing banner</p>
<p class="">&nbsp;</p>
<p class="lbg_subtitle"><a name="settings" id="settings"></a> Player Settings</p>
<p>From this section you can define the radio player  settings.</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="16%" align="left" valign="top" bgcolor="#CCCCCC" class="row-title">Attribute</td>
    <td width="69%" align="left" valign="top" bgcolor="#CCCCCC" class="row-title">Description</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="lbg_regGray">General settings</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Skin Name</td>
    <td align="left" valign="top">The audio player comes with 2 predefined controllers skins, which have different colors for hover status of the buttons. By controllers we understand  play, pause,  volume,   facebook, twitter, show/hide playlist buttons. These buttons are saved as .png images. If you need another color for these controllers, you have the PSD files included and you can save over one skin, the controllers with another color.
      <p>Possible values:<br />
        - darkHover<br />
        - lightHover</p></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Player Height</td>
    <td align="left" valign="top">You can define the player height. The value should be greater or equal with 94 (pixels)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Title Width</td>
    <td align="left" valign="top">The text box width for current playing song, artist &amp; radio name</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Player Background Color</td>
    <td align="left" valign="top">The background color (hexa or 'transparent' value) of the area beneath the radio station name and current playing title.</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Player Background Opacity</td>
    <td align="left" valign="top">The background opacity of the area beneath the radio station name and current playing title. Values 0-100.</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Sticky</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - the audio player will be positioned on the bottom of the page beeing fixed while the page scrolls<br />
      <strong>false</strong> - the audio player will NOT be positioned on the bottom of the page beeing fixed while the page scrolls</td>
  </tr>
	<tr>
    <td align="left" valign="top" class="row-title">Start Minified</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - the radio player start minified and only 'show/hie' button will  visible.<strong> If you set this parameter true you also need to set <span class="regb">sticky</span>:true</strong><br />
    <strong>false</strong> - the radio player will start with the normal/standard dimension.</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Banner Width</td>
    <td align="left" valign="top">Banner width (in pixels)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Banner Height</td>
    <td align="left" valign="top">Banner height (in pixels)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Banner Change Interval</td>
    <td align="left" valign="top">If you'll define multiple banners for the same radio station, this parameter defines how long a banner will be visible until the next one will appear.</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Banner Link Target</td>
    <td align="left" valign="top"><p>Banner link target.<br />
      Possible values: <br />
      <strong>_blank</strong> - the link will be opened in a new window<br />
      <strong>_self</strong> -  the link will be opened in the same window</p></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Initial Volume Value<br /></td>
    <td align="left" valign="top">You can initialize the volume. The range is 0 to 1</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Auto Play</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - autoplays audio file<br />
      <strong>false</strong> - doesn't autoplay audio file</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Volume Off State Color</td>
    <td align="left" valign="top">Volume slide color (hexa) - off state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Volume On State Color</td>
    <td align="left" valign="top">Volume slide color (hexa) - on state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Song Title - Text Color</td>
    <td align="left" valign="top">Audio file Title text area color (hexa) which resides next to the image</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Radio Station - Text Color</td>
    <td align="left" valign="top">Audio file Author text area color (hexa) which resides next to the image</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Image Border Color</td>
    <td align="left" valign="top">The color  (hexa) of the border for the round photo </td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Minimize Button Text</td>
    <td align="left" valign="top">You can translate &quot;open / close &quot; in your own language (if needed)</td>
  </tr>
	<tr>
    <td align="left" valign="top" class="row-title">Minimize Button Color</td>
    <td align="left" valign="top">Minimize button color (hexa) - off state</td>
  </tr>
	<tr>
    <td align="left" valign="top" class="row-title">Minimize Button Color - Hover</td>
    <td align="left" valign="top">Minimize button color (hexa) - on state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">FaceBook AppID</td>
    <td align="left" valign="top">FaceBook AppID. Please check <a href="#facebook_share">Facebook Share</a> section, for more informations</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">FaceBook Share Title</td>
    <td align="left" valign="top">The title which will appear on FaceBook share. Please check <a href="#facebook_share">Facebook Share</a> section, for more informations</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">FaceBook Share Description</td>
    <td align="left" valign="top">The description which will appear on FaceBook share. Please check <a href="#facebook_share">Facebook Share</a> section, for more informations</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Refresh Interval for Now-Playing Info</td>
    <td align="left" valign="top">The calling interval (in seconds) for the file which reads the current playing song</td>
  </tr>
	<tr>
    <td align="left" valign="top" class="row-title">Player Loading Delay</td>
    <td align="left" valign="top">The timeout delay (in seconds) for player loading</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Grab Artist Photo</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - it will grab the artist photo<br />
      <strong>false</strong> - it will always use the image specified by '<span class="row-title">noImageAvailable</span>' parameter</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Grab Stream Name and Genre</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - it will grab the stream name and stream genre<br />
      <strong>false</strong> - it will always use the stream name and stream genre defined in the playlist</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Translate Radio Station</td>
    <td align="left" valign="top">You can translate &quot;Radio Station: &quot; in your own language (if needed)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Translate Reading Data</td>
    <td align="left" valign="top">You can translate &quot;reading data...&quot; in your own language (if needed)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Translate All Radio Stations</td>
    <td align="left" valign="top">You can translate &quot;ALL RADIO STATIONS&quot;  in your own language (if needed)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Default 'No Image Available'</td>
    <td align="left" valign="top">The path to 'No Image Available' image which will appear when there's no image found in the database</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Popup Width</td>
    <td align="left" valign="top">The initial popup window width</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Popup Height</td>
    <td align="left" valign="top">The initial popup window height</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Bars Color</td>
    <td align="left" valign="top">The bars animation color</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Gradient Over Bars</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - a gradient will appear over the bars animation<br />
      <strong>false</strong> - a gradient will not appear over the bars animation</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="lbg_regGray">Controllers Settings: Show/Hide buttons &amp; elements</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Banner</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - the ads will appear and the current playing song artist image will not<br />
      <strong>false</strong> - the ads not will appear and the current playing song artist image will appear</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Volume</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - volume buttons will appear<br />
      <strong>false</strong> -volume buttons will not appear</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Facebook Button</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - facebook button will appear<br />
      <strong>false</strong> - facebook button will not appear</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Twitter Button</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - twitter button will appear<br />
      <strong>false</strong> - twitter button will not appear</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Popup Button</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - the pop-up button will appear<br />
      <strong>false</strong> - the pop-up  button will not appear</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Radio Station</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - radio station  name will appear<br />
      <strong>false</strong> - radio station  name will not appear</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Title</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - current playing song will appear<br />
      <strong>false</strong> - current playing song will appear</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Playlist Button</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - show/hide playlist button will appear<br />
      <strong>false</strong> - show/hide playlist  button will not appear</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="lbg_regGray">Playlist  Settings</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Playlist Top Position</td>
    <td align="left" valign="top">Additional playlist distance between player and playlist, when the playlist is visible</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Playlist Background Color</td>
    <td align="left" valign="top">Playlist background color (hexa)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Playlist Record Background Off Color</td>
    <td align="left" valign="top">Playlist item background color (hexa) - OFF state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Playlist Record Background On Color</td>
    <td align="left" valign="top">Playlist item background color (hexa) - ON state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Playlist Record Bottom Border Off Color</td>
    <td align="left" valign="top">Playlist item bottom border color (hexa) - OFF state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Playlist Record Bottom Border On Color</td>
    <td align="left" valign="top">Playlist item bottom border color (hexa) - ON state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Playlist Record Text Off Color</td>
    <td align="left" valign="top">Playlist item text color (hexa) - OFF state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Playlist Record Text On Color</td>
    <td align="left" valign="top">Playlist item text color (hexa) - ON state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Number Of Items Per Screen</td>
    <td align="left" valign="top">Number of items shown in the playlist. You'll have to scroll to see the rest</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Playlist Padding</td>
    <td align="left" valign="top">Playlist inner padding</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Playlist Number</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - the item number in the playlist will appear<br />
      <strong>false</strong> - the item number in the playlist will not appear</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Search Area</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - the search area will appear<br />
      <strong>false</strong> - the search area  will not appear </td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Search Area Background Color</td>
    <td align="left" valign="top">Search area  background color (hexa)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Search Input Text</td>
    <td align="left" valign="top">Search input initial text, useful for translation purpose</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Search Input Background Color</td>
    <td align="left" valign="top">Search input  background color (hexa)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Search Input Border Color</td>
    <td align="left" valign="top">Search input  border color (hexa)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Search Input Text Color</td>
    <td align="left" valign="top">Search input  text color (hexa)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="regGray">Category  Settings</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Show Categories</td>
    <td align="left" valign="top">Possible values: <br />
      <strong>true</strong> - the categories will appear<br />
      <strong>false</strong> - the categories will not appear</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">First Selected Category</td>
    <td align="left" valign="top">The name of the first displayed category (in the top of the playlist). If no value is selected, since the categories will be alphabetically ordered,  the first one will be displayed as the first selected category</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Selected Category Background Color</td>
    <td align="left" valign="top">Selected category background color (hexa)</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Selected Category Off Color</td>
    <td align="left" valign="top">Selected category color (hexa) - OFF state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Selected Category On Color</td>
    <td align="left" valign="top">Selected category color (hexa) - ON state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Selected Category Bottom Margin </td>
    <td align="left" valign="top">Selected category bottom margin</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Category Record Background Off Color</td>
    <td align="left" valign="top">Category item background color (hexa) - OFF state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Category Record Background On Color</td>
    <td align="left" valign="top">Category item background color (hexa) - ON state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Category Record Bottom Border Off Color</td>
    <td align="left" valign="top">Category item bottom border color (hexa) - OFF state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Category Record Bottom Border On Color</td>
    <td align="left" valign="top">Category item bottom border color (hexa) - ON state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Category Record Text Off Color</td>
    <td align="left" valign="top">Category item text color (hexa) - OFF state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Category Record Text On Color</td>
    <td align="left" valign="top">Category item text color (hexa) - ON state</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>

<p><span class="lbg_subtitle"><a name="shoutcast" id="shoutcast"></a> Shoutcast and Iceast Link Structure</span></p>
<p><strong>- <u>SHOUTCAST LINK</u></strong></p>
<p>http://[domain]:[port] OR</p>
<p>http://[ip]:[port]</p>
<p>Ex: http://83.169.60.45:80</p>
<p><strong>IMPORTANT:</strong> For the vast majority of the shoutcast streams, try appending &quot;/;&quot; to the stream so it looks like this:</p>
<p>http://[ip]:[port]/;</p>
<p>Ex: http://83.169.60.45:80/;</p>
<p><strong>- <u>ICECAST LINK</u></strong></p>
<p>http://[domain]:[port]/mountpoint</p>
<p>Ex: http://87.230.59.20:80/iloveradio2.mp3</p>
<p>&nbsp;</p>
<p><strong>- <u>RADIONOMY LINK</u></strong></p>
<p>For radio hosted by radionomy.com, the link looks like this: http://streaming.radionomy.com/ABC-Piano</p>
<p>Due to the fact that the IP is unknown, the player can't access current playing song name and artist photo. It will play it and it will display the radio name.</p>
<p>&nbsp;</p>
<p><strong>NOTE:</strong> Radio Stream should be MP3 type, no support for AAC/AAC+ stream</p>
<p>&nbsp;</p>
<p class="lbg_subtitle"><a name="playlist" id="playlist"></a> Playlist</p>
<p>From this section you can define radio streams in the playlist</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="30%" align="left" valign="top" class="row-title"></td>
    <td width="70%" align="left" valign="top"></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Stream</td>
    <td align="left" valign="top">radio stream. For more informations regarding stream structure please check <a href="#shoutcast">Shoutcast and Iceast Link Structure</a> section</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Stream Title</td>
    <td align="left" valign="top">Radio Stream title. This is an <strong>OPTIONAL</strong> parameter due to the fact that the plugin will automatically obtain the stream title</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Category</td>
    <td align="left" valign="top">Radio Stream category. This is an <strong>OPTIONAL</strong> parameter due to the fact that the plugin will automatically obtain the stream categories</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="row-title">Banners</td>
    <td align="left" valign="top">Radio Stream  associated banners. This is an <strong>OPTIONAL</strong> parameter due to the fact that you can set <span class="row-title">Show Banner</span>: false and show the artist image instead</td>
  </tr>
</table>
<p>&nbsp;</p>
<p><span class="lbg_subtitle"><a name="shortcode" id="shortcode"></a> ShortCode</span></p>
<p>The shortcode is: <br />
[lbg_audio8_html5_shoutcast settings_id='1']<br />
where <br />
 settings_id is the player ID defined in &quot;Manage Players&quot; section</p>
<p>&nbsp;</p>
<p><span class="lbg_subtitle"><a name="facebook_share" id="facebook_share"></a> FaceBook Share</span></p>
<p>In order for the Facebook share button to work you need to obtain a Facebook Application ID</p>
<p>1. Go to the <a href="https://developers.facebook.com/apps" target="_blank">Facebook Developers Apps page</a> and and sign in with your Facebook username and password.</p>
<p>2. Click the &quot;Create New App&quot; button.</p>
<p><i>If you do not see the option to create a new app in the upper right hand corner, click on &quot;Register as Developer.&quot;</i> </p>
<p>3. After that you'll obtain an 'App ID' which you'll paste in <span class="regb">FaceBook AppID</span> field in Manage Players->Player Settings area of our plugin</p>
<p>4. Go to Settings->Basic tab (left area), select 'Website' and insert your website URL and fill all the other information. Below you have a demo screenshot. Of course, you'll use your own info.</p>
<p><img src="<?php echo plugins_url('images/facebookAppId.jpg', dirname(__FILE__))?>" width="1600" height="1511" alt="facebook appid" /></p>
<p>5. Go to Settings->Advanced tab (left area) and activate 'Social Discovery'</p>
<p><img src="<?php echo plugins_url('images/status_and_review.jpg', dirname(__FILE__))?>" width="1600" height="770" alt="status and review" /></p>
<p>6. To personalize more the share content you can use <span class="regb">FaceBook Share Title	</span> and <span class="regb">FaceBook Share Description		</span> fields in Manage Players->Player Settings area of our plugin. Please check <a href="#settings">Player Settings</a> section, to see all available parameters</p>

<p>&nbsp;</p>
</div>
