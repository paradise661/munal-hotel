<aside class="layout-menu menu-vertical menu bg-menu-theme" id="layout-menu">
    <div class="app-brand demo">
        <span class="app-brand-logo demo" style="display: tableblock; width: 100%; margin: auto 2rem;">
            <a class="app-brand-link" href="{{ route('admin.dashboard') }}">
                <img src="{{ $settings['site_main_logo'] ? asset($settings['site_main_logo']) : asset('admin/default/img/logo.png') }}"
                    width="120px" alt="Munal Hotel">
            </a>
        </span>
        {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Paradise</span> --}}

        <a class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none" href="javascript:void(0);">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow my-4"></div>

    <ul class="menu-inner py-4">

        <!-- Dashboard -->
        <li class="menu-item {{ Request::segment(2) == '' || Request::segment(2) == 'dashboard' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.dashboard') }}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li
            class="menu-item {{ Request::segment(2) == 'inquiry' || Request::segment(2) == 'contactinquiry' ? 'active' : '' }} ">
            <a class="menu-link menu-toggle" href="javascript:void(0);">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Layouts">Inquries</div>
            </a>

            <ul class="menu-sub ">

                {{-- <li class="menu-item {{ Request::segment(2) == 'inquiry' ? 'active' : '' }}">
                    <a href="{{ route('inquiry.index') }}" class="menu-link">
                        <div>Inquiries</div>
                    </a>
                </li> --}}

                <li class="menu-item {{ Request::segment(2) == 'contactinquiry' ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('contactinquiry.index') }}">
                        <div>Contact Inquiries</div>
                    </a>
                </li>

                {{-- <li class="menu-item {{ Request::segment(2) == 'enquiry' ? 'active' : '' }}">
                    <a href="{{ route('enquiry.index') }}" class="menu-link">
                        <div>Students Enquiry</div>
                    </a>
                </li> --}}
            </ul>
        <li class="menu-item {{ Request::segment(2) == 'enquiry' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('enquiry.index') }}">
                <i class='menu-icon tf-icons bx bx-question-mark'></i>
                Students Enquiry
            </a>
        </li>
        </li>
        <!-- CMS -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text"> <i class="ri-admin-line"></i> Cms</span>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'country' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('country.index') }}">
                <i class="menu-icon tf-icons bx bx-globe-alt"></i>
                <div>Rooms</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'roomcategory' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('roomcategory.index') }}">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div>Room Category</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'course' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('course.index') }}">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div>Amenities</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'branch' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('branch.index') }}">
                <i class="menu-icon tf-icons bx bx-buildings"></i>
                <div>Branches </div>
            </a>
        </li>
        {{-- <li class="menu-item {{ Request::segment(2) == 'university' ? 'active' : '' }}">
            <a href="{{ route('university.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-graduation"></i>
                <div>Universities</div>
            </a>
        </li> --}}
        <li class="menu-item {{ Request::segment(2) == 'blog' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('blog.index') }}">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div>Blogs</div>
            </a>
        </li>
        {{--
        <li class="menu-item {{ Request::segment(2) == 'gallery' ? 'active' : '' }}">
            <a href="{{ route('gallery.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div>Gallery</div>
            </a>
        </li> --}}
        <li class="menu-item {{ Request::segment(2) == 'album' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('album.index') }}">
                <i class="menu-icon tf-icons bx bx-star"></i>
                <div>Album</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'page' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('page.index') }}">
                <i class="menu-icon tf-icons bx bx-copy-alt"></i>
                <div>Pages</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'team' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('team.index') }}">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div>Teams</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'service' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('service.index') }}">
                <i class="menu-icon tf-icons bx bx-server"></i>
                <div>Services</div>
            </a>
        </li>
        {{-- <li class="menu-item {{ Request::segment(2) == 'contact' ? 'active' : '' }}">
            <a href="{{ route('contact.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-phone"></i>
                <div>Contact </div>
            </a>
        </li> --}}

        <li class="menu-item {{ Request::segment(2) == 'slider' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('slider.index') }}">
                <i class="menu-icon tf-icons bx bx-slider"></i>
                <div>Sliders</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'faq' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('faq.index') }}">
                <i class="menu-icon tf-icons bx bx-help-circle"></i>
                <div>Faqs</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'testimonial' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('testimonial.index') }}">
                <i class="menu-icon tf-icons bx bx-message-dots"></i>
                <div>Testimonials</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'whychooseus' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('whychooseus.index') }}">
                <i class='menu-icon tf-icons bx bx-question-mark'></i>
                Dinning
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'event' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('event.index') }}">
                <i class="menu-icon tf-icons bx bx-slider"></i>
                <div>Event</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'member' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('member.index') }}">
                <i class="menu-icon tf-icons bx bx-user"></i>

                <div>Member</div>
            </a>
        </li>
        {{-- <li class="menu-item {{ Request::segment(2) == 'advertisement' ? 'active' : '' }}">
            <a href="{{ route('advertisement.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-advertisement-line"></i>
                <div>Advertisements</div>
            </a>
        </li> --}}

        <!-- Settings -->

        <li
            class="menu-item {{ Request::segment(2) == 'payment' || Request::segment(2) == 'social' || Request::segment(2) == 'popup' || Request::segment(2) == 'setting' ? 'active' : '' }} ">
            <a class="menu-link menu-toggle" href="javascript:void(0);">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Layouts">Settings</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::segment(2) == 'setting' ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('admin.setting.index') }}">
                        <div>Global Settings</div>
                    </a>
                </li>

                {{-- <li class="menu-item {{ Request::segment(2) == 'popup' ? 'payment' : '' }}">
                    <a href="{{ route('payment.index') }}" class="menu-link">
                        <div>Payment Methods</div>
                    </a>
                </li> --}}

                <li class="menu-item {{ Request::segment(2) == 'popup' ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('popup.index') }}">
                        <div>PopUps</div>
                    </a>
                </li>

                <li class="menu-item {{ Request::segment(2) == 'social' ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('social.index') }}">
                        <div>Social Medias</div>
                    </a>
                </li>

            </ul>
        </li>

    </ul>
</aside>
