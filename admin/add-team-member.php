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

         $name=$_POST['name'];
         $profession=$_POST['profession'];
         $description=$_POST['description'];
         $fbook=$_POST['fbook'];
         $insta=$_POST['insta'];
         $linkedIn=$_POST['linkedIn'];
         $twitter=$_POST['twitter'];
         $type=$_POST['type'];

         $imgfile=$_FILES["userImage"]["name"];
         
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

            move_uploaded_file($_FILES["userImage"]["tmp_name"],"teams/".$imgnewfile);
            
            $status=1;
            $insert_query = "insert into teams (name, profession, description, fbook, twitter, insta, linkedin,  userImage, status, type) values('$name', '$profession', '$description', '$fbook', '$twitter', '$insta', '$linkedIn','$imgnewfile', '$status', '$type')";
            // echo '<pre>'; print_r($insert_query);exit;

            $query=mysqli_query($con, $insert_query);
            if($query)
            {
               $msg="Team Member successfully added ";
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
                  <h4 class="page-title">Add Team </h4>
                  <ol class="breadcrumb p-0 m-0">
                     <li><a href="#">Teams</a></li>
                     <li class="active">Add Team Member</li>
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
               
         <form name="addteam" method="post" enctype="multipart/form-data">
            <div class="row">
               <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">User Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
               </div>
               <div class="col-sm-6 col-md-6">
                  <label for="Profession">Profession</label>
                  <input type="text" class="form-control" id="profession" name="profession" placeholder="Enter Your Profession">
               </div>
            </div>
            <br>

            <div class="row">
               <div class="col-sm-6 col-md-6">
                  <label for="Image">User Image</label>
                  <input type="file" class="form-control" id="userImage" name="userImage">
               </div>

               <div class="col-sm-6 col-md-6">
                  <label for="Profession">Team As</label>
                  <select name="type" id="type" class="form-control">
                     <option value="">Select Team Type</option>
                     <option value="advisor">Advisor</option>
                     <option value="funding_team">Funding Team</option>
                  </select>
               </div>
            </div>
            <br><br>

            <div class="row">
               <div class="col-sm-12">
                  <div class="card-box">
                     <h4 class="m-b-30 m-t-0 header-title"><b>Description</b></h4>
                     <textarea class="summernote" name="description"></textarea>
                  </div>
               </div>
            </div>
            <br>

            <div class="row">
               <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Twitter URL</label>
                  <input type="text" class="form-control" id="twitter" name="twitter" placeholder="https://twitter.com/">
               </div>
               <div class="col-sm-6 col-md-6">
                  <label for="Profession">Instagram URL</label>
                  <input type="text" class="form-control" id="insta" name="insta" placeholder="https://www.instagram.com/">
               </div>
            </div>
            <br>

            <div class="row">
               <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Facebook URL</label>
                  <input type="text" class="form-control" id="fbook" name="fbook" placeholder="https://www.facebook.com/">
               </div>
               <div class="col-sm-6 col-md-6">
                  <label for="Profession">LinkedIn URL</label>
                  <input type="text" class="form-control" id="linkedIn" name="linkedIn" placeholder="https://www.linkedin.com/">
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