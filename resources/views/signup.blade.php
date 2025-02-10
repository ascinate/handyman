
<x-header/>
<section class="float-start w-100 dashboard">
    <div class="container">
        <div class="inside-tops m-height d-inline-block w-100">
           <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round.png">
                </figure>
               <h2 class="mx-4 mt-4 page-heading"> User Sign-Up </h2>
               <figure class="m-0 sert-div01">
                <img alt="al" loading="lazy" src="images/left-round2.png">
               </figure>
           </div>
           <div class="px-4 forms-rgister fom-controls">

            <section class="pt-5 multi-step-form">


                <div class="steps cmd-steps justify-content-center d-flex align-items-center">
                    <button class="active" type="button" disabled>
                        <span class="mx-auto d-table">01</span>
                        Step
                    </button>
                    <button type="button" disabled>
                        <span class="mx-auto d-table">02</span>
                        Steps
                    </button>
                    <button type="button" disabled>
                        <span class="mx-auto d-table">03</span>
                        Steps
                    </button>
                    <button type="button" disabled>
                        <span class="mx-auto d-table">04</span>
                        Steps
                    </button>
                    <button type="button" disabled>
                        <span class="mx-auto d-table">05</span>
                        Steps
                    </button>
                </div>

                <form action="{{ URL::to('/welcome-user') }}" method="post">
                @csrf

                    <fieldset aria-label="Step One" id="step-1">
                        <h3 class="mt-4 sub-hrd">01. Personal Information </h3>
                        <hr/>

                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                               <div class="form-group">
                                   <label for="name" class="form-label">Full Name</label>
                                   <input type="text" class="form-control" name="name" id="name" required/>
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Email Address</label>
                                   <input type="email" class="form-control" name="email" id="email" required/>
                                   <span id="email-error" class="text-danger"></span>
                               </div>
                            </div>

                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Phone Number</label>
                                   <input type="text" class="form-control" name="phone" id="phone" required/>
                               </div>
                            </div>

                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Create Password</label>
                                   <input type="password" class="form-control" name="password" id="password" required/>
                                   <div id="passwordMismatch" class="text-danger" style="display: none;">Passwords do not match</div>
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Confirm Password</label>
                                   <input type="password" class="form-control" name="cinpassword" id="cinpassword" required/>
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Street</label>
                                   <input type="text" class="form-control" name="street" id="street" required/>
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">City</label>
                                   <input type="text" class="form-control" name="city" id="city" required/>
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">State</label>
                                   <input type="text" class="form-control" name="state" id="state" required/>
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Zip Code</label>
                                   <input type="text" class="form-control" name="zipcode" id="zipcode" required/>
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Preferred Contact Method</label>
                                   <select class="form-select" name="contact" id="contact" required>
                                       <option selected>select</option>
                                       <option value="1">Phone</option>
                                       <option value="2">Email</option>
                                       <option value="3">SMS</option>
                                   </select>
                               </div>
                            </div>

                        </div>

                        <button class="mt-4 btn btn-sendt crm-btn btn-next" type="button" aria-controls="step-2">Next</button>

                    </fieldset>

                    <fieldset aria-label="Step Two" id="step-2">

                        <h3 class="mt-4 sub-hrd">02. Home Maintenance Preferences </h3>
                        <hr/>

                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Property Type</label>
                                    <select class="form-select" name="property" id="property" required>
                                        <option selected>Select</option>
                                        <option value="1">House</option>
                                        <option value="2">Apartment</option>
                                        <option value="3">Condo</option>
                                        <option value="3">Townhouse</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Number of Bedrooms</label>
                                    <select class="form-select" name="number" id="number" required>
                                        <option selected>Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="3">4</option>
                                        <option value="3">5+</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Number of Bathrooms</label>
                                    <select name="bathrooms" id="bathrooms" class="form-select" required>
                                        <option selected>Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="3">4</option>
                                        <option value="3">5+</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Yard or Garden Maintenance Required? </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_garden_maintenance" value="Y"  id="required1" required />
                                            <label class="form-check-label" for="required1">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="is_garden_maintenance" value="N"  id="required2" required/>
                                            <label class="form-check-label" for="required2">
                                              No
                                            </label>
                                        </div>
                                    </div>
                                    <small class="error-message" id="radio-error-1">This question is required.</small>

                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Do You Own a Pool? </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_pool" value="Y"  id="pool1" required/>
                                            <label class="form-check-label" for="pool1">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="is_pool" value="N"  id="pool2"  required/>
                                            <label class="form-check-label" for="pool2">
                                              No
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Preferred Service Days</label>
                                    <div class="flex-wrap d-flex no-garps1 align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" name="preferred_service_days[]" type="checkbox" value="Monday" id="dasy1" required>
                                            <label class="form-check-label" for="dasy1">
                                                Monday
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" name="preferred_service_days[]" type="checkbox" value="Tuesday" id="dasy2" required>
                                            <label class="form-check-label" for="dasy2">
                                                Tuesday
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" name="preferred_service_days[]" type="checkbox" value="Wednesday" id="dasy3" required>
                                            <label class="form-check-label" for="dasy3">
                                            Wednesday
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" name="preferred_service_days[]" type="checkbox" value="Thursday" id="dasy4" required>
                                            <label class="form-check-label" for="dasy4">
                                            Thursday
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" name="preferred_service_days[]" type="checkbox" value="Friday" id="dasy5" required>
                                            <label class="form-check-label" for="dasy5">
                                            Friday
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" name="preferred_service_days[]" type="checkbox" value="Saturday" id="dasy6">
                                            <label class="form-check-label" for="dasy6">
                                            Saturday
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" name="preferred_service_days[]" type="checkbox" value="Sunday" id="dasy7">
                                            <label class="form-check-label" for="dasy7">
                                            Sunday
                                            </label>
                                          </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Best Time for Services</label>
                                    <input
                                    type="datetime-local"
                                    id="meeting-time"
                                    name="time_for_services" class="form-control" />

                                </div>
                            </div>
                         </div>

                        <p class="mt-4">
                            <button class="btn btn-default crm-btn2 btn-prev" type="button" aria-controls="step-1">Previous</button>
                            <button class="btn btn-default crm-btn btn-next" type="button" aria-controls="step-3">Next</button>
                        </p>
                    </fieldset>

                    <fieldset role="radiogroup" aria-label="Step Three - What was your first car?" id="step-3">

                        <h3 class="mt-4 sub-hrd">03. Service Frequency</h3>
                        <hr/>
                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">How Often Do You Require Maintenance Services? </label>
                                    <select class="form-select" name="maintenance_services_duration" id="maintenance_services_duration" required>
                                        <option selected>Select</option>
                                        <option value="1">Weekly</option>
                                        <option value="2">Bi-weekly</option>
                                        <option value="3">Monthly</option>
                                        <option value="3">Quarterly</option>
                                        <option value="3">As Needed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Preferred Maintenance Plan </label>
                                    <select class="form-select" name="preferred_maintenance_plan" id="preferred_maintenance_plan" required>
                                        <option selected>Select</option>
                                        <option value="1">Routine Check-ups</option>
                                        <option value="2">Emergency-Only</option>
                                        <option value="3">Seasonal Services</option>
                                        <option value="3">Custom Plan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Would You Like to Receive Reminders for Routine Maintenance?  </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="reminder_routine_maintenance" value="Yes" id="Yes" required />
                                            <label class="form-check-label" for="Yes">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="reminder_routine_maintenance" value="No"  id="No" required/>
                                            <label class="form-check-label" for="Yes">
                                              No
                                            </label>
                                        </div>
                                    </div>
                                    <small class="error-message" id="radio-error-1">This question is required.</small>

                                </div>
                            </div>
                        </div>

                        <h3 class="mt-4 sub-hrd">03. Service Frequency</h3>
                        <hr/>
                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Do You Require Accessibility Modifications?  </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_require_accessibility" value="Yes" id="accyes1" required />
                                            <label class="form-check-label" for="accyes1">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="is_require_accessibility" value="No" id="accno2" required/>
                                            <label class="form-check-label" for="accno2">
                                              No
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Emergency Alert Setup  </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="emergency_alert" value="Yes" id="emyes1" required />
                                            <label class="form-check-label" for="emyes1">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="emergency_alert" value="No" id="emno2" required/>
                                            <label class="form-check-label" for="emno2">
                                              No
                                            </label>
                                        </div>
                                    </div>

                                    <div id="id-em" class="mt-3">
                                        <label class="form-label"> Add emergency contacts    </label>
                                        <input type="text" name="emergency_contacts" class="form-control"/>
                                    </div>

                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Do You Have Smart Home Devices?   </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="smart_home_devices" value="Yes" id="smyes1" required />
                                            <label class="form-check-label" for="smyes1">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="smart_home_devices" value="No"  id="smno2" required/>
                                            <label class="form-check-label" for="smno2">
                                              No
                                            </label>
                                        </div>
                                    </div>

                                    <div id="id-sm" class="mt-3 mb-3">
                                        <label class="form-label"> List Compatible Devices   </label>
                                        <textarea class="form-control" name="compatible_devices_list"></textarea>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <p class="mt-4">
                            <button class="btn btn-default crm-btn2 btn-prev" type="button" aria-controls="step-2">Previous</button>
                            <button class="btn btn-default crm-btn btn-next" type="button" aria-controls="step-4">Next</button>
                        </p>
                    </fieldset>

                    <fieldset aria-label="Step Three &amp; a Half - Why did you buy?" id="step-3.5">
                        <h3 class="mt-4 sub-hrd">05. Homeowner Profile Setup</h3>
                        <hr/>
                        <div class="mt-2 row gy-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Year Home Was Built</label>
                                    <input type="text" class="form-control" name="home_built_year" id="built" required/>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label"> Do You Rent Out Your Home?   </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_rent_out" value="Yes"  id="emyes1" required />
                                            <label class="form-check-label" for="emyes1">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="is_rent_out" value="No"   id="emno2" required/>
                                            <label class="form-check-label" for="emno2">
                                              No
                                            </label>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Current Age of Major Appliances   </label>
                                    <textarea class="form-control" name="major_appliances"></textarea>
                                </div>
                            </div>


                        </div>

                        <h3 class="mt-4 sub-hrd">06. Subscription Preferences</h3>
                        <hr/>

                        <div class="mt-2 row gy-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Choose Your Plan</label>
                                    <select class="form-select" aria-label="Default select example" name="subscription_plan" required>
                                        <option selected>select</option>
                                        <option value="1">Basic</option>
                                        <option value="2">Premium</option>
                                        <option value="3">VIP</option>
                                        <option value="3">Pay-As-You-Go</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label"> Would You Like to Start with a Free Trial?   </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_free_trial" value="Yes"  id="likeyes1" />
                                            <label class="form-check-label" for="likeyes1">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="is_free_trial" value="No" id="likeno2"/>
                                            <label class="form-check-label" for="likeno2">
                                              No
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Payment Method</label>
                                    <select class="form-select" aria-label="Default select example" name="payment_method" required>
                                        <option selected>select</option>
                                        <option value="1">Credit Card</option>
                                        <option value="2">Debit Card</option>
                                        <option value="3">PayPal</option>
                                        <option value="3">Bank Transfer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label"> Set Up Auto-Renewal?    </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="auto_renewal" value="Yes"  id="reneyes1" />
                                            <label class="form-check-label" for="reneyes1">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="auto_renewal" value="No" id="reneno2"/>
                                            <label class="form-check-label" for="reneno2">
                                              No
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <h3 class="mt-4 sub-hrd">07. Notifications and Communication</h3>
                        <hr/>

                        <div class="mt-2 row gy-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">How Would You Like to Receive Notifications? </label>
                                    <select class="form-select" name="notifications" aria-label="Default select example">
                                        <option selected>select</option>
                                        <option value="1">Email</option>
                                        <option value="2">SMS</option>
                                        <option value="3">App Notification</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label"> Do You Wish to Receive Promotional Offers and Newsletters?  </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="promotional_offers" value="Yes" id="offersyes1"/>
                                            <label class="form-check-label" for="offersyes1">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="promotional_offers" value="No"  id="offersno2"/>
                                            <label class="form-check-label" for="offersno2">
                                              No
                                            </label>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Emergency Contact Information (Optional)   </label>
                                    <div class="row row-cols-1 gy-4 row-cols-lg-2">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Name"/>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Relationship"/>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Phone Number"/>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Email"/>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>

                        <h3 class="mt-4 sub-hrd">07. User Agreement and Privacy</h3>
                        <hr/>

                        <div class="form-group">
                            <p> “By creating an account, you agree to our Terms of Service and Privacy Policy.” </p>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="trumspage" id="trumspage-al" required />
                            <label class="form-check-label" for="trumspage-al">
                                I have read and agree to the terms and conditions.
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="newsletters" id="flexCheckChecked-ali" required />
                            <label class="form-check-label" for="flexCheckChecked-ali">
                                I agree to receive newsletters and updates.
                            </label>
                          </div>



                        <p class="mt-4">
                            <button class="btn btn-default crm-btn btn-prev" type="button" aria-controls="step-2">Previous</button>
                            <input class="btn btn-default crm-btn2" type="submit" value="Next"/>
                        </p>
                    </fieldset>

                    <fieldset role="radiogroup"  aria-label="Step Four" aria-describedby="co-borrower-error" id="step-4">

                        <h4 class="my-5 text-center"> Complete your profile setup and start exploring our range
                            of services tailored to keep your home safe and well-maintained.”
                        </h4>
                        <p class="text-center d-block">
                            <a href="index.html" class="btn btn-success crm-btn"> Home </a>

                        </p>
                    </fieldset>
                </form>
            </section>
           </div>
        </div>
    </div>
</section>
<x-footer/>
<script>
    $(document).ready(function() {
        $('#cinpassword').on('input', function() {
            var password = $('#password').val();
            var passwordConfirm = $(this).val();

            if (password !== passwordConfirm) {
                $('#passwordMismatch').show();
            } else {
                $('#passwordMismatch').hide();
            }
        });
    });
</script>
<script>
$(document).ready(function () {
    $('input[name="email"]').on('input', function () {
        var email = $(this).val();
        var token = $('meta[name="csrf-token"]').attr('content');
        if (email !== '') {
            $.ajax({
                url: '{{ route("check.email") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    email: email
                },
                success: function (response) {
                    if (response.exists) {
                        $('#email-error').text('This email is already registered.').css('color', 'red');
                    } else {
                        $('#email-error').text('');
                    }
                }
            });
        } else {
            $('#email-error').text('');
        }
    });
});
</script>