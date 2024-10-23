<div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
    <div class="brand flex-column-auto " id="kt_brand">
        {{-- <a href="{{ route('dashboard') }}" class="brand-logo">
            <img alt="Logo" src="{{ asset('assets/media/logos/sidebar.png') }}" class="w-75" />
        </a> --}}
        <a href="#" class="brand-logo">
            <img alt="Logo" src="{{ asset('assets/media/logos/logo-default.png') }}" class="w-75" />
        </a>

        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                            fill="#000000" fill-rule="nonzero"
                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                        <path
                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                    </g>
                </svg>
            </span>
        </button>
    </div>

    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <ul class="menu-nav">

                <li class="menu-item {{ Route::currentRouteName() == '\dashboard' ? 'menu-item-open' : '' }}"
                    aria-haspopup="true">
                    <a href="{{ route('dashboard') }}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 0.5H4C1.71 0.5 0.5 1.71 0.5 4V14C0.5 16.29 1.71 17.5 4 17.5H16C18.29 17.5 19.5 16.29 19.5 14V4C19.5 1.71 18.29 0.5 16 0.5ZM18.5 14C18.5 15.729 17.729 16.5 16 16.5H4C2.271 16.5 1.5 15.729 1.5 14V9.5H6C6.167 9.5 6.32302 9.4171 6.41602 9.2771L7.849 7.12793L9.526 12.158C9.587 12.339 9.74496 12.4701 9.93396 12.4951C9.95596 12.4981 9.979 12.499 10 12.499C10.166 12.499 10.322 12.4159 10.416 12.2759L12.2679 9.49902H14C14.276 9.49902 14.5 9.27502 14.5 8.99902C14.5 8.72302 14.276 8.49902 14 8.49902H12C11.833 8.49902 11.677 8.58192 11.584 8.72192L10.151 10.8711L8.474 5.84106C8.413 5.66006 8.25504 5.52891 8.06604 5.50391C7.87004 5.47791 7.68898 5.56392 7.58398 5.72192L5.73206 8.49902H1.5V3.99902C1.5 2.27002 2.271 1.49902 4 1.49902H16C17.729 1.49902 18.5 2.27002 18.5 3.99902V14V14Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item {{ Route::currentRouteName() == '\quickbook.auth' ? 'menu-item-open' : '' }}"
                    aria-haspopup="true">
                    <a href="{{ route('quickbook.auth') }}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 0.5H4C1.71 0.5 0.5 1.71 0.5 4V14C0.5 16.29 1.71 17.5 4 17.5H16C18.29 17.5 19.5 16.29 19.5 14V4C19.5 1.71 18.29 0.5 16 0.5ZM18.5 14C18.5 15.729 17.729 16.5 16 16.5H4C2.271 16.5 1.5 15.729 1.5 14V9.5H6C6.167 9.5 6.32302 9.4171 6.41602 9.2771L7.849 7.12793L9.526 12.158C9.587 12.339 9.74496 12.4701 9.93396 12.4951C9.95596 12.4981 9.979 12.499 10 12.499C10.166 12.499 10.322 12.4159 10.416 12.2759L12.2679 9.49902H14C14.276 9.49902 14.5 9.27502 14.5 8.99902C14.5 8.72302 14.276 8.49902 14 8.49902H12C11.833 8.49902 11.677 8.58192 11.584 8.72192L10.151 10.8711L8.474 5.84106C8.413 5.66006 8.25504 5.52891 8.06604 5.50391C7.87004 5.47791 7.68898 5.56392 7.58398 5.72192L5.73206 8.49902H1.5V3.99902C1.5 2.27002 2.271 1.49902 4 1.49902H16C17.729 1.49902 18.5 2.27002 18.5 3.99902V14V14Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <span class="menu-text">Auth</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ request()->is('mapping/*') ? 'menu-item-open' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span
                            class="svg-icon menu-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 1.5C6.21 1.5 1.5 6.21 1.5 12C1.5 17.79 6.21 22.5 12 22.5C17.79 22.5 22.5 17.79 22.5 12C22.5 6.21 17.79 1.5 12 1.5ZM21.475 11.5H16.923C16.827 8.536 15.884 5.494 14.211 2.771C18.227 3.733 21.252 7.248 21.475 11.5ZM12.87 2.54401C14.747 5.29601 15.817 8.444 15.923 11.5H8.077C8.183 8.444 9.25301 5.29601 11.13 2.54401C11.417 2.51801 11.706 2.5 12 2.5C12.294 2.5 12.583 2.51801 12.87 2.54401ZM9.789 2.771C8.117 5.495 7.174 8.537 7.077 11.5H2.52499C2.74799 7.248 5.773 3.733 9.789 2.771ZM2.52499 12.5H7.077C7.173 15.464 8.116 18.506 9.789 21.229C5.773 20.267 2.74799 16.752 2.52499 12.5ZM11.13 21.456C9.25301 18.704 8.183 15.556 8.077 12.5H15.923C15.817 15.556 14.747 18.704 12.87 21.456C12.583 21.482 12.294 21.5 12 21.5C11.706 21.5 11.417 21.482 11.13 21.456ZM14.211 21.229C15.883 18.505 16.826 15.463 16.923 12.5H21.475C21.252 16.752 18.227 20.267 14.211 21.229Z"
                                    fill="#F4851E" />
                            </svg>
                        </span>
                        <span class="menu-text">Mapping</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu "><i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Pages</span>
                                </span>
                            </li>
                            <li class="menu-item  menu-item-submenu  {{ request()->is('mapping/customer') ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('mapping.customer') }}" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Customer</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
