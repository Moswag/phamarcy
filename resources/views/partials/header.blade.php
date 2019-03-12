<div class="header-left">
    <a href="index-2.html" class="logo">
        <img src="assets/img/logo.png" width="40" height="40" alt="">
    </a>
</div>
<div class="page-title-box pull-left">
    <h3>Musami Drugs Inventory System</h3>
</div>
<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
<ul class="nav navbar-nav navbar-right user-menu pull-right">
    <li class="dropdown hidden-xs">

        <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
                <span>Notifications</span>
            </div>
            <div class="drop-scroll">
                <ul class="media-list">
                    <li class="media notification-message">
                        <a href="activities.html">
                            <div class="media-left">
												<span class="avatar">
													<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
												</span>
                            </div>
                            <div class="media-body">
                                <p class="m-0 noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                <p class="m-0"><span class="notification-time">4 mins ago</span></p>
                            </div>
                        </a>
                    </li>
                    <li class="media notification-message">
                        <a href="activities.html">
                            <div class="media-left">
                                <span class="avatar">V</span>
                            </div>
                            <div class="media-body">
                                <p class="m-0 noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                <p class="m-0"><span class="notification-time">6 mins ago</span></p>
                            </div>
                        </a>
                    </li>
                    <li class="media notification-message">
                        <a href="activities.html">
                            <div class="media-left">
                                <span class="avatar">L</span>
                            </div>
                            <div class="media-body">
                                <p class="m-0 noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                <p class="m-0"><span class="notification-time">8 mins ago</span></p>
                            </div>
                        </a>
                    </li>
                    <li class="media notification-message">
                        <a href="activities.html">
                            <div class="media-left">
                                <span class="avatar">G</span>
                            </div>
                            <div class="media-body">
                                <p class="m-0 noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                <p class="m-0"><span class="notification-time">12 mins ago</span></p>
                            </div>
                        </a>
                    </li>
                    <li class="media notification-message">
                        <a href="activities.html">
                            <div class="media-left">
                                <span class="avatar">V</span>
                            </div>
                            <div class="media-body">
                                <p class="m-0 noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                <p class="m-0"><span class="notification-time">2 days ago</span></p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="topnav-dropdown-footer">
                <a href="activities.html">View all Notifications</a>
            </div>
        </div>
    </li>
    <li class="dropdown hidden-xs">

    </li>
    <li class="dropdown">
        <a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
            <span>{{auth()->user()->name}} {{auth()->user()->surname}}</span>
            <i class="caret"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="{{route('changepassword')}}">Change Password</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </li>
</ul>
<div class="dropdown mobile-user-menu pull-right">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    <ul class="dropdown-menu pull-right">
        <li><a href="{{route('changepassword')}}">Change Password</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
</div>