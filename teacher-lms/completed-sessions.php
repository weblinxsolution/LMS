      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->




      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Ongoing Sessions</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Lesson Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">List of Assign Lessons</a></li>
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
                                          <div class="form-group col-md-4">
                                              <label>Sessions</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-4">
                                              <label>Course</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-4">
                                              <label>Subject</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
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
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered zero-configuration">
                                          <thead>
                                              <tr>
                                                  <th>#ID</th>
                                                  <th>Course</th>
                                                  <th>Subject</th>
                                                  <th>Assigned Lesson</th>
                                                  <th>Students</th>
                                                  <th>Status</th>
                                                  <th>Date</th>
                                                  <th>Time</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>32463</td>
                                                  <td>Digital Marketing</td>
                                                  <td>Lead Generation</td>
                                                  <td>Yes</td>
                                                  <td>20</td>
                                                  <td><span class="badge badge-success text-white">Completed</span></td>
                                                  <td>2011/01/25</td>
                                                  <td>10:00 AM</td>
                                                  <td>
                                                          <a href="session-completed-details.php" class="btn btn-info btn-sm text-white">Details</a>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>32463</td>
                                                  <td>Digital Marketing</td>
                                                  <td>Lead Generation</td>
                                                  <td>No</td>
                                                  <td>20</td>
                                                  <td><span class="badge badge-success text-white">Completed</span></td>
                                                  <td>2011/01/25</td>
                                                  <td>10:00 AM</td>
                                                  <td>
                                                      <a href="session-completed-details.php" class="btn btn-info btn-sm text-white">Details</a>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
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