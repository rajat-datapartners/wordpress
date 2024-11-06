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

      $name=$_POST['name'];
      $profession=$_POST['profession'];
      $description=$_POST['description'];
      $fbook=$_POST['fbook'];
      $insta=$_POST['insta'];
      $linkedIn=$_POST['linkedIn'];
      $twitter=$_POST['twitter'];
      $type=$_POST['type'];
      $status=1;
      $postid=intval($_GET['pid']);

      $imgfile=$_FILES["userImage"]["name"];

      $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
      $allowed_extensions = array(".jpg","jpeg",".png",".gif");

      if(!in_array($extension, $allowed_extensions) && $imgfile != '')
      {
         echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
      }
      else
      {
         $imgnewfile=md5($imgfile).$extension;
         move_uploaded_file($_FILES["userImage"]["tmp_name"],"teams/".$imgnewfile);
      }

      if($imgfile == ''){
         $imgnewfile = $_POST['oldImage'];
      }

      
      $update_query = "update teams set name='$name', profession='$profession', description='$description', fbook='$fbook', twitter='$twitter', linkedin='$linkedIn', insta='$insta', userImage='$imgnewfile', status='$status', type='$type' where id='$postid'";
      // echo '<pre>'; print_r($update_query);exit;
      $query=mysqli_query($con,$update_query);

      if($query)
      {
      $msg="Team Member updated Successfully.";
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
                     <h4 class="page-title">Edit Team </h4>
                     <ol class="breadcrumb p-0 m-0">
                        <li><a href="#"> Teams </a></li>
                        <li class="active">Edit Team Member</li>
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
            $query=mysqli_query($con,"select * from teams where id='$postid' and status=1");

            while($row=mysqli_fetch_array($query))
            { ?>
           
            <form name="addteam" method="post" class="row" enctype="multipart/form-data">
               
               <div class="row">
                  <div class="form-group col-md-6">
                     <label for="exampleInputEmail1">User Name</label>
                     <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlentities($row['name']);?>">
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <label for="Profession">Profession</label>
                     <input type="text" class="form-control" id="profession" name="profession" value="<?php echo htmlentities($row['profession']);?>">
                  </div>
               </div>

               <div class="row">
                  <div class="col-sm-6">
                        <label for="Image">User Image</label>
                        <input type="file" class="form-control" id="userImage" name="userImage" >
                        <input type="hidden" class="form-control" id="oldImage" name="oldImage" value="<?= $row['userImage']?>">
                     <br>
                     <br>
                     <img src="teams/<?php echo htmlentities($row['userImage']);?>" width="300"/>
                  </div>

                  <div class="col-sm-6 col-md-6">
                     <label for="Profession">Team As</label>
                     <select name="type" id="type" class="form-control">
                        <option value="">Select Team Type</option>
                        <option value="advisor" <?php echo ($row['type'] == 'advisor') ? "selected" : ""; ?>>Advisor</option>
                        <option value="funding_team" <?php echo ($row['type'] == 'funding_team') ? "selected" : ""; ?>>Funding Team</option>
                     </select>
                  </div>
               </div>
               <br>

               <div class="row">
                  <div class="col-sm-12">
                     <div class="card-box">
                        <h4 class="m-b-30 m-t-0 header-title"><b>Description</b></h4>
                        <textarea class="summernote" name="description"><?php echo htmlentities($row['description']);?></textarea>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="form-group col-md-6">
                     <label for="exampleInputEmail1">Twitter URL</label>
                     <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo htmlentities($row['twitter']);?>">
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <label for="Profession">Instagram URL</label>
                     <input type="text" class="form-control" id="insta" name="insta" value="<?php echo htmlentities($row['insta']);?>">
                  </div>
               </div>
               <br>

               <div class="row">
                  <div class="form-group col-md-6">
                     <label for="exampleInputEmail1">Facebook URL</label>
                     <input type="text" class="form-control" id="fbook" name="fbook" value="<?php echo htmlentities($row['fbook']);?>">
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <label for="Profession">LinkedIn URL</label>
                     <input type="text" class="form-control" id="linkedIn" name="linkedIn" value="<?php echo htmlentities($row['linkedin']);?>">
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