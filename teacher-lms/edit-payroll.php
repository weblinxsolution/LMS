      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->



      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Edit Payroll</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Payroll Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Payroll</a></li>
                  </ol>
              </div>
          </div>
          <!-- row -->

          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="basic-form">
                                  <form>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label>Teacher</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Amount</label>
                                              <input type="number" class="form-control" placeholder="Amount">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <label>Choose One</label>
                                          <div class="form-group col-md-12 d-flex align-items-center">
                                              <div>
                                                  <input type="radio" name="payroll" id="perhead">
                                                  <label for="perhead" class="px-1 mb-0">Per head</label>
                                              </div>
                                              <div class="mx-2">
                                                  <input type="radio" name="payroll" id="class">
                                                  <label for="class" class="px-1 mb-0">Class Wise</label>
                                              </div>
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-dark d-block ml-auto">Update Payroll</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #/ container -->
      </div>
      <!--**********************************
            Content body end
        ***********************************-->



      <!--********************************** Footer ***********************************-->
      <?php include('./footer.php'); ?>
      <!--********************************** Footer ***********************************-->