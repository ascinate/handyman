
<x-header/>
<section class="float-start w-100 dashboard">
    <div class="container">
        <div class="inside-tops d-inline-block w-100">
           <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round.png">
                </figure>
               <h2 class="page-heading mt-4 mx-4"> Dashboard Overview </h2>
               <figure class="m-0 sert-div01">
                <img alt="al" loading="lazy" src="images/left-round2.png">
               </figure>
           </div>
           <p class="col-lg-10 text-center mx-auto mt-4"> "Your all-in-one home management hub. From here, you can view upcoming
             appointments, track ongoing services, check your billing history, and more." </p>
        </div>
    </div>
</section>

<section class="others-filed float-start w-100 mt-4">
    <div class="container">
        <div class="row gy-4 g-lg-4">
           <div class="col-lg-8">
                <div class="inside-tops-others d-inline-block w-100">
                    <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                        <figure class="m-0 sert-div01">
                            <img alt="al" loading="lazy" src="images/left-round.png">
                        </figure>
                       <h2 class="page-heading mt-4 mx-4"> My Booking </h2>
                       <figure class="m-0 sert-div01">
                        <img alt="al" loading="lazy" src="images/left-round2.png">
                       </figure>
                   </div>

                   <div class="cols-table p-4 d-inline-block w-100">
                        <table id="example-datea" class="table table-striped nowrap" style="width:100%">
                            <thead>
                            <tr>
                           
                            <th>User Name</th>
                            <th>Service Name</th>
                            <th>Special Date</th>
                            <th>Service Date</th>
                            <th>Service Time</th>
                            <th>Location</th>
                            <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                 
                                    <td>{{ $appointment->user_name }}</td>
                                    <td>{{ $appointment->service_name }}</td>
                                    <td>{{ $appointment->special_date }}</td>
                                    <td>{{ $appointment->service_date }}</td>
                                    <td>{{ $appointment->service_time }}</td>
                                    <td>{{ $appointment->city }}, {{ $appointment->zipcode }}</td>
                                    
                                     <td>
                                        @if ($appointment->status == 'pending')
                                            <form action="{{ route('appointments.accept', $appointment->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Accept</button>
                                            </form>
                                            <form action="{{ route('appointments.decline', $appointment->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Decline</button>
                                            </form>
                                        @elseif ($appointment->status == 'accepted')
                                            <a href="{{ route('chat.show', $appointment->id) }}" class="btn btn-primary">Message Me</a>
                                        @else
                                            <span class="text-danger">Declined</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                   </div>
                </div>
           </div>

           <div class="col-lg-4">
            <div class="inside-tops-others d-inline-block w-100">
                <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                    <figure class="m-0 sert-div01">
                        <img alt="al" loading="lazy" src="images/left-round.png">
                    </figure>
                   <h2 class="page-heading mt-0 mb-0 mx-3 "> Notifications </h2>
                 
               </div>

               <div class="cols-table p-4 d-inline-block w-100">
                    <div class="comon-notic mb-4 w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-white"> <i class="ri-notification-3-fill"></i> Reminders </h6>
                        </div>
                        
                        <p class="mt-1 text-white"> There are many variations  </p>
                        <p class="date mt-1 text-dark"> <i class="ri-calendar-2-line"></i> Web, 25 Apr </p>
                    </div>

                    <div class="comon-notic mb-4 w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-white"> <i class="ri-notification-3-fill"></i> Reminders </h6>
                        </div>
                        
                        <p class="mt-1 text-white"> There are many variations  </p>
                        <p class="date mt-1 text-dark"> <i class="ri-calendar-2-line"></i> Web, 25 Apr </p>
                    </div>

                    <div class="comon-notic mb-4 w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-white"> <i class="ri-check-double-line"></i> Updates </h6>
                        </div>
                        
                        <p class="mt-1 text-white"> There are many variations  </p>
                        <p class="date mt-1 text-dark"> <i class="ri-calendar-2-line"></i> Web, 25 Apr </p>
                    </div>

                    <div class="comon-notic mb-4 w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-white"> <i class="ri-notification-3-fill"></i> Reminders </h6>
                        </div>
                        
                        <p class="mt-1 text-white"> There are many variations  </p>
                        <p class="date mt-1 text-dark"> <i class="ri-calendar-2-line"></i> Web, 25 Apr </p>
                    </div>
               </div>
            </div>
           </div>

           <div class="col-lg-5">
            <div class="inside-tops-others d-inline-block w-100">
                <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                    <figure class="m-0 sert-div01">
                        <img alt="al" loading="lazy" src="images/left-round.png">
                    </figure>
                   <h2 class="page-heading mt-0 mb-0 mx-3 "> Account Settings </h2>
                 
               </div>

               <div class="cols-table p-4 d-inline-block w-100">
                    <div class="prifle-smin mt-4 mb-4 position-relative">
                        <figure class="col-lg-9 mx-auto text-center">
                        <img alt="pic" class="cover-img" src="images/manages-st4.jpg">
                        </figure>
                        <a href="{{ url('editcontractor/' . $contractor->id) }}" class="edt-btn btn"> <i class="ri-edit-2-fill"></i></a>
                        <h5 class="text-center"> James Danish </h5>
                        <p class="text-center"> <i class="ri-map-pin-line"></i> Fiago, Japan </p>
                    </div>
                    

                    <div class="varifiocations">
                        <div class="com-vaficoantion d-flex justify-content-center  align-items-start mb-4">
                            <span class="enms-text">
                                <i class="ri-phone-fill"></i>
                            </span>
                            <h5> Phone Verification 
                             <a href="#" class="d-block"> Vatrify Now </a>
                            </h5>
                        </div>

                        <div class="com-vaficoantion justify-content-center d-flex align-items-start">
                         <span class="enms-text">
                            <i class="ri-mail-fill"></i>
                         </span>
                         <h5> Email Verification 
                          <a href="#" class="d-block"> Vatrify Now </a>
                         </h5>
                        </div>
                     </div>

               </div>
            </div>
           </div>


           <div class="col-lg-7">
            <div class="inside-tops-others d-inline-block w-100">
                <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                    <figure class="m-0 sert-div01">
                        <img alt="al" loading="lazy" src="images/left-round.png">
                    </figure>
                   <h2 class="page-heading mt-4 mx-4"> Earnings </h2>
                   <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round2.png">
                   </figure>
               </div>

               <div class="cols-table p-4 d-inline-block w-100">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <h3 class="sub-texr"> Walllet Balance </h3>
                    <h1 class="amounts-pays">$18,000</h1>
                </div>
                   

                    <button class="btn crm-btn"> Transfer </button>
                    
                     
                    
                     
                    <hr/>
                    <h3 class="sub-texr"> Recent transactions </h3>
                     <div class="transformsd w-100 mt-1">
                        <div class="comons-tarnsd d-flex bg-white mb-3 rounded-2 p-3 pb-2 align-itmes-center justify-content-between w-100">
                           <div class="userts-pays d-flex align-itmes-center">
                              <figure class="m-0">
                                   <img src="images/manages-st2.jpg"/>
                              </figure>
                              <div class="textrs ms-2">
                                 <h6> Jone Danis 
                                    <small class="d-block mt-1"> Today, 10:30PM</small>
                                 </h6>
                              </div>
                           </div>
                           <div class="amounsts-div">
                              <h5>$250
                                <small class="mt-1 d-block">  Transfer  </small>
                              </h5>
                           </div>
                        </div>
                        <div class="comons-tarnsd d-flex bg-white mb-3 rounded-2 p-3 pb-2 align-itmes-center justify-content-between w-100">
                            <div class="userts-pays d-flex align-itmes-center">
                               <figure class="m-0">
                                    <img src="images/manages-st2.jpg"/>
                               </figure>
                               <div class="textrs ms-2">
                                  <h6> Jone Danis 
                                     <small class="d-block mt-1"> Today, 10:30PM</small>
                                  </h6>
                               </div>
                            </div>
                            <div class="amounsts-div">
                               <h5>$250
                                 <small class="mt-1 d-block">  Transfer  </small>
                               </h5>
                            </div>
                         </div>
                         
                     </div>
               </div>
            </div>
           </div>

        </div>
    </div>
</section>

<x-footer/>
