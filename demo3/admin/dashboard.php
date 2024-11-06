<?php
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   else{
       ?>
<?php include('includes/topheader.php');?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php');?>
<!-- Left Sidebar End -->
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
                  <h4 class="page-title">Dashboard</h4>
                  <ol class="breadcrumb p-0 m-0">
                     <li>
                        <a href="#">NewsPortal</a>
                     </li>
                     <li>
                        <a href="#">Admin</a>
                     </li>
                     <li class="active">
                        Dashboard
                     </li>
                  </ol>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
         <!-- end row -->
         <div class="col-sm-12">
            <div class="card-box">
               <h2>Recent News</h2>
               <div class="table-responsive">
                  <table class="table table-bordered display"" id="example">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Title</th>
                           <th>Image</th>
                           <th>Status</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           $sql = "SELECT * FROM news where deleted != 1";
                           $query=mysqli_query($con, $sql);
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
                               { ?>
                                <tr>
                                   <td><?php echo $i; ?></td>
                                   <td><?php echo htmlentities($row['title'])?></td>
                                   <td><img src="postimages/<?php echo htmlentities($row['image']);?>" width="100"/></td>
                                    <td>
                                       <?php if($row['status'] == 1){ ?>
                                          <p class="badge badge-lg bg-success">Activate</p>

                                       <?php }else{ ?>
                                          <p class="badge badge-lg bg-danger">DeActivate</p>

                                       <?php } ?>

                                     </td>
                                   
                                </tr>
                        <?php $i++; } }?>
                     </tbody>
                  </table>
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
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<!-- Right Sidebar -->
<div class="side-bar right-bar">
   <a href="javascript:void(0);" class="right-bar-toggle">
   <i class="mdi mdi-close-circle-outline"></i>
   </a>
   <h4 class="">Settings</h4>
   <div class="setting-list nicescroll">
      <div class="row m-t-20">
         <div class="col-xs-8">
            <h5 class="m-0">Notifications</h5>
            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
         </div>
         <div class="col-xs-4 text-right">
            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
         </div>
      </div>
      <div class="row m-t-20">
         <div class="col-xs-8">
            <h5 class="m-0">API Access</h5>
            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
         </div>
         <div class="col-xs-4 text-right">
            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
         </div>
      </div>
      <div class="row m-t-20">
         <div class="col-xs-8">
            <h5 class="m-0">Auto Updates</h5>
            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
         </div>
         <div class="col-xs-4 text-right">
            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
         </div>
      </div>
      <div class="row m-t-20">
         <div class="col-xs-8">
            <h5 class="m-0">Online Status</h5>
            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
         </div>
         <div class="col-xs-4 text-right">
            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
         </div>
      </div>
   </div>
</div>
<!-- /Right-bar -->
</div>
<!-- END wrapper -->
<script>
   var options = {
     series: [44, 55, 67],
     chart: {
     height: 265,
     type: 'radialBar',
   },
   plotOptions: {
     radialBar: {
       dataLabels: {
         name: {
           fontSize: '40px',
         },
         value: {
           fontSize: '16px',
         },
         total: {
           show: true,
           label: 'Total',
           formatter: function (w) {
             // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
             return 249
           }
         }
       }
     }
   },
   labels: ['Apples', 'Oranges', 'Bananas'],
   };
   
   var chart = new ApexCharts(document.querySelector("#chart"), options);
   chart.render();
   
   
   
</script>
<?php } ?>