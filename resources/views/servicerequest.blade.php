<x-header/>
<section class="float-start w-100 dashboard">
    <div class="container">
        <div class="inside-tops m-height d-inline-block w-100">
           <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round.png">
                </figure>
               <h2 class="mx-4 mt-4 page-heading"> Service Request </h2>
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
                  



                <form action="{{ URL::to('/servicerequest') }}" method="post" enctype="multipart/form-data">
                  @csrf
                    <fieldset aria-label="Step One" id="step-1">
                        <h3 class="mt-4 sub-hrd">01. Service Type </h3>
                        <hr/>

                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                               <div class="form-group">
                                   <label for="fullname" class="form-label">What Service Do You Need? </label>
                                   <div class="multiSelect w-100">
                                    <select multiple class="multiSelect_field" name="service_name" data-placeholder="Select">
                                      <option value="Plumbing">Plumbing</option>
                                      <option value="Electrical">Electrical</option>
                                      <option value="HVAC">HVAC</option>
                                      <option value="Landscaping">Landscaping</option>
                                      <option value="Handyman">Handyman</option>
                                      <option value="Safety Installations">Safety Installations</option>
                                      <option value="Cleaning">Cleaning</option>
                                      <option value="General Maintenance">General Maintenance</option>
                                      <option name="other" value="other">Other</option>
                                    </select>
                                  </div>

                                  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                      <g stroke-linecap="round" stroke-linejoin="round">
                                          <line x1="18" y1="6" x2="6" y2="18"></line>
                                          <line x1="6" y1="6" x2="18" y2="18"></line>
                                      </g>
                                    </symbol>
                                  </svg>

                                  <div id="shows-sec">
                                      <input type="text" class="form-control"/>
                                  </div>
                               </div>
                            </div>



                        </div>

                        <h3 class="mt-4 sub-hrd">02. Service Details </h3>
                        <hr/>

                        <div class="row row-cols-1 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Describe the Issue or Request</label>
                                    <textarea class="form-control" name="service_issue" id="issues" required></textarea>
                                </div>
                             </div>
                             <div class="col">
                                <div class="form-group">

                                    <label class="form-label">Add Photos (Optional)</label>
                                    <div class="p-0 upload__box w-100">
                                        <div class="upload__btn-box">
                                          <label class="upload__btn w-100">
                                            <p>Upload images</p>
                                            <input type="file" multiple name="service_photo[]" data-max_length="20" class="upload__inputfile">
                                          </label>
                                        </div>
                                        <div class="upload__img-wrap"></div>
                                    </div>
                                </div>
                             </div>

                        </div>

                        <h3 class="mt-4 sub-hrd">03. Preferred Timing </h3>
                        <hr/>

                        <div class="row row-cols-1 row-cols-lg-2 gy-4">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">When Would You Like the Service? </label>
                                    <input type="date" class="form-control" name="service_pre_date" id="dbusiness" required/>
                                </div>
                             </div>
                             <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Preferred Time Slot </label>
                                    <input type="time" class="form-control" name="service_pre_time" id="dbusinesstime" required/>
                                </div>
                             </div>

                             <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Is This an Emergency Request?  </label>
                                    <div class="d-flex align-items-center">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_emergency_req" id="erm1" value="Yes" data-bs-toggle="modal" data-bs-target="#notiModal">
                                            <label class="form-check-label" for="erm1">
                                              Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="is_emergency_req" id="erm2" value="No">
                                            <label class="form-check-label" for="erm2">
                                              No
                                            </label>
                                          </div>
                                    </div>
                                </div>
                             </div>


                        </div>



                        <button class="mt-4 btn btn-sendt crm-btn btn-next" type="button" aria-controls="step-2">Next</button>

                    </fieldset>

                    <fieldset aria-label="Step Two" id="step-2">


                        <h3 class="mt-4 sub-hrd">04. Location </h3>
                        <hr/>

                        <h4 class="mt-4 mb-2"> Service Address </h4>

                        <div class="row row-cols-1 row-cols-lg-2 gy-4">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Street</label>
                                    <input type="text" class="form-control" name="service_street" id="street" required/>
                                </div>
                             </div>
                             <div class="col">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="service_city" id="city" required/>
                                </div>
                             </div>
                             <div class="col">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="service_state" id="state" required/>
                                </div>
                             </div>
                             <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" name="service_zipcode" id="zip" required/>
                                </div>
                             </div>
                        </div>

                        <div class="mt-4 col">
                            <div class="form-group">
                                <label class="form-label">Is This Address the Same as Your Profile Address?  </label>
                                <div class="d-flex align-items-center">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_address" value="Yes" id="aserm1">
                                        <label class="form-check-label" for="aserm1">
                                          Yes
                                        </label>
                                      </div>
                                      <div class="form-check ms-3">
                                        <input class="form-check-input" type="radio" name="is_address" value="No" id="aserm2">
                                        <label class="form-check-label" for="aserm2">
                                          No
                                        </label>
                                      </div>
                                </div>
                            </div>
                         </div>



                        <p class="mt-4">
                            <button class="btn btn-default crm-btn2 btn-prev" type="button" aria-controls="step-1">Previous</button>
                            <button class="btn btn-default crm-btn btn-next" type="button" aria-controls="step-3">Next</button>
                        </p>
                    </fieldset>

                    <fieldset role="radiogroup" aria-label="Step Three - What was your first car?" id="step-3">

                        <h3 class="mt-4 sub-hrd">05. Special Instructions (Optional)</h3>
                        <hr/>
                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Add Any Additional Details or Instructions for the Contractor </label>
                                    <textarea class="form-control v-he" name="special_instructor_name" id="detailsos" required></textarea>

                                </div>
                            </div>

                        </div>

                        <h3 class="mt-4 sub-hrd">06. Contractor Preferences (Optional)</h3>
                        <hr/>

                        <div class="mt-2 row row-cols-1 gy-4 row-cols-lg-2">

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Do You Have a Preferred Contractor? </label>
                                    <select class="form-select" name="contructor_prefrerred" aria-label="Default select example">
                                        <option selected>Select </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Do You Need the Contractor to Bring Specific Tools/Materials? </label>
                                    <div class="flex-wrap d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_contructor" value="Yes" id="yest1">
                                            <label class="form-check-label" for="yest1">
                                              Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="is_contructor" value="No" id="not2">
                                            <label class="form-check-label" for="not2">
                                                No
                                            </label>
                                        </div>
                                    </div>

                                    <div id="yse">
                                        <textarea class="form-control" name="contructor_name"></textarea>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <h3 class="mt-4 sub-hrd">07. Pricing Estimate (Optional)</h3>
                        <hr/>
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Would You Like a Pricing Estimate Before Booking?  </label>
                                <div class="flex-wrap d-flex align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_contructor_booking" value="Yes" id="etyest1">
                                        <label class="form-check-label" for="etyest1">
                                          Yes
                                        </label>
                                      </div>
                                      <div class="form-check ms-3">
                                        <input class="form-check-input" type="radio" name="is_contructor_booking" value="No" id="etnot2">
                                        <label class="form-check-label" for="etnot2">
                                            No
                                        </label>
                                    </div>
                                </div>

                                <div id="ser-payemts">
                                    <div class="row row-cols-1 row-cols-lg-2 gy-4">
                                       <div class="col">
                                          <div class="form-group">
                                            <select class="form-select" name="booking_number" aria-label="Default select example">
                                                <option selected>select Services</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                          </div>
                                       </div>
                                       <div class="col">
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="booking_amount" placeholder="$25"/>
                                        </div>
                                       </div>
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
                        <h3 class="mt-4 sub-hrd">08. Confirm and Book</h3>
                        <hr/>

                        <div class="row row-cols-1 row-cols-lg-2 gy-4 details-servi">
                            <div class="col">
                                <h5> Service Type </h5>
                                <div class="form-group">
                                <input type="text" class="form-control" name="confirm_service_type" />
                                </div>
                            </div>
                            <div class="col">
                                <h5> Service Date </h5>
                                <div class="form-group">
                                <input type="date" class="form-control" name="confirm_service_date" />
                                </div>
                            </div>
                            <div class="col">
                                <h5> Service Time </h5>
                                <div class="form-group">
                                <input type="time" class="form-control" name="confirm_service_time" />
                                </div>
                            </div>
                            <div class="col">
                                <h5> City </h5>
                                <div class="form-group">
                                <input type="text" class="form-control" name="confirm_service_city" />
                                </div>
                            </div>
                            <div class="col">
                                <h5> State </h5>
                                <div class="form-group">
                                <input type="text" class="form-control" name="confirm_service_state" />
                                </div>
                            </div>
                            <div class="col">
                                <h5> Zipcode </h5>
                                <div class="form-group">
                                <input type="text" class="form-control" name="confirm_service_zipcode" />
                                </div>
                            </div>
                        </div>



                        <div class="mt-4 row row-cols-1 row-cols-lg-2 gy-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Payment Method</label>
                                    <select class="form-select" name="confirm_service_payment" aria-label="Default select example" required>
                                        <option selected>select</option>
                                        <option value="Credit Card">Credit Card</option>
                                        <option value="Debit Card">Debit Card</option>
                                        <option value="PayPal">PayPal</option>
                                        <option value="Bank Transfer">Bank Transfer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Set Up Auto-Payment After Service Completion?   </label>
                                    <div class="flex-wrap d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_auto_payment" value="Yes" id="comest1">
                                            <label class="form-check-label" for="comest1">
                                              Yes
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="is_auto_payment" value="No" id="comnot2">
                                            <label class="form-check-label" for="comnot2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <p class="mt-4">
                            <button class="btn btn-default crm-btn btn-prev" type="button" aria-controls="step-1">Edit</button>
                            <input class="btn btn-default crm-btn2" type="submit" value="Confirm Booking"/>
                        </p>
                    </fieldset>

                    <fieldset role="radiogroup"  aria-label="Step Four" aria-describedby="co-borrower-error" id="step-4">




                        <h4 class="my-5 text-center"> “Submit your service request and get connected with a qualified contractor!”
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
