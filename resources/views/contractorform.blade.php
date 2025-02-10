<x-header/>
<section class="float-start w-100 dashboard">
    <div class="container">
        <div class="inside-tops m-height d-inline-block w-100">
           <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round.png">
                </figure>
               <h2 class="mx-4 mt-4 page-heading"> Contractor Application  </h2>
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




                <form action="{{ URL::to('/contractorform') }}" method="post" enctype="multipart/form-data">
                @csrf

                    <fieldset aria-label="Step One" id="step-1">
                        <h3 class="mt-4 sub-hrd">01. Personal Information </h3>
                        <hr/>

                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                               <div class="form-group">
                                   <label for="fullname" class="form-label">Full Name</label>
                                   <input type="text" class="form-control" name="full_name" id="full_name" required/>
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Email Address</label>
                                   <input type="email" class="form-control" name="email" id="email" required/>
                               </div>
                            </div>

                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Password</label>
                                   <input type="password" class="form-control" name="password" id="password" required/>
                               </div>
                            </div>

                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Contact Number</label>
                                   <input type="text" class="form-control" name="phone" id="phone" required/>
                               </div>
                            </div>

                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Date of Birth</label>
                                   <input type="date" class="form-control" name="dob" id="dob" required/>
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




                        </div>

                        <button class="mt-4 btn btn-sendt crm-btn btn-next" type="button" aria-controls="step-2">Next</button>

                    </fieldset>

                    <fieldset aria-label="Step Two" id="step-2">

                        <h3 class="mt-4 sub-hrd">02. Professional Information </h3>
                        <hr/>

                        <div class="mt-2 row gy-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Business Name </label>
                                    <input type="text" class="form-control" name="business_name" id="business_name" required/>
                                </div>
                             </div>

                             <div class="mt-4 col-lg-12">
                                <h3> Business Address (if different from home): </h3>
                             </div>


                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Street</label>
                                    <input type="text" class="form-control" name="business_street" id="business_street" required/>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="business_city" id="business_city" required/>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="business_state" id="business_state" required/>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" name="business_zipcode" id="business_zipcode" required/>
                                </div>
                             </div>

                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Trade or Specialization</label>
                                    <div class="multiSelect w-100">
                                        <select multiple class="multiSelect_field form-control" name="business_specialization" data-placeholder="Select">
                                          <option value=""></option>
                                          <option value=""></option>
                                          <option value=""></option>
                                          <option value=""></option>
                                          <option value=""></option>
                                          <option value=""></option>
                                        </select>
                                      </div>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                      <g stroke-linecap="round" stroke-linejoin="round">
                                          <line x1="18" y1="6" x2="6" y2="18"></line>
                                          <line x1="6" y1="6" x2="18" y2="18"></line>
                                      </g>
                                    </symbol>
                                  </svg>

                             </div>

                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Certifications and Licenses</label>
                                    <input class="form-control" type="file" id="formFile" name="business_licenses">
                                </div>

                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Upload a Photo ID</label>
                                    <input class="form-control" type="file" id="formFilet" name="photo">
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
                                    <label class="form-label">Describe Your Expertise </label>
                                    <textarea class="form-control v-he" name="service_freq_expertise" id="service_freq_expertise" required></textarea>

                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Certifications or Licenses </label>
                                    <textarea class="form-control v-he" name="service_freq_certificate"></textarea>

                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Upload Additional Documents </label>
                                    <input class="form-control" type="file" id="formFilesr" name="service_freq_photo">

                                </div>
                            </div>


                        </div>

                        <h3 class="mt-4 sub-hrd">04. Availability</h3>
                        <hr/>
                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">

                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Preferred Service Days</label>
                                <div class="flex-wrap d-flex no-garps1 align-itmes-center">
                                    <div class="form-check">
                                        <input class="form-check-input" name="service_freq_preferred_day" type="radio" value="Monday" id="dasy1" required>
                                        <label class="form-check-label" for="dasy1">
                                            Monday
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="service_freq_preferred_day" type="radio" value="Tuesday" id="dasy2" required>
                                        <label class="form-check-label" for="dasy2">
                                            Tuesday
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="service_freq_preferred_day" type="radio" value="Wednesday" id="dasy3" required>
                                        <label class="form-check-label" for="dasy3">
                                            Wednesday
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="service_freq_preferred_day" type="radio" value="Thursday" id="dasy4" required>
                                        <label class="form-check-label" for="dasy4">
                                            Thursday
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="service_freq_preferred_day" type="radio" value="Friday" id="dasy5" required>
                                        <label class="form-check-label" for="dasy5">
                                            Friday
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="service_freq_preferred_day" type="radio" value="Saturday" id="dasy6">
                                        <label class="form-check-label" for="dasy6">
                                            Saturday
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="service_freq_preferred_day" type="radio" value="Sunday" id="dasy7">
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
                                    id="service_freq_time"
                                    name="service_freq_time" class="form-control" />

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label"> Are You Available for Emergency Services?   </label>
                                    <div class="d-flex align-itmes-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_service_freq"  id="semyes1" value="Yes" required />
                                            <label class="form-check-label" for="semyes1">
                                                Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="is_service_freq"  id="semno2" value="No" required/>
                                            <label class="form-check-label" for="semno2">
                                              No
                                            </label>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Willingness to Travel</label>
                                    <select class="form-select" name="service_freq_travel" aria-label="Default select example" required>
                                        <option selected>select</option>
                                        <option value="Local Only">Local Only</option>
                                        <option value="Within 30 Miles">Within 30 Miles</option>
                                        <option value="Within 50 Miles">Within 50 Miles</option>
                                        <option value="No Limit">No Limit</option>
                                    </select>
                                </div>
                            </div>

                        </div>





                        <p class="mt-4">
                            <button class="btn btn-default crm-btn2 btn-prev" type="button" aria-controls="step-2">Previous</button>
                            <button class="btn btn-default crm-btn btn-next" type="button" aria-controls="step-4">Next</button>
                        </p>
                    </fieldset>

                    <fieldset aria-label="Step Three &amp; a Half - Why did you buy?" id="step-3.5">
                        <h3 class="mt-4 sub-hrd">05. Service Area</h3>
                        <hr/>

                        <h4 class="my-4"> Primary Service Location </h4>

                        <div class="row row-cols-1 row-cols-lg-2 gy-4">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Street</label>
                                    <input type="text" class="form-control" name="service_area_street" id="service_area_street"/>
                                </div>
                             </div>
                             <div class="col">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="service_area_city" id="service_area_city" />
                                </div>
                             </div>
                             <div class="col">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="service_area_state" id="service_area_state"/>
                                </div>
                             </div>
                             <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" name="service_area_zip" id="service_area_zip"/>
                                </div>
                             </div>

                             <div class="form-group">
                                <label for="fullname" class="form-label">Service Radius</label>
                                <select class="form-select" name="service_radius" aria-label="Default select example">
                                    <option selected>select</option>
                                    <option value="10 miles">10 miles</option>
                                    <option value="20 miles">20 miles</option>
                                    <option value="30 miles">30 miles</option>
                                    <option value="50 miles">50 miles</option>
                                    <option value="Unlimited">Unlimited</option>
                                </select>
                            </div>
                        </div>

                        <h3 class="mt-4 sub-hrd">06. Background Check Authorization</h3>
                        <hr/>

                        <p> “For the safety and security of our customers, we require all contractors to undergo a background check.
                             By checking this box, you agree to this requirement.” </p>

                        <div class="mt-4 form-check">
                            <input class="form-check-input" type="checkbox" name="batrumspage" id="batrumspage-al" required />
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree to the background check.
                            </label>
                        </div>


                        <h3 class="mt-4 sub-hrd">07. References (Optional)</h3>
                        <hr/>
                        <h4 class="my-4"> Reference #1 </h4>
                        <div class="row row-cols-1 row-cols-lg-2 gy-4">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="ref_1_name"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" name="ref_1_phone"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Relationship</label>
                                    <input type="text" class="form-control" name="ref_1_relation"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Years Known</label>
                                    <input type="text" class="form-control" name="ref_1_duration"/>
                                </div>
                            </div>
                        </div>

                        <h4 class="my-4"> Reference #2 </h4>
                        <div class="row row-cols-1 row-cols-lg-2 gy-4">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="ref_2_name"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" name="ref_2_phone"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Relationship</label>
                                    <input type="text" class="form-control" name="ref_2_relation"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Years Known</label>
                                    <input type="text" class="form-control" name="ref_2_duration"/>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-4 sub-hrd">08. Terms and Conditions</h3>
                        <hr/>

                        <p> “By applying, you agree to abide by our quality standards and code of conduct. Failure to meet these requirements
                            may result in the termination of your contractor account.” </p>

                        <div class="mt-4 form-check">
                            <input class="form-check-input" type="checkbox" name="obatrumspage" id="obatrumspage-al" required />
                            <label class="form-check-label" for="obatrumspage-al">
                                I have read and agree to the terms and conditions.
                            </label>
                        </div>

                        <p class="mt-4">
                            <button class="btn btn-default crm-btn btn-prev" type="button" aria-controls="step-2">Previous</button>
                            <input class="btn btn-default crm-btn2" type="submit" value="Next"/>
                        </p>
                    </fieldset>

                    <fieldset role="radiogroup"  aria-label="Step Four" aria-describedby="co-borrower-error" id="step-4">




                        <h4 class="my-5 text-center"> “Once you’ve completed the form, click Submit. Our team will review your application
                            and get back to you within 3-5 business days.”
                        </h4>
                        <p class="text-center d-block">
                            <a href="{{ URL::to('/') }}" class="btn btn-success crm-btn"> Home </a>

                        </p>
                    </fieldset>




                </form>
            </section>
           </div>



        </div>
    </div>
</section>
<x-footer/>
