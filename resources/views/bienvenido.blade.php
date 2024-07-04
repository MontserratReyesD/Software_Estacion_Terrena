<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
        <title>LIA</title>
        <meta property="og:title" content="Homepage | Atom Template" />
        <meta property="og:locale" content="en_US" />
        <link rel="canonical" href="//" />
        <meta property="og:url" content="//" />
        <meta name="description"
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
        <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
        <meta name="theme-color" content="#5540af" />
        <meta property="og:site_name" content="Atom Template" />
        <meta property="og:image" content="//assets/img/social.jpg" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@tailwindmade" />
        <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect" />
        <link as="style"
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
            rel="preload" />
            <link
                href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
                rel="stylesheet" />
                <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
                <link crossorigin="anonymous" href="{{ asset('/assets/styles/main.min.css') }}" media="screen" rel="stylesheet" />
                <script defer src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"></script>
                <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
            </head>
            <body :class="{ 'overflow-hidden max-h-screen': mobileMenu }" class="relative" x-data="{ mobileMenu: false }">
                <div id="main" class="relative">
                    <div x-data="{
                        triggerNavItem(id) { $scroll(id) }, triggerMobileNavItem(id) {
                        mobileMenu = false;
                        this.triggerNavItem(id)
                        }
                        }">
                        <div class="w-full z-50 top-0 py-3 sm:py-5  absolute">
                            <div class="container flex items-center justify-between">
                                <div>
                                    <a href="/">
                                        <img src="{{ asset('/assets/img/logo3.png') }}"
                                        style="-webkit-clip-path: inset(5% 5% 15% 5%);" class="w-24 lg:w-48" alt="logo image" />
                                    </a>
                                </div>
                                <div class="hidden lg:block">
                                    <ul class="flex items-center">
                                        <li class="group pl-6">
                                            <span
                                                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">
                                                Inicio
                                            </span>
                                            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow">
                                            </span>
                                        </li>
                                        <li class="group pl-6">
                                            <span @click="triggerNavItem('#about')"
                                                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">
                                                Acerca de
                                            </span>
                                            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow">
                                            </span>
                                        </li>
                                        <li class="group pl-6">
                                            <span @click="triggerNavItem('#portfolio')"
                                                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">
                                                Historial
                                            </span>
                                            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                                        </li>
                                        <li class="group pl-6">
                                            <span @click="triggerNavItem('#work')"
                                                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">
                                                Galeria
                                            </span>
                                            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                                        </li>
                                        <li class="group pl-6">
                                            <span @click="triggerNavItem('#contact')"
                                                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">
                                                Contacto
                                            </span>
                                            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                                        </li>
                                        <!-- Authentication Links -->
                                        @auth
                                        <li class="group pl-6">
                                            <a href="{{ route('graficas') }}"
                                            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">&nbsp;&nbsp;Dashboard</a>
                                            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow">
                                            </span>
                                        </li>
                                        <li class="group pl-6">
                                            <a class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow">
                                            </span>
                                        </li>
                                        <li class="group pl-6">
                                            <a style="cursor: default;" id="navbarDropdown" class="cursor-pointer  pt-0.5 font-header font-bold uppercase  text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
                                            <span class="block h-0.5 w-full bg-transparent group-hover:bg-transparent"></span>
                                        </li>
                                        @else
                                        <li class="group pl-6">
                                            <a href="{{ route('login') }}"
                                            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">&nbsp;&nbsp;Acceso</a>
                                            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                                        </li>
                                        @if (Route::has('register'))
                                        <li class="group pl-6">
                                            <a href="{{ route('register') }}"
                                            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">&nbsp;&nbsp;Registrar</a>
                                            <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                                        </li>
                                        @endif
                                        
                                        @endauth
                                        <!--
                                        <li class="group pl-6">
                                            
                                            <span
                                                @click="triggerNavItem('#statistics')"
                                                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
                                            >Statistics</span
                                            >
                                            <span
                                                class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
                                            ></span>
                                        </li>
                                        <li class="group pl-6">
                                            <span
                                                @click="triggerNavItem('#blog')"
                                                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
                                            >Blog</span
                                            >
                                            <span
                                                class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
                                            ></span>
                                        </li>
                                        
                                        -->
                                    </ul>
                                </div>
                                <div class="block lg:hidden">
                                    <button @click="mobileMenu = true">
                                    <i class="bx bx-menu text-4xl text-white"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
                            :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
                            <div class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3">
                                <button class="absolute top-0 right-0 mt-4 mr-4" @click="mobileMenu = false">
                                <img src="/assets/img/icon-close.svg" class="h-10 w-auto" alt="" />
                                </button>
                                <ul class="mt-8 flex flex-col">
                                    <li class="py-2">
                                        <span @click="triggerMobileNavItem('#about')"
                                            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">
                                            Inicio
                                        </span>
                                    </li>
                                    <li class="py-2">
                                        <span @click="triggerMobileNavItem('#services')"
                                            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Acerca
                                        de</span>
                                    </li>
                                    <li class="py-2">
                                        <span @click="triggerMobileNavItem('#portfolio')"
                                            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">
                                            Historial
                                        </span>
                                    </li>
                                    <li class="py-2">
                                        <span @click="triggerMobileNavItem('#work')"
                                            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">
                                            Galeria
                                        </span>
                                    </li>
                                    <li class="py-2">
                                        <span @click="triggerMobileNavItem('#statistics')"
                                            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">
                                            Contacto
                                        </span>
                                    </li>
                                    @auth
                                    
                                    <li class="py-2">
                                        <a class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    <li class="py-2">
                                        <a style="cursor: default;" id="navbarDropdown" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                    </li>
                                    @else
                                    <li class="py-2">
                                        <a href="{{ route('login') }}"
                                        class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">&nbsp;&nbsp;Login</a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li class="py-2">
                                        <a href="{{ route('register') }}"
                                        class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">&nbsp;&nbsp;Register</a>
                                    </li>
                                    @endif
                                    @endauth
                                    <!--
                                    <li class="py-2">
                                        
                                        <span
                                            @click="triggerMobileNavItem('#blog')"
                                            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
                                        >Blog</span
                                        >
                                        
                                    </li>
                                    
                                    <li class="py-2">
                                        
                                        <span
                                            @click="triggerMobileNavItem('#contact')"
                                            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
                                        >Contact</span
                                        >
                                        
                                    </li>
                                    -->
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="relative bg-cover bg-center bg-no-repeat py-8"
                                style="background-image: url{{ asset('/assets/img/bg-hero.jpg') }}">
                                <div
                                    class="absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to bg-cover bg-center bg-no-repeat">
                                </div>
                                <div class="container relative z-30 pt-20 pb-12 ">
                                    <div class="flex flex-col items-center justify-center lg:flex-row">
                                        <div class="rounded-full border-8 border-primary shadow-xl">
                                            <img src="{{ asset('/assets/img/logo-equipo.png') }}" width="450"; height="250";
                                            top=0%; alt="logo" />
                                        </div>
                                        <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
                                            <h1
                                            class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl">
                                            LIA 2023
                                            </h1>
                                            <div class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">
                                                <div class="flex items-center justify-center pl-0 sm:justify-start md:pl-1">
                                                    <p class="font-body text-lg uppercase text-white">LABORATORIO DE INVESTIGACION
                                                    AEROESPACIAL</p>
                                                    <div class="hidden sm:block">
                                                        <i class="bx bx-chevron-right text-3xl text-yellow"></i>
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                                                    <a href="https://www.facebook.com/stringmx.is">
                                                        <i
                                                        class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"></i>
                                                    </a>
                                                    <a href="https://www.youtube.com/@stringmx9585" class="pl-4">
                                                        <i class="bx bxl-youtube text-2xl text-white hover:text-yellow">
                                                        </i>
                                                    </a>
                                                </div>
                                                <!--
                                                <div
                                                    class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
                                                    >
                                                    <a href="/">
                                                        <i
                                                        class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"
                                                        ></i>
                                                    </a>
                                                    <a href="/" class="pl-4">
                                                        <i
                                                        class="bx bxl-twitter text-2xl text-white hover:text-yellow"
                                                        ></i>
                                                    </a>
                                                    <a href="/" class="pl-4">
                                                        <i
                                                        class="bx bxl-dribbble text-2xl text-white hover:text-yellow"
                                                        ></i>
                                                    </a>
                                                    <a href="/" class="pl-4">
                                                        <i
                                                        class="bx bxl-linkedin text-2xl text-white hover:text-yellow"
                                                        ></i>
                                                    </a>
                                                    <a href="/" class="pl-4">
                                                        <i
                                                        class="bx bxl-instagram text-2xl text-white hover:text-yellow"
                                                        ></i>
                                                    </a>
                                                </div>
                                                -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-grey-50" id="about">
                                <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
                                    <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
                                        <h2
                                        class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                                        ¿Quienes somos?
                                        </h2>
                                        <h4 class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                                        Laboratorio de Investigación Aeroespacial de la Universidad Autónoma de la Ciudad de
                                        México (UACM)
                                        </h4>
                                        <p class="pt-6 font-body leading-relaxed text-grey-20">
                                            Somos un grupo de estudiantes y profesores interesados en el Desarrollo Aeroespacial.
                                            Con el proposito de crear un espacio en el que los estudiantes de todas las carreras
                                            puedan desarrollar
                                            investigacion en el ambito aeroespacial, desarrollando los conocimientos adquiridos en
                                            su formación
                                            profesional.
                                        </p>
                                        <div class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start">
                                            <div class="flex items-center justify-center sm:justify-start">
                                                <p class="font-body text-lg font-semibold uppercase text-grey-20">
                                                    Contactanos
                                                </p>
                                                <div class="hidden sm:block">
                                                    <i class="bx bx-chevron-right text-2xl text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                                                <a href="https://www.facebook.com/stringmx.is">
                                                    <i class="bx bxl-facebook-square text-2xl text-primary hover:text-yellow"></i>
                                                </a>
                                                <a href="https://www.youtube.com/@stringmx9585" class="pl-4">
                                                    <i class="bx bxl-youtube text-2xl text-primary hover:text-yellow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!--
                                        <div
                                            class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start"
                                            >
                                            <div class="flex items-center justify-center sm:justify-start">
                                                <p class="font-body text-lg font-semibold uppercase text-grey-20">
                                                    Connect with me
                                                </p>
                                                <div class="hidden sm:block">
                                                    <i class="bx bx-chevron-right text-2xl text-primary"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
                                                >
                                                <a href="/">
                                                    <i
                                                    class="bx bxl-facebook-square text-2xl text-primary hover:text-yellow"
                                                    ></i>
                                                </a>
                                                <a href="/" class="pl-4">
                                                    <i
                                                    class="bx bxl-twitter text-2xl text-primary hover:text-yellow"
                                                    ></i>
                                                </a>
                                                <a href="/" class="pl-4">
                                                    <i
                                                    class="bx bxl-dribbble text-2xl text-primary hover:text-yellow"
                                                    ></i>
                                                </a>
                                                <a href="/" class="pl-4">
                                                    <i
                                                    class="bx bxl-linkedin text-2xl text-primary hover:text-yellow"
                                                    ></i>
                                                </a>
                                                <a href="/" class="pl-4">
                                                    <i
                                                    class="bx bxl-instagram text-2xl text-primary hover:text-yellow"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                    <!--
                                    <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
                                        <div>
                                            <div class="flex items-end justify-between">
                                                <h4 class="font-body font-semibold uppercase text-black">
                                                HTML & CSS
                                                </h4>
                                                <h3 class="font-body text-3xl font-bold text-primary">85%</h3>
                                            </div>
                                            <div class="mt-2 h-3 w-full rounded-full bg-lila">
                                                <div class="h-3 rounded-full bg-primary" style="width: 85%"></div>
                                            </div>
                                        </div>
                                        <div class="pt-6">
                                            <div class="flex items-end justify-between">
                                                <h4 class="font-body font-semibold uppercase text-black">Tailwind</h4>
                                                <h3 class="font-body text-3xl font-bold text-primary">80%</h3>
                                            </div>
                                            <div class="mt-2 h-3 w-full rounded-full bg-lila">
                                                <div class="h-3 rounded-full bg-primary" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <div class="pt-6">
                                            <div class="flex items-end justify-between">
                                                <h4 class="font-body font-semibold uppercase text-black">
                                                Javascript
                                                </h4>
                                                <h3 class="font-body text-3xl font-bold text-primary">70%</h3>
                                            </div>
                                            <div class="mt-2 h-3 w-full rounded-full bg-lila">
                                                <div class="h-3 rounded-full bg-primary" style="width: 70%"></div>
                                            </div>
                                        </div>
                                        <div class="pt-6">
                                            <div class="flex items-end justify-between">
                                                <h4 class="font-body font-semibold uppercase text-black">Python</h4>
                                                <h3 class="font-body text-3xl font-bold text-primary">50%</h3>
                                            </div>
                                            <div class="mt-2 h-3 w-full rounded-full bg-lila">
                                                <div class="h-3 rounded-full bg-primary" style="width: 50%"></div>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div>
                                        <img src="{{ asset('/assets/img/Equipo.JPG') }}" width="900" height="550"
                                        alt="equipo" />
                                    </div>
                                </div>
                            </div>
                            <div class="container py-16 md:py-20" id="services">
                                <h2
                                class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                                Equipo de trabajo
                                </h2>
                                <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
                                    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                                        <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                            <div class="hidden group-hover:block">
                                                <img src="{{ asset('/assets/img/fotoDiana.jpg') }}" alt="Foto maestra Diana" />
                                            </div>
                                            <div class="block group-hover:hidden">
                                                <img src="{{ asset('/assets/img/fotoDiana.jpg') }}" alt="Foto maestra Diana" />
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h3
                                            class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                                            M.I. Diana Aurora Cruz Hernández
                                            </h3>
                                            <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                                                Profesor Investigador de la Universidad Autónoma de la Ciudad de México.
                                                Del Colegio de Ciencia y Tecnología.
                                            </p>
                                        </div>
                                        <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                                            <a href="https://www.facebook.com/profile.php?id=100002457111276">
                                                <i class="bx bxl-facebook-square text-2xl text-primary hover:text-yellow"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                                        <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                            <div class="hidden group-hover:block">
                                                <img src="{{ asset('/assets/img/fotoAlberto.jpg') }}"
                                                alt="Foto maestro Alberto" />
                                            </div>
                                            <div class="block group-hover:hidden">
                                                <img src="{{ asset('/assets/img/fotoAlberto.jpg') }}"
                                                alt="Foto maestro Alberto" />
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h3
                                            class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                                            M.C. Alberto Carlos Pérez Cadena
                                            </h3>
                                            <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                                                Profesor de tiempo determinado de la Universidad Autónoma de la Ciudad de México.
                                                Del Colegio de Ciencia y Tecnología.
                                            </p>
                                        </div>
                                        <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                                            <a href="https://www.facebook.com/albert.string.777">
                                                <i class="bx bxl-facebook-square text-2xl text-primary hover:text-yellow">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                                        <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                            <div class="hidden group-hover:block">
                                                <img src="{{ asset('/assets/img/fotoMontse.jpg') }}" alt="Foto Montse" />
                                            </div>
                                            <div class="block group-hover:hidden">
                                                <img src="{{ asset('/assets/img/fotoMontse.jpg') }}" alt="Foto Montse" />
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h3
                                            class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                                            Montserrat Selena Reyes Diego
                                            </h3>
                                            <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                                                Pasante de la carrera Lic. Ingeniería de Software de la Universidad Autónoma de la
                                                Ciudad de México
                                            </p>
                                        </div>
                                        <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                                            <a href="https://www.facebook.com/monse.reyes.73">
                                                <i class="bx bxl-facebook-square text-2xl text-primary hover:text-yellow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-grey-50" id="portfolio">
                                <div class="container py-16 md:py-20">
                                    <h2
                                    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                                    Historial de cohetes.
                                    </h2>
                                    <h3
                                    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                                    Estos son algunos cohetes relevantes.
                                    </h3>
                                    <div
                                        class="mx-auto place-content-center grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2">
                                        <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                                            <img src="{{ asset('/assets/img/cohete1.jpg') }}" width="300" height="350"
                                            alt="Cohete 1" />
                                        </a>
                                        <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                                            <video width="320" height="240" muted controls>
                                                <source src="{{ asset('/assets/videos/cohete2video.mp4') }}" type="video/mp4">
                                                cohete2video
                                            </video>
                                        </a>
                                        <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                                            <img src="{{ asset('/assets/img/cohete3.jpg') }}" width="300" height="350"
                                            alt="Cohete 3" />
                                        </a>
                                        <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                                            <img src="{{ asset('/assets/img/cohete4.jpg') }}" width="300" height="350"
                                            alt="Cohete 4" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-16 md:py-20" id="work">
                                <h2
                                class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                                Nuestros vuelos
                                </h2>
                                <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                                Proceso de nuestros vuelos
                                </h3>
                                <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
                                    <span class="left-2/5 absolute inset-y-0 ml-10 hidden w-0.5 bg-grey-40 md:block"></span>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T10-2.mp4') }}" type="video/mp4">
                                                        T10-2
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Prueba
                                                        de vuelo.T10-2</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T10-1.mp4') }}" type="video/mp4">
                                                        T10-1
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Prueba
                                                        de vuelo.T10-1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T10.mp4') }}" type="video/mp4">
                                                        T10
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span
                                                        class="block font-body font-bold text-grey-40">20/Septiembre/2023</span>
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Afinando
                                                        detalles</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T9.mp4') }}" type="video/mp4">
                                                        T9
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span
                                                        class="block font-body font-bold text-grey-40">09/Septiembre/2023</span>
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Prueba
                                                        de vuelo.T9</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="350" height="200" muted controls>
                                                        <source src="{{ asset('/assets/videos/T8-3.mp4') }}" type="video/mp4">
                                                        T8-3
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Visto
                                                        con dron.T8-3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T8-2.mp4') }}" type="video/mp4">
                                                        T8-2
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Cambiando
                                                        de cohete.T8-2</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T8-1.mp4') }}" type="video/mp4">
                                                        T8-1
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span class="block font-body font-bold text-grey-40">17/Agosto/2023</span>
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Prueba
                                                        de vuelo.T8-1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T7.mp4') }}" type="video/mp4">
                                                        T7
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span class="block font-body font-bold text-grey-40">3/Julio/2023</span>
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Vuelo
                                                        exitoso. T7</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T6.mp4') }}" type="video/mp4">
                                                        T6
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span class="block font-body font-bold text-grey-40">12/Junio/2023</span>
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Vuelo
                                                        exitoso. T6</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T5.mp4') }}" type="video/mp4">
                                                        T5
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span class="block font-body font-bold text-grey-40">1/Junio/2023</span>
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Prueba
                                                        de vuelo.T5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T4.mp4') }}" type="video/mp4">
                                                        T4
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span class="block font-body font-bold text-grey-40">19/Mayo/2023</span>
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Prueba
                                                        de vuelo.T4</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="350" height="200" muted controls>
                                                        <source src="{{ asset('/assets/videos/T3.mp4') }}" type="video/mp4">
                                                        T3
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span class="block font-body font-bold text-grey-40">12/Mayo/2023</span>
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Cambiando
                                                        de idea</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="350" height="200" muted controls>
                                                        <source src="{{ asset('/assets/videos/T2.mp4') }}" type="video/mp4">
                                                        T2
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span class="block font-body font-bold text-grey-40">5/Mayo/2023</span>
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Prueba
                                                        de lanzamiento. T2</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                                        <div class="md:w-2/5">
                                            <div class="flex justify-center md:justify-start">
                                                <span class="shrink-0">
                                                    <video width="200" height="100" muted controls>
                                                        <source src="{{ asset('/assets/videos/T1.mp4') }}" type="video/mp4">
                                                        T1
                                                    </video>
                                                </span>
                                                <div class="relative ml-3 hidden w-full md:block">
                                                    <span
                                                    class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-3/5">
                                            <div class="relative flex md:pl-18">
                                                <span
                                                class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                                <div class="mt-1 flex">
                                                    <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                                                    <div class="md:-mt-1 md:pl-8">
                                                        <span class="block font-body font-bold text-grey-40">14/Abril/2023</span>
                                                        <span
                                                            class="block pt-2 font-header text-xl font-bold uppercase text-primary">Primer
                                                        vuelo</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-grey-50" id="blog">
                                <div class="container py-16 md:py-20">
                                    <h2
                                    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                                    Complementos
                                    </h2>
                                    <h4
                                    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                                    Aquí se encuentran algunos complementos de nuestra estación terrena.
                                    </h4>
                                    <div
                                        class="mx-auto grid w-full grid-cols-1 gap-6 pt-12 sm:w-3/4 lg:w-full lg:grid-cols-3 xl:gap-10">
                                        <a class="shadow">
                                            <div
                                                class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                                                <img class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72"
                                                src="{{ asset('/assets/img/Extra1.jpg') }}" alt="Extra1" />
                                                <span
                                                class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                                            </div>
                                            <div class="bg-white py-6 px-5 xl:py-8">
                                                <span class="block font-body text-lg font-semibold text-black">PSI</span>
                                                <span class="block pt-2 font-body text-grey-20">Realizamos las pruebas suficientes
                                                    que garantizan que las botellas que
                                                    utilizamos aguantan hasta 110 PSI, pero para fines del concurso, hacemos
                                                nuestras pruebas con 90 PSI.</span>
                                            </div>
                                        </a>
                                        <a class="shadow">
                                            <div
                                                class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                                                <img class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72"
                                                src="{{ asset('/assets/img/Extra2.jpg') }}" alt="Extra2" />
                                                <span
                                                class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                                            </div>
                                            <div class="bg-white py-6 px-5 xl:py-8">
                                                <span class="block font-body text-lg font-semibold text-black">Estructura de
                                                nuestro cohete</span>
                                                <span class="block pt-2 font-body text-grey-20">La estabilidad del cohete se
                                                    obtiene gracias a el centro de masa que se encuentra
                                                    posicionado sobre el centro de presión complementado con aletas de forma
                                                    trapesoidales
                                                    diseñadas al tamaño del diametro de botella e ideales para vuelos subsonicos.
                                                </span>
                                            </div>
                                        </a>
                                        <a class="shadow">
                                            <div
                                                class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                                                <video muted autoplay controls
                                                    class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                                                    <source src="{{ asset('/assets/videos/Plataforma.mp4') }}" type="video/mp4">
                                                    Plataforma
                                                </video>
                                                <span
                                                class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                                            </div>
                                            <div class="bg-white py-6 px-5 xl:py-8">
                                                <span class="block font-body text-lg font-semibold text-black">Plataforma de
                                                lanzamiento</span>
                                                <span class="block pt-2 font-body text-grey-20">Nuestra plaforma esta diseñada para
                                                    cohetes hidropropulsados,
                                                    cuenta con su medidor de presión integrado en la lanzadera, liberador de
                                                    disparo,
                                                inyector de aire e inyector de agua.</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="container py-16 md:py-20" id="contact">
                                <h2
                                class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                                Contactanos
                                </h2>
                                <h4 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                                ¿Tienes alguna pregunta?
                                </h4>
                                <div class="mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6">
                                    <p class="font-body text-grey-10">
                                        Escribe aquí tu duda, pregunta o aportación, en breve contestaremos tu correo.
                                    </p>
                                </div>
                                <form class="mx-auto w-full pt-10 sm:w-3/4">
                                    <div class="flex flex-col md:flex-row">
                                        <input
                                        class="mr-3 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
                                        placeholder="Nombre" type="text" id="name" />
                                        <input
                                        class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
                                        placeholder="Email" type="text" id="email" />
                                    </div>
                                    <textarea class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8" placeholder="Mensaje"
                                    id="message" cols="30" rows="10"></textarea>
                                    <button
                                    class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20">
                                    Enviar
                                    <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="h-72 bg-cover bg-center bg-no-repeat sm:h-64 md:h-72 lg:h-96">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.26867084482!2d-99.06157962586137!3d19.314144444455366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce025ef919d837%3A0x8976a765f69064e3!2sUACM%20San%20Lorenzo%20Tezonco!5e0!3m2!1ses!2smx!4v1687497458615!5m2!1ses!2smx"
                                width="1400" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="relative bg-primary bg-cover bg-center bg-no-repeat py-16 bg-blend-multiply lg:py-24"
                                style="background-image: url(/assets/img/bg-cta.jpg)">
                                <div class="container relative z-30">
                                    <h3
                                    class="text-center font-header text-3xl uppercase leading-tight tracking-wide text-white sm:text-4xl lg:text-5xl">
                                    <span class="font-bold">¿Quieres recibir mas información?</span> <br />
                                    Ponte en contacto con nosotros
                                    </h3>
                                    <form class="mt-6 flex flex-col justify-center sm:flex-row">
                                        <input class="w-full rounded px-4 py-3 font-body text-black sm:w-2/5 sm:py-4 lg:w-1/3"
                                        type="text" id="email" placeholder="Deja tu correo" />
                                        <button
                                        class="mt-2 rounded bg-yellow px-8 py-3 font-body text-base font-bold uppercase text-primary transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring focus:ring-yellow sm:ml-2 sm:mt-0 sm:py-4 md:text-lg">
                                        Unete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="bg-primary">
                            <div class="container flex flex-col justify-between py-6 sm:flex-row">
                                <p class="text-center font-body text-white md:text-left">
                                    © Hydra Aerospace 495.
                                </p>
                                <div class="flex items-center justify-center pt-5 sm:justify-start sm:pt-0">
                                    <a href="https://www.facebook.com/stringmx.is">
                                        <i class="bx bxl-facebook-square text-2xl text-white hover:text-yellow">
                                        </i>
                                    </a>
                                    <a href="https://www.youtube.com/@stringmx9585" class="pl-4">
                                        <i class="bx bxl-youtube text-2xl text-white hover:text-yellow">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="/assets/js/main.js"></script>
                </body>
            </html>