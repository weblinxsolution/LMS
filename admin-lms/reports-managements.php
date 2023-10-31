      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->




      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Reports Managements</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Dashbaord</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Reports Managements</a></li>
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
                                      <div class="form-row d-flex align-items-center">
                                          <div class="form-group mb-1">
                                              <input type="radio" id="teacher" class="report-filter" name="filter" checked value="teacher">
                                              <label for="teacher">Teacher</label>
                                          </div>
                                          <div class="form-group mb-1 mx-2">
                                              <input type="radio" id="student" class="report-filter" name="filter" value="student">
                                              <label for="student">Student</label>
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-3" id="set_role">
                                              <label>Teacher</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-3">
                                              <label>Course Category</label>
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
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label for="">From</label>
                                              <input type="date" class="form-control">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label for="">To</label>
                                              <input type="date" class="form-control">
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-dark d-block ml-auto">Report</button>
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
                                              <th>#ID</th>
                                              <th>Profile</th>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>Course</th>
                                              <th>Category</th>
                                              <th>Subject</th>
                                              <th>Level</th>
                                              <th>Status</th>
                                              <th>Date</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>
                                                  <img src="https://media.istockphoto.com/id/1473711199/photo/face-portrait-student-and-man-in-university-ready-for-back-to-school-learning-goals-or.webp?b=1&s=170667a&w=0&k=20&c=RrvtNNmwGSJQn58gdYYM3xP-IVUIdKj29G4aJw-jJsE=" class="user-profile" alt="">
                                              </td>
                                              <td>Donna Snider</td>
                                              <td>example@gmail.com</td>
                                              <td>Digital Marketing</td>
                                              <td>Marketing</td>
                                              <td>Lead Generation</td>
                                              <td>10</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                              <td>
                                                  <a href="teacher-profile.php" class="btn btn-warning btn-sm text-white">Profile</a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>
                                                  <img src="https://media.istockphoto.com/id/1473711199/photo/face-portrait-student-and-man-in-university-ready-for-back-to-school-learning-goals-or.webp?b=1&s=170667a&w=0&k=20&c=RrvtNNmwGSJQn58gdYYM3xP-IVUIdKj29G4aJw-jJsE=" class="user-profile" alt="">
                                              </td>
                                              <td>Donna Snider</td>
                                              <td>example@gmail.com</td>
                                              <td>Digital Marketing</td>
                                              <td>Marketing</td>
                                              <td>Lead Generation</td>
                                              <td>10</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                              <td>
                                                  <a href="teacher-profile.php" class="btn btn-warning btn-sm text-white">Profile</a>
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
          <!-- #/ container -->
      </div>
      <!--**********************************
            Content body end
        ***********************************-->


      <!--********************************** Footer ***********************************-->
      <?php include('./footer.php'); ?>
      <!--********************************** Footer ***********************************-->