<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add New Project | The Joint Services</title>
<?php include "externallinks.php" ?>
<?php
	if(isset($_POST['submit'])) {
		$target_dir = "uploaded/gallery/";
		$target_dir_sphere = "uploaded/sphere/";
		$target_file_image = $target_dir . basename($_FILES["images"]["name"]);
		$target_file_sphere = $target_dir_sphere . basename($_FILES["sphere"]["name"]);
		$uploadOk = 1;
		
        // Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["images"]["tmp_name"]);
			$checksphere = getimagesize($_FILES["sphere"]["tmp_name"]);
			if($check !== false && $checksphere != false) {
				//echo "<br/>File is an image - " . $check['mime'] . ".";
				$uploadOk = 1;
			} else {
				echo "<br/>File is not an image.";
				$uploadOk = 0;
			}
    
        $actual_image = pathinfo($target_file_image,PATHINFO_FILENAME);
        $original_image = $actual_image;
        $extension_image = pathinfo($target_file_image, PATHINFO_EXTENSION);

        $randImg = rand(1, 1500);
        while(file_exists('uploaded/gallery/'.$actual_image.".".$extension_image))
        {           
            $actual_image = (string)$original_image.$randImg;
            $imgname = $actual_image.".".$extension_image;
            $target_file_image = $target_dir . $imgname;
         //   echo $target_file_image;
        }
    
        $actual_sphere = pathinfo($target_file_sphere,PATHINFO_FILENAME);
        $original_sphere = $actual_sphere;
        $extension_sphere = pathinfo($target_file_sphere, PATHINFO_EXTENSION);

    
        $randSph = rand(1, 1500);
        while(file_exists('uploaded/sphere/'.$actual_sphere.".".$extension_sphere))
        {           
            $actual_sphere = (string)$original_sphere.$randSph;
            $sphname = $actual_sphere.".".$extension_sphere;
            $target_file_sphere = $target_dir_sphere . $sphname;
          //  echo $target_file_sphere;
        }
    
    
    
    
		
		
			
			//echo $target_file_image.$target_file_sphere;
			
			 if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file_image) && move_uploaded_file($_FILES["sphere"]["tmp_name"], $target_file_sphere)) {
					//echo "<br/>The file ".$target_file_image." and ".$target_file_sphere." has been uploaded.";
				} else {
					echo "<br/>Sorry, there was an error uploading your file.";
				}

		$valuearry = array("", "", $_POST['title'], $target_file_image, $_POST['category'], $_POST['description'], $_POST['video'], $target_file_sphere, "", "", "", "", "", "", "", "", "", "");
		Insertrow("projects",$valuearry);
    ?>
    <script>
    window.location.href = "viewProject.php";
    </script>
    <?php
	}
?>
<script type="text/javascript">
$(document).ready(function() {
	$("#notifSubmit").hide();
	$("#submitProject").click(function() {
		$("#notifSubmit").fadeIn(1000);
		setTimeout(function(){ 
			$('#notifSubmit').fadeOut(1000);
			},5000);
	});	
});
</script>
</head>
<body>
<div class="wrapper">
	<header>
		<?php include "sidebar.php"; ?>
	</header><!-- Header End -->
	
<div id="container" class="ui-notify">
<div id="notifSubmit">
    <div class="ui-notify-message ui-notify-message-style green" style="">
        <a class="ui-notify-close ui-notify-cross">x</a>
        <h1>Project Added</h1>
        <p>Example of a "sticky" notification.  Click on the X above to close me.</p>
    </div>
</div>
</div>
<section class="main-section">
<div class="container">
	<div class="row">
		<div class="main-bg">
			<?php include "header.php" ?>
			
			<div class="breadcrumbs-notify">
				<a href="dashboard.php" title=""> Dashboard / </a> <a href="addNewProject.php" class="current-page" title=""> Add New Project </a>
				<div class="notification-auto">
					<div class="fade-notification">
					<h5><i class="icon-warning-sign"></i> Notification :</h5>
					</div>
					<div class="notification-slideshow">
						<?php include "notifications.php" ?>
					</div>
				</div>
			</div>
			
			
		<div class="body-sec no-padding">			
			<div class="company-details">
				<h1>Add New Project</h1>
				<h2>Fill the form below. All fields are mandatory</h2>
				
                <form action="addNewProject.php" method="post" enctype="multipart/form-data">

                        <div class="col-md-12">
                            <div class="inline-form">
                                <label class="c-label">Project Title</label><input class="input-style" name="title" placeholder="Project Title" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inline-form">
                                <label class="c-label">Category</label>
                                
                                <select name="category" class="form-control">
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 3</option>
                                    <option value="Category 4">Category 4</option>
                                    <option value="Category 5">Category 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inline-form">
                                <label class="c-label">Images</label><input  class="input-style" name="images" id="images" type="file" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inline-form">
                                <label class="c-label">Description</label>
                                <textarea rows="5" required name="description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inline-form">
                                <label class="c-label">Video</label><input name="video" class="input-style" placeholder="Paste Youtube video link here" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inline-form">
                                <label class="c-label">Photosphere</label><input name="sphere" class="input-style" id="sphere" type="file" required />
                            </div>
                        </div>	
                        
                        <div class="col-md-12">
                            <div class="inline-form">
                        		<button type="submit" name="submit" id="submitProject" class="btn gray pull-left">Submit</button>																
                            </div>
                       </div>

                </form>
                
                
			</div>

			<div class="margin-extra"></div>
            
			<div class="footer">
				<p>Copyright 2014 - Peroneira by </p><a target="_blank" href="http://www.thejointservices.com/" title="" >The Joint Services</a>
			</div>
			
			
			
		</div><!-- Body Sec -->
		</div><!-- main-bg-->
	</div><!-- Row -->
</div><!-- Container -->
	
</section><!-- Main Section -->
	
</div><!-- Wrapper -->
</body><!-- Body -->
</html><!-- Html -->
