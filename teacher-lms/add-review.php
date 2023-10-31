      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->



      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Add Review</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Review Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Review</a></li>
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
                                          <div class="form-group mb-2 col-md-12">
                                              <h4 class="d-block mb-0">Ratings</h4>
                                              <div class="rate px-0">
                                                  <input type="radio" id="star5" name="rate" value="5" />
                                                  <label for="star5" title="text">5 stars</label>
                                                  <input type="radio" id="star4" name="rate" value="4" />
                                                  <label for="star4" title="text">4 stars</label>
                                                  <input type="radio" id="star3" name="rate" value="3" />
                                                  <label for="star3" title="text">3 stars</label>
                                                  <input type="radio" id="star2" name="rate" value="2" />
                                                  <label for="star2" title="text">2 stars</label>
                                                  <input type="radio" id="star1" name="rate" value="1" />
                                                  <label for="star1" title="text">1 star</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label>Feedback</label>
                                          <textarea class="form-control" rows="5" placeholder="Description"></textarea>
                                      </div>
                                      <button type="submit" class="btn btn-dark d-block ml-auto">Add Review</button>
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