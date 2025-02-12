<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('updatepet') }}" method="POST" class="forms-sample">
            <input type="hidden" name="id" value="{{ $data['id'] }}" >
            @csrf

            <div class="row">

                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Pet</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $data['name'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Breed </label>
                                    <input type="text" name="breed" class="form-control" value="{{ $data['breed'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Vet</label>
                                    <input type="text" name="vet" class="form-control" value="{{ $data['vet'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sex</label>
                                    <select name="sex" class="form-select">
                                        <option value="Male"@php
                                            if($data['sex']=='Male') { echo 'selected'; }
                                        @endphp>Male</option>
                                        <option value="Female"@php
                                        if($data['sex']=='Female') { echo 'selected'; }
                                    @endphp>Female</option>
                                    </select>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Birth year</label>
                                    <input type="text" name="birth_year" class="form-control" value="{{ $data['birth_year'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Age (Yrs)</label>
                                    <input type="text" class="form-control" name="age" value="{{ $data['age'] }}">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Notes</label>
                                    <input type="text" class="form-control" name="notes" value="{{ $data['notes'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Comments</label>
                                    <input type="text" class="form-control" name="comments" value="{{ $data['comments'] }}">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Customer</label>
                                    <select name="customer_id" class="form-select">
                                        <option value=""></option>
                                        @php
                                            $customers = \DB::table('customers')->where('is_deleted','0')->get();
                                            foreach($customers as $cust)
                                            {
                                        @endphp
                                          <option value="{{ $cust->id }}"@php
                                              if($data['customer_id']==$cust->id) { echo 'selected'; }
                                          @endphp>
                                            {{ $cust->first_name.' '.$cust->last_name }}
                                         </option>
                                        @php
                                            }
                                        @endphp
                                    </select>
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
