
@include('admin.layouts.header')
<body>


  @include('admin.layouts.sidebar')


    <div id="right-panel" class="right-panel">

        @include('admin.layouts.nav')

        @yield('content')



    </div>

 @include('admin.layouts.footer')
