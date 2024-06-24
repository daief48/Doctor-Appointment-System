
<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background: white !important">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background: #74749b">
                <a class="sidebar-brand brand-logo" href="index.html text-white" style="text-decoration: none;color:white">Admin Panel</a>
                <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" style="height: 40px"/></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="admin/assets/images/faces/face9.jpg" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal" style="color: black">{{ Auth::user()->name }}</h5>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar-today text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
        
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('add_doctor_view')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box" style="font-size: 24px"></i>
                        </span>
                        <span class="menu-title"   style="font-size: 16px" >Add Doctors</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('showappointment')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box" style="font-size: 24px"></i>
                        </span>
                        <span class="menu-title"   style="font-size: 16px">Appointments</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('showdoctor')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box" style="font-size: 24px"></i>
                        </span>
                        <span class="menu-title"   style="font-size: 16px">All Doctors</span>
                    </a>
                </li>
                
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('report')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"  style="font-size: 24px"></i>
                        </span>
                        <span class="menu-title"   style="font-size: 16px">Report</span>
                    </a>
                </li>
            </ul>
        </nav>