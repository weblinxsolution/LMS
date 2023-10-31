      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->



      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Add Teacher</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Student Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Teacher</a></li>
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
                                              <label>First Name</label>
                                              <input type="text" class="form-control" placeholder="First Name">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Last Name</label>
                                              <input type="text" class="form-control" placeholder="First Name">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label>Email</label>
                                              <input type="email" class="form-control" placeholder="Email">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Password</label>
                                              <input type="password" class="form-control" placeholder="Password">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label>Date of Birth</label>
                                              <input type="date" class="form-control" placeholder="date">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Gender</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Male</option>
                                                  <option>Female</option>
                                                  <option>Other</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label>Mobile</label>
                                              <input type="text" class="form-control" placeholder="Mobile Number">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Address</label>
                                              <input type="text" class="form-control" placeholder="Address">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label>City</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>State</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label>Teacher Image</label>
                                          <input type="file" class="form-control">
                                      </div>
                                      <button type="submit" class="btn btn-dark d-block ml-auto">Add Teacher</button>
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