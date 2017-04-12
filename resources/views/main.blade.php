<!DOCTYPE html>
<html lang="en">

  <head>
    @include('partials._head')
  </head>

    <body>
      @include('partials._nav')

      <div class="container">

        @include('partials._messages')
        
        {{-- Used as a place holder for content any area in the code label section will be displayed here--}}
        @yield('content') 
      </div>

      @include('partials._footer')

      @include('partials._scripts')

      @yield('scripts')
      
    </body>
</html>