@php
$user = Auth::guard('web')->user();
@endphp
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img alt="image" src="{{asset('backend/img/dp.jpg')}}">
                        </div>
                        <div class="sidebar-user-details">
                            @if ($user)
                         <div class="user-name">{{ $user->name }}</div>
                          <div class="user-roles">
                            @foreach ($user->roles as $role)
                                    {{ $role->name }}
                             @endforeach
                           </div>
                        @endif
                        </div>
                    </div>
                </li>
                @if ($user->can('dashboard.view'))
                <li class="nav-item start active open">
                    <a href="#" class="nav-link nav-toggle">
                        <i data-feather="airplay"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        
                    </a>
                 
                </li>
                @endif
                @if ($user->can('role.create') || $user->can('role.view') ||  $user->can('role.edit') ||  $user->can('role.delete'))
           
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
                        <span class="title">Roles & Permissions</span><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        @if ($user->can('role.create'))
                        <li class="nav-item">
                            <a href="{{route('rolecreate')}}" class="nav-link "> <span class="title">Create Role
                                    </span>
                            </a>
                        </li>
                        @endif
                        @if ($user->can('role.view'))
                        <li class="nav-item">
                            <a href="{{route('rolemanage')}}" class="nav-link "> <span class="title">All Roles
                                    </span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif

                @if ($user->can('admin.create') || $user->can('admin.view') ||  $user->can('admin.edit') ||  $user->can('admin.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
                        <span class="title">Administrator</span><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        @if ($user->can('admin.create'))
                        <li class="nav-item">
                            <a href="{{route('admincreate')}}" class="nav-link "> <span class="title">Create Users
                                    </span>
                            </a>
                        </li>
                        @endif

                        @if ($user->can('admin.view'))
                        <li class="nav-item">
                            <a href="{{route('adminmanage')}}" class="nav-link "> <span class="title">All Users
                                    </span>
                            </a>
                        </li>
                        @endif
                        
                     
                    </ul>
                </li>
                @endif

              
               
            </ul>
        </div>
    </div>
</div>