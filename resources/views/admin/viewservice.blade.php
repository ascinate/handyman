<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper viewuser">
           <!----Main Row--------->
          <div class="bg-white px-4">
             <form name="editfrm" method="POST" class="forms-sample" enctype= "multipart/form-data">
              <input type="hidden" name="id" value="{{ $data['id'] }}" />
              @csrf
                    <fieldset aria-label="Step One" id="step-1">
                        <h3 class="mt-4 sub-hrd">01. Service Type </h3>
                        <hr/>

                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Service Name</label>
                                    <p class="form-control-plaintext">{{ $data['service_name'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-4 sub-hrd">02. Service Details </h3>
                        <hr/>
                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Service Issue</label>
                                    <p class="form-control-plaintext">{{ $data['service_issue'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-4 sub-hrd">03.  Preferred Timing </h3>
                        <hr/>
                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Service Pre Date </label>
                                    <p class="form-control-plaintext">{{ $data['service_pre_date'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Service Pre Time</label>
                                    <p class="form-control-plaintext">{{ $data['service_pre_time'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Is Emergency Req</label>
                                    <p class="form-control-plaintext">{{ $data['is_emergency_req'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>    
                        <h3 class="mt-4 sub-hrd">04. Location </h3>
                        <hr/>
                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Service Street</label>
                                    <p class="form-control-plaintext">{{ $data['service_street'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Service City</label>
                                    <p class="form-control-plaintext">{{ $data['service_city'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Service State</label>
                                    <p class="form-control-plaintext">{{ $data['service_state'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Service Zipcode</label>
                                    <p class="form-control-plaintext">{{ $data['service_zipcode'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Is Address</label>
                                    <p class="form-control-plaintext">{{ $data['is_address'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset aria-label="Step Two" id="step-2">

                        <h3 class="mt-4 sub-hrd">05. Special Instructions (Optional)</h3>
                        <hr/>

                        <div class="mt-2 row gy-4">
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Special Instructor Name</label>
                                    <p class="form-control-plaintext">{{ $data['special_instructor_name'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>    
                        <h3 class="mt-4 sub-hrd">06.  Contractor Preferences (Optional)</h3>
                        <hr/>
                        <div class="mt-2 row gy-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Contractor_Prefrerred</label>
                                    <p class="form-control-plaintext">{{ $data['contructor_prefrerred'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Is_Contractor</label>
                                    <p class="form-control-plaintext">{{ $data['is_contructor'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Contractor Name </label>
                                    <p class="form-control-plaintext">{{ $data['contructor_name'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        
                    </fieldset>

                    <fieldset role="radiogroup" aria-label="Step Three - What was your first car?" id="step-3">

                        <h3 class="mt-4 sub-hrd">07. Pricing Estimate (Optional)</h3>
                        <hr/>
                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Is_Contractor_Booking</label>
                                    <p class="form-control-plaintext">{{ $data['is_contructor_booking'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Booking_Number</label>
                                    <p class="form-control-plaintext">{{ $data['booking_number'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Booking_Amount</label>
                                    <p class="form-control-plaintext">{{ $data['booking_amount'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            
                        </div>


                        <h3 class="mt-4 sub-hrd">08. Confirm and Book</h3>
                        <hr/>
                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Confirm_Service_Type</label>
                                    <p class="form-control-plaintext">{{ $data['confirm_service_type'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Confirm_Service_Date</label>
                                    <p class="form-control-plaintext">{{ $data['confirm_service_date'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Confirm_Service_Time</label>
                                    <p class="form-control-plaintext">{{ $data['confirm_service_time'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Confirm_Service_City</label>
                                    <p class="form-control-plaintext">{{ $data['confirm_service_city'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Confirm_Service_State</label>
                                    <p class="form-control-plaintext">{{ $data['Confirm_Service_State'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Confirm_Service_Zipcode</label>
                                    <p class="form-control-plaintext">{{ $data['confirm_service_zipcode'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fullname" class="form-label">Confirm_Service_Payment</label>
                                <p class="form-control-plaintext">{{ $data['confirm_service_payment'] ?? 'N/A' }}</p>
                            </div>
                            <div class="form-group">
                                <label for="fullname" class="form-label">Is_Auto_Payment</label>
                                <p class="form-control-plaintext">{{ $data['is_auto_payment'] ?? 'N/A' }}</p>
                            </div>

                        </div>

                    </fieldset>

                    


                    <fieldset role="radiogroup"  aria-label="Step Four" aria-describedby="co-borrower-error" id="step-4">

                        <p class="text-center d-block">
                            <a href="{{url('servicerequests')}}" class="btn btn-success crm-btn"> Home </a>

                        </p>
                    </fieldset><!---- End main row ------->
             </form>

          </div>

        </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <x-adminfooter/>

   <script>
        window.onload = function() {
            var typeField = document.getElementById('type');
            var priceField = document.getElementById('priceField');
            var priceInput = document.getElementById('price');

            if (typeField.value === 'Premium') {
                priceField.style.display = 'block';
                priceInput.removeAttribute('disabled');
                priceInput.required = true;
            } else {
                priceField.style.display = 'none';
                priceInput.setAttribute('disabled', 'disabled');
                priceInput.required = false;
                priceInput.value = '';
            }
        };

        document.getElementById('type').addEventListener('change', function () {
            var priceField = document.getElementById('priceField');
            var priceInput = document.getElementById('price');
            if (this.value === 'Premium') {
                priceField.style.display = 'block';
                priceInput.removeAttribute('disabled');
                priceInput.required = true;
            } else {
                priceField.style.display = 'none';
                priceInput.setAttribute('disabled', 'disabled');
                priceInput.required = false;
                priceInput.value = '';
            }
        });
    </script>
