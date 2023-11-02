<div class="menu-body">
    {{-- <div class="dropdown">
        <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
            <div class="avatar me-3">
                <img src="{{asset('backend/images')}}/user/man_avatar3.jpg" class="rounded-circle" alt="image">
            </div>
            <div>
                <div class="fw-bold">Timotheus Bendan</div>
                <small class="text-muted">Sales Manager</small>
            </div>
        </a>
    </div> --}}
    <ul class="mt-4">
        <li class="menu-divider">Kullanıcı Menüsü</li>
        {{-- bi bi-receipt bi bi-wallet2 bi bi-paperclip bi bi-chat-square bi bi-envelope bi bi-check-circle--}}
        <li>
            <a href="#" class="active">
                <span class="nav-link-icon">
                    <i class="bi bi-house"></i>
                </span>
                <span>Anasayfa</span>
            </a>
        </li>
        <li class="menu-divider">Sayfa Yönetimi</li>
        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i class="bi bi-bar-chart"></i>
                </span>
                <span>Anasayfa İşlemleri</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('home.slide')}}">
                        <span class="nav-link-icon">
                            <i class="bi bi-dot"></i>
                        </span>
                        <span>Anasayfa</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('about.page')}}">
                        <span class="nav-link-icon">
                            <i class="bi bi-dot"></i>
                        </span>
                        <span>Hakkımızda</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="customers.html">
                <span class="nav-link-icon">
                    <i class="bi bi-person-badge"></i>
                </span>
                <span>Customers</span>
            </a>
        </li>
        <li class="menu-divider">Pages</li>
        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i class="bi bi-person"></i>
                </span>
                <span>Profile</span>
            </a>
            <ul>
                <li>
                    <a href="profile-posts.html">Post</a>
                </li>
                <li>
                    <a href="profile-connections.html">Connections</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i class="bi bi-person-circle"></i>
                </span>
                <span>Users</span>
            </a>
            <ul>
                <li><a href="user-list.html">List View</a></li>
                <li><a href="user-grid.html">Grid View</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i class="bi bi-lock"></i>
                </span>
                <span>Authentication</span>
            </a>
            <ul>
                <li>
                    <a href="login.html" target="_blank">Login</a>
                </li>
                <li>
                    <a href="register.html" target="_blank">Register</a>
                </li>
                <li>
                    <a href="reset-password.html" target="_blank">Reset Password</a>
                </li>
                <li>
                    <a href="lock-screen.html" target="_blank">Lock Screen</a>
                </li>
                <li>
                    <a href="account-verified.html" target="_blank">Account Verified</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i class="bi bi-exclamation-octagon"></i>
                </span>
                <span>Error Pages</span>
            </a>
            <ul>
                <li>
                    <a href="404.html" target="_blank">404</a>
                </li>
                <li>
                    <a href="access-denied.html">Access Denied</a>
                </li>
                <li>
                    <a href="under-construction.html" target="_blank">Under Construction</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="settings.html">
                <span class="nav-link-icon">
                    <i class="bi bi-gear"></i>
                </span>
                <span>Settings</span>
            </a>
        </li>
        <li>
            <a href="faq.html">
                <span class="nav-link-icon">
                    <i class="bi bi-question-circle"></i>
                </span>
                <span>FAQ</span>
            </a>
        </li>
        <li class="menu-divider">User Interface</li>
        <li>
            <a href="#" target="_blank">
                <span class="nav-link-icon">
                    <i class="bi bi-file-earmark-text"></i>
                </span>
                <span>Components</span>
            </a>
            <ul>
                <li>
                    <a href="accordion.html">Accordion</a>
                </li>
                <li>
                    <a href="alert.html">Alerts</a>
                </li>
                <li>
                    <a href="badge.html">Badge</a>
                </li>
                <li>
                    <a href="breadcrumb.html">Breadcrumb</a>
                </li>
                <li>
                    <a href="buttons.html">Buttons</a>
                </li>
                <li>
                    <a href="button-group.html">Button Group</a>
                </li>
                <li>
                    <a href="card.html">Card</a>
                </li>
                <li>
                    <a href="card-masonry.html">Card Masonry</a>
                </li>
                <li>
                    <a href="carousel.html">Carousel</a>
                </li>
                <li>
                    <a href="collapse.html">Collapse</a>
                </li>
                <li>
                    <a href="dropdown.html">Dropdowns</a>
                </li>
                <li>
                    <a href="list-group.html">List Group</a>
                </li>
                <li>
                    <a href="modal.html">Modal</a>
                </li>
                <li>
                    <a href="navs-tabs.html">Navs and Tabs</a>
                </li>
                <li>
                    <a href="pagination.html">Pagination</a>
                </li>
                <li>
                    <a href="popovers.html">Popovers</a>
                </li>
                <li>
                    <a href="progress.html">Progress</a>
                </li>
                <li>
                    <a href="spinners.html">Spinners</a>
                </li>
                <li>
                    <a href="toasts.html">Toasts</a>
                </li>
                <li>
                    <a href="tables.html">
                        <span>Tables</span>
                    </a>
                </li>
                <li>
                    <a href="tooltip.html">Tooltip</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" target="_blank">
                <span class="nav-link-icon">
                    <i class="bi bi-file-earmark-text"></i>
                </span>
                <span>Forms</span>
            </a>
            <ul>
                <li>
                    <a href="#">
                        <span>Form Elements</span>
                    </a>
                    <ul>
                        <li>
                            <a href="forms.html">Overview</a>
                        </li>
                        <li>
                            <a href="form-control.html">Form Controls</a>
                        </li>
                        <li>
                            <a href="select.html">Select</a>
                        </li>
                        <li>
                            <a href="checks-radios.html">Checks and Radios</a>
                        </li>
                        <li>
                            <a href="range.html">Range</a>
                        </li>
                        <li>
                            <a href="input-group.html">Input Group</a>
                        </li>
                        <li>
                            <a href="floating-label.html">Floating Label</a>
                        </li>
                        <li>
                            <a href="forms-layout.html">Form Layout</a>
                        </li>
                        <li>
                            <a href="form-validation.html">Validation</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="form-wizard.html">
                        <span>Wizard</span>
                    </a>
                </li>
                <li>
                    <a href="form-repeater.html">
                        <span>Repeater</span>
                    </a>
                </li>
                <li>
                    <a href="file-upload.html">
                        <span>File Upload</span>
                    </a>
                </li>
                <li>
                    <a href="ckeditor.html">
                        <span>CKEditor</span>
                    </a>
                </li>
                <li>
                    <a href="range-slider.html">
                        <span>Range Slider</span>
                    </a>
                </li>
                <li>
                    <a href="select2.html">
                        <span>Select2</span>
                    </a>
                </li>
                <li>
                    <a href="tags-input.html">
                        <span>Tags Input</span>
                    </a>
                </li>
                <li>
                    <a href="input-mask.html">
                        <span>Input Mask</span>
                    </a>
                </li>
                <li>
                    <a href="datepicker.html">
                        <span>Datepicker</span>
                    </a>
                </li>
                <li>
                    <a href="clockpicker.html">
                        <span>Clock Picker</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i class="bi bi-heart"></i>
                </span>
                <span>Content</span>
            </a>
            <ul>
                <li>
                    <a href="typography.html">
                        <span>Typography</span>
                    </a>
                </li>
                <li>
                    <a href="images.html">
                        <span>Images</span>
                    </a>
                </li>
                <li>
                    <a href="figures.html">
                        <span>Figures</span>
                    </a>
                </li>
                <li>
                    <a href="avatar.html">
                        <span>Avatar</span>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <span>Icons</span>
                    </a>
                </li>
                <li>
                    <a href="colors.html">
                        <span>Colors</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i class="bi bi-list"></i>
                </span>
                <span>Menu Item</span>
            </a>
            <ul>
                <li><a href="#">Menu Item 1</a></li>
                <li>
                    <a href="#">Menu Item 2</a>
                    <ul>
                        <li>
                            <a href="#">Menu Item 2.1</a>
                        </li>
                        <li>
                            <a href="#">Menu Item 2.2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li> 
        <li>
            <a href="#" class="disabled">
                <span class="nav-link-icon">
                    <i class="bi bi-hand-index-thumb"></i>
                </span>
                <span>Disabled</span>
            </a>
        </li>--}}
    </ul>
</div>