<style>
    .ribbon {

        z-index: 9999;
        position: fixed;
        top: 0px;
        right: 30px;
    }

    .wribbon {
        z-index: 999;
        position: fixed;
        top: 0px;
        right: 120px;
    }

    @media (max-width: 640px) and (min-width: 320px) {
        .headerTable {
            position: fixed
        }

    }


    @media (max-width: 640px) and (min-width: 320px) {
        .ribbon {
            z-index: 999;
            position: fixed;
            top: -10px;
            left: 60px;
            width: 50px;

        }

        .ribbon>img {
            width: 50px;
        }

        .wribbon {
            z-index: 999;
            position: fixed;
            top: -10px;
            left: 5px;
            width: 50px;
        }

        .wribbon>img {
            width: 50px;
        }

    }
</style>


<header id="header" data-transparent="" data-fullwidth="true" class="light headerTable">
    {{-- <a  class="ribbon text-white text-center" href="{{ asset('Asset/images/anzox/Brochure.pdf')}}" download
            target="_blank">
            <img src="{{asset('Asset/images/anzox/Ribbon.png')}}" alt="" ></a>

     <a class="wribbon text-white text-center" href="https://api.whatsapp.com/send?phone=917045473377"
            target="_blank">
            <img src="{{asset('Asset/images/anzox/whatsappRibbon.png')}}" alt=""></a> --}}

    <div class="header-inner" style="height:87px">

        <div class="container bg-light pb-1 pt-1">
            <!--Logo-->
            <div id="logo">
                <a href="/">
                    <span class="logo-default align-content-center">
                        <img class="pb-1" src="{{ asset('Asset/images/anzox/SVClogo.png') }}" alt=""
                            width="90px"></span>

                    <span class="logo-dark"> <img src="{{ asset('Asset/images/anzox/SVClogo.png') }}" alt=""
                            width="110px"></span>
                </a>
            </div>
            <!--End: Logo-->

            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

            <!--Navigation-->
            <div id="mainMenu" class="menu-center fixed light">
                <div class="container">
                    <nav class="my-1">
                        <ul class="fs-4">
                            <li><a href="/" style="text-decoration: none">HOME</a></li>
                            <li><a href="/#about" style="text-decoration: none">ABOUT</a></li>
                            <li class="dropdown"><a href="#" style="text-decoration: none">OUR PRODUCTS</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="/butterfly-valve"
                                            style="text-decoration: none">BUTTERFLY VALVE</a>
                                        {{-- <ul class="dropdown-menu">
                                            <li><a href="/stack-parking">STACK PARKING</a> </li>
                                            <li><a href="/cantilever-parking">CANTILEVER PARKING</a> </li>
                                            <li><a href="/suspended-parking">SUSPENDED PARKING</a> </li>
                                            <li><a href="/bike-parking">BIKE PARKING</a> </li>
                                            <li><a href="/three-stack-parking">3 LEVEL STACK PARKING</a> </li>
                                            <li><a href="/stack-double-parking">(-1+2) STACK PARKING</a> </li>
                                        </ul> --}}
                                    </li>

                                    <li class="dropdown-submenu"><a href="/ball-valve"
                                            style="text-decoration: none">BALL VALVE</a>
                                        {{-- <ul class="dropdown-menu">
                                            <li><a href="/puzzle-parking">PUZZLE PARKING</a> </li>
                                            <li><a href="/tower-parking">TOWER PARKING</a> </li>
                                            <li><a href="/rotary-parking">ROTARY PARKING</a> </li>
                                            <li><a href="/circulatory-parking">CIRCULATORY PARKING</a> </li>
                                            <li><a href="/car-lifts">CAR LIFTS</a> </li>
                                        </ul> --}}
                                    </li>

                                    <li class="dropdown-submenu"><a href="gate-globe-check-valve"
                                            style="text-decoration: none">GATE, GLOBE & CHECK
                                            VALVE</a>
                                        {{-- <ul class="dropdown-menu">
                                            <li><a href="/puzzle-parking">PUZZLE PARKING</a> </li>
                                            <li><a href="/tower-parking">TOWER PARKING</a> </li>
                                            <li><a href="/rotary-parking">ROTARY PARKING</a> </li>
                                            <li><a href="/circulatory-parking">CIRCULATORY PARKING</a> </li>
                                            <li><a href="/car-lifts">CAR LIFTS</a> </li>
                                            <li><a href="/cart-parking">CART PARKING</a> </li>
                                        </ul> --}}
                                    </li>

                                </ul>
                            </li>

                            <li><a href="/industries-served" style="text-decoration: none">INDUSTRIES SERVED </a></li>
                            <li><a href="/facilities" style="text-decoration: none">FACILITIES</a></li>
                            {{-- <li><a href="/vendor">INVESTORS</a></li> --}}
                            <li><a href="{{asset('Asset/pdf/catalogue.pdf')}}" download="Catalogue" style="text-decoration: none">CATALOGUE</a></li>
                            <li><a href="/#contact-us" style="text-decoration: none">CONTACT US</a></li>

                            {{-- <li class="social-facebook"><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li class="social-instagram"><a href="https://www.instagram.com/anzox_engineering/?hl=en"
                                    target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="social-linkedin"><a href=""><i class="fab fa-linkedin"></i></a></li> --}}
                            {{-- <li><a href="#">
                                    <div class="btn btn-danger"><i class="fa fa-book"></i> CATALOUGE</div>
                            </a></li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->

        </div>
    </div>
</header>
