{{--  Head  --}}
@include('dashboard.layouts.head')

{{-- Top Navbar --}}
@include('dashboard.layouts.top-navbar')

{{-- Sidebar --}}
@include('dashboard.layouts.sidebar')

{{-- Main Section --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')          <!-----------  ####  Yield here for Content pages #### ----->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  {{-- Footer  --}}
  @include('dashboard.layouts.footer')
