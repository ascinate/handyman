<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper  viewuser">
           <!----Main Row--------->
               <div class="bg-white px-4">
                    <form name="editfrm" method="POST"  class="forms-sample" enctype= "multipart/form-data">
                        <input type="hidden" name="id" value="{{ $data['id'] }}" />
                        @csrf
                                <fieldset aria-label="Step One" id="step-1">
                                    <h3 class="mt-4 sub-hrd">01. Personal Information </h3>
                                    <hr/>

                                    <div class="row row-cols-1 gy-4 row-cols-lg-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Full Name</label>
                                                <p class="form-control-plaintext">{{ $data['name'] }}</p>
                                            </div>
                                        </div>

                                        <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">Email Address</label>
                                            <p class="form-control-plaintext">{{ $data['email'] }}</p>
                                        </div>
                                        </div>

                                        <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <p class="form-control-plaintext">{{ $data['phone'] }}</p>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">Street</label>
                                            <p class="form-control-plaintext">{{ $data['street'] }}</p>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">City</label>
                                            <p class="form-control-plaintext">{{ $data['city'] }}</p>
                                        </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">State</label>
                                                <p class="form-control-plaintext">{{ $data['state'] }}</p>
                                            </div>
                                        </div>

                                        <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">Zip Code</label>
                                            <p class="form-control-plaintext">{{ $data['zipcode'] }}</p>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">Preferred Contact Method</label>
                                            <p class="form-control-plaintext">{{ $data['contact'] }}</p>
                                        </div>
                                        </div>

                                    </div>


                                </fieldset>

                                <fieldset aria-label="Step Two" id="step-2">

                                    <h3 class="mt-4 sub-hrd">02. Home Maintenance Preferences </h3>
                                    <hr/>

                                    <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Property Type</label>
                                                <p class="form-control-plaintext">{{ $data['property'] }}</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Number of Bedrooms</label>
                                                <p class="form-control-plaintext">{{ $data['number'] }}</p>
                                                
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Number of Bathrooms</label>
                                                <p class="form-control-plaintext">{{ $data['bathrooms'] }}</p>
                                                
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Yard or Garden Maintenance Required?</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['is_garden_maintenance'] === 'Y' ? 'Yes' : 'No' }}
                                                </p>
                                            </div>
                                        </div>


                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Do You Own a Pool?</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['is_pool'] === 'Y' ? 'Yes' : 'No' }}
                                                </p>
                                            </div>
                                        </div>



                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Preferred Service Days</label>
                                                <p class="form-control-plaintext">
                                                    {{ implode(', ', (array)($data['preferred_service_days'] ?? [])) }}
                                                </p>

                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Best Time for Services</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['time_for_services'] ?? 'Not provided' }}
                                                </p>
                                            </div>
                                        </div>


                                    
                                </fieldset>

                                <fieldset role="radiogroup" aria-label="Step Three - What was your first car?" id="step-3">

                                    <h3 class="mt-4 sub-hrd">03. Service Frequency</h3>
                                    <hr/>
                                    <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">How Often Do You Require Maintenance Services?</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['maintenance_services_duration'] ?? 'Not provided' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mt-4 sub-hrd">03. Service Frequency</h3>
                                    <hr/>
                                    <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">Preferred Maintenance Plan</label>
                                            <p class="form-control-plaintext">
                                                {{ $data['preferred_maintenance_plan'] ?? 'Not provided' }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Do You Require Accessibility Modifications?</label>
                                        <p class="form-control-plaintext">
                                            {{ $data['is_require_accessibility'] ?? 'Not provided' }}
                                        </p>
                                    </div>
                                    

                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Emergency Alert Setup</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['emergency_alert'] ?? 'Not provided' }}
                                                </p>
                                            </div>
                                            
                                            @if(isset($data['emergency_alert']) && $data['emergency_alert'] === 'Yes')
                                            <div class="form-group mt-3">
                                                <label class="form-label">Emergency Contacts</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['emergency_contacts'] ?? 'No contacts provided' }}
                                                </p>
                                            </div>
                                            @endif
                                        </div>


                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Do You Have Smart Home Devices?</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['smart_home_devices'] ?? 'Not provided' }}
                                                </p>
                                            </div>

                                        
                                            @if(isset($data['smart_home_devices']) && $data['smart_home_devices'] === 'Yes')
                                            <div class="form-group mt-3">
                                                <label class="form-label">List Compatible Devices</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['compatible_devices_list'] ?? 'No devices listed' }}
                                                </p>
                                            </div>
                                            @endif
                                        </div>



                                    </div>
                                    
                                </fieldset>

                                <fieldset aria-label="Step Three &amp; a Half - Why did you buy?" id="step-3.5">
                                    <h3 class="mt-4 sub-hrd">05. Homeowner Profile Setup</h3>
                                    <hr/>
                                    <div class="mt-2 row gy-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fullname" class="form-label">Year Home Was Built</label>
                                                <p class="form-control-plaintext">{{ $data['home_built_year'] ?? 'N/A' }}</p>
                                                </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Do You Rent Out Your Home?</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['is_rent_out'] ?? 'Not provided' }}
                                                </p>
                                            
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Current Age of Major Appliances</label>
                                                <p class="form-control-plaintext">{{ $data['major_appliances'] ?? '' }} </p>
                                                </div>
                                        </div>
                                    </div>

                                    <h3 class="mt-4 sub-hrd">06. Subscription Preferences</h3>
                                    <hr/>

                                    <div class="mt-2 row gy-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fullname" class="form-label">Choose Your Plan</label>
                                                <p class="form-control-plaintext">
                                                    {{ 
                                                        $data['subscription_plan'] == '1' ? 'Basic' : 
                                                        ($data['subscription_plan'] == '2' ? 'Premium' : 
                                                        ($data['subscription_plan'] == '3' ? 'VIP' : 
                                                        ($data['subscription_plan'] == '4' ? 'Pay-As-You-Go' : 'N/A'))) 
                                                    }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Would You Like to Start with a Free Trial?</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['is_free_trial'] ?? 'Not provided' }}
                                                </p>
                                                
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fullname" class="form-label">Payment Method</label>
                                                <p class="form-control-plaintext">
                                                {{ 
                                                    $data['payment_method'] == '1' ? 'Credit Card' : 
                                                    ($data['payment_method'] == '2' ? 'Debit Card' : 
                                                    ($data['payment_method'] == '3' ? 'PayPal' : 
                                                    ($data['payment_method'] == '4' ? 'Bank Transfer' : 'N/A'))) 
                                                }}
                                            </p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Set Up Auto-Renewal?</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['auto_renewal'] ?? 'Not provided' }}
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="mt-4 sub-hrd">07. Notifications and Communication</h3>
                                    <hr/>

                                    <div class="mt-2 row gy-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fullname" class="form-label">How Would You Like to Receive Notifications?</label>
                                                <p class="form-control-plaintext">
                                                    {{ 
                                                        $data['notifications'] == '1' ? 'Email' : 
                                                        ($data['notifications'] == '2' ? 'SMS' : 
                                                        ($data['notifications'] == '3' ? 'App Notification' : 'N/A')) 
                                                    }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Do You Wish to Receive Promotional Offers and Newsletters?</label>
                                                <p class="form-control-plaintext">
                                                    {{ $data['promotional_offers'] ?? 'Not provided' }}
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>


                                <fieldset aria-labelledby="step-4-heading" aria-describedby="co-borrower-error" id="step-4">
                                    
                                    <p class="text-center d-block">
                                        <a href="{{url('customers')}}" class="btn btn-success crm-btn">Home</a>
                                    </p>
                                </fieldset>
           
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
