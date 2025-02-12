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
                     @php
                        $services = \DB::table('services')->select('service_type')->distinct()->get();
                        $contractors = \DB::table('contractors')->get();
                        
                    @endphp



                <form action="{{ URL::to('appointmentform') }}" method="post">
                 @csrf

                    <fieldset aria-label="Step One" id="step-1">
                        <div class="mt-4 d-lg-flex align-items-center w-100 justify-content-between">
                          <h3 class="mb-0 sub-hrd">01. Select a Service </h3>
                          <div class="bg-white serchs-divs08 col-lg-4 d-flex align-items-center">
                             <input type="text" class="form-control" placeholder="Search"/>
                             <button class="btn btn-ser"> <i class="ri-search-line"></i> </button>
                          </div>
                        </div>

                        <hr/>

                        <div class="owl-carousel owl-theme serviceowl cats ">
                         @foreach ($services as $service)
                            
                              <div class="itesm-divs position-relative crm-checks one-03 form-check">
                                <figure>
                                   <img alt="so" loading="lazy" src="images/iconus3-tr.png">
                                </figure>
                                <input class="form-check-input" type="radio" name="service_name" id="ct1" value="{{ $service->service_type }}" required>
                                <label class="form-check-label" for="ct1">
                                  <h5> {{ $service->service_type }} </h5>
                                  <p class="mt-2"> Long established fact that a reader will be distracted </p>
                                </label>
                               </div>
                           
                            @endforeach
                        </div>


                        <button class="mt-4 btn btn-sendt crm-btn btn-next" type="button" aria-controls="step-2">Next</button>

                    </fieldset>

                    <fieldset aria-label="Step Two" id="step-2">

                        <div class="mt-4 d-lg-flex align-items-center w-100 justify-content-between">
                          <h3 class="mb-0 sub-hrd">02. Choose a Contractor </h3>
                          <div class="mt-0 shorts-div col-lg-7 row gy-4 gy-lg-0 mt-lg-0 align-items-center ">
                              <div class="names-diuy col-lg-3">

                                <select class="form-select" aria-label="Default select example">
                                  <option selected>Sort by rating</option>
                                  <option value="1">3 star</option>
                                  <option value="2">4 star</option>
                                  <option value="3">5 star</option>
                                </select>
                              </div>
                              <div class="names-diuy col-lg-3">

                                <div class="btn-group w-100">
                                  <button class="btn foms-prices dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    Price
                                  </button>
                                  <ul class="dropdown-menu foms-prices-div" aria-labelledby="dropdownMenuClickableInside">
                                    <li>
                                         <input type="text" class="form-control" placeholder="Min"/>

                                    </li>
                                    <li class="mt-2">
                                      <input type="text" class="form-control" placeholder="max"/>

                                    </li>

                                  </ul>
                                </div>

                              </div>
                              <div class="names-diuy col-lg-3">

                                <input
                                placeholder="Availability"
                                class="form-control dtasd"
                                type="text"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')"
                                id="date" />


                              </div>
                              <div class="names-diuy col-lg-3">

                                <button class="btn btn-serch crm-btn "> Search </button>

                              </div>

                          </div>
                        </div>

                        <hr/>

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 cats gy-4">
                          @foreach ($contractors as $contractor)
                            <div class="col">

                              <div class="itesm-divs position-relative crm-checks contrs-div one-03 form-check">
                                <figure>
                                  <img alt="so" loading="lazy" src="images/manages-st4.jpg">
                                </figure>
                                <input class="form-check-input" type="radio" name="contructor_id" id="contt1" value="{{ $contractor->id }}" required>
                                <label class="form-check-label" for="contt1">
                                  <h5 class="mt-3"> {{ $contractor->full_name }} </h5>
                                  <div class="rasts">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-line"></i>
                                  </div>
                                  <h2 class="my-2 text-white">$15.00</h2>
                                  <h4> <i class="ri-checkbox-blank-circle-fill"></i> 02:00PM - 05:00 PM</h4>

                                </label>
                              </div>
                            </div>
                          @endforeach


                       </div>




                        <p class="mt-4">
                            <button class="btn btn-default crm-btn2 btn-prev" type="button" aria-controls="step-1">Previous</button>
                            <button class="btn btn-default crm-btn btn-next" type="button" aria-controls="step-3">Next</button>
                        </p>
                    </fieldset>

                    <fieldset role="radiogroup" aria-label="Step Three - What was your first car?" id="step-3">

                        <h3 class="mt-4 sub-hrd">05. Special Instructions (Optional)</h3>
                        <hr/>
                        <div class="d-lg-flex align-items-center w-100 justify-content-between mt-4">
                            <h3 class="sub-hrd mb-0">03. Choose a Booking Date </h3>
                            <div class="shorts-div col-lg-5 ms-auto row gy-4 gy-lg-0 mt-0 mt-lg-0 align-items-center ">
                                
  
                                  <input type="datetime-local" name="special_date" class="form-control" required/>
                                    
                              
                              
                            </div>
                          </div>
                        <hr/>
                        <div class="bg-white calder-s p-3">
                            <div id='calendar'></div>
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
                                <h5> Service Date </h5>
                                <div>
                                  <input type="date" class="form-control" name="service_date" />
                                </div>
                            </div>
                          

                            <div class="col">
                                <h5> Service Time </h5>
                                <div>
                                 <input type="time" class="form-control" name="service_time" />
                                </div>
                            </div>
                            <div class="col">
                                <h5> City </h5>
                                <div>
                                 <input type="text" class="form-control" name="city" />
                                </div>
                            </div>

                            <div class="col">
                                <h5> Zipcode </h5>
                                <div>
                                 <input type="text" class="form-control" name="zipcode" />
                                </div>
                            </div>
                        </div>



                        <div class="mt-4 row row-cols-1 row-cols-lg-2 gy-4">

                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Payment Method   </label>
                                    <div class="flex-wrap d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_method" id="bcomest1" required value="Credit card">
                                            <label class="form-check-label" for="bcomest1">
                                              Credit card
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="payment_method" id="bcomnot2" required value="PayPal">
                                            <label class="form-check-label" for="bcomnot2">
                                              PayPal
                                            </label>
                                          </div>
                                          <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="payment_method" id="bcomnot36" required value="Net Banking">
                                            <label class="form-check-label" for="bcomnot36">
                                              Net Banking
                                            </label>
                                          </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div id="catsd">
                          <div class="row col-lg-7 row-cols-1 row-cols-lg-1">
                            <div class="col">
                              <div class="mt-3 form-group">
                                <label> Cardholder Name </label>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="col">
                              <div class="mt-3 form-group">
                                <label> Card Number </label>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="mt-3 d-flex">

                            <div class="left-sec-d1">
                                <h4> End Date </h4>
                              <div class="end-date">
                                <select class="form-select">
                                    <option selected="">MM</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                  </select>

                                  <select class="form-select">
                                    <option selected="">YYYY</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                  </select>
                              </div>
                            </div>

                            <div class="left-sec-d2 ms-4">
                                <h4> CVV</h4>
                              <div class="cvv">
                                  <input type="text" class="form-control">
                                  <span> <i class="ri-error-warning-fill"></i> 3 digits</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="ac-1">
                           <input type="text" class="form-control"/>
                        </div>

                        <div class="account-page-n" id="ac-2">

                          <div class="form-group">
                            <label> Select Bank </label>
                            <select class="form-select">
                              <option selected="">This is a select menu</option>
                              <option value="1">Option 1</option>
                              <option value="2">Option 2</option>
                              <option value="3">Option 3</option>
                            </select>


                          </div>



                        </div>


                        <p class="mt-4">
                            <button class="btn btn-default crm-btn btn-prev" type="button" aria-controls="step-1">Edit</button>
                            <input class="btn btn-default crm-btn2" type="submit" value="Secure Payment"/>
                           
                        </p>
                    </fieldset>

                    <fieldset role="radiogroup"  aria-label="Step Four" aria-describedby="co-borrower-error" id="step-4">

                        <div class="contacts-dert-div">
                            <h2> Confirm Your Booking </h2>
                            <div class="mt-4 lsuy">
                                <ul>
                                  <li>
                                    <span> Service Type: </span> Plumbing
                                  </li>
                                  <li>
                                    <span> Contractor Name: </span> Dnais James
                                  </li>
                                  <li>
                                    <span> Service date & Time: </span> 18/10/2024 -05:00 PM
                                  </li>
                                  <li>
                                     <span> Contact No: </span> 1800-250-2540
                                  </li>
                                </ul>
                            </div>
                        </div>



                        <p class="mt-4 text-center d-block">
                            <a href="service-request-after-login.html" class="btn btn-success crm-btn"> Reschedule </a>
                            <a href="#" class="btn btn-success crm-btn ms-3"> Email and SMS confirmation   </a>


                        </p>
                    </fieldset>




                </form>
            </section>
           </div>



        </div>
    </div>
</section>
<x-footer/>
