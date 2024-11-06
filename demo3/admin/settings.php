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

   if(isset($_POST['update']))
   {
      $mobile=$_POST['mobile'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $status=1;

      $top_logo=$_FILES["top_logo"]["name"];
      $extension = substr($top_logo,strlen($top_logo)-4,strlen($top_logo));
      $allowed_extensions = array(".jpg","jpeg",".png",".gif");
      if(!in_array($extension, $allowed_extensions) && $top_logo != '')
      {
         echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
      }
      else
      {
         $top_logo_file=md5($top_logo).$extension;
         move_uploaded_file($_FILES["top_logo"]["tmp_name"],"settings/".$top_logo_file);
      }

      if($top_logo == ''){
         $top_logo_file = $_POST['old_top_logo'];
      }

      $footer_logo=$_FILES["footer_logo"]["name"];
      $extension = substr($footer_logo,strlen($footer_logo)-4,strlen($footer_logo));
      $allowed_extensions = array(".jpg","jpeg",".png",".gif");
      if(!in_array($extension, $allowed_extensions) && $footer_logo != '')
      {
         echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
      }
      else
      {
         $footer_logo_file=md5($footer_logo).$extension;
         move_uploaded_file($_FILES["footer_logo"]["tmp_name"],"settings/".$footer_logo_file);
      }

      if($footer_logo == ''){
         $footer_logo_file = $_POST['old_footer_logo'];
      }


      $favicon_image=$_FILES["favicon_image"]["name"];
      $extension = substr($favicon_image,strlen($favicon_image)-4,strlen($favicon_image));
      $allowed_extensions = array(".jpg","jpeg",".png",".gif");
      if(!in_array($extension, $allowed_extensions) && $favicon_image != '')
      {
         echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
      }
      else
      {
         $favimgfile=md5($favicon_image).$extension;
         move_uploaded_file($_FILES["favicon_image"]["tmp_name"],"settings/".$favimgfile);
      }

      if($favicon_image == ''){
         $favimgfile = $_POST['old_favicon_image'];
      }


      $query=mysqli_query($con,"update settings set mobile='$mobile', email='$email', address='$address', top_logo='$top_logo_file', footer_logo='$footer_logo_file', favicon_image='$favimgfile', status='$status' where id='1'");

      if($query)
      {
      $msg="Settings updated ";
      }
      else{
      $error="Something went wrong . Please try again.";    
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
                     <h4 class="page-title">Edit Post </h4>
                     <ol class="breadcrumb p-0 m-0">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#"> Posts </a></li>
                        <li class="active">Add Post</li>
                     </ol>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-sm-6">
                  <?php if($msg){ ?>
                  <div class="alert alert-success" role="alert">
                     <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                  </div>
                  <?php } ?>
                  <?php if($error){ ?>
                  <div class="alert alert-danger" role="alert">
                     <strong>Oh snap!</strong> <?php echo htmlentities($error);?>
                  </div>
                  <?php } ?>
               </div>
            </div>

            <?php

            $query=mysqli_query($con,"select * from settings where status=1");

            while($row=mysqli_fetch_array($query))
            { ?>
           
            <form name="addsettings" method="post" class="row" enctype="multipart/form-data">
               
               <div class="row">
                  <div class="form-group col-md-6">
                     <label for="exampleInputEmail1">Mobile</label>
                     <input type="number" class="form-control" id="mobile" value="<?php echo htmlentities($row['mobile']);?>" name="mobile" placeholder="Enter mobile" >
                  </div>
                  
                  <div class="form-group col-md-6">
                     <label for="exampleInputEmail1">Email</label>
                     <input type="email" class="form-control" id="email" value="<?php echo htmlentities($row['email']);?>" name="email" placeholder="Enter Email" >
                  </div>
               </div>
               <br>

               <div class="row">
                  <div class="col-sm-6">
                        <label for="Image">Logo</label>
                        <input type="file" class="form-control" id="top_logo" name="top_logo" >
                        <input type="hidden" class="form-control" id="old_top_logo" name="old_top_logo" value="<?= $row['top_logo']?>">
                     <br>
                     <img src="settings/<?php echo htmlentities($row['top_logo']);?>" width="300"/>
                  </div>

                  <div class="col-sm-6">
                        <label for="Image">Footer Logo</label>
                        <input type="file" class="form-control" id="footer_logo" name="footer_logo" >
                        <input type="hidden" class="form-control" id="old_footer_logo" name="old_footer_logo" value="<?= $row['footer_logo']?>">
                     <br>
                     <img src="settings/<?php echo htmlentities($row['footer_logo']);?>" width="300"/>
                  </div>
               </div>

               <div class="row">
                  <div class="col-sm-6">
                        <label for="Image">Favicon Icon</label>
                        <input type="file" class="form-control" id="favicon_image" name="favicon_image" >
                        <input type="hidden" class="form-control" id="old_favicon_image" name="old_favicon_image" value="<?= $row['favicon_image']?>">
                     <br>
                     <img src="settings/<?php echo htmlentities($row['favicon_image']);?>" style="width:120px; height:100px;"/>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card-box">
                        <h4 class="m-b-30 m-t-0 header-title"><b>Description</b></h4>
                        <textarea class="summernote" name="address"><?php echo htmlentities($row['address']);?></textarea>
                     </div>
                  </div>
               </div>

               
               <button type="submit" name="update" class="btn btn-custom waves-effect waves-light btn-md">Update </button>

            </form>
            <?php } ?>
         </div>
      </div>
      </div>
<?php include('includes/footer.php');?> 
        
<?php } ?>