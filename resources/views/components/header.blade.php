<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="marhansolutions.com" />
    <title>MVP Online Property Management - Home</title>
<<<<<<< HEAD
    @php
        $user = Auth::guard('web')->user(); 
        $familyMember = Auth::guard('family_member')->user();
        $contractor = Auth::guard('contractor')->user();
    @endphp

    @if ($user)
        <meta name="user-id" content="{{ $user->id }}">
    @elseif ($familyMember)
        <meta name="user-id" content="{{ $familyMember->id }}">
    @elseif ($contractor)
        <meta name="user-id" content="{{ $contractor->id }}">
    @else
        <meta name="user-id" content="">
    @endif
=======
>>>>>>> 9ecb986 (Initial commit)
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Odia:wght@100..800&family=Boogaloo&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.bootstrap5.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Full-Size-Drag-Drop-Calendar-Plugin-FullCalendar/fullcalendar.min.css"/>
   
  </head>
<body>

  <header class="float-start w-100">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img alt="logo" loading="lazy" src="{{ asset('images/logo.png') }}"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
          <i class="ri-bar-chart-horizontal-line"></i>
        </button>
        @php
<<<<<<< HEAD
        $user = Auth::guard('web')->user(); 
        $familyMember = Auth::guard('family_member')->user();
        $contractor = Auth::guard('contractor')->user();

        $userLoggedIn = $user !== null;
        $familyMemberLoggedIn = $familyMember !== null;
        $contractorLoggedIn = $contractor !== null;
      @endphp
=======
         $userLoggedIn = session('user_id') != '';
         $familyMemberLoggedIn = session('family_member_id') != '';
         $contractorLoggedIn = session('contractor_id') != '';
         $userName = session('user_name'); 
         $familyMemberName = session('family_member_name'); 
         $contractorName = session('contractor_name');
         @endphp
>>>>>>> 9ecb986 (Initial commit)
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="mb-2 navbar-nav ms-auto mb-lg-0 align-items-center">
            <li class="nav-item">
              <a class="nav-link d-flex" href="{{ URL::to('help') }}"> <i class="ri-phone-fill"></i> Support</a>
            </li>
            @if (!$userLoggedIn && !$familyMemberLoggedIn && !$contractorLoggedIn)
            <li class="nav-item">
              <a class="mx-3 nav-link btn-signup" href="{{ URL::to('signup') }}">Signup </a>
            </li>
            @endif
            @if ($userLoggedIn || $familyMemberLoggedIn || $contractorLoggedIn)
            <li class="nav-item dropdown ms-3 d-flex justify-content-end userli">
                <a class="nav-link user-uiy d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="usert d-inline-block">
                    <img alt="sr" loading="lazy" src="{{ asset('images/manages-st4.jpg') }}"/>
                  </div>
                  <span class="ms-2 titleuser">
                  @if ($familyMemberLoggedIn)
<<<<<<< HEAD
                   {{ $familyMember->name }}
                  @elseif ($contractorLoggedIn)
                   {{ $contractor->full_name }}
                  @else
                   {{ $user->name }}
=======
                  {{ $familyMemberName }}
                  @elseif ($contractorLoggedIn)
                    {{ $contractorName }}
                  @else
                    {{ $userName }}
>>>>>>> 9ecb986 (Initial commit)
                  @endif
                  </span>
                </a>
                <ul class="dropdown-menu menus-drps" aria-labelledby="navbarDropdown">
                @if ($contractorLoggedIn)
                  <li><a class="dropdown-item" href="{{ URL::to('contractors') }}">My Account</a></li>
                @else
                  <li><a class="dropdown-item" href="{{ URL::to('dashboard') }}">My Account</a></li>
                  <li><a class="dropdown-item" href="{{ URL::to('dashboardservices') }}">My Services</a></li>
                  <li><a class="dropdown-item" href="{{ URL::to('memberform') }}">Add Member</a></li>
                @endif
                </ul>
                
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link bar-btn" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
                <i class="ri-bar-chart-horizontal-line"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


