<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="tabs" style="width: 99%; min-width: 400px;">
  <ul class="tab-links">
    <li class="active" style="margin: 0;"><a href="#sf1" class="tab_link">General</a></li>
    <li style="margin: 0;"><a href="#sf2" class="tab_link">Button</a></li>
    <li style="margin: 0;"><a href="#sf3" class="tab_link">Integrations</a></li>
  </ul>
<div class="tab-content" style="box-shadow:none;">
	<div id="sf1" class="tab active">
	<div class="pbp_form" style="background: #fff; padding:20px 10px 20px 25px; width: 99%;">
		<h3>Structure</h3>
		<hr>
		<br>
		<label>Layout</label>
		<select class="formLayout">
			<option value="stacked">Stacked</option>
			<option value="inline">Inline</option>
		</select>
		<br><br><hr><br>
		<label>Name Field</label>
		<select class="showNameField">
			<option value="block">Show</option>
			<option value="none">Hide</option>
		</select>
		<br><br><hr><br>
		<h3>Success</h3>
		<hr>
		<br>
		<label>Success Action</label>
		<select class="successAction">
			<option value="redirect">Redirect</option>
			<option value="showMessage">Show Message</option>
		</select>
		<br><br><br><hr><br>
		<label>Success URL</label>
		<input type="URL" class="successURL" style="width: 60%;">
		<br><br><br><br><hr><br>
		<label>Success Message</label>
		<textarea class="successMessage" style="width:60%;"></textarea>
		<br><br><br><hr><br>
	</div>
	</div>
	<div id="sf2" class="tab">
	<div class="pbp_form" style="background: #fff; padding:20px 10px 20px 25px; width: 99%;">
		<br>
		<label>Button Text</label>
		<input type="text" class="formBtnText"  placeholder="Button Text">
		<br>
		<br><br>
        <label>Set Height: </label>
        <input type="number" class="formBtnHeight">
        <br><br><hr><br>
        <label>Set width: </label>
        <input type="number" class="formBtnWidth">
        <br><br><hr><br>
        <label>Button Background Color :</label>
		<input type="text" class="color-picker_btn_two formBtnBgColor" id="formBtnBgColor" value='#333333'>
		<br><br><hr><br>
        <label>Button Hover Color :</label>
        <input type="text" class="color-picker_btn_two formBtnHoverBgColor" id="formBtnHoverBgColor" data-alpha='true' value='#333333'>
        <br><br><hr><br>
        <label>Button Text Color :</label>
        <input type="text" class="color-picker_btn_two formBtnColor" id="formBtnColor">
        <br><br><hr><br>
        <label>Button Font size : </label>
        <input type="number" class="formBtnFontSize">
        <br><br><hr><br>
        <label>Border Width: </label>
        <input type="number" class="formBtnBorderWidth">
        <br><br><hr><br>
        <label>Border Color: </label>
        <input type="text" class="color-picker_btn_two formBtnBorderColor" id="formBtnBorderColor" value='#ffffff'>
        <br><br><hr><br>
        <label>Border Radius: </label>
        <input type="number" class="formBtnBorderRadius" max="100" min="0">
        <br>
        <br>
    </div>
	</div>
	<div id="sf3" class="tab">
	<div class="pbp_form" style="background: #fff; padding:20px 10px 20px 25px; width: 99%;">
		<br>
		<label>Service</label>
		<select class="formDataSaveType">
			<option value="database">Database</option>
		</select>
		<br><br><hr><br>
		<div class="integrationPBFields" style="display: none;">
		<label>List ID</label>
		<input type="text" class="formAccountName" style="width: 200px;">
		<br><br><br><hr><br>
		<label>API Key</label>
		<input type="text" class="formApiKey" style="width: 200px;">
		</div>
	</div>
	</div>
</div>
</div>
<h3> Tip You can also sync your form data with MailChimp : <a href="https://pluginops.com/page-builder-mailchimp/" target="_blank"> Learn More </a></h3>