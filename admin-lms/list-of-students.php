      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->


      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">List of Students</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Students Managements</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">List of Students</a></li>
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
                                              <label>Student Name</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-3">
                                              <label>Cateogry Course</label>
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
                                              <label>Subjects</label>
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
                                  <table class="table table-striped table-bordered zero-configuration">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Profile</th>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>Number</th>
                                              <th>DOB</th>
                                              <th>Age</th>
                                              <th>Gender</th>
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
                                              <td>+92 3542352434</td>
                                              <td>2000/05/25</td>
                                              <td>16</td>
                                              <td>Male</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                              <td>
                                                  <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                  <a href="edit-student.php" class="btn btn-secondary btn-sm text-white">Edit</a>
                                                  <a href="student-profile.php" class="btn btn-warning btn-sm text-white">Profile</a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>
                                                  <img src="https://media.istockphoto.com/id/1473711199/photo/face-portrait-student-and-man-in-university-ready-for-back-to-school-learning-goals-or.webp?b=1&s=170667a&w=0&k=20&c=RrvtNNmwGSJQn58gdYYM3xP-IVUIdKj29G4aJw-jJsE=" class="user-profile" alt="">
                                              </td>
                                              <td>Donna Snider</td>
                                              <td>example@gmail.com</td>
                                              <td>+92 3542352434</td>  
                                              <td>2000/05/25</td>
                                              <td>16</td>
                                              <td>Female</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                              <td>
                                                  <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                  <a href="edit-student.php" class="btn btn-secondary btn-sm text-white">Edit</a>
                                                  <a href="student-profile.php" class="btn btn-warning btn-sm text-white">Profile</a>
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