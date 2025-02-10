<footer class="mt-4 float-start w-100">
    <p class="text-center text-white"> © 2024 HandyMan rights reserved </p>
 </footer>

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
          <img loading="lazy" src="{{ asset('images/logo.png') }}" alt="logo">
          </a>
              @php
              
              $user = Auth::guard('web')->user(); 
              $familyMember = Auth::guard('family_member')->user();
              $contractor = Auth::guard('contractor')->user();

              $userLoggedIn = $user !== null;
              $familyMemberLoggedIn = $familyMember !== null;
              $contractorLoggedIn = $contractor !== null;
              $appointments = \DB::table('appointments')->select('service_name', 'special_date')->get();
            @endphp

          <div class="mt-3 mobile-menu-sec">
             <ul class="list-unstyled">
                <li class="active-m">
                   <a href="{{ URL::to('/') }}"> Home </a>
                </li>
                <li>
                   <a href="{{ URL::to('about') }}"> About Us </a>
                </li>
                <li>
                 <a href="{{ URL::to('services') }}"> Services </a>
                </li>
                <li>
                 <a href="{{ URL::to('howitworks') }}"> How It Works </a>
                </li>
                <li>
                 <a href="{{ URL::to('pricing') }}"> Pricing </a>
                </li>
                <li>
                 <a href="{{ URL::to('help') }}"> Help & Support
                 </a>
                </li>
                <li>
                 <a href="{{ URL::to('contractor') }}"> Contractors
                 </a>
                </li>
                @if (!$userLoggedIn && !$familyMemberLoggedIn && !$contractorLoggedIn)
                <li class="d-block">
                   <a href="{{ URL::to('login') }}" >
                     <span class="loginicon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                         <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </span>
                    Login 
                 </a>
                </li>
                @endif
                @if ($userLoggedIn || $familyMemberLoggedIn || $contractorLoggedIn)
                <li>
                 <a href="{{ URL::to('logout') }}">  logout  </a>
                </li>
                @endif
             </ul>
          </div>
       </div>
     </div>
 </div>


 <div class="modal fade" id="notiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Additional Fee Notification </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p> “Emergency services may incur an additional fee.” </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary crm-btn2" data-bs-dismiss="modal">Apply</button>
        </div>
      </div>
    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script src="{{ asset('js/custom.js') }}" ></script>
<script src="{{ asset('js/fom-validations.js') }}" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Full-Size-Drag-Drop-Calendar-Plugin-FullCalendar/fullcalendar.min.js"></script>
<script src="https://js.pusher.com/8.2/pusher.min.js"></script>

<script>
    // Enable Pusher logging (for debugging)
    Pusher.logToConsole = true;

    // Initialize Pusher
    const pusher = new Pusher("{{ env('PUSHER_APP_KEY') }}", {
        cluster: "{{ env('PUSHER_APP_CLUSTER') }}",
        encrypted: true
    });

    // Get authenticated user ID
    let userId = "{{ Auth::id() }}";

    // Subscribe to the private channel for the user
    let channel = pusher.subscribe(`private-chat.${userId}`);

    // Listen for the 'MessageSent' event
    channel.bind("MessageSent", function (data) {
        console.log("New message received:", data);

        // Show browser notification
        if (Notification.permission === "granted") {
            new Notification("New Message", {
                body: `New message from ${data.sender_id}: ${data.message}`
            });
        }

        // Display notification in the dashboard
        let notificationDiv = document.getElementById("notificationArea");
        notificationDiv.innerHTML += `<p><strong>New Message:</strong> ${data.message}</p>`;
    });

    // Request notification permission
    if (Notification.permission !== "granted") {
        Notification.requestPermission();
    }
</script>








<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            defaultDate: '2024-11-26',
            editable: true,
            eventLimit: true,
            events: [
                @foreach($appointments as $appointment)
                {
                    title: '{{ $appointment->service_name }}',
                    start: '{{ $appointment->special_date }}'
                },
                @endforeach
            ]
        });
    });
</script>







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

$(document).ready(function(){
    $('#shows-sec').hide();
    $('.multiSelect_field').change(function(){
            if($('.multiSelect_field').val() == 'other') {
                $('#shows-sec').show();
            } else {
                $('#shows-sec').hide();
            }
    });





});


jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}




jQuery(document).ready(function () {

$(document).ready(function(){
  $('.itesm-divs').click(function() {
      $(".itesm-divs").removeClass("active-check");
      $(this).addClass("active-check");
  });
});
});

</script>

<script>
    $(document).ready(function() {
        $('#cinpassword').on('input', function() {
            var password = $('#password').val();
            var passwordConfirm = $(this).val();

            if (password !== passwordConfirm) {
                $('#passwordMismatch').show();
            } else {
                $('#passwordMismatch').hide();
            }
        });
    });
</script>
<script>
$(document).ready(function () {
    $('input[name="email"]').on('input', function () {
        var email = $(this).val();
        var token = $('meta[name="csrf-token"]').attr('content');
        if (email !== '') {
            $.ajax({
                url: '{{ route("check.email") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    email: email
                },
                success: function (response) {
                    if (response.exists) {
                        $('#email-error').text('This email is already registered.').css('color', 'red');
                    } else {
                        $('#email-error').text('');
                    }
                }
            });
        } else {
            $('#email-error').text('');
        }
    });
});
</script>

</body>
</html>
