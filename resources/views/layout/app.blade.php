@include('layout.head')

  <body class="transition-colors duration-300 bg-slate-100">

  <div id="app" class="flex h-screen overflow-hidden animate-fade-in">
    <div id="sidebar-overlay" class="fixed inset-0 bg-black/60 z-30 hidden sm:hidden"></div>
    @include('layout.sidebar')

    <main class="flex-1 flex flex-col overflow-hidden">
      @include('layout.header')

      @include('layout.apiModuls')

        <div class="flex-grow overflow-y-auto">
          {{-- Guest Notice --}}
          @include('sections.guest-notice')
          
          {{-- Main Content Area --}}
          <div class="p-4 sm:p-6">
            {{-- Page Content --}}
            @yield('content')
            
            {{-- Default Dashboard Content --}}
            {{-- @hasSection('content') --}}
              {{-- Custom content provided --}}
            {{-- @else --}}
              {{-- Tab Navigation --}}
              @include('sections.tab-navigation')
              
              {{-- Tab Content --}}
              @include('sections.tab-content')
              
              {{-- Results Section --}}
              @include('sections.results-section')
            {{-- @endif --}}
          </div>
        </div>
    </main>
  </div>

  {{-- Welcome Modal --}}
  @include('layout.welcome-modal')

@include('layout.footer')