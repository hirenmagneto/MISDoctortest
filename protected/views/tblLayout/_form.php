<?php
/* @var $this TblLayoutController */
/* @var $model TblLayout */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-layout-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'layout_name'); ?>
		<?php echo $form->textField($model,'layout_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'layout_name'); ?>
	</div>
    <div class="row">
        <div class="demo">
        	
        		<?php 
                    $uploader=new PhpUploader();
                    $uploader->MaxSizeKB=10240; 
                    $uploader->MultipleFilesUpload=true; 
                    $uploader->Name="myuploader"; 
                    $uploader->InsertText="Select multiple files (Max 10M)"; 
                    $uploader->AllowedFileExtensions="*.jpg,*.png,*.gif,*.bmp";
                    $uploader->ManualStartUpload=true; 
                    $uploader->Render(); 
                ?>
                <br/>
        		<br/>
        		<br/>
        			<?php 
                    $files=array(); 
                    $processedlist=@$_POST[ "processedlist"]; 
                    if($processedlist) { 
                        $guidlist=explode( "/",$processedlist); 
                        foreach($guidlist as $fileguid) { 
                            $mvcfile=$uploader->GetUploadedFile($fileguid); 
                            if($mvcfile) { 
                                array_push($files,$mvcfile);
                            }
                        }
                    }
                    $fileguidlist=@$_POST["myuploader"];
                    if($fileguidlist) { 
                        $guidlist=explode("/",$fileguidlist); 
                        foreach($guidlist as $fileguid){ 
                            $mvcfile=$uploader->GetUploadedFile($fileguid); 
                            if($mvcfile) { 
                                if($processedlist) 
                                    $processedlist= $processedlist . "/" . $fileguid; 
                                else 
                                    $processedlist= $fileguid; array_push($files,$mvcfile); 
                            } 
                        } 
                    }
        			if(count($files)>0) { 
        			    echo("<table style='border-collapse: collapse' class='Grid' border='0' cellspacing='0' cellpadding='2'>"); 
                        foreach($files as $mvcfile) { 
                            $mvcfile->CopyTo("images/album/layout"); 
                            echo("<tr>"); echo("<td>");echo("<div class='item_container'><img src='../../images/album/layout/$mvcfile->FileName' alt='$mvcfile->FileName' height='100' width='100'></div>");echo("</td>");
                            echo("<td>");echo("<div class='delete' rel='images/album/layout/$mvcfile->FileName;$mvcfile->FileGuid'><span>Delete</span></div>");echo("</td>"); 
                            echo("</tr>");
                        }
                        echo("</table>"); 
                    } ?>
        				<input type='hidden' id="guild" name='processedlist' value='<?php echo($processedlist) ?>' />
        				<br />
        				<br />
        				<a id="submitbutton" onclick="doStart();return false;">Start Uploading Files</a>
        	
        </div>
    </div>
	<div class="row">
		<?php echo $form->labelEx($model,'isactive'); ?>
		<?php echo  $form->radioButtonList($model,'isactive',array('1'=>'Is Active', '2'=>'Not Active'),array('separator'=>'')); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script>
	function removeCsvVal(source, toRemove) //source is a string of comma-seperated values,
	{ //toRemove is the CSV to remove all instances of
		var sourceArr = source.split("/"); //Split the CSV's by commas
		var toReturn = ""; //Declare the new string we're going to create
		for (var i = 0; i < sourceArr.length; i++) //Check all of the elements in the array
		{
			if (sourceArr[i] != toRemove) //If the item is not equal
			toReturn += sourceArr[i] + "/"; //add it to the return string
		}
		return toReturn.substr(0, toReturn.length - 1); //remove trailing comma
	}
	$(document).ready(function() {

		$(".delete span").click(function() {
			var rel = $(this).parent().attr('rel').split(';');
			var imgurl = rel[0];
			var guild = rel[1];
			var all_guild = $('#guild').val();
			var newguild = removeCsvVal(all_guild, guild);
			$('#guild').val(newguild);
			var confirmation = confirm('Are you sure you want to remove this item?');
			if (confirmation) {
				var all_guild = $('#guild').val();
				var newguild = removeCsvVal(all_guild, guild);
				$('#guild').val(newguild);
				$.ajax({
					url: '../../phpuploader/delete.php',
					type: 'POST',
					data: {
						action: 'deleteimage',
						imagefile: imgurl,
					},
					success: function() {

					}
				})
				$(this).closest('tr').remove();
			} else {
				return false;
			}

		});
	})

	function doStart() {
		var uploadobj = document.getElementById('myuploader');
		if (uploadobj.getqueuecount() > 0) {
			uploadobj.startupload();
		} else {
			alert("Please browse files for upload");
		}
	}
</script>