<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           <!----Main Row--------->
           <form name="editfrm" action="{{ URL::to('updatecustomer') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
           <input type="hidden" name="id" value="{{ $data['id'] }}" />
            @csrf
            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit User</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{ $data['first_name'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Last Name </label>
                                    <input type="text" name="last_name" class="form-control" value="{{ $data['last_name'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $data['phone'] }}">
                                    </div>
                                    </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $data['email'] }}">
                                </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Password</label>
                                    <input type="text" class="form-control" name="password" value="{{ $data['password'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Postcode</label>
                                    <input type="text" class="form-control" name="postcode" value="{{ $data['postcode'] }}">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Street 1</label>
                                    <input type="text" class="form-control" name="address" value="{{ $data['address'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Street 2</label>
                                    <input type="text" class="form-control" name="billing_address" value="{{ $data['billing_address'] }}">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">City</label>
                                    <input type="text" class="form-control" name="city" value="{{ $data['city'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">State</label>
                                    <input type="text" class="form-control" name="state" value="{{ $data['state'] }}">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Country</label>
                                    <input type="text" class="form-control" name="country" value="{{ $data['country'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">University</label>
                                    <input type="text" class="form-control" name="university" value="{{ $data['university'] }}">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Profile Photo</label>
                                    <input type="file" class="form-control" name="profile_photo">
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
