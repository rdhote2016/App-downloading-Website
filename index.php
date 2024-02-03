<?php require("header.php"); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>                    </div>

                    

                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-12">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Apps</h6>
                                </div>
                                <div class="card-body">
       
                                    <table class="table">
                                  <caption>List of Apps</caption>
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">App Name</th>
                                      <th scope="col">Sub Title </th>
                                      <th scope="col">Version</th>
                                      <th scope="col">Author Name</th>
                                      <th scope="col">description</th>
                                      <th scope="col">image</th>
                                      <th scope="col">zip</th>
                                      <!--th scope="col">date</th-->
                                      <th scope="col">States</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $query = "SELECT * FROM software ORDER BY app_id DESC";

                                      $result = $mysqli->query($query);
                                             
                                      $inc = 1;
                                      if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                    ?>

                                    <tr>
                                      <th scope="row"><?php echo $inc;?></th>
                                      <td><?php echo $row['app_name'];?></td>
                                      <td><?php echo $row['app_subtitle'];?></td>
                                      <td><?php echo $row['app_version'];?></td>
                                      <td><?php echo $row['app_authorname'];?></td>
                                      <td><?php echo substr($row['app_description'], 0, 200); ?></td>
                                      <td><img src="../<?php echo $row['app_image'];?>" style="width: 60px;height: auto" /></td>
                                      <td><a href="../<?php echo $row['app_zipfile'];?>"  >
                                          <img src="assets/img/zip.png">
                                      </a></td>
                                      <!--td><?php echo $row['date'];?></td-->
                                      <td></td>
                                      <td>
                                      <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                      </td>
                                    </tr>

                                    <?php
                                        $inc++;
                                        }
                                      }
                                    ?>
                                  </tbody>
                                </table>
                             </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php require("footer.php"); ?>            