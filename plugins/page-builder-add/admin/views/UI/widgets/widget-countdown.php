<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="tabs" style="width: 107%;">
  <ul class="tab-links">
    <li class="active"><a href="#cf1" class="tab_link">Timer</a></li>
    <li><a href="#cf2" class="tab_link">Style</a></li>
  </ul>
<div class="tab-content" style="box-shadow:none;">
	<div id="cf1" class="tab active" style="background: #fff; padding:20px 10px 20px 25px; width: 99%;">
	    <br>
		<br>
        <label>Countdown Date : </label>
        <input type="text" class="pbCountDownDate" id="pbCountDownDate">
        <br><br><hr><br>
        <label>Display Countdown Labels :</label>
        <select class="pbCountDownLabel">
            <option value="">Show</option>
            <option value="none">Hide</option>
        </select>
        <br><br><hr><br>
	</div>
	<div id="cf2" class="tab" style="background: #fff; padding:20px 10px 20px 25px; width: 99%;">
		<br>
        <label>Number Color :</label>
		<input type="text" class="color-picker_btn_two pbCountDownColor" id="pbCountDownColor" value='#333333'>
		<br><br><hr><br>
		<label>Label Color :</label>
		<input type="text" class="color-picker_btn_two pbCountDownLabelColor" id="pbCountDownLabelColor" value='#333333'>
		<br><br><hr><br>
		<label>Number Font Size : </label>
        <input type="number" class="pbCountDownTextSize">
        <br><br><hr><br>
		<label>Label Font Size : </label>
        <input type="number" class="pbCountDownLabelTextSize">
        <br><br><hr><br>
	</div>
</div>
</div>
<script type="text/javascript">
    jQuery('#pbCountDownDate').datepicker({
        dateFormat: 'yy/mm/dd'
    });
</script>
<style type="text/css">
    #ui-datepicker-div{
        background: #fff;
    }
</style>