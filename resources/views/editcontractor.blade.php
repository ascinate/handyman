<x-header/>

<section class="float-start w-100 dashboard lg-body01">
    <div class="container">
        <div class="inside-tops m-height d-inline-block w-100">
           <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="{{ asset('images/left-round.png') }}">
                </figure>
               <h2 class="page-heading mt-4 mx-4"> My Account </h2>
               <figure class="m-0 sert-div01">
                <img alt="al" loading="lazy" src="{{ asset('images/left-round2.png') }}">
               </figure>
           </div>
           <form method="POST" action="{{ route('updatecontractor', ['id' => $contractor->id]) }}" enctype="multipart/form-data" class="forms-rgister fom-controls px-4 mt-5">
                @csrf
                <!-- 01. Personal Information -->
                <div class="comons-fomrdiv05 mt-4">
                    <div class="comon-fomr01">
                        <h3 class="mt-4 sub-hrd">01. Personal Information</h3>
                        <hr />
                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                        <div class="col">
                            <div class="form-group">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="full_name" id="fullname" value="{{ $contractor->full_name }}" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $contractor->email }}" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label class="form-label">Contact Number</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{ $contractor->phone }}" />
                            </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="date-of" value="{{ $contractor->dob }}"/>
                        </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label class="form-label">Street</label>
                            <input type="text" class="form-control" name="street" id="street" value="{{ $contractor->street }}" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="city" id="city" value="{{ $contractor->city }}" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control" name="state" id="state" value="{{ $contractor->state }}" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label class="form-label">Zip Code</label>
                            <input type="text" class="form-control" name="zipcode" id="zip" value="{{ $contractor->zipcode }}" />
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="comons-fomrdiv05 mt-5">
                    <div class="comon-fomr01">
                        <h3 class="mt-4 sub-hrd">02. Professional Information </h3>
                        <hr/>

                        <div class="row row-cols-1 gy-4 row-cols-lg-2">
                            <div class="col">
                            <div class="form-group">
                                <label for="fullname" class="form-label">Business Name</label>
                                <input type="text" class="form-control" name="business_name" id="fullname" value="{{ $contractor->business_name }}"/>
                            </div>
                            </div>
        
        
                            <div class="col">
                            <div class="form-group">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="dob" id="date-of" value="{{ $contractor->dob }}"/>
                            </div>
                            </div>
                            
                            <div class="col">
                            <div class="form-group">
                                <label class="form-label">Upload Additional Documents </label>
                                <input class="form-control" type="file" id="formFilesr">
                            
                            </div>
                            </div>
                            
        
                        </div>
                        
                    
                    
                    </div>
                </div>

            
                <div class="comons-fomrdiv05 mt-5">
                    <div class="comon-fomr01">
                        <h3 class="mt-4 sub-hrd">04. Service Area </h3>
                        <hr/>

                        <div class="row row-cols-1 row-cols-lg-2 gy-4">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Street</label>
                                    <input type="text" class="form-control" name="service_area_street" id="pstreet" value="{{ $contractor->service_area_street }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="service_area_city" id="pcity" value="{{ $contractor->service_area_city }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="service_area_state" id="pstate" value="{{ $contractor->service_area_state }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" name="service_area_zip" id="pzip" value="{{ $contractor->service_area_zip }}">
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
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-sendt crm-btn mt-5 " type="button">Save</button>
                </div>
            </form>

          

        </div>
    </div>
</section>




<x-footer/>




<!-- mobile menu -->

<div class="offcanvas offcanvas-end mobile-menu-div" id="mobile-menu">
  <div class="offcanvas-header">
    
     <button type="button" class="close-menu" data-bs-dismiss="offcanvas">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
      </svg>
     </button>
  </div>
  
      
    <div class="offcanvas-body">
      
      <div class="head-contact">
         <a href="index.html" class="logo-side">
         <img loading="lazy" src="images/logo.png" alt="logo">
         </a>
        
         <div class="mobile-menu-sec mt-3">
            <ul class="list-unstyled">
               <li class="active-m">
                  <a href="index.html"> Home </a>
               </li>
               <li>
                  <a href="about-us.html"> About Us </a>
               </li>

               <li>
                <a href="services.html"> Services </a>
               </li>

               <li>
                <a href="how-it-works.html"> How It Works </a>
               </li>

               <li>
                <a href="pricing.html"> Pricing </a>
               </li>

               <li>
                <a href="help.html"> Help & Support
                </a>
               </li>

               <li class="d-block d-lg-none">
                  <a href="#">  Login  </a>
               </li>
               
             
            </ul>
         </div>
         
         <ul class="side-media list-unstyled">
            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
         </ul>
      </div>
    </div>
    
 
</div>

<script src="js/bootstrap.bundle.min.js" ></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
<script src="js/custom.js" ></script>
<script src="js/fom-validations.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>

<script>
  jQuery(function() {
    jQuery('.multiSelect').each(function(e) {
      var self = jQuery(this);
      var field = self.find('.multiSelect_field');
      var fieldOption = field.find('option');
      var placeholder = field.attr('data-placeholder');
  
      field.hide().after(`<div class="multiSelect_dropdown"></div>
                          <span class="multiSelect_placeholder">` + placeholder + `</span>
                          <ul class="multiSelect_list"></ul>
                          <span class="multiSelect_arrow"></span>`);
      
      fieldOption.each(function(e) {
        jQuery('.multiSelect_list').append(`<li class="multiSelect_option" data-value="`+jQuery(this).val()+`">
                                              <a class="multiSelect_text">`+jQuery(this).text()+`</a>
                                            </li>`);
      });
      
      var dropdown = self.find('.multiSelect_dropdown');
      var list = self.find('.multiSelect_list');
      var option = self.find('.multiSelect_option');
      var optionText = self.find('.multiSelect_text');
      
      dropdown.attr('data-multiple', 'true');
      list.css('top', dropdown.height() + 5);
      
      option.click(function(e) {
        var self = jQuery(this);
        e.stopPropagation();
        self.addClass('-selected');
        field.find('option:contains(' + self.children().text() + ')').prop('selected', true);
        dropdown.append(function(e) {
          return jQuery('<span class="multiSelect_choice">'+ self.children().text() +'<svg class="multiSelect_deselect -iconX"><use href="#iconX"></use></svg></span>').click(function(e) {
            var self = jQuery(this);
            e.stopPropagation();
            self.remove();
            list.find('.multiSelect_option:contains(' + self.text() + ')').removeClass('-selected');
            list.css('top', dropdown.height() + 5).find('.multiSelect_noselections').remove();
            field.find('option:contains(' + self.text() + ')').prop('selected', false);
            if (dropdown.children(':visible').length === 0) {
              dropdown.removeClass('-hasValue');
            }
          });
        }).addClass('-hasValue');
        list.css('top', dropdown.height() + 5);
        if (!option.not('.-selected').length) {
          list.append('<h5 class="multiSelect_noselections">No Selections</h5>');
        }
      });
      
      dropdown.click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        dropdown.toggleClass('-open');
        list.toggleClass('-open').scrollTop(0).css('top', dropdown.height() + 5);
      });
      
      jQuery(document).on('click touch', function(e) {
          if (dropdown.hasClass('-open')) {
              dropdown.toggleClass('-open');
              list.removeClass('-open');
          }
      });
    });
  });
  
  
  
  </script>

</body>
</html>
