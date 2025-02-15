<x-header/>
<style>
   .userwinheading{
    font-size:30px !important;

   } 
   .userwin{
    width: 14%;
   }
</style>
<section class="float-start w-100 dashboard lg-body01">
    <div class="container">
        <div class="inside-tops m-height d-inline-block w-100">
           <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round.png">
                </figure>
               <figure class="m-0 sert-div01">
                <img alt="al" loading="lazy" src="images/left-round2.png">
               </figure>
           </div>
           <div class="forms-rgister fom-controls px-4">

            <section class="multi-step-form pt-5">

                <figure class="mx-auto m-0 d-block text-center mb-1 userwin">
                    <img alt="fil" loading="lazy" src="{{ asset('images/userwin.gif') }}"/>
                </figure>
	             
                <h3 class="text-center text-dark page-heading  userwinheading">Congratulations! <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(240,187,64,1)"><path d="M2 8.99997H5V21H2C1.44772 21 1 20.5523 1 20V9.99997C1 9.44769 1.44772 8.99997 2 8.99997ZM7.29289 7.70708L13.6934 1.30661C13.8693 1.13066 14.1479 1.11087 14.3469 1.26016L15.1995 1.8996C15.6842 2.26312 15.9026 2.88253 15.7531 3.46966L14.5998 7.99997H21C22.1046 7.99997 23 8.8954 23 9.99997V12.1043C23 12.3656 22.9488 12.6243 22.8494 12.8658L19.755 20.3807C19.6007 20.7554 19.2355 21 18.8303 21H8C7.44772 21 7 20.5523 7 20V8.41419C7 8.14897 7.10536 7.89462 7.29289 7.70708Z"></path></svg></span></h3>
                <p class="mt-3 col-lg-6 mx-auto">{{ $successMessage }}</p>
                <p class="text-center d-block mt-3">
                    <a href="{{ URL::to('/') }}" class="btn btn-success crm-btn2"> Home </a>
                   
                </p>
                
               
            </section>
           </div>

          

        </div>
    </div>
</section>
<x-footer/>


