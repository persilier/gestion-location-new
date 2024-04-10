<aside class="app-sidebar" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
            <img src="/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
            <img src="/assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg></div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide">
                            <a href="index.html" class="side-menu__item">{{ __('Admin') }}</a>
                        </li>
                        <li class="slide">
                            <a href="index.html" class="side-menu__item">{{ __('Manager') }}</a>
                        </li>
                        <li class="slide">
                            <a href="index2.html" class="side-menu__item">{{ __('Employe') }}</a>
                        </li>
                        <li class="slide">
                            <a href="index3.html" class="side-menu__item">{{ __('Proprietaire') }}</a>
                        </li>
                        <li class="slide">
                            <a href="index4.html" class="side-menu__item">{{ __('Locataire') }}</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">{{ __('Gestion') }}</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="widgets.html" class="side-menu__item">
                        <i class="bx bx-gift side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Biens') }} <span
                                class="text-danger text-[0.75em] rounded-sm badge !py-[0.25rem] !px-[0.45rem] !bg-danger/10 ms-2">Hot</span></span>
                    </a>
                </li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-file-blank side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Locations') }}<span
                                class="text-secondary text-[0.75em] rounded-sm !py-[0.25rem] !px-[0.45rem] badge !bg-secondary/10 ms-2">New</span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Pages</a></li>
                        <li class="slide"><a href="aboutus.html" class="side-menu__item">About Us</a>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Blog<i
                                    class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="blog.html" class="side-menu__item">Blog</a>
                                </li>
                                <li class="slide"><a href="blog-details.html" class="side-menu__item">Blog
                                        Details</a>
                                </li>
                                <li class="slide"><a href="blog-create.html" class="side-menu__item">Blog
                                        Create</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="chat.html" class="side-menu__item">Chat</a>
                        </li>
                        <li class="slide"><a href="contacts.html" class="side-menu__item">Contacts</a>
                        </li>
                        <li class="slide"><a href="contactus.html" class="side-menu__item">Contact Us</a>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Ecommerce<i
                                    class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="add-products.html" class="side-menu__item">Add Products</a>
                                </li>
                                <li class="slide">
                                    <a href="cart.html" class="side-menu__item">Cart</a>
                                </li>
                                <li class="slide">
                                    <a href="checkout.html" class="side-menu__item">Checkout</a>
                                </li>
                                <li class="slide">
                                    <a href="edit-products.html" class="side-menu__item">Edit Products</a>
                                </li>
                                <li class="slide">
                                    <a href="order-details.html" class="side-menu__item">Order Details</a>
                                </li>
                                <li class="slide">
                                    <a href="orders.html" class="side-menu__item">Orders</a>
                                </li>
                                <li class="slide">
                                    <a href="products.html" class="side-menu__item">Products</a>
                                </li>
                                <li class="slide">
                                    <a href="products-details.html" class="side-menu__item">Products
                                        Details</a>
                                </li>
                                <li class="slide">
                                    <a href="products-list.html" class="side-menu__item">Products List</a>
                                </li>
                                <li class="slide">
                                    <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">EMail<i
                                    class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="mail.html" class="side-menu__item">Mail
                                        App</a></li>
                                <li class="slide"><a href="mail-settings.html" class="side-menu__item">Mail
                                        Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide"><a href="empty-page.html" class="side-menu__item">Empty</a>
                        </li>
                        <li class="slide"><a href="faqs.html" class="side-menu__item">FAQ's</a></li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">File Manager
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="filemanager.html" class="side-menu__item">File Manager</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Invoice<i
                                    class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="invoice-create.html" class="side-menu__item">Create Invoice</a>
                                </li>

                                <li class="slide"><a href="invoice-details.html" class="side-menu__item">Invoice
                                        Details</a>
                                </li>
                                <li class="slide"><a href="invoice-list.html" class="side-menu__item">Invoice
                                        List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide"><a href="landing.html" class="side-menu__item">Landing</a></li>
                        <li class="slide">
                            <a href="landing-jobs.html" class="side-menu__item">Jobs Landing<span
                                    class="text-secondary text-[0.75em] rounded-sm badge !py-[0.25rem] !px-[0.45rem] !bg-secondary/10 ms-2">New</span></a>
                        </li>
                        <li class="slide">
                            <a href="notifications.html" class="side-menu__item">Notifications</a>
                        </li>
                        <li class="slide"><a href="pricing.html" class="side-menu__item">Pricing</a></li>
                        <li class="slide">
                            <a href="profile.html" class="side-menu__item">Profile</a>
                        </li>
                        <li class="slide"><a href="reviews.html" class="side-menu__item">Reviews</a></li>
                        <li class="slide"><a href="team.html" class="side-menu__item">Team</a></li>
                        <li class="slide"><a href="terms.html" class="side-menu__item">Terms &amp;
                                Conditions</a></li>
                        <li class="slide"><a href="timeline.html" class="side-menu__item">Timeline</a>
                        </li>
                        <li class="slide"><a href="todo.html" class="side-menu__item">To Do List</a></li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-task side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Locataires') }}<span
                                class="text-secondary text-[0.75em] rounded-sm badge !py-[0.25rem] !px-[0.45rem] !bg-secondary/10 ms-2">New</span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Task</a>
                        </li>
                        <li class="slide">
                            <a href="task-kanban-board.html" class="side-menu__item">Kanban Board</a>
                        </li>
                        <li class="slide">
                            <a href="task-listview.html" class="side-menu__item">List View</a>
                        </li>
                        <li class="slide">
                            <a href="task-details.html" class="side-menu__item">Task Details</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-fingerprint side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Agents') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide"><a href="{{ route('manager.agents.index') }}"
                                class="side-menu__item">{{ __('Agents') }}</a></li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Create
                                Password<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="createpassword-basic.html"
                                        class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="createpassword-cover.html"
                                        class="side-menu__item">Cover</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Lockscreen<i
                                    class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="lockscreen-basic.html" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide"><a href="lockscreen-cover.html" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Reset
                                Password<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="resetpassword-basic.html"
                                        class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="resetpassword-cover.html"
                                        class="side-menu__item">Cover</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Sign
                                Up<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="signup-basic.html" class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="signup-cover.html" class="side-menu__item">Cover</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Sign
                                In<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="signin-basic.html" class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="signin-cover.html" class="side-menu__item">Cover</a></li>
                            </ul>
                        </li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Two
                                Step
                                Verfication<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide"><a href="twostep-verification-basic.html"
                                        class="side-menu__item">Basic</a></li>
                                <li class="slide"><a href="twostep-verification-cover.html"
                                        class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide"><a href="under-maintenance.html" class="side-menu__item">Under
                                Maintenance</a></li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-error side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Proprietaires') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Error</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('manager.proprietaires.index') }}"
                                class="side-menu__item">{{ __('Proprietaires') }}</a>
                        </li>
                        <li class="slide">
                            <a href="error404.html" class="side-menu__item">{{ __('Abonnements') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a href="widgets.html" class="side-menu__item">
                        <i class="bx bx-gift side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Paiements') }} <span
                                class="text-danger text-[0.75em] rounded-sm badge !py-[0.25rem] !px-[0.45rem] !bg-danger/10 ms-2">Hot</span></span>
                    </a>
                </li>
                <li class="slide">
                    <a href="widgets.html" class="side-menu__item">
                        <i class="bx bx-gift side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Reclamations') }} <span
                                class="text-danger text-[0.75em] rounded-sm badge !py-[0.25rem] !px-[0.45rem] !bg-danger/10 ms-2">Hot</span></span>
                    </a>
                </li>
                <li class="slide">
                    <a href="widgets.html" class="side-menu__item">
                        <i class="bx bx-gift side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Depenses') }} <span
                                class="text-danger text-[0.75em] rounded-sm badge !py-[0.25rem] !px-[0.45rem] !bg-danger/10 ms-2">Hot</span></span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">{{ __('Agence') }}</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-box side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Parametres') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 mega-menu">
                        <li class="slide">
                            <a href="{{ route('manager.agence.index') }}"
                                class="side-menu__item">{{ __('Agence') }}</a>
                        </li>
                        <li class="slide">
                            <a href="badges.html" class="side-menu__item">{{ __('Notifications') }}</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">{{ __('Admin') }}</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-box side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Administration') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 mega-menu">
                        <li class="slide">
                            <a href="{{ route('admin.users.index') }}"
                                class="side-menu__item">{{ __('Utilisateurs') }}</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.roles.index') }}"
                                class="side-menu__item">{{ __('Rôles') }}</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.permissions.index') }}"
                                class="side-menu__item">{{ __('Permissions') }}</a>
                        </li>
                        <li class="slide">
                            <a href="buttons.html" class="side-menu__item">{{ __('Activité Log') }}</a>
                        </li>
                        <li class="slide">
                            <a href="buttons.html" class="side-menu__item">{{ __('Archives') }}</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <div class="slide-right" id="slide-right">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg>
                </div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
