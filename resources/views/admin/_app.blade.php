<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="" />
    <meta name="csrf-token"content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <style>
        .ck-editor__editable_inline {
            height: 200px; /* Set height via CSS */
        }
    </style>
    @yield('css')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const appUrl = {!! json_encode(url('/')) !!};
        let _token = {!! json_encode(csrf_token()) !!};
    </script>
    <script src="{{ asset('admin/all.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.0/classic/ckeditor.js"></script>
    <script src="{{ asset('admin/common-function.js') }}"></script>
</head>

<body class="">
    <div id="wrapper">
        <div id="navigation" class="bg-primary">
            <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
                <div>
                    <a href="/" class="sidebar-brand d-flex align-items-center justify-content-center"
                        data-original-title="" title="" aria-describedby="popover965272">
                        <div class="sidebar-brand-logo">
                         Admin Panel
                        </div>
                    </a>
                </div>
                <hr class="sidebar-divider my-0" />
                <div class="sidebar-heading">
                    Menu
                </div>
                <hr class="sidebar-divider">
                @php
                    $menuname = [
                        (object) [
                            'id' => 1,
                            'name' => 'dashboard',
                            'icon' => 'fas fa-fw fa-home',
                            'link' => 'dashboard',
                            'dropdown' => false,
                        ],
                        (object) [
                            'id' => 1,
                            'name' => 'Survey Record',
                            'icon' => 'fas fa-fw fa-home',
                            'link' => 'survey-data',
                            'dropdown' => false,
                        ],
                        (object) [
                            'id' => 1,
                            'name' => 'change password',
                            'icon' => 'fas fa-fw fa-home',
                            'link' => 'change-password',
                            'dropdown' => false,
                        ],
                        (object) [
                            'id' => 1,
                            'name' => 'project',
                            'icon' => 'fas fa-fw fa-home',
                            'link' => 'project',
                            'dropdown' => false,
                        ],

                      
                    ];
                    // $iconClass = $iconMapping[$item->name] ?? 'fas fa-fw fa-question-circle';
                @endphp
                @foreach ($menuname as $item)
           
                        <li class="nav-item" style="margin-top: -1rem">
                            <a class="nav-link" href="{{ url($item->link) }}">
                                <i class="{{ $item->icon }}"></i>
                                <span class="text-capitalize">{{ str_replace('_', ' ', $item->name) }}</span>
                            </a>
                        </li>
                 
                @endforeach
            </ul>
        </div>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand bg-white topbar mb-4 static-top shadow-sm">
                    <div data-react-class="SidebarToggleButton" data-react-props="{}"
                        data-react-cache-id="SidebarToggleButton-0"></div>
                    <div class="text-truncate" title="user name">
                        Admin Panel
                    </div>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="fas fa-envelope fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <p class="text-center text-muted text-lg p-3 m-0">You're all caught up! 🎉</p>
                                <a class="dropdown-item text-center small text-gray-500 border-0"
                                    href="/message_threads">Read All Messages</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a id="userDropdown" role="button" data-toggle="dropdown" class="nav-link dropdown-toggle"
                                href="/">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{ Auth::user()->name ?? '' }}<br />
                                    <span
                                        class="badge badge-light">Admin</span>
                                </span>
                                <div class="user-avatar rounded-circle bg-secondary d-flex align-items-center justify-content-center"
                                    style="width: 45px; height: 45px">
                                    <img src="https://ui-avatars.com/api/?name= {{ Auth::user()->name ?? '' }}'"
                                        alt="user" class="rounded-circle" width="31" />
                                </div>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ url('admin/change-password') }}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <span class="text-capitalize">{{ str_replace('_', ' ', 'Change Password') }}</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" rel="nofollow" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    @yield('body-containt')
                </div>
            </div>
        </div>
    </div>
    @yield('js')
    <x-toastr-notifications />
</body>

</html>
