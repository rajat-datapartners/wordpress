<?php


$sql = "SELECT * FROM teams where type='funding_team' AND deleted != 1";
$funding_team=mysqli_query($con, $sql);


$advisor_sql = "SELECT * FROM teams where type='advisor' AND deleted != 1";
$advisor_team=mysqli_query($con, $advisor_sql);

?>



<section id="section-id-1651886869594" class="sppb-section mt-3 mb-3" >
   <div class="sppb-row-container">
      <div class="sppb-row">
         <div class="sppb-col-md-12" id="column-wrap-id-1651886869593">
            <div id="column-id-1651886869593" class="sppb-column" >
               <div class="sppb-column-addons">
                  <div id="section-id-1651886869595" class="sppb-section sppb-section-content-center" >
                     <div class="sppb-container-inner">
                        <div class="sppb-row sppb-align-center">
                           <div class="sppb-col-md-6" id="column-wrap-id-1651886869596">
                              <div id="column-id-1651886869596" class="sppb-column" >
                                 <div class="sppb-column-addons">
                                    <!-- <div id="sppb-addon-wrapper-1651886869602" class="sppb-addon-wrapper">
                                       <div id="sppb-addon-1651886869602" class="clearfix "     >
                                          <div class="sppb-addon sppb-addon-text-block  ">
                                             <p class="sppb-addon-title">Exclusive Members</p>
                                             <div class="sppb-addon-content"></div>
                                          </div>
                                       </div>
                                    </div> -->
                                    <div id="sppb-addon-wrapper-1651886869605" class="sppb-addon-wrapper">
                                       <div id="sppb-addon-1651886869605" class="clearfix "     >
                                          <div class="sppb-addon sppb-addon-text-block  ">
                                             <h1 class="sppb-addon-title">Founding Team</h1>
                                             <div class="sppb-addon-content"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="section-id-1651886869633" class="sppb-section" >
                     <div class="sppb-container-inner">
                        <div class="sppb-row">
                           <div class="sppb-col-md-3 sppb-col-sm-6" id="column-wrap-id-1651886869634">
                           </div>
                     <?php 
                       if(mysqli_num_rows($funding_team) > 0) {
                         while($funding_team_row = mysqli_fetch_assoc($funding_team)) {
                     ?>
                           <div class="sppb-col-md-3 sppb-col-sm-6" id="column-wrap-id-1651886869634">
                              <div id="column-id-1651886869634" class="sppb-column" >
                                 <div class="sppb-column-addons">
                                    <div id="sppb-addon-wrapper-1651886869644" class="sppb-addon-wrapper">
                                       <div id="sppb-addon-1651886869644" class="clearfix "     >
                                          <div class="sppb-addon sppb-addon-person sppb-text-center  ">
                                             <div class="sppb-addon-content ">
                                                <div class="sppb-person-image ">
                                                   <img class="sppb-img-responsive" src="admin/teams/<?= $funding_team_row['userImage']?>" alt="Wallace S. Camacho"    loading="lazy">
                                                   <div class="person-content-show-on-hover">
                                                      <div class="person-content-hover-content-wrap"></div>
                                                   </div>
                                                </div>
                                                <div class="sppb-person-information"><span class="sppb-person-name"><?= $funding_team_row['name']?></span><span class="sppb-person-designation"><?= $funding_team_row['profession']; ?></span></div>
                                                <div class="sppb-person-social-icons">
                                                   <ul class="sppb-person-social">
                                                      <li><a target="_blank" rel="noopener noreferrer" href="<?= $funding_team_row['fbook']; ?>" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true" title="Facebook"></i></a></li>
                                                      <li><a target="_blank" rel="noopener noreferrer" href="<?= $funding_team_row['twitter']; ?>" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true" title="Twitter"></i></a></li>
                                                      <li><a target="_blank" rel="noopener noreferrer" href="<?= $funding_team_row['insta']; ?>" aria-label="YouTube"><i class="fab fa-instagram" aria-hidden="true" title="YouTube"></i></a></li>
                                                      <li><a target="_blank" rel="noopener noreferrer" href="<?= $funding_team_row['linkedin']; ?>" aria-label="Behance"><i class="fab fa-linkedin" aria-hidden="true" title="Behance"></i></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <?php 
                        }
                      } 
                    ?>

                        </div>
                     </div>
                  </div>

                  <br>
                  <br>


                  <div class="sppb-col-md-6" id="column-wrap-id-1651886869596">
                              <div id="column-id-1651886869596" class="sppb-column" >
                                 <div class="sppb-column-addons">
                                    <div id="sppb-addon-wrapper-1651886869605" class="sppb-addon-wrapper">
                                       <div id="sppb-addon-1651886869605" class="clearfix "     >
                                          <div class="sppb-addon sppb-addon-text-block  ">
                                             <h1 class="sppb-addon-title">Advisor Team</h1>
                                             <div class="sppb-addon-content"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                  <div id="section-id-1651886869633" class="sppb-section">
                    <div class="sppb-container-inner">
                        <div class="sppb-row">
                            <?php 
                            if(mysqli_num_rows($advisor_team) > 0) {
                                while($advisor_team_row = mysqli_fetch_assoc($advisor_team)) {
                            ?>
                            <div class="sppb-col-md-3 sppb-col-sm-6" id="column-wrap-id-1651886869634">
                                <div id="column-id-1651886869634" class="sppb-column">
                                    <div class="sppb-column-addons">
                                        <div id="sppb-addon-wrapper-1651886869644" class="sppb-addon-wrapper">
                                            <div id="sppb-addon-1651886869644" class="clearfix">
                                                <div class="sppb-addon sppb-addon-person sppb-text-center">
                                                    <div class="sppb-addon-content test-content">
                                                        <div class="sppb-person-image">
                                                            <img class="sppb-img-responsive img-size" src="admin/teams/<?= $advisor_team_row['userImage']; ?>" alt="Wallace S. Camacho" loading="lazy">
                                                            <div class="person-content-show-on-hover">
                                                                <div class="person-content-hover-content-wrap"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sppb-person-information">
                                                            <span class="sppb-person-name"><?= $advisor_team_row['name']; ?></span>
                                                            <span class="sppb-person-designation"><?= $advisor_team_row['profession']; ?></span>
                                                        </div>
                                                        <div style="position: absolute; top: 280px; right: 50px;" class="sppb-person-social-icons">
                                                            <ul class="sppb-person-social">
                                                                <li><a target="_blank" rel="noopener noreferrer" href="<?= $advisor_team_row['fbook']; ?>" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true" title="Facebook"></i></a></li>
                                                                <li><a target="_blank" rel="noopener noreferrer" href="<?= $advisor_team_row['twitter']; ?>" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true" title="Twitter"></i></a></li>
                                                                <li><a target="_blank" rel="noopener noreferrer" href="<?= $advisor_team_row['insta']; ?>" aria-label="YouTube"><i class="fab fa-instagram" aria-hidden="true" title="YouTube"></i></a></li>
                                                                <li><a target="_blank" rel="noopener noreferrer" href="<?= $advisor_team_row['linkedin']; ?>" aria-label="Behance"><i class="fab fa-linkedin" aria-hidden="true" title="Behance"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div style="position: absolute;
    top: 312px;
    right: 112px;" class="text-center mt-3 read-button">
                                                            
                                                            <?php 
                                                                $name = $advisor_team_row["name"];
                                                                $description = $advisor_team_row["description"];
                                                             ?>

                                                           <button type="button" class="btn btn-sm btn-primary OpenModal" onclick="openPopup('<?= $advisor_team_row["name"] ?>', '<?= $advisor_team_row["description"] ?>')">
                                                                Read more
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            


                            <?php 
                                }
                            } 
                            ?>
                        </div>
                    </div>
                </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<div id="myModal" class="modal fade" tabindex="-1" style="margin-top: 200px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    
                </div>
            </div>
        </div>
    </div>

<script>
function openPopup(name, desc) {
    $(".modal-body").empty().append(`<p>` + desc + `</p>`);
    $(".modal-title").empty().append(`<p>` + name + `</p>`);
    $("#myModal").modal('show');
}

</script>



