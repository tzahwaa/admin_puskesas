<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <link href="{{ asset('assets/dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Techarea HR</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('assets/dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
</head>
<body class="py-5">
        <!-- ======= Sidebar ======= -->
            <!-- BEGIN: Top Bar -->
        <div class="border-b border-white/[0.08] -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
            <div class="top-bar-boxed flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img class="w-6" src="{{ asset('assets/dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3"> Rubick </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a href="#">Application</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rekap Absensi</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                        <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                    </div>
                    <a class="notification notification--light sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center">
                                    <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                                    <div class="ml-3">Mail Settings</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                                    <div class="ml-3">Users & Permissions</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                                    <div class="ml-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/profile-8.jpg') }}">
                                    </div>
                                    <div class="ml-3">Kevin Spacey</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/profile-5.jpg') }}">
                                    </div>
                                    <div class="ml-3">Kevin Spacey</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/profile-7.jpg') }}">
                                    </div>
                                    <div class="ml-3">Nicolas Cage</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">nicolascage@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/profile-14.jpg') }}">
                                    </div>
                                    <div class="ml-3">Leonardo DiCaprio</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">leonardodicaprio@left4code.com</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Products</div>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/preview-10.jpg') }}">
                                </div>
                                <div class="ml-3">Sony Master Series A9G</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/preview-13.jpg') }}">
                                </div>
                                <div class="ml-3">Nike Tanjun</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/preview-12.jpg') }}">
                                </div>
                                <div class="ml-3">Sony Master Series A9G</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/preview-15.jpg') }}">
                                </div>
                                <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--light notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/profile-8.jpg') }}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/profile-5.jpg') }}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/profile-7.jpg') }}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Nicolas Cage</a>
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/') }}dist/images/profile-14.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a>
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('assets/dist/images/profile-12.jpg') }}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Midone - HTML Admin Template" src="{{ asset('assets/dist/images/profile-13.jpg') }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                            <li class="p-2">
                                <div class="font-medium">Kevin Spacey</div>
                                <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Backend Engineer</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <!-- BEGIN: Top Menu -->
        <nav class="top-nav">
            <ul>
                <li>
                    <a href="javascript:;.html" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="top-menu__title"> Dashboard <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="top-menu__sub-open">
                        <li>
                            <a href="top-menu-light-dashboard-overview-1.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-2.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-3.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Overview 3 </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-4.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Overview 4 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="box"></i> </div>
                        <div class="top-menu__title"> Menu Layout <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-light-dashboard-overview-1.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-1.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="top-menu__title"> Apps <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Users <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-users-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-users-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-users-layout-3.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Profile <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-profile-overview-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Overview 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-profile-overview-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Overview 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-profile-overview-3.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Overview 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="top-menu-light-inbox.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Inbox </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-file-manager.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> File Manager </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-point-of-sale.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Point of Sale </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-chat.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Chat </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-post.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Post </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-calendar.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Calendar </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Crud <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-crud-data-list.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Data List</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-crud-form.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Form</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="layout"></i> </div>
                        <div class="top-menu__title"> Pages <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Wizards <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-wizard-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wizard-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wizard-layout-3.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Blog <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-blog-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-blog-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-blog-layout-3.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Pricing <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-pricing-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-pricing-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Invoice <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-invoice-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-invoice-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> FAQ <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-faq-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-faq-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-faq-layout-3.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-light-login.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-light-register.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-light-error-page.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-update-profile.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-change-password.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>    
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="inbox"></i> </div>
                        <div class="top-menu__title"> Components <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Table <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-regular-table.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('rekap') }}" class="top-menu top-menu--active">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Rekap  </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Overlay <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-modal.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Modal</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-slide-over.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Slide Over</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-notification.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Notification</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="top-menu-light-tab.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Tab </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-accordion.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-button.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-alert.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-progress-bar.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-tooltip.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dropdown.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-typography.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-icon.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-loading-icon.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="sidebar"></i> </div>
                        <div class="top-menu__title"> Forms <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="top-menu-light-regular-form.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-datepicker.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-tom-select.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Tom Select </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-file-upload.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-wysiwyg-editor-classic.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Classic</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wysiwyg-editor-inline.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Inline</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wysiwyg-editor-balloon.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Balloon</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wysiwyg-editor-balloon-block.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Balloon Block</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wysiwyg-editor-document.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Document</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="top-menu-light-validation.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('rekap') }}" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="top-menu__title"> Rekap Absensi <i class="top-menu__sub-icon"></i> </div>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- END: Top Menu -->
  </div>

  <div class="content">
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    
</div>
<div>
                @yield('container')
</div>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('assets/dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
</body>
</html>
