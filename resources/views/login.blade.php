<x-header/>

<section class="float-start w-100 dashboard lg-body01">
    <div class="container">
        <div class="inside-tops m-height d-inline-block w-100">
           <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round.png">
                </figure>
               <h2 class="page-heading mt-4 mx-4"> User Log-in </h2>
               <figure class="m-0 sert-div01">
                <img alt="al" loading="lazy" src="images/left-round2.png">
               </figure>
           </div>
           <div class="forms-rgister fom-controls px-4">

            <section class="multi-step-form pt-5">
	
                
             
                
                <form action="{{ URL::to('login') }}" method="post">
                   @csrf 
                    <fieldset>
                        <h3 class="mt-4 sub-hrd"> Login your Account </h3>
                        <hr/>

                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                           
                            <div class="col">
                               <div class="form-group">
                                   <label class="form-label">User name / Email Address</label>
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
                                    <label class="form-label">Type</label>
                                    <select class="form-control" name="type" id="type" required>
                                        <option value="user">User</option>
                                        <option value="family_member_user">Family Member User</option>
                                        <option value="contractor">Contractor</option>
                                    </select>
                                </div>
                            </div>
                           
                        </div>
                        <input type="submit" class="btn btn-sendt crm-btn mt-4" value="Login"/>
                             @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                       
                    </fieldset>
                  
                    
                </form>
            </section>
           </div>

          

        </div>
    </div>
</section>
<x-footer/>




<!-- mobile menu -->




