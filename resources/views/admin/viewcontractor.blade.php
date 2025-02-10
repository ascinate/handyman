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
                        <h3 class="mt-4 sub-hrd">01. Personal Information </h3>
                        <hr/>

                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Full Name</label>
                                    <p class="form-control-plaintext">{{ $data['full_name'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <p class="form-control-plaintext">{{ $data['email'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <p class="form-control-plaintext">{{ $data['phone'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Date of Birth</label>
                                    <p class="form-control-plaintext">{{ $data['dob'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Street</label>
                                    <p class="form-control-plaintext">{{ $data['street'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <p class="form-control-plaintext">{{ $data['city'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <p class="form-control-plaintext">{{ $data['state'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Zip Code</label>
                                    <p class="form-control-plaintext">{{ $data['zipcode'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset aria-label="Step Two" id="step-2">

                        <h3 class="mt-4 sub-hrd">02. Professional Information </h3>
                        <hr/>

                        <div class="mt-2 row gy-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Business Name</label>
                                    <p class="form-control-plaintext">{{ $data['business_name'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="mt-4 col-lg-12">
                                <h3> Business Address (if different from home): </h3>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Street</label>
                                    <p class="form-control-plaintext">{{ $data['business_street'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <p class="form-control-plaintext">{{ $data['business_city'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <p class="form-control-plaintext">{{ $data['business_state'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Zip Code</label>
                                    <p class="form-control-plaintext">{{ $data['business_zipcode'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Trade or Specialization</label>
                                    <p class="form-control-plaintext">
                                        {{ is_array($data['business_specialization']) ? implode(', ', $data['business_specialization']) : ($data['business_specialization'] ?? 'N/A') }}
                                    </p>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Certifications and Licenses</label>
                                    <p class="form-control-plaintext">{{ $data['certifications'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset role="radiogroup" aria-label="Step Three - What was your first car?" id="step-3">

                        <h3 class="mt-4 sub-hrd">03. Service Frequency</h3>
                        <hr/>
                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Describe Your Expertise</label>
                                    <p class="form-control-plaintext">{{ $data['service_freq_expertise'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Certifications or Licenses</label>
                                    <p class="form-control-plaintext">{{ $data['service_freq_certificate'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Upload Additional Documents</label>
                                    <p class="form-control-plaintext">
                                        @if(!empty($data['service_freq_photo']))
                                            <a href="{{ asset('path/to/uploads/' . $data['service_freq_photo']) }}" target="_blank">View Document</a>
                                        @else
                                            N/A
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>


                        <h3 class="mt-4 sub-hrd">04. Availability</h3>
                        <hr/>
                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">

                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Preferred Service Days</label>
                                <p class="form-control-plaintext">
                                    {{ isset($data['service_freq_preferred_day']) && is_array($data['service_freq_preferred_day']) ? implode(', ', $data['service_freq_preferred_day']) : 'N/A' }}
                                </p>
                            </div>
                        </div>


                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Best Time for Services</label>
                                <p class="form-control-plaintext">{{ $data['service_freq_time'] ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Are You Available for Emergency Services?</label>
                                <p class="form-control-plaintext">{{ $data['is_service_freq'] ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="fullname" class="form-label">Willingness to Travel</label>
                                <p class="form-control-plaintext">{{ $data['service_freq_travel'] ?? 'N/A' }}</p>
                            </div>
                        </div>


                        </div>

                    </fieldset>

                    <fieldset aria-label="Step Three &amp; a Half - Why did you buy?" id="step-3.5">
                        <h3 class="mt-4 sub-hrd">05. Service Area</h3>
                        <hr/>

                        <h4 class="my-4">Primary Service Location</h4>

                        <div class="row row-cols-1 row-cols-lg-2 gy-4">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Street</label>
                                    <p class="form-control-plaintext">{{ $data['service_area_street'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <p class="form-control-plaintext">{{ $data['service_area_city'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <p class="form-control-plaintext">{{ $data['service_area_state'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Zip Code</label>
                                    <p class="form-control-plaintext">{{ $data['service_area_zip'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fullname" class="form-label">Service Radius</label>
                                <p class="form-control-plaintext">{{ $data['service_radius'] ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <h3 class="mt-4 sub-hrd">06. Background Check Authorization</h3>
                        <hr/>
                        <div class="mt-4 form-check">
                            <p class="form-control-plaintext">{{ $data['batrumspage'] ?? 'N/A' }}</p>
                        </div>

                        <h3 class="mt-4 sub-hrd">07. References (Optional)</h3>
                        <hr/>
                        <h4 class="my-4">Reference #1</h4>
                        <div class="row row-cols-1 row-cols-lg-2 gy-4">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <p class="form-control-plaintext">{{ $data['ref_1_name'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <p class="form-control-plaintext">{{ $data['ref_1_phone'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Relationship</label>
                                    <p class="form-control-plaintext">{{ $data['ref_1_relation'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Years Known</label>
                                    <p class="form-control-plaintext">{{ $data['ref_1_duration'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>

                        <h4 class="my-4">Reference #2</h4>
                        <div class="row row-cols-1 row-cols-lg-2 gy-4">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <p class="form-control-plaintext">{{ $data['ref_2_name'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <p class="form-control-plaintext">{{ $data['ref_2_phone'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Relationship</label>
                                    <p class="form-control-plaintext">{{ $data['ref_2_relation'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Years Known</label>
                                    <p class="form-control-plaintext">{{ $data['ref_2_duration'] ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-4 sub-hrd">08. Terms and Conditions</h3>
                        <hr/>

                        <div class="mt-4 form-check">
                            <p class="form-control-plaintext">{{ $data['obatrumspage'] ?? 'N/A' }}</p>
                        </div>

                    </fieldset>


                    <fieldset role="radiogroup"  aria-label="Step Four" aria-describedby="co-borrower-error" id="step-4">

                        <p class="text-center d-block">
                            <a href="{{url('contractors')}}" class="btn btn-success crm-btn"> Home </a>

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
