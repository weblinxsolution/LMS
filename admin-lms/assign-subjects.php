      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->




      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Assign Courses</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Subject Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Assign Courses</a></li>
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
                                              <label>Category Course</label>
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
                                              <input type="time" class="form-control">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label>Start Time</label>
                                              <input type="time" class="form-control">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>End Time</label>
                                              <input type="time" class="form-control">
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
                                              <th>Teacher</th>
                                              <th>Class/Per Head</th>
                                              <th>Course</th>
                                              <th>Course Level</th>
                                              <th>Subject</th>
                                              <th>Time Slot</th>
                                              <th>No# Students</th>
                                              <th>Status</th>
                                              <th>Date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <!-- <td>
                                                  <div class="form-check form-check-inline">
                                                      <label class="form-check-label"><input type="checkbox" class="form-check-input checkbox_check" value="">32463</label>
                                                  </div>
                                              </td> -->
                                              <td>#43</td>
                                              <td>
                                                  John Doe
                                              </td>
                                              <td>Per Head</td>
                                              <td>
                                                  Digital Marketing
                                              </td>
                                              <td>
                                                  2 Level
                                              </td>
                                              <td>
                                                  Lead Generation
                                              </td>
                                              <td>
                                                  3am-5am
                                              </td>
                                              <td><span class="btn btn-success btn-sm text-white">20</span></td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                          </tr>
                                          <tr>
                                              <!-- <td>
                                                  <div class="form-check form-check-inline">
                                                      <label class="form-check-label"><input type="checkbox" class="form-check-input checkbox_check" value="">32463</label>
                                                  </div>
                                              </td> -->
                                              <td>#43</td>
                                              <td>
                                                  John Doe
                                              </td>
                                              <td>Class Wise</td>
                                              <td>
                                                  Digital Marketing
                                              </td>
                                              <td>
                                                  2 Level
                                              </td>
                                              <td>
                                                  Lead Generation
                                              </td>
                                              <td>
                                                  6am-7am
                                              </td>
                                              <td><span class="btn btn-success btn-sm text-white">20</span></td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  <!-- <div class="form-check form-check-inline px-4">
                                      <label class="form-check-label"><input type="checkbox" class="form-check-input checkbox_check" value="">Check All</label>
                                  </div> -->
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