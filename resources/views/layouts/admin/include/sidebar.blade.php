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
            <li class="nav-item  {{ Request::is('admin/Profile*') ? 'active': '' }} ">
                <a class="nav-link" href="{{ route('Profile.index') }}">
                    <i class="material-icons">person</i>
                    <p>Admin Profile</p>
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
              <p>Book List</p>
            </a>
          </li>


          <li class="nav-item {{ Request::is('admin/b_category*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('b_category.index') }}">
              <i class="material-icons">description</i>             
               <p>Book Category </p>
            </a>
          </li>



           <li class="nav-item {{ Request::is('admin/freedomfighter_title*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('freedomfighter_title.index') }}">
             <i class="material-icons">category</i>
              <p>Freedom fighter</p>
            </a>
          </li>

           <li class="nav-item {{ Request::is('admin/freedom_fighter*') ? 'active': '' }}">
            <a class="nav-link" href="{{ route('freedom_fighter.index') }}">
              <i class="material-icons">event_available</i>              
              <p>Freedom fighter list</p>
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