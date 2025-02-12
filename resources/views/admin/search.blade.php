<x-header/>

<main class="float-start w-100 listing-main">
    <x-sidebar/>

    <section class="body-part01 float-end">

        <div class="features-body min-height">
            <div class="headiering-steps">

                <div class="d-flex align-items-center">
                  <a class="btn btn-typeo d-inline-block d-lg-none"> <i class="ri-menu-2-line"></i> </a>
                  <h2 class="cm-head"> Search Results for "html"</h2>
               </div>
                <div class="righty-divu">
                  

                  <div class="listing-div-main mt-5 d-block w-100">
                       <div class="wrapper row row-cols-1 row-cols-lg-1" id="Container">

                        @foreach($results as $result)
                            <div class="mix col">
                            <div  class="coon-listnks d-inline-block w-100 bg-white">
                                <div class="row ">
                                    <div class="col-sm-3 col-md-2 pe-0">
                                        <figure class="m-0 w-100 d-block">
                                        <img alt="bm" src="images/Release-Note-in-PDF.jpg"/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-9 col-md-10 ps-2 mt-3 mt-sm-0 ps-md-4 ps-lg-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="pro-titel mt-0">
                                            <a href="{{ URL::to('details') }}/{{ str_replace(" ","-",strtolower($result->articletitle)) }}.html"> {{ $result->articletitle }} </a>
                                            <span class="let ms-2"> {{ $result->paper_type }} </span> <span class="new ms-2"> New </span>
                                        </h3>
                                        <span class="hands"><i class="ri-thumb-up-line"></i> None </span>
                                    </div>

                                    <a href="#" class="btn d-block p-0 text-start btn-floder0 mt-3">
                                         <i class="ri-folder-open-fill"></i> {{ $result->category }}
                                    </a>

                                    <a href="#" class="btn d-block p-0 btn-chome text-start mt-1"> {{ $result->description }} </a>
                                    <ul class="d-flex align-items-center mt-3">
                                        <li> <i class="ri-article-line"></i>  {{ $result->keywords }} </li>
                                        <li class="ms-3"> <i class="ri-calendar-2-line"></i> {{ $result->university }} </li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                        @endforeach
                       </div>
                       <div id="pagination" class="pagination"></div>
                  </div>

                </div>
            </div>
        </div>

    </section>
</main>









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
         <img src="images/logo.png" alt="logo">
         </a>

         <div class="mobile-menu-sec mt-5">
            <ul class="list-unstyled">






              <li>
                <a href="#">University</a>
              </li>

              <li>
                <a href="#">High School </a>
              </li>

              <li>
                <a href="#">Book Notes</a>
              </li>
              <li>
                <a href="blog.html">blog</a>
              </li>






              <li>
                <a data-bs-toggle="modal" data-bs-dismiss="offcanvas" data-bs-target="#loginModal" class="btn login-btn">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                  </span>
                  Login </a>
               </li>
               <li>
                <a data-bs-toggle="modal" data-bs-target="#registerModal" class="btn signup-btn"> Sign Up </a>
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



<div class="modal fade login-div-modal" id="loginModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

      </div>
      <div class="modal-body">

         <form action="index.html" method="get">
            <div id="login-td-div" class="com-div-md">

              <h5 class="text-center mb-3"> Login </h5>
              <button type="button" class="close" data-bs-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
              <div class="login-modal-pn">

              <div class="cm-select-login mt-3">
                <div class="country-dp">

                  <input type="email" name="user" class="form-control" placeholder="Username Or Email" required />
                </div>
                <div class="phone-div">

                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                </div>


              </div>



              <button type="submit" name="submit" class="btn continue-bn"> <i class="fas fa-lock"></i> SIGN IN </button>
            </div>

            <p class="text-center  mt-3">
              <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#lostpsModal" data-bs-dismiss="modal"> Lost Password ? </a>  </p>


              <p class="text-center  mt-3"> Do not have an account?
                <a class="regster-bn" href="signup.html"> Register </a>  </p>
            </div>
         </form>

      </div>

    </div>
  </div>
</div>


<div class="modal fade login-div-modal" id="lostpsModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="index.html" method="get">
            <div class="com-div-md">
              <h5 class="text-center mb-3"> Forget Your Password? </h5>
              <button type="button" class="close" data-bs-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
              <div class="login-modal-pn">
              <p> We'll email you a link to reset your password</p>
              <div class="cm-select-login mt-3">

                <div class="phone-div">

                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required />
                </div>


              </div>



              <button type="submit" class="btn continue-bn"> Send Me a password reset Link </button>
            </div>

            </div>
        </form>
      </div>

    </div>
  </div>
</div>


<div class="modal fade login-div-modal" id="registerModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="index.html" method="get">
            <div class="com-div-md">
              
              <h5 class="text-center mb-3"> Free Register </h5>
              <button type="button" class="close" data-bs-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
              <div class="login-modal-pn">
              
              <div class="cm-select-login mt-0">
                <div class="country-dp">
                  
                  <input type="text" name="fullname" class="form-control" placeholder="First Name" required />
                </div>

                <div class="country-dp">
                  
                  <input type="text" name="fullname" class="form-control" placeholder="Last Name" required />
                </div>

                <div class="phone-div">
                  
                    <input type="email" name="email" class="form-control" placeholder="Email" required />
                </div>

                <div class="phone-div">
                  
                    <input type="text" name="email" class="form-control" placeholder="Phone Number" required />
                </div>
                
                <div class="phone-div">
               
                  <input type="password" name="password" class="form-control" placeholder="Create Password" required />
                </div>
                
                
                <div class="forget2 mt-3 ml-3 mb-2 d-flex justify-content-between">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label w-95" for="exampleCheck1"> By clicking Register, you agree to our
                      Terms of Use
                      and
                      Cookie Policy</label>
                </div>
              
              </div>
              
              
              
              <button type="submit" name="submit" class="btn continue-bn"> Register </button>
            </div>

              <p class="text-center  mt-3"> Do not have an account? 
                <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#loginModal" data-bs-dismiss="modal"> Login </a>  </p>
            </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('js/jquery.min.js') }}" ></script>
<script src="{{ asset('js/custom.js') }}" ></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jPages.min.js') }}"></script>
<script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>


<script>
  $(document).ready(function(){
    $(".btn-typeo").click(function(){
      $(".slider-bar").toggleClass("open-sidebars");
    });
    $(".close-btn").click(function(){
      $(".slider-bar").removeClass("open-sidebars");
    });
    
  });
  </script>



</body>
</html>
