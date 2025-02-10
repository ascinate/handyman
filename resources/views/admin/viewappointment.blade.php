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
                        <h3 class="mt-4 sub-hrd">01. Appointment Type </h3>
                        <hr/>

                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Service Name</label>
                                    <p class="form-control-plaintext">{{ $data['service_name'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-4 sub-hrd">02. Appointment Details </h3>
                        <hr/>
                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Contractor Name</label>
                                    <p class="form-control-plaintext">{{ $data['contructor_name'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-4 sub-hrd">03.  Preferred Timing </h3>
                        <hr/>
                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Special Date</label>
                                    <p class="form-control-plaintext">{{ $data['special_date'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Service Date</label>
                                    <p class="form-control-plaintext">{{ $data['service_date'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Service Time</label>
                                    <p class="form-control-plaintext">{{ $data['service_time'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>    
                        <h3 class="mt-4 sub-hrd">04. Location </h3>
                        <hr/>
                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <p class="form-control-plaintext">{{ $data['city'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Zipcode</label>
                                    <p class="form-control-plaintext">{{ $data['zipcode'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-4 sub-hrd">05. Payment Status</h3>
                        <hr/>
                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="form-group">
                                <label for="fullname" class="form-label">Payment Method</label>
                                <p class="form-control-plaintext">{{ $data['payment_method'] ?? 'N/A' }}</p>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset role="radiogroup"  aria-label="Step Four" aria-describedby="co-borrower-error" id="step-4">

                        <p class="text-center d-block">
                            <a href="{{url('appointment')}}" class="btn btn-success crm-btn"> Home </a>

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
