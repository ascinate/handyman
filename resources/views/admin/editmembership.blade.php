<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           <!----Main Row--------->
           <form name="editfrm" action="{{ URL::to('updatemembership') }}" method="POST" class="forms-sample">
           <input type="hidden" name="id" value="{{ $data['id'] }}" />
            @csrf
            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Membership</h4>

                            <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $data['title'] }}">
                                </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" id="price" class="form-control" name="price" value="{{ $data['price'] }}"  step="0.01" min="0" max="9999999.99" required>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Tags</label>
                                        <input type="text" class="form-control" name="description" value="{{ $data['description'] }}">
                                    </div>
                              </div>
                            </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                  </div>

            </div> <!---- End main row ------->
           </form>

         </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <x-adminfooter/>
