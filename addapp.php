<?php require("header.php"); ?>

 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add New App</h1></div>

                    

                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-12">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Apps</h6>
                                </div>
                                <div class="card-body">
                                    <form class="was-validated" method="post" enctype="multipart/form-data" action="classes/Apps.php?type=apps&action=add">
                                  
                                    <div class="form-group row">
                                    <label for="validationAppName" class="col-sm-2 col-form-label">App Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="app_name" id="validationAppName" placeholder="Enter App Name"required>
                                      <div class="invalid-feedback">
                                            Please enter app name.
                                          </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="validationSubTitle" class="col-sm-2 col-form-label">Sub Title</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="app_subtitle" id="validationSubTitle" placeholder="Ente Sub Title"required>
                                      <div class="invalid-feedback">
                                            Please enter Sub Title.
                                          </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="validationSubTitle" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                      <select class="form-control form-select" aria-label="Default select example" name="app_category">
                                        <option selected>Select Category</option>
                                        <option value="1">Software</option>
                                        <option value="2">Desktop</option>
                                        <option value="3">Windows</option>
                                      </select>
                                      
                                      <div class="invalid-feedback">
                                            Please Select Category.
                                          </div>
                                    </div>
                                </div>


                                    <div class="form-group row">
                                    <label for="validationVersion" class="col-sm-2 col-form-label">Version</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="app_version" id="validationVersion" placeholder="Enter App Version" required>
                                       <div class="invalid-feedback">
                                            Please enter app Version.
                                          </div>
                                    </div>
                                </div>



                                    <div class="form-group row">
                                    <label for="validationAuthorName" class="col-sm-2 col-form-label">Author Name </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control"name="author_name"id="validationAuthorName" placeholder="Enter Author Name" required>
                                      <div class="invalid-feedback">
                                            Please enter Author Name.
                                          </div>
                                    </div>


                                  </div>
                                  <div class="form-group row">
                                    <label for="validationDescription" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                      <textarea id="validationDescription" name="app_description" rows="4" cols="50"
                                      required></textarea>
                                      <div class="invalid-feedback">
                                            Please enter  .
                                          </div>

                                    </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                    <div class="col-sm-2">App Image</div>
                                    <div class="col-sm-10">
                                      <div class="form-check">
                                        <input class="form-check-input" name="app_image" type="file" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                        
                                        </label>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="form-group row">
                                    <div class="col-sm-2">App Zip File</div>
                                    <div class="col-sm-10">
                                      <div class="form-check">
                                        <input class="form-check-input" name="app_zip" type="file" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                        
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  


                                  <div class="form-group row">
                                    <div class="col-sm-10">
                                      <button type="submit" class="btn btn-primary">submit</button>
                                    </div>
                                  </div>
                                  

                                </form>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                

            </div>
            <!-- End of Main Content -->

<?php require("footer.php"); ?>            