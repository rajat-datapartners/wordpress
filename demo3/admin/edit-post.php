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

      $posttitle=$_POST['posttitle'];
      $postdetails=$_POST['postdescription'];
      $status=1;
      $postid=intval($_GET['pid']);

      $imgfile=$_FILES["postimage"]["name"];

      $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
      $allowed_extensions = array(".jpg","jpeg",".png",".gif");

      if(!in_array($extension, $allowed_extensions) && $imgfile != '')
      {
         echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
      }
      else
      {
         $imgnewfile=md5($imgfile).$extension;
         move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);
      }

      if($imgfile == ''){
         $imgnewfile = $_POST['oldImage'];
      }

      

      $query=mysqli_query($con,"update news set title='$posttitle', description='$postdetails', image='$imgnewfile', status='$status' where id='$postid'");
     
      if($query)
      {
      $msg="Post updated ";
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
                     <h4 class="page-title">Edit News </h4>
                     <ol class="breadcrumb p-0 m-0">
                        <li><a href="#"> News </a></li>
                        <li class="active">Edit News</li>
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
            $postid=intval($_GET['pid']);
            $query=mysqli_query($con,"select * from news where id='$postid' and status=1");

            while($row=mysqli_fetch_array($query))
            { ?>
           
            <form name="addpost" method="post" class="row" enctype="multipart/form-data">
               
               <div class="row">
                  <div class="form-group col-md-6">
                     <label for="exampleInputEmail1">News Title</label>
                     <input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['title']);?>" name="posttitle" placeholder="Enter title" >
                  </div>
                  
                  <div class="col-sm-6">
                        <label for="Image">News Image</label>
                        <input type="file" class="form-control" id="postimage" name="postimage" >
                        <input type="hidden" class="form-control" id="oldImage" name="oldImage" value="<?= $row['image']?>">
                     <br>
                     <br>
                     <img src="postimages/<?php echo htmlentities($row['image']);?>" width="300"/>
                  </div>
               </div>
               <br>

               <div class="row">
                  <div class="col-sm-12">
                     <div class="card-box">
                        <h4 class="m-b-30 m-t-0 header-title"><b>Description</b></h4>
                        <textarea class="summernote" name="postdescription"><?php echo htmlentities($row['description']);?></textarea>
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