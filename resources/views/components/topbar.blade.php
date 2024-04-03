<div class="header border-bottom border-gray-200 header-fixed">
    <div class="container-fluid px-0">
        <div class="header-body px-3 px-xxl-5 py-3 py-lg-4">
            <div class="row align-items-center">
                <a href="javascript:void(0);" class="muze-hamburger d-block d-lg-none col-auto">
                    <img src="{{ asset('svg/icons/hamburger1.svg') }}" alt="img">
                    <img src="{{ asset('svg/icons/close1.svg') }}" style="width:20px;" class="menu-close" alt="img">
                </a>
                <a class="navbar-brand mx-auto d-lg-none col-auto px-0" href="#">
                    <img src="{{ asset('svg/brand/logo.svg') }}" alt="Muze">
                    <img src="{{ asset('svg/brand/logo-white.svg') }}" alt="Muze" class="white-logo">
                </a>
                <div class="col d-flex align-items-center">
                    <a href="javascript:void(0);"
                        class="back-arrow bg-white circle circle-sm shadow border border-gray-200 rounded mb-0"><svg
                            xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 16 16">
                            <g data-name="icons/tabler/chevrons-left" transform="translate(0)">
                                <rect data-name="Icons/Tabler/Chevrons Left background" width="16" height="16"
                                    fill="none" />
                                <path
                                    d="M14.468,14.531l-.107-.093-6.4-6.4a.961.961,0,0,1-.094-1.25l.094-.107,6.4-6.4a.96.96,0,0,1,1.451,1.25l-.094.108L10,7.36l5.72,5.721a.961.961,0,0,1,.094,1.25l-.094.107a.96.96,0,0,1-1.25.093Zm-7.68,0-.107-.093-6.4-6.4a.961.961,0,0,1-.093-1.25l.093-.107,6.4-6.4a.96.96,0,0,1,1.45,1.25l-.093.108L2.318,7.36l5.72,5.721a.96.96,0,0,1,.093,1.25l-.093.107a.96.96,0,0,1-1.25.093Z"
                                    transform="translate(0 1)" fill="#6C757D" />
                            </g>
                        </svg>
                    </a>
                    <div class="ps-3 header-search">
                        <form>
                            <div class="input-group bg-white border border-gray-300 rounded py-1 px-3">
                                <input type="search" class="form-control border-0" placeholder="Search...">
                            </div>
                        </form>
                        <span class="muze-search d-lg-none ms-3">
                            <svg id="icons_tabler_close" data-name="icons/tabler/close"
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                                <rect data-name="Icons/Tabler/Close background" width="16" height="16" fill="none" />
                                <path
                                    d="M.82.1l.058.05L6,5.272,11.122.151A.514.514,0,0,1,11.9.82l-.05.058L6.728,6l5.122,5.122a.514.514,0,0,1-.67.777l-.058-.05L6,6.728.878,11.849A.514.514,0,0,1,.1,11.18l.05-.058L5.272,6,.151.878A.514.514,0,0,1,.75.057Z"
                                    transform="translate(2 2)" fill="#1e1e1e" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="col-auto d-flex flex-wrap align-items-center icon-blue-hover ps-0">
                    <a href="#" class="d-lg-none muze-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 14 14">
                            <rect id="Icons_Tabler_Search_background" data-name="Icons/Tabler/Search background"
                                width="14" height="14" fill="none" />
                            <path data-name="Combined Shape"
                                d="M13.141,13.895l-.06-.052L9.1,9.859A5.569,5.569,0,1,1,9.859,9.1l3.983,3.983a.539.539,0,0,1-.7.813ZM1.077,5.564A4.487,4.487,0,1,0,5.564,1.077,4.492,4.492,0,0,0,1.077,5.564Z"
                                fill="#1e1e1e" />
                        </svg>
                    </a>
                    <div class="dropdown grid-option">
                        <a href="#" class="text-dark ms-4 ms-xxl-5 mb-0 notification" data-bs-toggle="dropdown"
                            aria-expanded="false" id="notification"><svg id="Icons_tabler_notification"
                                data-name="Icons/tabler/notification" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <rect id="Icons_Tabler_Notification_background"
                                    data-name="Icons/Tabler/Notification background" width="24" height="24"
                                    fill="none" />
                                <path
                                    d="M6.162,19.63l-.005-.246v-.308H.926A.923.923,0,0,1,.471,17.35a4,4,0,0,0,1.956-2.66l.036-.229V10.726A9.492,9.492,0,0,1,7.292,2.873l.147-.08,0-.018A3.369,3.369,0,0,1,10.566.007L10.771,0a3.379,3.379,0,0,1,3.287,2.573l.045.22.147.08a9.556,9.556,0,0,1,4.806,7.541l.023.355-.007,3.582a4.016,4.016,0,0,0,2,3,.924.924,0,0,1-.329,1.719l-.126.008H15.387v.308a4.616,4.616,0,0,1-9.225.246ZM8,19.385a2.769,2.769,0,0,0,5.532.189l.007-.189v-.308H8ZM9.242,3.228l-.012.238-.005.045L9.2,3.63l-.039.113-.054.107-.035.055L9,4l-.036.038-.05.046-.1.074L8.7,4.219A7.7,7.7,0,0,0,4.332,10.46l-.022.309-.007,3.8a5.875,5.875,0,0,1-.94,2.541l-.084.119H18.266l-.007-.012a6.007,6.007,0,0,1-.983-2.452l-.043-.306V10.812a7.674,7.674,0,0,0-4.4-6.593.919.919,0,0,1-.518-.7l-.009-.132a1.538,1.538,0,0,0-3.069-.157Z"
                                    transform="translate(1.499)" fill="#1e1e1e" />
                            </svg>
                            <sup class="status bg-warning">&nbsp;</sup>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="notification">
                            <div
                                class="dropdown-header d-flex align-items-center px-4 py-2 border-bottom border-gray-200">
                                <span
                                    class="fs-16 Montserrat-font font-weight-semibold text-black-600">Notifications</span>
                            </div>
                            <div class="dropdown-body" data-simplebar>
                                <a href="#" class="dropdown-item text-wrap">
                                    <div class="media">
                                        <span class="d-flex align-items-center">
                                            <span
                                                class="avatar-status avatar-sm-status avatar-offline position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                            <span
                                                class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img
                                                    src="../assets/img/avatar-sm3.png" alt="Facebook"><span
                                                    class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center py-2 border-top border-gray-50">
                                <a href="#" class="btn btn-link link-dark my-2">View all<svg class="ms-2"
                                        data-name="Icons/Tabler/Chevron Down" xmlns="http://www.w3.org/2000/svg"
                                        width="10" height="10" viewBox="0 0 10 10">
                                        <rect data-name="Icons/Tabler/Chevron Right background" width="10" height="10"
                                            fill="none" />
                                        <path
                                            d="M.163.163A.556.556,0,0,1,.886.109L.948.163,5.393,4.607a.556.556,0,0,1,.054.723l-.054.062L.948,9.837a.556.556,0,0,1-.839-.723l.054-.062L4.214,5,.163.948A.556.556,0,0,1,.109.225Z"
                                            transform="translate(2.5)" fill="#1E1E1E" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown profile-dropdown">
                        <a href="#" class="avatar avatar-sm avatar-circle ms-4 ms-xxl-5" data-bs-toggle="dropdown"
                            aria-expanded="false" id="dropdownMenuButton">
                            <img class="avatar-img" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}"
                                alt="Avatar">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li class="pt-1 px-4">
                                <span class="text-black-600 me-2">Signed in as<br> <strong>Ato
                                        Augustine</strong> </span><br>
                            </li>
                            <hr>
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit', Auth::user()->id) }}"><i
                                        class="bi bi-person"></i><span class="ms-2">Edit
                                        Your Profile</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('security') }}"><i
                                        class="bi bi-shield-lock"></i><span class="ms-2">Login &
                                        Security</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('activity') }}"><i class="bi bi-clock"></i><span
                                        class="ms-2">Access
                                        History</span></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ 'mailto:ict.helpdessk@ghanamaritime.org' }}"><i
                                        class="bi bi-question-circle"></i><span class="ms-2">Support</span></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item text-danger" href="{{ route ('logout') }}"><i
                                        class="bi bi-box-arrow-left"></i><span class="ms-2">Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>