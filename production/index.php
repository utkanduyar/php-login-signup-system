<?php include'header.php'; ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <a href="add.php"><button type="submit" class="btn btn-success">Ekle</button></a>
                </div>
                <div class="x_panel">
                  
                  <div class="x_title">
                    <h2>Durum <small></small><?php echo $status; ?> <?php echo $statusMsg; ?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>İsim</th>
                          <th>E-Mail</th>
                          <th>Telefon</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John</td>
                          <td>john@gmail.com</td>
                          <td>12345678910</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

          </div>
        </div>
        <!-- /page content -->

<?php include'footer.php'; ?>