<?php 
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   else{
   if(isset($_POST['update']))
   {
   
   $imgfile=$_FILES["postimage"]["name"];
   // get the image extension
   $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
   // allowed extensions
   $allowed_extensions = array(".jpg","jpeg",".png",".gif");
   // Validation for allowed extensions .in_array() function searches an array for a specific value.
   if(!in_array($extension,$allowed_extensions))
   {
   echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
   }
   else
   {
   //rename the image file
   $imgnewfile=md5($imgfile).$extension;
   // Code for move image into directory
   move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);
   
   
   
   $postid=intval($_GET['pid']);
   $query=mysqli_query($con,"update news set image='$imgnewfile' where id='$postid'");
   if($query)
   {
   $msg="Post Feature Image updated ";
   }
   else{
   $error="Something went wrong . Please try again.";    
   } 
   }
   }
   ?>

<?php include('includes/topheader.php');?>
<?php include('includes/leftsidebar.php');?>

<div class="content-page">
<!-- Start content -->
<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="page-title-box">
               <h4 class="page-title">Update Image </h4>
               <ol class="breadcrumb p-0 m-0">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#"> Posts </a></li>
                  <li><a href="#"> Edit Posts </a></li>
                  <li class="active">Update Image</li>
               </ol>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <!-- end row -->
      <div class="row">
         <div class="col-sm-6">
            <!---Success Message--->  
            <?php if($msg){ ?>
            <div class="alert alert-success" role="alert">
               <strong>Well done!</strong> <?php echo htmlentities($msg);?>
            </div>
            <?php } ?>
            <!---Error Message--->
            <?php if($error){ ?>
            <div class="alert alert-danger" role="alert">
               <strong>Oh snap!</strong> <?php echo htmlentities($error);?>
            </div>
            <?php } ?>
         </div>
      </div>
      <form name="addpost" method="post" enctype="multipart/form-data">
         <?php
            $postid=intval($_GET['pid']);
            $query=mysqli_query($con,"select image,title from news where id='$postid' and status=1 ");
            while($row=mysqli_fetch_array($query))
            {
            ?>
         <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <div class="p-6">
                  <div class="">
      <form name="addpost" method="post">
      <div class="form-group m-b-20">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['title']);?>" name="posttitle"  readonly>
      </div>
      <div class="row">
      <div class="col-sm-12">
      <div class="card-box">
      <h4 class="m-b-30 m-t-0 header-title"><b>Current News Image</b></h4>
      <img src="postimages/<?php echo htmlentities($row['image']);?>" width="300"/>
      <br />
      </div>
      </div>
      </div>
      <?php } ?>
      <div class="row">
      <div class="col-sm-12">
      <div class="card-box">
      <h4 class="m-b-30 m-t-0 header-title"><b>New Image</b></h4>
      <input type="file" class="form-control" id="postimage" name="postimage"  required>
      </div>
      </div>
      </div>
      <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>
      </form>
      </div>
      </div> 
      </div> 
      </div>
   </div>
   
</div>

<?php include('includes/footer.php');?>
<?php } ?>