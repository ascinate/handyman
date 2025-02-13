
<x-header/>
<section class="float-start w-100 dashboard">
    <div class="container">
        <div class="inside-tops m-height d-inline-block w-100">
           <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="{{ asset('images/left-round.png') }}">
                </figure>
               <h2 class="mx-4 mt-4 page-heading"> Edit memeber </h2>
               <figure class="m-0 sert-div01">
                <img alt="al" loading="lazy" src="{{ asset('images/left-round2.png') }}">
               </figure>
           </div>
           <div class="px-4 forms-rgister fom-controls">

            <section class="pt-5 multi-step-form">


                <form action="{{ route('updateFamily' , [$familyMember->id]) }}" method="post">
                 @csrf

                    
                        <h3 class="mt-4 sub-hrd">Family Information </h3>
                        <hr/>

                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                               <div class="form-group">
                                   <label for="name" class="form-label">Full Name</label>
                                   <input type="text" class="form-control" name="name" id="name" value="{{ $familyMember->name }}" required/>
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Email Address</label>
                                   <input type="email" class="form-control" name="email" id="email" value="{{ $familyMember->email }}" required />
                                   <span id="email-error" class="text-danger"></span>
                               </div>
                            </div>

                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">Phone Number</label>
                                   <input type="text" class="form-control" name="phone" id="phone" value="{{ $familyMember->phone }}" required/>
                               </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="relation" class="form-label">Relation</label>
                                    <select class="form-control" name="relation" id="relation" required>
                                        <option value="Spouse" {{ $familyMember->relation == 'Spouse' ? 'selected' : '' }}>Spouse</option>
                                        <option value="Child" {{ $familyMember->relation == 'Child' ? 'selected' : '' }}>Child</option>
                                        <option value="Parent" {{ $familyMember->relation == 'Parent' ? 'selected' : '' }}>Parent</option>
                                    </select>
                                </div>
                            </div>

                           
                        </div>

                        <button class="mt-4 btn btn-sendt crm-btn" type="submit">Update Member</button>

                   

                  
                </form>

               
            </section>
           </div>
        </div>
    </div>
</section>
<x-footer/>
