<?php require("header.php"); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Admin Profile</h1>                    </div>

                    

                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-12">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Profile</h6>
                                </div>
                                <div class="card-body">


                                  

                                    <form class="was-validated" method="post" action="classes/User.php?type=profile&action=update">
                                      <input type="hidden" name="user_id" value="1">
                                      <input type="hidden" name="type" value="prifile">
                                      <input type="hidden" name="action" value="update">
                                      <div class="form-group row">
                                        <label for="validationAdminName" class="col-sm-2 col-form-label">Admin Name</label>
                                        <div class="col-sm-10">
                                          <input type="Text" class="form-control" name="admin_name" id="validationAdminName" placeholder="Please Enter Admin Name" required>
                                          <div class="invalid-feedback">
                                            Please enter admin name.
                                          </div>
                                        </div>
                                    </div>



                                <div class="form-group row">
                                    <label for="validationAdminEmail" class="col-sm-2 col-form-label">Admin Email</label>
                                    <div class="col-sm-10">
                                      <input type="Email" class="form-control" name="admin_email" id="validationAdminEmail" placeholder="Please Enter Admin Name"required>
                                      <div class="invalid-feedback">
                                            Please enter admin email.
                                          </div>
                                    </div>
                                </div>


                                    <div class="form-group row">
                                    <label for="requiredAdminPassword>" class="col-sm-2 col-form-label">Admin Password</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" name="admin_password" id="requiredAdminPassword" placeholder="Please enter admin Password."required>
                                      <div class="invalid-feedback">
                                            Please enter admin email.
                                          </div>
                                    </div>
                                </div>

                                  
                                  


                                  <div class="form-group row">
                                    <div class="col-sm-10">
                                      <button type="submit" class="btn btn-primary">Update Proflie</button>
                                    </div>
                                  </div>
                                  

                                </form>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php require("footer.php"); ?>            