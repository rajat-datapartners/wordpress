<?php 
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   else{
   
   if($_GET['action']='del')
   {
   $postid=intval($_GET['pid']);
   $query=mysqli_query($con,"update jobs set deleted=1, status=0 where id='$postid'");
   if($query)
   {
   $msg="Jobs deleted ";
   }
   else{
   $error="Something went wrong . Please try again.";    
   } 
   }
   ?>
<!-- Top Bar Start -->
<?php include('includes/topheader.php');?>
<!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php');?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
<!-- Start content -->
<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="page-title-box">
               <h4 class="page-title">Manage Job </h4>
               <ol class="breadcrumb p-0 m-0">
                  <li><a href="#">Job</a></li>
                  <li class="active">Manage Job</li>
               </ol>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <!-- end row -->
      <div class="row">
          <div class="" style="padding:20px;">
          <a href="add-jobs.php" type="button" class="btn btn-md btn-success float-end"><i class="mdi mdi-plus"></i> Add Job</a>
          </div>
         <div class="col-sm-12">
            <div class="card-box">
               <div class="table-responsive">
                  <table class="table table-bordered display" id="example">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Title</th>
                           <th>Link</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           $newsQuesy = "select * from jobs where deleted != 1";
                           $query=mysqli_query($con, $newsQuesy);
                           $rowcount=mysqli_num_rows($query);
                           if($rowcount==0)
                           {
                           ?>
                              <tr>
                                 <td colspan="4" align="center">
                                    <h3 style="color:red">No record found</h3>
                                 </td>
                              <tr>
                           <?php 
                              } else {

                              $i = 1;   
                              while($row=mysqli_fetch_array($query))
                              {
                              ?>
                                 <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo htmlentities($row['title']);?></td>
                                    <td><?php echo htmlentities($row['link']);?></td>
                                    <td>
                                       <?php if($row['status'] == 1){ ?>
                                          <p class="badge badge-lg bg-success">Activate</p>

                                       <?php }else{ ?>
                                          <p class="badge badge-lg bg-danger">DeActivate</p>

                                       <?php } ?>

                                     </td>
                                    <td>
                                       <a  class="btn btn-primary btn-sm" href="edit-job.php?pid=<?= $row['id'] ?>"><i class="fa fa-pencil"></i>
                                       </a>
                                       &nbsp;
                                       <a class="btn btn-danger btn-sm" href="manage-jobs.php?pid=<?php echo $row['id'] ?>&&action=del" onclick="return confirm('Do you reaaly want to delete ?')"> <i class="fa fa-trash-o"></i>
                                       </a> 
                                    </td>
                                 </tr>
                        <?php  $i++; } }?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- container -->
</div>
<!-- content -->
<?php include('includes/footer.php');?>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 Visit website : www.mayurik.com -->  
<?php } ?>