      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->

      <style>
          .rate {
              float: left;
              height: 46px;
              padding: 0 10px;
          }

          .rate:not(:checked)>input {
              position: absolute;
              top: -9999px;
          }

          .rate:not(:checked)>label {
              float: right;
              width: 1em;
              overflow: hidden;
              white-space: nowrap;
              cursor: pointer;
              font-size: 30px;
              color: #ccc;
          }

          .rate:not(:checked)>label:before {
              content: '★ ';
          }

          .rate>input:checked~label {
              color: #ffc700;
          }

          .rate:not(:checked)>label:hover,
          .rate:not(:checked)>label:hover~label {
              color: #deb217;
          }

          .rate>input:checked+label:hover,
          .rate>input:checked+label:hover~label,
          .rate>input:checked~label:hover,
          .rate>input:checked~label:hover~label,
          .rate>label:hover~input:checked~label {
              color: #c59b08;
          }
      </style>
      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Students Profile</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Student Managements</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Student Profile</a></li>
                  </ol>
              </div>
          </div>
          <!-- row -->


          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                  <div class="card-body row d-flex align-items-center">
                                      <div class="text-center col-lg-2">
                                          <img alt="" class="rounded-circle mt-4" src="images/users/5.jpg">
                                          <h6 class="card-widget__title text-dark mt-3">Deangelo Sena</h6>
                                          <p class="text-muted">Senior Teacher</p>
                                      </div>
                                      <div class="col-lg-10 border-0 bg-transparent">
                                          <div class="row">
                                              <div class="col-lg-4 pt-3">
                                                  <ul class="std-details">
                                                      <li><span class="font-weight-bold">Student Name:</span><span>John Doe</span></li>
                                                      <li><span class="font-weight-bold">Email:</span><span> JohnDoe@gmail.com</span></li>
                                                      <li><span class="font-weight-bold">Phone:</span><span>+92-3432-4345</span></li>
                                                  </ul>
                                              </div>
                                              <div class="col-lg-4 pt-3">
                                                  <ul class="std-details">
                                                      <li><span class="font-weight-bold">Age:</span><span>16 Year</span></li>
                                                      <li><span class="font-weight-bold">Gendar:</span><span> Femail</span></li>
                                                      <li><span class="font-weight-bold">Date of Birth:</span><span>1-2-2003</span></li>
                                                  </ul>
                                              </div>
                                              <div class="col-lg-4 pt-3">
                                                  <ul class="std-details">
                                                      <li><span class="font-weight-bold">Fathers Name:</span><span>Leon Doe</span></li>
                                                      <li><span class="font-weight-bold">Address:</span><span> Pakistan</span></li>
                                                      <li><span class="font-weight-bold">City:</span><span>Karachi</span></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
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
                                  <h3>Registrations Course</h3>
                                  <table class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Category</th>
                                              <th>Course</th>
                                              <th>Subject</th>
                                              <th>Date</th>
                                              <th>Time</th>
                                              <th>Status</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>John Doe</td>
                                              <td>Marketing</td>
                                              <td>Digital Marketing</td>
                                              <td>2011/01/25</td>
                                              <td>2:00 AM</td>
                                              <td><span class="badge badge-warning text-white">Active</span></td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <h3>Assigned Course</h3>
                                  <table class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Teacher Name</th>
                                              <th>Category</th>
                                              <th>Course</th>
                                              <th>Subject</th>
                                              <th>Date</th>
                                              <th>Time</th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>John Doe</td>
                                              <td>Marketing</td>
                                              <td>Digital Marketing</td>
                                              <td>Lead Generation</td>
                                              <td>2011/01/25</td>
                                              <td>2:00 AM</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <h3>Lessons</h3>
                                  <table class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Course</th>
                                              <th>Subject</th>
                                              <th>Lesson</th>
                                              <th>Date</th>
                                              <th>Status</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>Digital Marketing</td>
                                              <td>Lead Generation</td>
                                              <td>Facebook Lead</td>
                                              <td>2011/01/25</td>
                                              <td><span class="badge badge-warning text-white">Active</span></td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>Digital Marketing</td>
                                              <td>Lead Generation</td>
                                              <td>Facebook Lead</td>
                                              <td>2011/01/25</td>
                                              <td><span class="badge badge-warning text-white">Active</span></td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <h3>Sessions</h3>
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered">
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

                                              </tr>
                                              <tr>
                                                  <td>32463</td>
                                                  <td>Digital Marketing</td>
                                                  <td>Lead Generation</td>
                                                  <td>No</td>
                                                  <td>20</td>
                                                  <td><span class="badge badge-danger text-white">Incompleted</span></td>
                                                  <td>2011/01/25</td>
                                                  <td>10:00 AM</td>

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