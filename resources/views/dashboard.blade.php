<x-header/>
<section class="float-start w-100 dashboard">
    <div class="container">
        <div class="inside-tops d-inline-block w-100 h-auto pb-5">
           <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round.png">
                </figure>
               <h2 class="mx-4 mt-4 page-heading"> Dashboard Overview </h2>
               <figure class="m-0 sert-div01">
                <img alt="al" loading="lazy" src="images/left-round2.png">
               </figure>
           </div>
           <p class="mx-auto mt-4 text-center col-lg-10"> "Your all-in-one home management hub. From here, you can view upcoming
             appointments, track ongoing services, check your billing history, and more." </p>
             <a href="{{ URL::to('appointment')}}" class="btn btn-default crm-btn d-table mx-auto mt-3"  >Book Appointment</a>
        </div>
    </div>
</section>

<section class="mt-4 others-filed float-start w-100">
    <div class="container">
        <div class="row gy-4 g-lg-4">
           <div class="col-lg-8">
                <div class="inside-tops-others d-inline-block w-100">
                    <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                        <figure class="m-0 sert-div01">
                            <img alt="al" loading="lazy" src="images/left-round.png">
                        </figure>
                       <h2 class="mx-4 mt-4 page-heading"> My Services </h2>
                       <figure class="m-0 sert-div01">
                        <img alt="al" loading="lazy" src="images/left-round2.png">
                       </figure>
                   </div>

                   <div class="p-4 cols-table d-inline-block w-100">
                        <table id="example-datea" class="table table-striped nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#184510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#104510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#124510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#454510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#324510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#124510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>#454510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#424510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#224510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#424510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#224510185</td>
                                <td>System Architect</td>
                                <td>successfully</td>
                                <td>
                                    <a href="#" class="ctm"> <i class="ri-download-2-fill"></i> </a>
                                    <a href="#" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                   </div>
                </div>
           </div>
           @php
                use Illuminate\Support\Facades\DB;
                use Illuminate\Support\Facades\Auth;

                // Fetch the latest unread message for the logged-in user
                $latestUnreadMessage = DB::table('messages')
                    ->where('recipient_id', Auth::id())
                    ->where('seen', false)
                    ->orderBy('created_at', 'desc')
                    ->first();

             
                $unreadMessages = $latestUnreadMessage ? DB::table('messages')
                    ->where('recipient_id', Auth::id())
                    ->where('seen', false)
                    ->count() : 0;

                $appointmentId = $latestUnreadMessage->appointment_id ?? null;
            @endphp

            <div class="col-lg-4">
                <div class="inside-tops-others d-inline-block w-100">
                    <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                        <figure class="m-0 sert-div01">
                            <img alt="al" loading="lazy" src="{{ asset('images/left-round.png') }}">
                        </figure>
                        <h2 class="mx-3 mt-0 mb-0 page-heading">Notifications</h2>
                    </div>

                    <div class="p-4 cols-table d-inline-block w-100">
                        <div class="mb-4 comon-notic w-100">
                            @if($unreadMessages > 0 && $appointmentId)
                                <div class="alert alert-info">
                                    <strong>New Message!</strong> You have {{ $unreadMessages }} unread message(s).  
                                    Click <a href="{{ route('chat.show', $appointmentId) }}" class="btn btn-sm btn-primary">View Messages</a>
                                </div>
                            @else
                                <p class="text-center text-muted">No new messages</p>
                            @endif
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
                   <h2 class="mx-3 mt-0 mb-0 page-heading "> Account Settings </h2>

               </div>

               <div class="p-4 cols-table d-inline-block w-100">
                    <div class="mt-4 mb-4 prifle-smin position-relative">
                        <figure class="mx-auto text-center col-lg-9">
                        <img alt="pic" class="cover-img" src="images/manages-st4.jpg">
                        </figure>
                        
                        <a href="#" class="edt-btn btn"> <i class="ri-edit-2-fill"></i></a>
                        <h5 class="text-center"> James Danish </h5>
                        <p class="text-center"> <i class="ri-map-pin-line"></i> Fiago, Japan </p>
                    </div>


                    <div class="varifiocations">
                        <div class="mb-4 com-vaficoantion d-flex justify-content-center align-items-start">
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
                   <h2 class="mx-4 mt-4 page-heading"> Billing </h2>
                   <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round2.png">
                   </figure>
               </div>

               <div class="p-4 cols-table d-inline-block w-100">
                    <h3 class="sub-texr"> Payment methods </h3>

                      <div class="mt-4 form-check">

                        <label class="form-check-label cbn" for="flexRadioDefault3">

                            Paypal
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        </label>
                      </div>
                      <div class="form-check">

                        <label class="form-check-label cbn" for="flexRadioDefault1">
                          Credit Cards / Debit Cards
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        </label>
                      </div>
                      <div class="form-check">

                        <label class="form-check-label cbn" for="flexRadioDefault2">
                            Online Banking
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        </label>
                      </div>
                    <hr/>
                    <h3 class="sub-texr"> Manage your subscription plan </h3>
                    <div class="mt-4 form-check">

                        <label class="form-check-label cbn" for="ba3">

                            Basic Plan
                          <input class="form-check-input" type="radio" name="ba" id="ba3">
                        </label>
                      </div>
                      <div class="form-check">

                        <label class="form-check-label cbn" for="ba1">
                            Premium Plan
                          <input class="form-check-input" type="radio" name="ba" id="ba1">
                        </label>
                      </div>
                      <div class="form-check">

                        <label class="form-check-label cbn" for="ba2">
                            VIP Plan
                            <input class="form-check-input" type="radio" name="ba" id="ba2" checked>
                        </label>
                      </div>
               </div>
            </div>
           </div>

        </div>
    </div>
</section>
<x-footer/>
