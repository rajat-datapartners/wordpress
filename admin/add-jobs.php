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
         $postlink=$_POST['postlink'];
         $postcode=$_POST['postcode'];
         
         $status=1;
         $insert_query = "insert into jobs(title,jobcode,description,status,link) values('$posttitle','$postcode','$postdetails','$status','$postlink')";
         $query=mysqli_query($con, $insert_query);
         if($query)
         {
            $msg="Job successfully added ";
            header("location:http://localhost/demo2/admin/manage-jobs.php");
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
                  <h4 class="page-title">Add Job </h4>
                  <ol class="breadcrumb p-0 m-0">
                     <li><a href="#">Job</a></li>
                     <li class="active">Add Job</li>
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
                  <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter Title">
               </div>
               <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Job Code</label>
                  <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Enter Job Code">
               </div>
               <div class="col-sm-6 col-md-6">
                  <label for="exampleInputEmail1">Job Link</label>
                  <input type="url" class="form-control" id="postlink" name="postlink" placeholder="Enter Link">
               </div>
            </div>
            <br>
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