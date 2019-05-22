 <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('backend/img/sidebar-1.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="{{route('admin.dashboard')}}" class="simple-text logo-normal">
          আমার ইতিহাস
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active': '' }}  ">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('admin/Slider*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('Slider.index') }}">
             <i class="material-icons">slideshow</i>
              <p>Sliders</p>
            </a>
          </li>

          <li class="nav-item {{ Request::is('admin/period*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('period.index') }}">
             <i class="material-icons">category</i>
              <p>Period</p>
            </a>
          </li>


          <li class="nav-item {{ Request::is('admin/event*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('event.index') }}">
              <i class="material-icons">event_available</i>              
              <p>Event</p>
            </a>
          </li>

          <li class="nav-item {{ Request::is('admin/bongobondu*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('bongobondu.index') }}">
              <i class="material-icons">person</i>
              <p>Friend Of Bengal</p>
            </a>
          </li>


           <li class="nav-item {{ Request::is('admin/archive*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('archive.index') }}">
              <i class="material-icons">library_books</i>
              <p>Archive</p>
            </a>
          </li>


          <li class="nav-item {{ Request::is('admin/book*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('book.index') }}">
              <i class="material-icons">book</i>
              <p>Books</p>
            </a>
          </li>

         <li class="nav-item {{ Request::is('admin/Category*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('Category.index') }}">
              <i class="material-icons">content_paste</i>
              <p>Category</p>
            </a>
          </li>

           <li class="nav-item {{ Request::is('admin/Item*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('Item.index') }}">
              <i class="material-icons">library_books</i>
              <p>Item</p>
            </a>
          </li>

         
          <li class="nav-item {{ Request::is('admin/Contact*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('contact.index') }}">
              <i class="material-icons">message</i>
              <p>Contacts Message</p>
            </a>
          </li>
        </ul>
      </div>
    </div>