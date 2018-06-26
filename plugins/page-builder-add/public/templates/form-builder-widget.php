<?php
if ( ! defined( 'ABSPATH' ) ) exit; 


  $this_widget_form_builder = $thisWidget['widgetFormBuilder'];


  $widgetPbFbFormFeilds = $this_widget_form_builder['widgetPbFbFormFeilds'];
  $widgetPbFbFormFeildOptions = $this_widget_form_builder['widgetPbFbFormFeildOptions'];
  $widgetPbFbFormSubmitOptions = $this_widget_form_builder['widgetPbFbFormSubmitOptions'];
  $widgetPbFbFormEmailOptions = $this_widget_form_builder['widgetPbFbFormEmailOptions'];

  $formBuilderFieldSize = 'pbField-'.$widgetPbFbFormFeildOptions['formBuilderFieldSize'];

  $pbFormBuilderUniqueId = 'pb_FormBuilder_'.(rand(10,99)*120+200);

  ob_start();

  $widgetPbFbFormFeildsIndex = 0;
  foreach($widgetPbFbFormFeilds as $widgetPbFbFormFeild){

    $thisFieldOptions = $widgetPbFbFormFeild['thisFieldOptions'];
    $fbFieldRequired = '';
    if ($thisFieldOptions['fbFieldRequired'] == 'true') {
      $fbFieldRequired = 'required="required"';
    }
    $thisFieldAttr = 'style="width:99%;  "  placeholder="'.$thisFieldOptions['fbFieldPlaceHolder'].'" '.$fbFieldRequired.' "  id="fieldID-'.$widgetPbFbFormFeildsIndex.'" ' ;
    $multiFieldStyleAttr = 'style="margin-right:25px; display:'.$thisFieldOptions['displayFieldsInline'].'; line-height:2em; font-size:16px; "';
    $thisFieldName = $thisFieldOptions['fbFieldLabel'];

    if ($thisFieldName == '') {
      $thisFieldName = $widgetPbFbFormFeild['fbFieldType'];
    }

    switch ($widgetPbFbFormFeild['fbFieldType']) {
      case 'textarea':
           $pbThisFormField = '<textarea rows="'.$thisFieldOptions['fbtextareaRows'].'" name="field-'.$widgetPbFbFormFeildsIndex.'-'.$thisFieldName.'" '.$thisFieldAttr.' class="pbFormField  '.$formBuilderFieldSize.'" ></textarea>';
      break;
      case 'radio':

           $multiOptionFieldValues = explode("\n", $thisFieldOptions['multiOptionFieldValues']);
           $allRadioItems = '';

           for ($pb_widget_form_loopi =0; $pb_widget_form_loopi< count($multiOptionFieldValues); $pb_widget_form_loopi++) {
             $thisRadioLabel = '<label for="fieldID-'.$widgetPbFbFormFeildsIndex.'-'.$pb_widget_form_loopi.'-'.$pbFormBuilderUniqueId.'">'.$multiOptionFieldValues[$pb_widget_form_loopi].'</label>';
             $thisRadioItem = '<span '.$multiFieldStyleAttr.'>  <input type="radio" name="field-'.$widgetPbFbFormFeildsIndex.'-'.$thisFieldName.'"  id="fieldID-'.$widgetPbFbFormFeildsIndex.'-'.$pb_widget_form_loopi.'-'.$pbFormBuilderUniqueId.'" value="'.$multiOptionFieldValues[$pb_widget_form_loopi].'" > ' .$thisRadioLabel. ' </span>';
             
             $prevRadioFields = $allRadioItems;
             $allRadioItems = $prevRadioFields .  $thisRadioItem;
           }
           $pbThisFormField = $allRadioItems;

      break;
      case 'checkbox':
           $multiOptionFieldValues = explode("\n", $thisFieldOptions['multiOptionFieldValues']);
           $allRadioItems = '';

           for ($pb_widget_form_loopi =0; $pb_widget_form_loopi< count($multiOptionFieldValues); $pb_widget_form_loopi++) {
             $thisRadioLabel = '<label for="fieldID-'.$widgetPbFbFormFeildsIndex.'-'.$pb_widget_form_loopi.'-'.$pbFormBuilderUniqueId.'">'.$multiOptionFieldValues[$pb_widget_form_loopi].'</label>';
             $thisRadioItem = '<span '.$multiFieldStyleAttr.'>  <input type="checkbox" name="field-'.$widgetPbFbFormFeildsIndex.'-'.$thisFieldName.'[]"  id="fieldID-'.$widgetPbFbFormFeildsIndex.'-'.$pb_widget_form_loopi.'-'.$pbFormBuilderUniqueId.'" value="'.$multiOptionFieldValues[$pb_widget_form_loopi].'" > ' .$thisRadioLabel. ' </span>';
             
             $prevRadioFields = $allRadioItems;
             $allRadioItems = $prevRadioFields .  $thisRadioItem;
           }
           $pbThisFormField = $allRadioItems;
      break;
      case 'select':
           $multiOptionFieldValues = explode("\n", $thisFieldOptions['multiOptionFieldValues']);
           $allRadioItems = '';

           for ($pb_widget_form_loopi =0; $pb_widget_form_loopi< count($multiOptionFieldValues); $pb_widget_form_loopi++) {

             $thisRadioItem = '<option  value="'.$multiOptionFieldValues[$pb_widget_form_loopi].'" > '.$multiOptionFieldValues[$pb_widget_form_loopi].' </option> ';
             
             $prevRadioFields = $allRadioItems;
             $allRadioItems = $prevRadioFields .  $thisRadioItem;
           }


           $pbThisFormField = '<select name="field-'.$widgetPbFbFormFeildsIndex.'-'.$thisFieldName.'"  id="fieldID-'.$widgetPbFbFormFeildsIndex.'"  '.$thisFieldAttr.' class="pbFormField  '.$formBuilderFieldSize.'">'. $allRadioItems .'</select>';  
      break;
      default: 
           $pbThisFormField = '<input type="'.$widgetPbFbFormFeild['fbFieldType'].'" name="field-'.$widgetPbFbFormFeildsIndex.'-'.$thisFieldName.'"  '.$thisFieldAttr.' class="pbFormField  '.$formBuilderFieldSize.'" >';
      break;
    } //switch end

      $pbThisFormFieldLabel = '<label for="fieldID-'.$widgetPbFbFormFeildsIndex.'" class="pbFormLabel"> '.$thisFieldOptions['fbFieldLabel'].' </label>';
      $pbThisFormFieldWrapped =  '<div style="width:'.($thisFieldOptions['fbFieldWidth']-3).'%; margin-right:2.5%; display:inline-block;">' . $pbThisFormFieldLabel.' <br> '.$pbThisFormField .'</div>';

      echo $pbThisFormFieldWrapped;

      $widgetPbFbFormFeildsIndex++;
  }; //each loop end

  $pbFormAllFields = ob_get_contents();
  ob_end_clean();


  $pbFormBuilderSubmitStyles = ' style=" width:100%; background:'.$widgetPbFbFormSubmitOptions['formBuilderBtnBgColor'].'; color:'.$widgetPbFbFormSubmitOptions['formBuilderBtnColor'].'; font-size:'.$widgetPbFbFormSubmitOptions['formBuilderBtnFontSize'].'px;  border:'.$widgetPbFbFormSubmitOptions['formBuilderBtnBorderWidth'].'px solid '.$widgetPbFbFormSubmitOptions['formBuilderBtnBorderColor'].'; border-radius:'.$widgetPbFbFormSubmitOptions['formBuilderBtnBorderRadius'].'px;" ';

  $pbFormBuilderSubmit = '<div style="text-align:'.$widgetPbFbFormSubmitOptions['formBuilderBtnAlignment'].'; width:'.($widgetPbFbFormSubmitOptions['formBuilderBtnWidth']-3).'%;  margin:2% 2.5% 2% 0; display:inline-block;">  <button type="submit" '.$pbFormBuilderSubmitStyles.' class="pbField-'.$widgetPbFbFormSubmitOptions['formBuilderBtnSize'].'"> '.$widgetPbFbFormSubmitOptions['formBuilderBtnText'].' </button> </div>';


  $pbFormBuilderExtraFields = " <input type='hidden' name='psID' value='$current_pageID'>       
                                <input type='hidden' name='pbFormTargetInfo' value='$rowCount \n  $Columni \n $j '>
                                <input type='text' id='yourMessageHP' name='messageFBHP'> "; 

  $pbFormBuilderWrapper = '<form id="'.$pbFormBuilderUniqueId.'" action="'.admin_url('admin-ajax.php?action=ulpb_formBuilderEmail_ajax').'"  method="post"  > '.$pbFormAllFields.'  '.$pbFormBuilderExtraFields.'  '.wp_nonce_field('POPB_send_form_data','POPB_Form_Nonce'). ' '. $pbFormBuilderSubmit.' </form>';

  $pbFormBuilderStylesID = '#'.$pbFormBuilderUniqueId;

  $pbThisFormBuilderStyles = '<style>  '.$pbFormBuilderStylesID.' .pbFormField {   background:'.$widgetPbFbFormFeildOptions['formBuilderFieldBgColor'].';  color:'.$widgetPbFbFormFeildOptions['formBuilderFieldColor'].'; border:'.$widgetPbFbFormFeildOptions['formBuilderFieldBorderWidth'].'px solid '.$widgetPbFbFormFeildOptions['formBuilderFieldBorderColor'].'; border-radius:'.$widgetPbFbFormFeildOptions['formBuilderFieldBorderRadius'].'px;  }           '.$pbFormBuilderStylesID.' .pbFormLabel{ font-size:'.$widgetPbFbFormFeildOptions['formBuilderLabelSize'].'px; color:'.$widgetPbFbFormFeildOptions['formBuilderLabelColor'].'; display:'.$widgetPbFbFormFeildOptions['formBuilderFieldLabelDisplay'].'; line-height:3em; }  '.$pbFormBuilderStylesID.' button:hover { background:'.$widgetPbFbFormSubmitOptions['formBuilderBtnHoverBgColor'].' !important; color:'.$widgetPbFbFormSubmitOptions['formBuilderBtnHoverTextColor'].' !important; } </style>';

  ob_start();
  ?>
  <script type="text/javascript">
    (function($){
      $(document).ready(function() {
        $('#yourMessageHP').hide();
      $('#'+'<?php echo $pbFormBuilderUniqueId; ?>').on('submit', function()  {
        var successMessage = "<?php echo $widgetPbFbFormEmailOptions['formSuccessMessage']; ?>";

        var form = $(this);
        var result = " ";
          $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(result){
              var result = JSON.parse(result);
              var emailResult = result['email'];
              var mcResult = result['mailchimp'];
                if (emailResult == 'success') {
                  form.siblings('.pb_success').children('p').html(successMessage);
                  form.siblings('.pb_success').show();
                }else if(mcResult == 'success'){
                  form.siblings('.pb_success').children('p').html(successMessage);
                  form.siblings('.pb_success').show();
                } else{
                   form.siblings('.pb_error').children('p').html(emailResult);
                   form.siblings('.pb_error').show();
                }

                console.log('MailChimp Result  : ' + result['mailchimp']);
                console.log('Database Result  : ' + result['database']);
            }
          });
                         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
      });

    });

  })(jQuery);

  </script>
  <?php 
  $thisFormScript = ob_get_contents();
  ob_end_clean();

  $pb_On_complete_messages = '<div class="w3-panel w3-green pb_success" style="display:none;"><p></p></div>
  <div class="w3-panel w3-red pb_error" style="display:none;"><p></p></div>
';

  $widgetContent = $pbFormBuilderWrapper . " $pb_On_complete_messages  ". $pbThisFormBuilderStyles . '  '.$thisFormScript;


?>