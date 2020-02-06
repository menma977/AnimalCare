<aside class="main-sidebar elevation-4 sidebar-light-success">
  {{--navbar-warning--}}
  <a href="{{ url('/') }}"
     class="brand-link">
    <img src="{{ asset('logo.png') }}" alt="Apis Melli" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">
      <h3>Animal Care</h3>
    </span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img
            src="{{ \Illuminate\Support\Facades\Auth::user()->image ? asset('dist/img/'.\Illuminate\Support\Facades\Auth::user()->image) : asset('logo.png') }}"
            class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#"
           class="d-block">
          <i id="online" class="fas fa-circle text-success"></i>
          {{ \Illuminate\Support\Facades\Auth::user()->name}}
        </a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>
              @lang('menu.home.index')
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
