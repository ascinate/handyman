<x-header/>
<section class="float-start w-100 banner-part">
    <div class="container">
       <div class="inside d-inline-block w-100">
          <div class="row">
             <div class="col-lg-8 pe-lg-0">
               <figure class="mb-0 mens-poic">
                 <img alt="mens" loading="lazy" src="images/mens.png"/>
               </figure>
               <div class="serachs-div pe-lg-4 d-flex align-items-center justify-content-between">
                  <figure class="m-0 sert-div01">
                     <img alt="al" loading="lazy" src="images/left-round.png"/>
                  </figure>
                   <a href="{{URL::to('servicerequest')}}" class="btn btn-sealect"> Select Services </a>
                   <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round2.png"/>
                   </figure>

               </div>
             </div>
             <div class="col-lg-4 ps-lg-0">
                <div class="rigth-part-baner d-inline-block w-100">
                    <h2 class="mt-4 text-center page-heading"> Contractors </h2>
                    <div class="text-center text-blocks d-inline-block w-100">
                        <h2 class="mt-4 text-center page-heading"> For Contractors </h2>
                        <p> "Are you a professional looking to expand your client base? Join our network of trusted contractors and gain access to a steady stream of work
                            from homeowners who value quality and reliability." </p>
                        <figure class="mt-3">
                          <img alt="names" src="images/get-pic.png"/>
                        </figure>
                    </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</section>
<main class="float-start w-100 body-sections spn-pading">
   <section class="top-sections d-inline-block w-100">
      <div class="container">
        <h2 class="mt-4 page-heading"> How to Join </h2>
         <div class="mt-3 row row-cols-1 row-cols-lg-3">

            <a href="{{ URL::to('contractorform')}}">
            <div class="col">
                <div class="itesm-divs one-02 spt-news">
                 <figure>
                    <img alt="so" loading="lazy" src="images/iconus2.png"/>
                 </figure>
                 <h2 class="text-white"> Apply Online </h2>
                 <p class="mt-2"> Fill out our quick contractor application form.
                  </p>
                </div>
            </div>
            </a>
            <div class="col">
               <div class="itesm-divs one-03 spt-news">
                <figure>
                   <img alt="so" loading="lazy" src="images/iconus3-tr.png"/>
                </figure>
                <h2 class="text-white"> Get Verified </h2>
                <p class="mt-2"> We screen all applicants to ensure they meet our quality standards.
                </p>
               </div>
            </div>


            <div class="col">
              <div class="itesm-divs one-01 spt-news">
               <figure>
                  <img alt="so" loading="lazy" src="images/iconus-pic.png"/>
               </figure>
                 <h2 class="text-white"> Start Receiving Jobs </h2>
                 <p class="mt-2"> Once approved, start accepting job requests and grow your business.

                </p>
              </div>
            </div>


         </div>


      </div>
   </section>
</main>
<x-footer/>
