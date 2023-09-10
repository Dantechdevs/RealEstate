  <!-- Header Start -->
  <div class="container-fluid header bg-white p-0">
      <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
              <h1 class="display-5 animated fadeIn mb-4">{{ $pagename }}</h1>
              <nav aria-label="breadcrumb animated fadeIn">
                  <ol class="breadcrumb text-uppercase">
                      <li class="breadcrumb-item"><a href="{{ route('pages.home') }}">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Pages</a></li>
                      <li class="breadcrumb-item text-body active" aria-current="page">{{ $pagename }}</li>
                  </ol>
              </nav>
          </div>
          <div class="col-md-6 animated fadeIn">
              <img class="img-fluid" src="{{ asset('frontend/theme/img/header.jpg') }}" alt="">
          </div>
      </div>
  </div>
  <!-- Header End -->
