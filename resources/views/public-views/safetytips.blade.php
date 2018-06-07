@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')

 	    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(/unify/assets/img-temp/1920x800/mentorship.jpg);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-py-150">
        <span class="d-block g-font-weight-300 g-font-size-25 mb-3">SAFETY AND SECURITY TIPS</span>
        <h3 class="h1 text-uppercase mb-0"> Your Safet is a priority to us</h3>
      </div>
      <!-- Promo Block Content -->
    </section>

    <!-- Icon Blocks -->
    <section class="g-bg-secondary">
      <div class="container g-py-100">
        <div class="row justify-content-center g-mb-60">
          <div class="col-lg-7">
            <!-- Heading -->
            <div class="text-center">
              <h2 class="h3 g-color-black text-uppercase mb-2">SAFETY AND SECURITY TIPS </h2>
              <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
              <p class="lead mb-0">We value our customers safety and security. Please review the security and safety tips below.</p><hr>
              <p>
                <a href="{{url('register')}}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15">JOIN OUR MENTORSHIP PROGRAM</a>
                <span class="align-middle g-color-primary mx-1">or</span>
                <a href="https://courses.gosgem.com/" target="_blank" class="btn btn-md u-btn-inset u-btn-deeporange g-mr-10 g-mb-15">Login to View Courses</a>
              </p>
            </div>
            <!-- End Heading -->
          </div>
        </div>

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-communication-170 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Install an audible smoke detector around your house.</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">A fact to be aware of is that having a filled gas cylinder at home invites risk. Most domestic fire outbreaks caused by other factors around the home are not usually detected earlier when there is no detector. Having a detector at home gives early warning signal to potential hazards that would only be magnified with the presence of a gas cylinder. </p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-communication-165 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Know your distributors</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Granted, it’s not always possible to know every detail of the gas cylinder you purchase. Ensure to buy both the gas cylinder and gas from an authorised dealer or distributor. Also, check for cylinder validity based on manufacturing. The gas cylinder must be in good condition and not worn out at time of purchase.<br>When refilling the gas, do so with the same authorised gas distributor you formerly bought from. What people are not normally aware of is that gases may not always be from the same origin when buying from a different dealer.</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-communication-018 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Ensure proper storage of the gas cylinder</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Gas cylinders can be installed either outside or inside the home. When stored outside, keep it away from the sun and in a cool area. Take into consideration if the climate where you live is favourable. If you live in area where heavy storms and lightning are frequent, it is advisable that you get the gas cylinder concealed but with proper ventilation to avoid collecting gas during leakage.<br>Storing it indoor requires that you keep the room well ventilated and away from heating source. Avoid placing it close to potential sources of ignition such as: electrical sockets, flammable substance, or even in areas where you receive transmissions from phone calls, TV, internet browsing and so forth.<br>Additionally, you should make sure that the cylinder is stood on a solid and levelled surface where it is less likely to fall.  A compressed gas cylinder which falls to the ground may have its valve damaged and thereby cause rapid release of high pressured gas to the surrounding. This is potentially harmful to the extent of causing damage to property and lives.</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-communication-168 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Assignments</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">You are given assignments</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-communication-171 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Collaboration</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Collaboration with our students in teams and groups</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-media-065 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Certificates</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Given certificates of Participation upon completion of the program</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Heading -->
        <div class="text-center">
          <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
          <p class="lead mb-0">The Online mentorship program is one of our platform to fulfill our purpose; where we can serve a global audience of Christian artists, who wish to kickstart their musical career through quality mentorship and trainings.</p><hr>
          <p>
            <a href="{{url('register')}}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15">JOIN OUR MENTORSHIP PROGRAM</a>
            <span class="align-middle g-color-primary mx-1">or</span>
            <a href="https://courses.gosgem.com/" target="_blank" class="btn btn-md u-btn-inset u-btn-deeporange g-mr-10 g-mb-15">Login to View Courses</a>
          </p>
        </div>
        <!-- End Heading -->
      </div>
    </section>
    <!-- End Icon Blocks -->

	@include('layouts.public.includes.footer')

@endsection