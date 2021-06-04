<ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          <span class="badge badge-danger navbar-badge lbl_chatCountUsers">0</span>
        </a> 
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="list_users_login">

  

          <div class="dropdown-divider"></div>


          <div class="dropdown-divider"></div>
          {{-- <a href="#" class="dropdown-item dropdown-footer">Cargando usuarios...</a> --}}
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
 {{--   <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">{{count(auth()->user()->unreadNotifications)}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">
            {{count(auth()->user()->unreadNotifications)}} Notificaciones</span>
          @foreach(auth()->user()->notifications as $key => $notification)
         
          <div class="dropdown-divider"></div>
          <a @if(isset($notification->data['url']) and $notification->data['url'] and $notification->data['url']!='undefined') href="{{$notification->data['url']}}"  @endif class="dropdown-item">
            <i @if(isset($notification->data['icon']) and $notification->data['icon']
             and $notification->data['icon']!='undefined')
               class="{{$notification->data['icon']}} mr-2" @else class="fas fa-bell" @endif></i>
            
            
            {{$notification->data['message']}}
   
            <span class="float-right text-muted text-sm">{{$notification->data['created_at']}}</span>
          </a>
          
          @endforeach       
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>      
      --}}



      
      <!-- 
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
       -->
</ul>