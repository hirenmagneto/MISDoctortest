<?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/multi_upload/jquery.fs.dropper.js'); ?>
<?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl.'/multi_upload/jquery.fs.dropper.css'); ?>

        <style>
			.demo .filelists { margin: 0px 0; }
			.demo .filelists h5 { margin: 0px 0 0; }
			.demo .filelist { margin: 0; padding: 0px 0; }
			.demo .filelist li { background: #fff;font-size: 14px; list-style: none; padding: 5px; }
			.demo .filelist li:before { display: none; }
			.demo .filelist li .file { color: #333; }
			.demo .filelist li .progress { color: #666; float: right; font-size: 10px; text-transform: uppercase; }
			.demo .filelist li .delete { color: red; cursor: pointer; float: right; font-size: 10px; text-transform: uppercase; }
			.demo .filelist li.complete .progress { color: green; }
			.demo .filelist li.error .progress { color: red; }
            .demo .filelist li {
                display: block;
                width: 200px;
                float: left;
                margin: 10px;
                position: relative;
            }
           .delete_img{
                position: absolute;
                right: 95px;
                top: -3px;
                z-index: 9;
                height: 20px;
                width: 20px;
                background-image: url(<?php echo Yii::app()->baseUrl; ?>/images/delete.png);  /* shows image */
                
            
                /* Hide the text. */
                text-indent: 100%;
                white-space: nowrap;
                overflow: hidden;
            }
		</style>

		<script>
            var $ = jQuery.noConflict();                
			var $filequeue,$filelist;
			var file_src = '<?php echo Yii::app()->request->baseUrl."/images/album/temp/" ?>';

			$(document).ready(function() {
				$filequeue = $(".demo .filelist.queue");
				$filelist = $(".demo .filelist.complete");

				$(".demo .dropped").dropper({
					action: "<?php echo CController::createUrl('multiupload/upload')?>",
					maxSize: 1048576
				}).on("start.dropper", onStart)
				  .on("complete.dropper", onComplete)
				  .on("fileStart.dropper", onFileStart)
				  .on("fileProgress.dropper", onFileProgress)
				  .on("fileComplete.dropper", onFileComplete)
				  .on("fileError.dropper", onFileError);

				$(window).one("pronto.load", function() {
					$(".demo .dropped").dropper("destroy").off(".dropper");
				});
				
				
				$(document).on('click', '.delete_img', function(){
					
					$(this).closest('li').remove();
					var img_id = $(this).attr('id');
					$.ajax({
                                                url	: "<?php echo CController::createUrl('multiupload/delete')?>",
                                                cache	: false,
                                                data	: 'img_id=' + img_id,
                                                type	: 'POST',
					}).done(function() {});
				})
				
			});

			function onStart(e, files) {
				console.log("Start");

				var html = '';
				for (var i = 0; i < files.length; i++) {
					html += '<li data-index="' + files[i].index + '" class="delete_li"><span class="file">' + files[i].name + '</span><span class="progress">Queued</span></li>';
				}
				$filequeue.append(html);
			}

			function onComplete(e) {
				console.log("Complete");
				// All done!
			}

			function onFileStart(e, file) {
				console.log("File Start");				
				$filequeue.find("li[data-index=" + file.index + "]")
					.find(".progress").text("0%");
			}

			function onFileProgress(e, file, percent) {
				console.log("File Progress");
				$filequeue.find("li[data-index=" + file.index + "]")
						  .find(".progress").text(percent + "%");
			}

			function onFileComplete(e, file, response) {
				console.log("File Complete");

				if (response.trim() === "" || response.toLowerCase().indexOf("error") > -1) {
					$filequeue.find("li[data-index=" + file.index + "]").addClass("error")
							  .find(".progress").text(response.trim());
				} else {
					if (response == 2) {
						alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
						//return false;
					}else if(response == 1) {
					   alert('Sorry, your file is too large.');
						return false;
					}else if(response == 3) {
					   alert('Sorry, your file was not uploaded');
						return false;
					}else if(response == 4) {
					   alert('Sorry, there was an error uploading your file.');
						return false;
					}else if(response == 5) {
					   alert('Sorry, file already exists.');
						return false;
					}
					
					var $target = $filequeue.find("li[data-index=" + file.index + "]");					
					$target.find(".file").html('<img width="100px" height="100px" src="'+file_src+response+'"/><a class="delete_img" id="delete_'+response+'">delete</a>');
					//$target.find(".file").text(file.name);
					$target.find(".progress").remove();
					$target.appendTo($filelist);
				}
			}

			function onFileError(e, file, error) {
				console.log("File Error");

				$filequeue.find("li[data-index=" + file.index + "]").addClass("error")
						  .find(".progress").text("Error: " + error);
			}
		</script>
                
                
    <body class="gridlock demo">		
		<article class="row page">
			<div class="mobile-full tablet-full desktop-8 desktop-push-2">
				
					<div class="dropped"></div>
					<div class="filelists">						
						<ol class="filelist complete"></ol>						
						<ol class="filelist queue"></ol>
					</div>
				
			</div>
		</article>		
	</body>
                
<!--                //data: 'deleteimage=' + (val[1]) +'&menu_id=<?php //echo $menu_id?>&album_id='+ album_id +'&task=delete_image',-->