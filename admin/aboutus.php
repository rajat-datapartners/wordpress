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
    $title=$_POST['title'];
    $description=$_POST['description'];

    $image=$_FILES["bgImage"]["name"];
   
    $extension = substr($image,strlen($image)-4,strlen($image));
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    if(!in_array($extension, $allowed_extensions) && $image != '')
    {
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
        $bgImage=md5($image).$extension;
        move_uploaded_file($_FILES["bgImage"]["tmp_name"],"pages/".$bgImage);
    }

    if($image == ''){
        $bgImage = $_POST['old_bgImage'];
    }

    $sql = "update aboutus set title='$title', description='$description', bgImage='$bgImage' where status=1 ";

    $query=mysqli_query($con, $sql);
      // echo '<pre>'; print_r($query);exit;
    if($query)
    {
        $msg="About us  page successfully updated ";
    }
    else{
        $error="Something went wrong . Please try again.";    
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
                        <h4 class="page-title">About Page  </h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="#">Pages</a>
                            </li>
                         
                            <li class="active">
                             About us
                            </li>
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
                <strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
                <?php } ?>


                </div>
            </div>
            <?php 
            $pagetype='aboutus';
            $query=mysqli_query($con,"select * from aboutus where status=1");
            if(mysqli_num_rows($query) > 0) {
                while($row=mysqli_fetch_array($query)){ ?>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="p-6">
                            <div class="">
                                <form name="aboutus" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Page Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlentities($row['title'])?>"  required>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="Image">Logo</label>
                                            <input type="file" class="form-control" id="bgImage" name="bgImage" >
                                            <input type="hidden" class="form-control" id="old_bgImage" name="old_bgImage" value="<?= $row['bgImage']?>">
                                            <br>
                                            <img src="pages/<?php echo htmlentities($row['bgImage']);?>" width="300"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box">
                                            <h4 class="m-b-30 m-t-0 header-title"><b>Page Details</b></h4>
                                            <textarea class="summernote" name="description"  required><?php echo htmlentities($row['description'])?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="update" class="btn btn-custom waves-effect waves-light btn-md">Update and Post</button>

                                </form>
                            </div>
                        </div> <!-- end p-20 -->
                    </div> <!-- end col -->
                </div>

            <?php } 
            }?>
            <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->

<?php include('includes/footer.php');?>
<?php } ?>