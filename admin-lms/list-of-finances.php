      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->




      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">List of Payment Reciepts</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Course Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">List of Slips </a></li>
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
                                          <div class="form-group col-md-3">
                                              <label>Category Course</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-3">
                                              <label>Course</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-3">
                                              <label>Subject</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-3">
                                              <label>Transaction ID</label>
                                              <input type="number" class="form-control">
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-dark d-block ml-auto">Filter</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered zero-configuration">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Course Name</th>
                                              <th>Subject </th>
                                              <th>Transaction ID</th>
                                              <th>Amount</th>
                                              <th>Slip</th>
                                              <th>Expiry</th>
                                              <th>Date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>Digital Marketing</td>
                                              <td>Facebook</td>
                                              <td>#43653</td>
                                              <td>$500</td>
                                              <td><a href="#" class="text-decoration-none btn btn-success btn-sm text-white" data-toggle="modal" data-target="#basicModal">View</a></td>
                                              <td><input type="checkbox" class="mr-2" checked> 2011/01/25</td>
                                              <td>2011/01/25</td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>Digital Marketing</td>
                                              <td>Facebook</td>
                                              <td>#43653</td>
                                              <td>$500</td>
                                              <td><a href="#" class="text-decoration-none btn btn-success btn-sm text-white" data-toggle="modal" data-target="#basicModal">View</a></td>
                                              <td><input type="checkbox" class="mr-2"> 2011/01/25</td>
                                              <td>2011/01/25</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal fade" id="basicModal">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Slip</h5>
                          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <img src="https://www.pngkey.com/png/full/747-7471926_rental-payment-receipt-template-main-image.png" class="w-100 img-fluid" alt="image">
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
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