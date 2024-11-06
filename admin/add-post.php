<?php 
   session_start();
   include('includes/config.php');
   error_reporting(0);

   if(strlen($_SESSION['login'])==0)
   { 
      header('location:index.php');
   }
   else
   {
   
      if(isset($_POST['submit']))
      {
         $posttitle=$_POST['posttitle'];
         $postdetails=$_POST['postdescription'];

         $imgfile=$_FILES["postimage"]["name"];
        //  echo '<pre>'; print_r($imgfile);exit;
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
         
            $imgnewfile = md5($imgfile).$extension;

            move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);
            
            $status=1;
            $insert_query = "insert into news(title,description,status,image) values('$posttitle','$postdetails','$status','$imgnewfile')";

            $query=mysqli_query($con, $insert_query);
            if($query)
            {
               $msg="Post successfully added ";
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
   <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="page-title-box">
                  <h4 class="page-title">Add News </h4>
                  <ol class="breadcrumb p-0 m-0">
                     <li><a href="#">News</a></li>
                     <li class="active">Add News</li>
                  </ol>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
         <!-- end row -->
         <div class="row">
            <div class="col-sm-6"> 
               <?php if($msg){ ?>
               <div class="alert alert-success" role="alert">
                  <strong>Well done!</strong> <?php echo htmlentities($msg);?>
               </div>
               <?php } 
                if($error){ ?>
               <div class="alert alert-danger" role="alert">
                  <strong>Oh snap!</strong> <?php echo htmlentities($error);?>
               </div>
               <?php } ?>
            </div>
         </div>
               
         <form name="addpost" method="post" enctype="multipart/form-data">
            <div class="row">
               <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter title">
               </div>
               <div class="col-sm-6 col-md-6">
                  <label for="Image">News Image</label>
                  <input type="file" class="form-control" id="postimage" name="postimage">
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="card-box">
                     <h4 class="m-b-30 m-t-0 header-title"><b>Description</b></h4>
                     <textarea class="summernote" name="postdescription"></textarea>
                  </div>
               </div>
            </div>
            <button type="submit" name="submit" class="btn btn-custom waves-effect waves-light btn-md">Save</button>
            <button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>
         </form>

      </div>
   </div>
</div>

<?php include('includes/footer.php');?>
<?php } ?>