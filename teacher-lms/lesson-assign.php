      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->




      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Lesson Detail</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Lessons Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Lesson Detail</a></li>
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
                                              <label>Category</label>
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
                                          <div class="col-lg-12">
                                              <button type="submit" class="btn btn-dark d-block ml-auto">Filter</button>
                                          </div>
                                          <hr>
                                          <div class="form-group col-md-6">
                                              <label>Lesson</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Date</label>
                                              <input type="date" name="" id="" class="form-control">
                                          </div>
                                          <div class="col-lg-12">
                                              <button type="submit" class="btn btn-dark d-block ml-auto">Assign Lesson</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table  ">
                                      <thead>
                                          <tr>
                                              <th><input type="checkbox" class="checkall" value="All" checked></th>
                                              <th>Image</th>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>Number</th>
                                              <th>Age</th>
                                              <th>Gender</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td><input type="checkbox" class="checked_box" value="All" checked></td>
                                              <td>
                                                  <img src="https://media.istockphoto.com/id/1473711199/photo/face-portrait-student-and-man-in-university-ready-for-back-to-school-learning-goals-or.webp?b=1&s=170667a&w=0&k=20&c=RrvtNNmwGSJQn58gdYYM3xP-IVUIdKj29G4aJw-jJsE=" class="user-profile" alt="">
                                              </td>
                                              <td>John</td>
                                              <td style="width: 250px;white-space:normal;">Doe@gmail.com</td>
                                              <td>+9118215812</td>
                                              <td>5 Years</td>
                                              <td>Male</td>


                                          </tr>
                                          <tr>
                                              <td><input type="checkbox" class="checked_box" value="All" checked></td>
                                              <td>
                                                  <img src="https://media.istockphoto.com/id/1473711199/photo/face-portrait-student-and-man-in-university-ready-for-back-to-school-learning-goals-or.webp?b=1&s=170667a&w=0&k=20&c=RrvtNNmwGSJQn58gdYYM3xP-IVUIdKj29G4aJw-jJsE=" class="user-profile" alt="">
                                              </td>
                                              <td>John</td>
                                              <td style="width: 250px;white-space:normal;">Doe@gmail.com</td>
                                              <td>+9118215812</td>
                                              <td>5 Years</td>
                                              <td>Male</td>


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