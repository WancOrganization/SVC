@extends('layouts.base')
@section('content')
    <div id="slider" class="inspiro-slider slider-fullscreen dots-dark arrows-dark dots-creative" data-fade="true"
        data-height-xs="360">
        <!-- Slide 1 -->
        <div class="slide kenburns background-image"
            style="background-image: url({{ asset('Asset/images/anzox/valve1.jpeg') }})">
            <div class="container">
                <div class="slide-captions text-center">
                    <!-- Captions -->
                    <div class="heading-text heading-section text-center animated fadeInUp visible" data-animate="fadeInUp">
                        <h3 class="fw-semibold" style="font-family: verdana; color:#ffdd00">DEDICATED WORKFORCE FOR PRODUCT
                        </h3>

                    </div>
                    <h1 class="text-danger ">
                    </h1>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->

        <!-- Slide 2 -->
        <div class="slide kenburns"
            style="background-image: url({{ asset('Asset/images/anzox/valve10.jpg') }}); opacity:0.9">
            <div class="container">
                <div class="slide-captions text-center">
                    <!-- Captions -->
                    <div class="heading-text heading-section text-center animated fadeInUp visible" data-animate="fadeInUp">
                        <h3 class="fw-semibold" style="font-family: verdana; color:#ffdd00">
                            EXCELLENT SOLUTION FOR EVERY PROCESS CHALLENGE
                        </h3>

                    </div>

                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 2 -->


        <!-- Slide 3 -->
        <div class="slide kenburns" style="background-image: url({{ asset('Asset/images/anzox/valve9.jpg') }})">
            <div class="container">
                <div class="slide-captions text-center">
                    <!-- Captions -->
                    <div class="heading-text heading-section text-center animated fadeInUp visible" data-animate="fadeInUp">
                        <h3 class="fw-semibold" style="font-family: verdana; color:#ffdd00">
                            IN HOUSE TESTING FACILITY
                        </h3>

                    </div>

                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 3 -->


        <!-- Slide 4 -->
        <div class="slide kenburns" style="background-image: url({{ asset('Asset/images/anzox/valve4.jpg') }})">
            <div class="container">
                <div class="slide-captions text-center">
                    <!-- Captions -->
                    <div class="heading-text heading-section text-center animated fadeInUp visible" data-animate="fadeInUp">
                        <h3 class="fw-semibold" style="font-family: verdana; color:#ffdd00">
                            EXCELLENT PRODUCT PERFORMANCE
                        </h3>

                    </div>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 4 -->
    </div>

    <!--end: Inspiro Slider -->
    <section class="" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="text-start">
                        <h2><img src="{{ asset('Asset/images/anzox/SVClogo.png') }}" alt="" width="80%">
                        </h2>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="row" style="font-family: montserrat">
                        <div class="col-lg-4">
                            SVC Valves is a leading manufacturer and supplier of industrial valves in India.
                            We offer a comprehensive range of products, including gate valves, globe valves, swing
                            check valves, forged gate globe check valves, trunnion-mounted ball valves, and floating ball
                            valves. <br> <br> Our valves are available in various sizes, pressure ratings, and materials
                            such as carbon steel, alloy steel, stainless steel, duplex, and monel.
                        </div>
                        <div class="col-lg-4">
                            Founded by a technocrat with 29 years of expertise in valve manufacturing, SteelStrong Valves
                            has established a reputation for precision and reliability. To serve global markets, we operate
                            two advanced manufacturing facilities in Navi Mumbai and Sanand, equipped with cutting-edge
                            technology. <br><br> Our skilled engineers ensure excellence at every stage from design and
                            material selection to production, assembly, and rigorous testing guaranteeing superior
                            performance and customer satisfaction.
                        </div>
                        <div class="col-lg-4">
                            Our dedication to excellence is reflected in our certifications, including ISO 9001, ISO 14001,
                            ISO 18001, CE Marking, CE-PED, IBR, API 6D, and API 600, demonstrating compliance with global
                            industry standards.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-5 mt-5" style="background-color: #005199">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- PRODUCTS -->
                    <div class="col-md-3 p-0 text-center">
                        <div class="mb-4"><img src="{{ asset('Asset/images/icon/high-quality.png') }}" width="25%"
                                alt=""></div>
                        <h3 class=" fw-semibold" style="color: #ffdd00; font-family:Verdana">
                            QUALITY POLICY</h3>
                        <p class="my-3 text-light" style="font-family: montserrat">
                            We are committed to complying with applicable product specifications, management systems, legal
                            and customer requirements, and continually improving the effectiveness of the quality management
                            system with the participation of interested parties.
                        </p>
                    </div>

                    <!-- Divider -->
                    <span class="d-none d-lg-block p-0" style="height: 40vh; width: 1px; background-color: #ffdd00;"></span>

                    <!-- SERVICE & PARTS -->
                    <div class="col-md-3 p-0 text-center">
                        <div class="mb-4"><img src="{{ asset('Asset/images/icon/factory.png') }}" width="25%"
                                alt=""></div>
                        <h3 class="text-center fw-semibold" style="color: #ffdd00; font-family:Verdana">
                            INDUSTRIES WE SERVE</h3>
                        <p class="my-3 text-light" style="font-family: montserrat">
                            Natural Gas Processing, Nuclear, Oil & Petroleum Refining, Petrochemical Processing, Chemical,
                            Ship Building, Power Plants, Mining, FMCG, Desalination, Naval Marine Etc.Thus, Having such good
                            industrial experience makes Steelstrong the best Valves company in India.
                        </p>
                    </div>

                    <!-- Divider -->
                    <span class="d-none d-lg-block p-0" style="height: 40vh; width: 1px; background-color: #ffdd00;"></span>

                    <!-- TECHNOLOGY -->
                    <div class="col-md-3 p-0 text-center">
                        <div class="mb-4"><img src="{{ asset('Asset/images/icon/why.png') }}" width="25%"
                                alt=""></div>

                        <h3 class="text-center fw-semibold" style="color: #ffdd00; font-family:Verdana">
                            WHY SVC?</h3>
                        <p class="my-3 text-light" style="font-family: montserrat">
                            • Leading the field through innovation <br>
                            • Adapting to the needs of customers <br>
                            • State-of-the art equipment and expertise <br>
                            • Experienced, passionate and skilled team <br>
                            • Rapid response on quotes and timely delivery
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About us --}}
    <section class="pt-0">
        <div class="container">
            <div class="container">
                <div class="heading-text text-white text-center heading-section">
                    <h2><img src="{{ asset('Asset/images/anzox/SVClogo.png') }}" alt="" width="15%"></h2>
                </div>
            </div>
            <h1 class="text-center fw-bold my-5" style="color:#005199">SPACE VALVES & CONTROLS</h1>
            <div class="row justify-content-evenly" style="font-family: montserrat">
                <div class="col-lg-5 p-4 animated visible fadeInLeft" data-animate="fadeInLeft"
                    style="border-color: #005199; border-radius:10px; border:1px solid #005199 ">
                    <div class="p-c m-0">
                        <h2 class="text-center" style="color: #005199">WHO WE ARE ?</h2>
                        We have grown as a large reputed valve manufacturing company
                        with
                        two manufacturing plants located at Navi Mumbai (Maharashtra) and Sanand (Gujarat). SVC
                        activities
                        include design, material procurement, manufacturing, assembly and testing of valves. <br><br> We
                        supply Gate, Globe, Check, Ball and Cryogenic Valves manufactured according to different
                        standards
                        (ASME-ANSI, API, BS) sizes, pressure ratings and materials) Carbon Steel, Alloy Steel, Stainless
                        Steel, Duplex, Monel etc.). Our experience of more than 3 decades in valve industry, is the key
                        to
                        our success & recognition in the Indian market. We aspire to be one of the leading valve
                        manufacturers of international repute.
                    </div>
                </div>

                <div class="col-lg-5 p-4 animated visible fadeInRight" data-animate="fadeInRight"
                    style="border-color: #005199; border-radius:10px; border:1px solid #005199 ">
                    <div class="p-c m-0">
                        <h2 class="text-center" style="color: #005199">Quality Policy</h2>
                        It is our endeavor to achieve growth through customer satisfaction by delivering conforming
                        products
                        within contractual delivery timeframe In this commitment we shall ensure enhancements in
                        Manufacturing and Communications to make business with Organization a pleasure for our
                        customers.
                        <br><br>
                        We are committed to comply with applicable product specifications, management system, legal and
                        customer requirements, and to continually improve the effectiveness of the quality management
                        system
                        with participation of interested parties.
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="box-fancy background-dark section-fullwidth no-padding">
        <div class="row">
            <div class="col-lg-6" style="background-color:#005199">
                <div class="">
                    <div class="heading-text" style="color: #ffdd00">
                        <h3 class="fw-bold">Our Mission</h3>
                    </div>
                    <h2 class="line"></h2>
                </div>
                <span class="lead text-light">Anzox is committed to establish a corporate concept of linked prosperity by
                    creating a
                    lasting impact on the clients by providing an environment of trust and respect.
                    The goal is to make Anzox a sustainable financial hub, increasing the value of our stakeholders and
                    creating opportunities for development and career growth for our employees.
                </span>
            </div>

            <div class="col-lg-6" style="background-color:#005199">
                <div class="">
                    <div class="heading-text" style="color: #ffdd00">
                        <h3 class="fw-bold">Our Vission</h3>
                    </div>
                    <h2 class="line"></h2>
                </div>
                <span class="lead text-light">Anzox envisions becoming the most recommended car parking systems and
                    solutions by using
                    its unlimited passion for technology and services to enhance urban livability by providing clean and
                    safe parking facilities, based on convenience, reliability and consistency.
                </span>
            </div>
        </div>
    </section> --}}
    {{-- End About us --}}

    <section class="p-5 mt-2" style="background-color: #005199">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    <div class="text-center">
                        <h1 class="fw-bold" style=" font-family:Verdana; color:#ffdd00">Get to know us better !</h1>
                        <h4 class="text-light" style="font-family: montserrat">Include us to be part of your Success too
                        </h4>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center" style="font-family: montserrat">
                        <div class="icon"><i class="fa fa-3x fa-user-tie text-light mb-2"></i></div>
                        <div class="counter text-light"> <span data-speed="200" data-refresh-interval="50"
                                data-to="1530" data-from="400" data-seperator="true">1530</span> </div>
                        <hr class="container text-light w-50 my-3" style="height: 2px;">
                        <p class="fw-semibold" style="color: #ffdd00; font-family:montserrat">HAPPY CLIENTS</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center" style="font-family: montserrat">
                        <div class="icon"><i class="fa fa-3x fa-handshake text-light mb-2"></i></div>
                        <div class="counter text-light"> <span data-speed="200" data-refresh-interval="23"
                                data-to="1240" data-from="200" data-seperator="true">1240 +</span> </div>
                        <hr class="container text-light my-3" style="height: 2px; width:99px">
                        <p class="fw-semibold" style="color: #ffdd00; font-family:montserrat">PROJECTS FINISHED</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center" style="font-family: montserrat">
                        <div class="icon"><i class="fa fa-3x fa-thumbs-up text-light mb-2"></i></div>
                        <div class="counter text-light"> <span data-speed="200" data-refresh-interval="12"
                                data-to="50" data-from="10" data-seperator="true">50 +</span> </div>
                        <hr class="container text-light w-50 my-3" style="height: 2px">
                        {{-- <div class="seperator fw-bold text-dark seperator-medium"></div> --}}
                        <p class="fw-semibold" style="color: #ffdd00; font-family:montserrat">CUSTOMIZED SOLUTIONS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PRODUCTS --}}
    <section>
        <div class="container p-0" id="products">
            <div class="heading-text text-center heading-section" style="color:#005199; font-family:Verdana;">
                <h2 class="fw-bold">OUR PRODUCTS</h2>
            </div>
            <div class="row">
                <div class="team-member text-center col-md-4 animated visible fadeInLeft p-3" data-animate="fadeInLeft">
                    <div class="card">
                        <div class="team-image mb-0 text-center p-2">
                            <img src="{{ asset('Asset/images/anzox/butterflyvalve.png') }}"
                                style="width:100%; height:350px; object-fit:contain;">
                        </div>
                        <div class="team-desc m-0 p-cb p-5" style="background-color: #005199">
                            <a href="/butterfly-valve" style="text-decoration: none">
                                <h2 class="fw-semibold" style="font-family:Verdana; color:#ffdd00">Butterfly Valve</h2>
                                <span></span>
                                <p class="text-light" style=" font-family: montserrat;">Butterfly valves are a family of
                                    quarter-turn rotational motion valves that are used in pipelines to shut-off flow.
                                </p>
                                <h5 style="font-family: montserrat; color:#ffdd00">More Info
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="team-member text-center col-md-4 animated visible fadeInDown p-3" data-animate="fadeInDown">
                    <div class="card">
                        <div class="team-image mb-0 text-center p-2">
                            <img src="{{ asset('Asset/images/anzox/ballvalve.webp') }}"
                                style="width:100%; height:350px; object-fit:contain;">
                        </div>
                        <div class="team-desc m-0 p-cb p-5" style="background-color: #005199">
                            <a href="/ball-valve" style="text-decoration: none">
                                <h2 class="fw-semibold" style="font-family:Verdana; color:#ffdd00">Ball Valve</h2>
                                <span></span>
                                <p class="text-light" style=" font-family: montserrat;">A ball valve is a type of
                                    quarter-turn
                                    valve that controls fluid flow using a rotating ball with a bore (hole).
                                </p>
                                <h5 style="font-family: montserrat; color:#ffdd00">More Info</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="team-member text-center col-md-4 animated visible fadeInRight p-3" data-animate="fadeInRight">
                    <div class="card">
                        <div class="team-image mb-0 text-center p-2">
                            <img src="{{ asset('Asset/images/anzox/gateglobevalve.jpg') }}"
                                style="width:100%; height:350px; object-fit:contain;">
                        </div>
                        <div class="team-desc m-0 p-cb p-5" style="background-color: #005199">
                            <a href="/bgate-globe-check-valve" style="text-decoration: none">
                                <h2 class="fw-semibold" style="font-family:Verdana; color:#ffdd00">Gate Globe &
                                    Check Valve</h2>
                                <span></span>
                                <p class="text-light" style=" font-family: montserrat;">Design & Manufacturing :
                                    API602/ISO
                                    15761 for Class 150 &
                                    1500, ASME B 16.34 for Class
                                    2500...
                                </p>
                                <h5 style="font-family: montserrat; color:#ffdd00">More Info
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- END PRODUCTS --}}

    {{-- CONTACT US --}}
    <section class="pt-0" id="contact-us">
        <div class="container w-50">
            <div class="row">
                {{-- <div class="col-lg-6"> --}}
                <h3 class="text-uppercase text-center fw-semibold" style="font-family: Verdana; color:#005199">Get In
                    Touch</h3>
                <p style="font-family: montserrat">
                    <strong>Have questions, suggestions, or need support? We’re here to help!</strong> <br>
                    Whether you need details about our products, want to share feedback, or need help with your order, feel
                    free to contact us using any of the methods below. We’re committed to making your experience smooth and
                    satisfying.
                </p>
                <div class="m-t-30">
                    <form class="" action="/sendmail" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" name="name" required=""
                                    class="form-control required name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" name="email" required=""
                                    class="form-control required email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="subject">Contact no.</label>
                                <input type="text" name="contact" required="" class="form-control required"
                                    placeholder="0000 000 000">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="subject">Your Subject</label>
                                <input type="text" name="subject" required="" class="form-control required"
                                    placeholder="Subject...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" required="" rows="5" class="form-control required"
                                placeholder="Enter your Message"></textarea>

                        </div>
                        {{-- <div class="form-group">
                                <script type="text/javascript" async="" charset="utf-8"
                                    src="https://www.gstatic.com/recaptcha/releases/X-oVtzDcTGjZVms4LEgykmCV/recaptcha__en.js" crossorigin="anonymous"
                                    integrity="sha384-1hXncclAK9oddvNk7nwUp8lOZ2IQZ8EORLvz9K99Lac8WLGSbW6clTN1YX0NyXHn"></script>
                                <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
                                <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M">
                                    <div style="width: 304px; height: 78px;">
                                        <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                                name="a-9mpaqdxwrdh7" frameborder="0" scrolling="no"
                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M&amp;co=ZmlsZTo.&amp;hl=en&amp;v=X-oVtzDcTGjZVms4LEgykmCV&amp;size=normal&amp;cb=b9wia5yc38x2"></iframe>
                                        </div>
                                        <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                            style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div><iframe style="display: none;"></iframe>
                                </div>
                            </div> --}}
                        <button class="btn btn-primary" type="submit" id="form-submit"
                            style="background-color: #005199; border-color:white"><i
                                class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                    </form>
                </div>

                {{-- </div> --}}
                {{-- <div class="col-lg-6">
                    <h3 class="text-uppercase">Address &amp; Map</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <address>
                                <strong>Polo, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P: (123) 456-7890
                                </abbr>
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Polo Office</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P: (123) 456-7890
                                </abbr>
                            </address>
                        </div>
                    </div> --}}

                <!-- Google Map -->
                {{-- <div class="map" data-latitude="-37.817240" data-longitude="144.955826" data-style="light"
                        data-info="Hello from <br> Inspiro Themes" style="position: relative; overflow: hidden;">
                        <div
                            style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                            <div><button
                                    style="background: transparent; display: block; border: medium; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"
                                    draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts"
                                    type="button"></button></div>
                            <div tabindex="0" aria-label="Map" aria-roledescription="map" role="region"
                                style="position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"
                                aria-describedby="7FF58352-E3D0-4AAC-94E3-371FE5A64024">
                                <div id="7FF58352-E3D0-4AAC-94E3-371FE5A64024" style="display: none;">
                                    <div class="LGLeeN-keyboard-shortcuts-view">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td><kbd aria-label="Left arrow">←</kbd></td>
                                                    <td aria-label="Move left.">Move left</td>
                                                </tr>
                                                <tr>
                                                    <td><kbd aria-label="Right arrow">→</kbd></td>
                                                    <td aria-label="Move right.">Move right</td>
                                                </tr>
                                                <tr>
                                                    <td><kbd aria-label="Up arrow">↑</kbd></td>
                                                    <td aria-label="Move up.">Move up</td>
                                                </tr>
                                                <tr>
                                                    <td><kbd aria-label="Down arrow">↓</kbd></td>
                                                    <td aria-label="Move down.">Move down</td>
                                                </tr>
                                                <tr>
                                                    <td><kbd>+</kbd></td>
                                                    <td aria-label="Zoom in.">Zoom in</td>
                                                </tr>
                                                <tr>
                                                    <td><kbd>-</kbd></td>
                                                    <td aria-label="Zoom out.">Zoom out</td>
                                                </tr>
                                                <tr>
                                                    <td><kbd>Home</kbd></td>
                                                    <td aria-label="Jump left by 75%.">Jump left by 75%</td>
                                                </tr>
                                                <tr>
                                                    <td><kbd>End</kbd></td>
                                                    <td aria-label="Jump right by 75%.">Jump right by 75%</td>
                                                </tr>
                                                <tr>
                                                    <td><kbd>Page Up</kbd></td>
                                                    <td aria-label="Jump up by 75%.">Jump up by 75%</td>
                                                </tr>
                                                <tr>
                                                    <td><kbd>Page Down</kbd></td>
                                                    <td aria-label="Jump down by 75%.">Jump down by 75%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"
                                class="gm-style">
                                <div
                                    style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                    <div
                                        style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px);">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                <div
                                                    style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -26, -174);">
                                                    <div
                                                        style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                            <div
                                                style="width: 24px; height: 24px; overflow: hidden; position: absolute; left: -12px; top: -24px; z-index: 0;">
                                                <img style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                    alt="" src="https://maps.gstatic.com/mapfiles/transparent.png"
                                                    draggable="false">
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                <div
                                                    style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -26, -174);">
                                                    <div
                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                    </div>
                                                    <div
                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;">
                                                    </div>
                                                    <div
                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;">
                                                    </div>
                                                    <div
                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;">
                                                    </div>
                                                    <div
                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;">
                                                    </div>
                                                    <div
                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;">
                                                    </div>
                                                    <div
                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;">
                                                    </div>
                                                    <div
                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;">
                                                    </div>
                                                    <div
                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                            <div
                                                style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -26, -174);">
                                                <div
                                                    style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                    <img style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        draggable="false" alt="" role="presentation"
                                                        src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14789!3i10053!4i256!2m3!1e0!2sm!3i733490832!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;token=23349">
                                                </div>
                                                <div
                                                    style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                    <img style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        draggable="false" alt="" role="presentation"
                                                        src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14788!3i10053!4i256!2m3!1e0!2sm!3i733490832!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;token=116634">
                                                </div>
                                                <div
                                                    style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                    <img style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        draggable="false" alt="" role="presentation"
                                                        src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14789!3i10052!4i256!2m3!1e0!2sm!3i733490832!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;token=130963">
                                                </div>
                                                <div
                                                    style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                    <img style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        draggable="false" alt="" role="presentation"
                                                        src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14788!3i10052!4i256!2m3!1e0!2sm!3i733490832!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;token=93177">
                                                </div>
                                                <div
                                                    style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                    <img style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        draggable="false" alt="" role="presentation"
                                                        src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14790!3i10052!4i256!2m3!1e0!2sm!3i733490808!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;token=38463">
                                                </div>
                                                <div
                                                    style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                    <img style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        draggable="false" alt="" role="presentation"
                                                        src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14788!3i10054!4i256!2m3!1e0!2sm!3i733490832!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;token=9020">
                                                </div>
                                                <div
                                                    style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                    <img style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        draggable="false" alt="" role="presentation"
                                                        src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14789!3i10054!4i256!2m3!1e0!2sm!3i733490832!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;token=46806">
                                                </div>
                                                <div
                                                    style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                    <img style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        draggable="false" alt="" role="presentation"
                                                        src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14790!3i10053!4i256!2m3!1e0!2sm!3i733490808!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;token=61920">
                                                </div>
                                                <div
                                                    style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                    <img style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        draggable="false" alt="" role="presentation"
                                                        src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i14790!3i10054!4i256!2m3!1e0!2sm!3i733490808!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!1e3!23i47083502&amp;token=85377">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                        <div
                                            style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px);">
                                            <div
                                                style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                            </div>
                                            <div
                                                style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                            </div>
                                            <div
                                                style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                <slot></slot><span id="799D9812-ED97-4DDC-B920-6DEC3A6B5F93"
                                                    style="display: none;">To navigate, press the arrow keys.</span>
                                                <div
                                                    style="border: 0px; position: absolute; left: -0.219958px; top: -0.0403864px;">
                                                    <div class="animated-dot"></div>
                                                </div>
                                                <div style="width: 24px; height: 24px; overflow: hidden; position: absolute; cursor: pointer; touch-action: none; left: -12px; top: -24px; z-index: 0;"
                                                    title="" tabindex="-1"><img
                                                        style="width: 24px; height: 24px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        alt=""
                                                        src="https://maps.gstatic.com/mapfiles/transparent.png"
                                                        draggable="false"></div>
                                            </div>
                                            <div
                                                style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; transition-property: opacity, display; transition-behavior: allow-discrete; opacity: 0; display: none;"
                                        class="gm-style-moc">
                                        <p class="gm-style-mot"></p>
                                    </div>
                                </div><iframe aria-hidden="true" frameborder="0" tabindex="-1"
                                    style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: medium; opacity: 0;"></iframe>
                                <div
                                    style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);">
                                </div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div><button
                                        style="background: rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"
                                        draggable="false" aria-label="Toggle fullscreen view"
                                        title="Toggle fullscreen view" type="button" aria-pressed="false"
                                        class="gm-control-active gm-fullscreen-control"><img
                                            style="height: 18px; width: 18px;"
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                            alt=""><img style="height: 18px; width: 18px;"
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                            alt=""><img style="height: 18px; width: 18px;"
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                            alt=""></button></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div>
                                    <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                                        style="margin: 10px; user-select: none; position: absolute; bottom: 199px; right: 40px;"
                                        draggable="false" data-control-width="40" data-control-height="185">
                                        <div class="gmnoprint" data-control-width="40" data-control-height="40"
                                            style="display: none; position: absolute;">
                                            <div
                                                style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;">
                                                <button
                                                    style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;"
                                                    draggable="false" aria-label="Rotate map clockwise"
                                                    title="Rotate map clockwise" type="button"
                                                    class="gm-control-active"><img alt=""
                                                        style="width: 20px; height: 20px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"><img
                                                        alt="" style="width: 20px; height: 20px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"><img
                                                        alt="" style="width: 20px; height: 20px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"></button>
                                                <div
                                                    style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;">
                                                </div><button
                                                    style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);"
                                                    draggable="false" aria-label="Rotate map counterclockwise"
                                                    title="Rotate map counterclockwise" type="button"
                                                    class="gm-control-active"><img alt=""
                                                        style="width: 20px; height: 20px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"><img
                                                        alt="" style="width: 20px; height: 20px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"><img
                                                        alt="" style="width: 20px; height: 20px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"></button>
                                                <div
                                                    style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;">
                                                </div><button
                                                    style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;"
                                                    draggable="false" aria-label="Tilt map" title="Tilt map"
                                                    type="button" class="gm-tilt gm-control-active"><img alt=""
                                                        style="width: 18px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"><img
                                                        alt="" style="width: 18px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"><img
                                                        alt="" style="width: 18px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"></button>
                                            </div>
                                        </div><gmp-internal-camera-control
                                            style="position: absolute; cursor: pointer; user-select: none; left: 0px; top: 0px;"
                                            data-control-width="40" data-control-height="40" draggable="false"
                                            class="gmnoprint"><button
                                                style="background: rgb(255, 255, 255) 6px center / 28px no-repeat; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px;"
                                                draggable="false" aria-label="Map camera controls"
                                                title="Map camera controls" type="button" class="gm-control-active"
                                                aria-expanded="false"
                                                aria-controls="5E9CBAFF-689A-4901-A4B1-603540CE0F59"><img
                                                    style="height: 28px; width: 28px;"
                                                    src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2019.175l2.125-2.125%201.425%201.4L12%2022l-3.55-3.55%201.425-1.4L12%2019.175zM4.825%2012l2.125%202.125-1.4%201.425L2%2012l3.55-3.55%201.4%201.425L4.825%2012zm14.35%200L17.05%209.875l1.4-1.425L22%2012l-3.55%203.55-1.4-1.425L19.175%2012zM12%204.825L9.875%206.95%208.45%205.55%2012%202l3.55%203.55-1.425%201.4L12%204.825z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                    alt=""><img style="height: 28px; width: 28px;"
                                                    src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2019.175l2.125-2.125%201.425%201.4L12%2022l-3.55-3.55%201.425-1.4L12%2019.175zM4.825%2012l2.125%202.125-1.4%201.425L2%2012l3.55-3.55%201.4%201.425L4.825%2012zm14.35%200L17.05%209.875l1.4-1.425L22%2012l-3.55%203.55-1.4-1.425L19.175%2012zM12%204.825L9.875%206.95%208.45%205.55%2012%202l3.55%203.55-1.425%201.4L12%204.825z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                    alt=""><img style="height: 28px; width: 28px;"
                                                    src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2019.175l2.125-2.125L15.55%2018.45%2012%2022%208.45%2018.45%209.875%2017.05%2012%2019.175zM4.825%2012l2.125%202.125L5.55%2015.55%202%2012%205.55%208.45%206.95%209.875%204.825%2012zM19.175%2012L17.05%209.875%2018.45%208.45%2022%2012%2018.45%2015.55%2017.05%2014.125%2019.175%2012zM12%204.825L9.875%206.95%208.45%205.55%2012%202%2015.55%205.55%2014.125%206.95%2012%204.825z%22%20fill%3D%22%231A73E8%22/%3E%3C/svg%3E"
                                                    alt=""><img style="height: 28px; width: 28px;"
                                                    src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2019.175l2.125-2.125L15.55%2018.45%2012%2022%208.45%2018.45%209.875%2017.05%2012%2019.175zM4.825%2012l2.125%202.125L5.55%2015.55%202%2012%205.55%208.45%206.95%209.875%204.825%2012zM19.175%2012L17.05%209.875%2018.45%208.45%2022%2012%2018.45%2015.55%2017.05%2014.125%2019.175%2012zM12%204.825L9.875%206.95%208.45%205.55%2012%202%2015.55%205.55%2014.125%206.95%2012%204.825z%22%20fill%3D%22%23D1D1D1%22/%3E%3C/svg%3E"
                                                    alt=""></button>
                                            <menu id="5E9CBAFF-689A-4901-A4B1-603540CE0F59"
                                                style="list-style: none; padding: 0px; display: none; position: absolute; z-index: 999999; margin: 10px; width: 140px; height: 140px; right: 100%; top: -60px;">
                                                <li><button
                                                        style="background: rgb(255, 255, 255) 6px center / 28px no-repeat; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; left: 50%; transform: translateX(-50%);"
                                                        draggable="false" aria-label="Move up" title="Move up"
                                                        type="button" class="gm-control-active"><img
                                                            style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2010.8l-4.6%204.6L6%2014l6-6%206%206-1.4%201.4-4.6-4.6z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2010.8l-4.6%204.6L6%2014l6-6%206%206L16.6%2015.4%2012%2010.8z%22%20fill%3D%22%23333%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2010.8l-4.6%204.6L6%2014l6-6%206%206-1.4%201.4-4.6-4.6z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2010.8l-4.6%204.6L6%2014l6-6%206%206L16.6%2015.4%2012%2010.8z%22%20fill%3D%22%23D1D1D1%22/%3E%3C/svg%3E"
                                                            alt=""></button></li>
                                                <li><button
                                                        style="background: rgb(255, 255, 255) 6px center / 28px no-repeat; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; bottom: 50%; left: 0px; transform: translateY(50%);"
                                                        draggable="false" aria-label="Move left" title="Move left"
                                                        type="button" class="gm-control-active"><img
                                                            style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M14%2018l-6-6%206-6%201.4%201.4-4.6%204.6%204.6%204.6L14%2018z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M14%2018l-6-6%206-6L15.4%207.4%2010.8%2012%2015.4%2016.6%2014%2018z%22%20fill%3D%22%23333%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M14%2018l-6-6%206-6%201.4%201.4-4.6%204.6%204.6%204.6L14%2018z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M14%2018l-6-6%206-6L15.4%207.4%2010.8%2012%2015.4%2016.6%2014%2018z%22%20fill%3D%22%23D1D1D1%22/%3E%3C/svg%3E"
                                                            alt=""></button></li>
                                                <li><button
                                                        style="background: rgb(255, 255, 255) 6px center / 28px no-repeat; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; bottom: 50%; right: 0px; transform: translateY(50%);"
                                                        draggable="false" aria-label="Move right" title="Move right"
                                                        type="button" class="gm-control-active"><img
                                                            style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12.6%2012L8%207.4%209.4%206l6%206-6%206L8%2016.6l4.6-4.6z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12.6%2012L8%207.4%209.4%206l6%206-6%206L8%2016.6%2012.6%2012z%22%20fill%3D%22%23333%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12.6%2012L8%207.4%209.4%206l6%206-6%206L8%2016.6l4.6-4.6z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12.6%2012L8%207.4%209.4%206l6%206-6%206L8%2016.6%2012.6%2012z%22%20fill%3D%22%23D1D1D1%22/%3E%3C/svg%3E"
                                                            alt=""></button></li>
                                                <li><button
                                                        style="background: rgb(255, 255, 255) 6px center / 28px no-repeat; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; bottom: 0px; left: 50%; transform: translateX(-50%);"
                                                        draggable="false" aria-label="Move down" title="Move down"
                                                        type="button" class="gm-control-active"><img
                                                            style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2015.4l-6-6L7.4%208l4.6%204.6L16.6%208%2018%209.4l-6%206z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2015.4l-6-6L7.4%208l4.6%204.6L16.6%208%2018%209.4l-6%206z%22%20fill%3D%22%23333%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2015.4l-6-6L7.4%208l4.6%204.6L16.6%208%2018%209.4l-6%206z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M12%2015.4l-6-6L7.4%208l4.6%204.6L16.6%208%2018%209.4l-6%206z%22%20fill%3D%22%23666%22/%3E%3C/svg%3E"
                                                            alt=""></button></li>
                                                <li><button
                                                        style="background: rgb(255, 255, 255) 6px center / 28px no-repeat; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; right: 0px;"
                                                        draggable="false" aria-label="Zoom in" title="Zoom in"
                                                        type="button" class="gm-control-active"><img
                                                            style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23666%22%3E%3Cpath%20d%3D%22M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240z%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23333%22%3E%3Cpath%20d%3D%22M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240z%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23111%22%3E%3Cpath%20d%3D%22M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240z%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23d1d1d1%22%3E%3Cpath%20d%3D%22M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240z%22/%3E%3C/svg%3E"
                                                            alt=""></button></li>
                                                <li><button
                                                        style="background: rgb(255, 255, 255) 6px center / 28px no-repeat; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; bottom: 0px; right: 0px;"
                                                        draggable="false" aria-label="Zoom out" title="Zoom out"
                                                        type="button" class="gm-control-active"><img
                                                            style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23666%22%3E%3Cpath%20d%3D%22M200-440v-80h560v80H200z%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23333%22%3E%3Cpath%20d%3D%22M200-440v-80h560v80H200z%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23111%22%3E%3Cpath%20d%3D%22M200-440v-80h560v80H200z%22/%3E%3C/svg%3E"
                                                            alt=""><img style="height: 28px; width: 28px;"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23d1d1d1%22%3E%3Cpath%20d%3D%22M200-440v-80h560v80H200z%22/%3E%3C/svg%3E"
                                                            alt=""></button></li>
                                            </menu>
                                        </gmp-internal-camera-control><button
                                            style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; left: 20px; top: 72px;"
                                            draggable="false" aria-label="Drag Pegman onto the map to open Street View"
                                            title="Drag Pegman onto the map to open Street View" type="button"></button>
                                        <div class="gmnoprint" style="position: absolute; left: 0px; top: 104px;"
                                            data-control-width="40" data-control-height="81">
                                            <div draggable="false"
                                                style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                                <button
                                                    style="background: rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"
                                                    draggable="false" aria-label="Zoom in" title="Zoom in"
                                                    type="button" class="gm-control-active"><img
                                                        style="height: 28px; width: 28px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23666%22%3E%3Cpath%20d%3D%22M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240z%22/%3E%3C/svg%3E"
                                                        alt=""><img style="height: 28px; width: 28px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23333%22%3E%3Cpath%20d%3D%22M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240z%22/%3E%3C/svg%3E"
                                                        alt=""><img style="height: 28px; width: 28px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23111%22%3E%3Cpath%20d%3D%22M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240z%22/%3E%3C/svg%3E"
                                                        alt=""><img style="height: 28px; width: 28px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23d1d1d1%22%3E%3Cpath%20d%3D%22M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240z%22/%3E%3C/svg%3E"
                                                        alt=""></button>
                                                <div
                                                    style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;">
                                                </div><button
                                                    style="background: rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"
                                                    draggable="false" aria-label="Zoom out" title="Zoom out"
                                                    type="button" class="gm-control-active"><img
                                                        style="height: 28px; width: 28px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23666%22%3E%3Cpath%20d%3D%22M200-440v-80h560v80H200z%22/%3E%3C/svg%3E"
                                                        alt=""><img style="height: 28px; width: 28px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23333%22%3E%3Cpath%20d%3D%22M200-440v-80h560v80H200z%22/%3E%3C/svg%3E"
                                                        alt=""><img style="height: 28px; width: 28px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23111%22%3E%3Cpath%20d%3D%22M200-440v-80h560v80H200z%22/%3E%3C/svg%3E"
                                                        alt=""><img style="height: 28px; width: 28px;"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%20-960%20960%20960%22%20fill%3D%22%23d1d1d1%22%3E%3Cpath%20d%3D%22M200-440v-80h560v80H200z%22/%3E%3C/svg%3E"
                                                        alt=""></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                        <a style="display: inline;" target="_blank" rel="noopener"
                                            title="Open this area in Google Maps (opens a new window)"
                                            aria-label="Open this area in Google Maps (opens a new window)"
                                            href="https://maps.google.com/maps?ll=-37.81724,144.955826&amp;z=14&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3">
                                            <div style="width: 66px; height: 26px;"><img
                                                    style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"
                                                    alt="Google"
                                                    src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2069%2029%22%3E%3Cg%20opacity%3D%22.3%22%20fill%3D%22%23000%22%20stroke%3D%22%23000%22%20stroke-width%3D%221.5%22%3E%3Cpath%20d%3D%22M17.4706%207.33616L18.0118%206.79504%2017.4599%206.26493C16.0963%204.95519%2014.2582%203.94522%2011.7008%203.94522c-4.613699999999999%200-8.50262%203.7551699999999997-8.50262%208.395779999999998C3.19818%2016.9817%207.0871%2020.7368%2011.7008%2020.7368%2014.1712%2020.7368%2016.0773%2019.918%2017.574%2018.3689%2019.1435%2016.796%2019.5956%2014.6326%2019.5956%2012.957%2019.5956%2012.4338%2019.5516%2011.9316%2019.4661%2011.5041L19.3455%2010.9012H10.9508V14.4954H15.7809C15.6085%2015.092%2015.3488%2015.524%2015.0318%2015.8415%2014.403%2016.4629%2013.4495%2017.1509%2011.7008%2017.1509%209.04835%2017.1509%206.96482%2015.0197%206.96482%2012.341%206.96482%209.66239%209.04835%207.53119%2011.7008%207.53119%2013.137%207.53119%2014.176%208.09189%2014.9578%208.82348L15.4876%209.31922%2016.0006%208.80619%2017.4706%207.33616z%22/%3E%3Cpath%20d%3D%22M24.8656%2020.7286C27.9546%2020.7286%2030.4692%2018.3094%2030.4692%2015.0594%2030.4692%2011.7913%2027.953%209.39009%2024.8656%209.39009%2021.7783%209.39009%2019.2621%2011.7913%2019.2621%2015.0594c0%203.25%202.514499999999998%205.6692%205.6035%205.6692zM24.8656%2012.8282C25.8796%2012.8282%2026.8422%2013.6652%2026.8422%2015.0594%2026.8422%2016.4399%2025.8769%2017.2905%2024.8656%2017.2905%2023.8557%2017.2905%2022.8891%2016.4331%2022.8891%2015.0594%2022.8891%2013.672%2023.853%2012.8282%2024.8656%2012.8282z%22/%3E%3Cpath%20d%3D%22M35.7511%2017.2905v0H35.7469C34.737%2017.2905%2033.7703%2016.4331%2033.7703%2015.0594%2033.7703%2013.672%2034.7343%2012.8282%2035.7469%2012.8282%2036.7608%2012.8282%2037.7234%2013.6652%2037.7234%2015.0594%2037.7234%2016.4439%2036.7554%2017.2961%2035.7511%2017.2905zM35.7387%2020.7286C38.8277%2020.7286%2041.3422%2018.3094%2041.3422%2015.0594%2041.3422%2011.7913%2038.826%209.39009%2035.7387%209.39009%2032.6513%209.39009%2030.1351%2011.7913%2030.1351%2015.0594%2030.1351%2018.3102%2032.6587%2020.7286%2035.7387%2020.7286z%22/%3E%3Cpath%20d%3D%22M51.953%2010.4357V9.68573H48.3999V9.80826C47.8499%209.54648%2047.1977%209.38187%2046.4808%209.38187%2043.5971%209.38187%2041.0168%2011.8998%2041.0168%2015.0758%2041.0168%2017.2027%2042.1808%2019.0237%2043.8201%2019.9895L43.7543%2020.0168%2041.8737%2020.797%2041.1808%2021.0844%2041.4684%2021.7772C42.0912%2023.2776%2043.746%2025.1469%2046.5219%2025.1469%2047.9324%2025.1469%2049.3089%2024.7324%2050.3359%2023.7376%2051.3691%2022.7367%2051.953%2021.2411%2051.953%2019.2723v-8.8366zm-7.2194%209.9844L44.7334%2020.4196C45.2886%2020.6201%2045.878%2020.7286%2046.4808%2020.7286%2047.1616%2020.7286%2047.7866%2020.5819%2048.3218%2020.3395%2048.2342%2020.7286%2048.0801%2021.0105%2047.8966%2021.2077%2047.6154%2021.5099%2047.1764%2021.7088%2046.5219%2021.7088%2045.61%2021.7088%2045.0018%2021.0612%2044.7336%2020.4201zM46.6697%2012.8282C47.6419%2012.8282%2048.5477%2013.6765%2048.5477%2015.084%2048.5477%2016.4636%2047.6521%2017.2987%2046.6697%2017.2987%2045.6269%2017.2987%2044.6767%2016.4249%2044.6767%2015.084%2044.6767%2013.7086%2045.6362%2012.8282%2046.6697%2012.8282zM55.7387%205.22081v-.75H52.0788V20.4412H55.7387V5.22081z%22/%3E%3Cpath%20d%3D%22M63.9128%2016.0614L63.2945%2015.6492%2062.8766%2016.2637C62.4204%2016.9346%2061.8664%2017.3069%2061.0741%2017.3069%2060.6435%2017.3069%2060.3146%2017.2088%2060.0544%2017.0447%2059.9844%2017.0006%2059.9161%2016.9496%2059.8498%2016.8911L65.5497%2014.5286%2066.2322%2014.2456%2065.9596%2013.5589%2065.7406%2013.0075C65.2878%2011.8%2063.8507%209.39832%2060.8278%209.39832%2057.8445%209.39832%2055.5034%2011.7619%2055.5034%2015.0676%2055.5034%2018.2151%2057.8256%2020.7369%2061.0659%2020.7369%2063.6702%2020.7369%2065.177%2019.1378%2065.7942%2018.2213L66.2152%2017.5963%2065.5882%2017.1783%2063.9128%2016.0614zM61.3461%2012.8511L59.4108%2013.6526C59.7903%2013.0783%2060.4215%2012.7954%2060.9017%2012.7954%2061.067%2012.7954%2061.2153%2012.8161%2061.3461%2012.8511z%22/%3E%3C/g%3E%3Cpath%20d%3D%22M11.7008%2019.9868C7.48776%2019.9868%203.94818%2016.554%203.94818%2012.341%203.94818%208.12803%207.48776%204.69522%2011.7008%204.69522%2014.0331%204.69522%2015.692%205.60681%2016.9403%206.80583L15.4703%208.27586C14.5751%207.43819%2013.3597%206.78119%2011.7008%206.78119%208.62108%206.78119%206.21482%209.26135%206.21482%2012.341%206.21482%2015.4207%208.62108%2017.9009%2011.7008%2017.9009%2013.6964%2017.9009%2014.8297%2017.0961%2015.5606%2016.3734%2016.1601%2015.7738%2016.5461%2014.9197%2016.6939%2013.7454h-4.9931V11.6512h7.0298C18.8045%2012.0207%2018.8456%2012.4724%2018.8456%2012.957%2018.8456%2014.5255%2018.4186%2016.4637%2017.0389%2017.8434%2015.692%2019.2395%2013.9838%2019.9868%2011.7008%2019.9868zM29.7192%2015.0594C29.7192%2017.8927%2027.5429%2019.9786%2024.8656%2019.9786%2022.1884%2019.9786%2020.0121%2017.8927%2020.0121%2015.0594%2020.0121%2012.2096%2022.1884%2010.1401%2024.8656%2010.1401%2027.5429%2010.1401%2029.7192%2012.2096%2029.7192%2015.0594zM27.5922%2015.0594C27.5922%2013.2855%2026.3274%2012.0782%2024.8656%2012.0782S22.1391%2013.2937%2022.1391%2015.0594C22.1391%2016.8086%2023.4038%2018.0405%2024.8656%2018.0405S27.5922%2016.8168%2027.5922%2015.0594zM40.5922%2015.0594C40.5922%2017.8927%2038.4159%2019.9786%2035.7387%2019.9786%2033.0696%2019.9786%2030.8851%2017.8927%2030.8851%2015.0594%2030.8851%2012.2096%2033.0614%2010.1401%2035.7387%2010.1401%2038.4159%2010.1401%2040.5922%2012.2096%2040.5922%2015.0594zM38.4734%2015.0594C38.4734%2013.2855%2037.2087%2012.0782%2035.7469%2012.0782%2034.2851%2012.0782%2033.0203%2013.2937%2033.0203%2015.0594%2033.0203%2016.8086%2034.2851%2018.0405%2035.7469%2018.0405%2037.2087%2018.0487%2038.4734%2016.8168%2038.4734%2015.0594zM51.203%2010.4357v8.8366C51.203%2022.9105%2049.0595%2024.3969%2046.5219%2024.3969%2044.132%2024.3969%2042.7031%2022.7955%2042.161%2021.4897L44.0417%2020.7095C44.3784%2021.5143%2045.1997%2022.4588%2046.5219%2022.4588%2048.1479%2022.4588%2049.1499%2021.4487%2049.1499%2019.568V18.8617H49.0759C48.5914%2019.4612%2047.6552%2019.9786%2046.4808%2019.9786%2044.0171%2019.9786%2041.7668%2017.8352%2041.7668%2015.0758%2041.7668%2012.3%2044.0253%2010.1319%2046.4808%2010.1319%2047.6552%2010.1319%2048.5914%2010.6575%2049.0759%2011.2323H49.1499V10.4357H51.203zM49.2977%2015.084C49.2977%2013.3512%2048.1397%2012.0782%2046.6697%2012.0782%2045.175%2012.0782%2043.9267%2013.3429%2043.9267%2015.084%2043.9267%2016.8004%2045.175%2018.0487%2046.6697%2018.0487%2048.1397%2018.0487%2049.2977%2016.8004%2049.2977%2015.084zM54.9887%205.22081V19.6912H52.8288V5.22081H54.9887zM63.4968%2016.6854L65.1722%2017.8023C64.6301%2018.6072%2063.3244%2019.9869%2061.0659%2019.9869%2058.2655%2019.9869%2056.2534%2017.827%2056.2534%2015.0676%2056.2534%2012.1439%2058.2901%2010.1483%2060.8278%2010.1483%2063.3818%2010.1483%2064.6301%2012.1768%2065.0408%2013.2773L65.2625%2013.8357%2058.6843%2016.5623C59.1853%2017.5478%2059.9737%2018.0569%2061.0741%2018.0569%2062.1746%2018.0569%2062.9384%2017.5067%2063.4968%2016.6854zM58.3312%2014.9115L62.7331%2013.0884C62.4867%2012.4724%2061.764%2012.0454%2060.9017%2012.0454%2059.8012%2012.0454%2058.2737%2013.0145%2058.3312%2014.9115z%22%20fill%3D%22%23fff%22/%3E%3C/svg%3E"
                                                    draggable="false"></div>
                                        </a>
                                    </div>
                                </div>
                                <div></div>
                                <div>
                                    <div style="display: inline-flex; position: absolute; right: 0px; bottom: 0px;">
                                        <div class="gmnoprint" style="z-index: 1000001;">
                                            <div draggable="false"
                                                style="user-select: none; position: relative; height: 14px; line-height: 14px;"
                                                class="gm-style-cc">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div
                                                        style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                    <button
                                                        style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;"
                                                        draggable="false" aria-label="Keyboard shortcuts"
                                                        title="Keyboard shortcuts" type="button">Keyboard
                                                        shortcuts</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gmnoprint" style="z-index: 1000001;">
                                            <div draggable="false"
                                                style="user-select: none; position: relative; height: 14px; line-height: 14px;"
                                                class="gm-style-cc">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div
                                                        style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                    <button
                                                        style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit; display: none;"
                                                        draggable="false" aria-label="Map Data" title="Map Data"
                                                        type="button">Map Data</button><span style="">Map data
                                                        ©2025 Google</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gmnoscreen">
                                            <div
                                                style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                                Map data ©2025 Google</div>
                                        </div><button
                                            style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; height: 14px; line-height: 14px;"
                                            draggable="false" aria-label="Map Scale: 500 m per 66 pixels"
                                            title="Map Scale: 500 m per 66 pixels" type="button" class="gm-style-cc"
                                            aria-describedby="31BD4D20-11A4-4205-ABA8-32C4029F70E8">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div
                                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                </div>
                                            </div>
                                            <div
                                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                <span style="color: rgb(0, 0, 0);">500 m&nbsp;</span>
                                                <div
                                                    style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 70px;">
                                                    <div
                                                        style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;">
                                                    </div>
                                                    <div style="width: 4px; height: 8px; left: 0px; top: 0px;"></div>
                                                    <div
                                                        style="width: 4px; height: 8px; position: absolute; right: 0px; bottom: 0px;">
                                                    </div>
                                                    <div
                                                        style="position: absolute; background-color: rgb(0, 0, 0); height: 2px; left: 1px; bottom: 1px; right: 1px;">
                                                    </div>
                                                    <div
                                                        style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(0, 0, 0);">
                                                    </div>
                                                    <div
                                                        style="width: 2px; height: 6px; position: absolute; background-color: rgb(0, 0, 0); bottom: 1px; right: 1px;">
                                                    </div>
                                                </div>
                                            </div><span id="31BD4D20-11A4-4205-ABA8-32C4029F70E8"
                                                style="display: none;">Click to toggle between metric and imperial
                                                units</span>
                                        </button>
                                        <div class="gmnoprint gm-style-cc"
                                            style="z-index: 1000001; user-select: none; position: relative; height: 14px; line-height: 14px;"
                                            draggable="false">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div
                                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                </div>
                                            </div>
                                            <div
                                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                <a style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);"
                                                    href="https://www.google.com/intl/en-US_US/help/terms_maps.html"
                                                    target="_blank" rel="noopener">Terms</a>
                                            </div>
                                        </div>
                                        <div draggable="false"
                                            style="user-select: none; position: relative; height: 14px; line-height: 14px;"
                                            class="gm-style-cc">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div
                                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                </div>
                                            </div>
                                            <div
                                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                <a target="_blank" rel="noopener"
                                                    title="Report errors in the road map or imagery to Google"
                                                    dir="ltr"
                                                    style="font-family: Roboto, Arial, sans-serif; font-size: 10px; text-decoration: none; position: relative; color: rgb(0, 0, 0);"
                                                    href="https://www.google.com/maps/@-37.81724,144.955826,14z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Report
                                                    a map error</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                            <div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg"
                                    style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"
                                    draggable="false"></div>
                            <div style="line-height: 20px; margin: 15px 0px;"><span
                                    style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps
                                    correctly.</span></div>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="line-height: 16px; vertical-align: middle;"><a
                                            href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=keyless#api-key-and-billing-errors"
                                            target="_blank" rel="noopener"
                                            style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this
                                            website?</a></td>
                                    <td style="text-align: right;"><button class="dismissButton">OK</button></td>
                                </tr>
                            </table>
                        </div>
                    </div> --}}
                <!-- end: Google Map -->
                {{-- </div> --}}
            </div>
        </div>
    </section>
    {{-- END CONTACT US --}}

    {{-- <section> --}}
    {{-- <div class="container-fluid">
            <div class="heading-text text-center heading-section">
                <h2 class="fw-bold" style="color: #005199; font-family:Verdana;">OUR PRODUCTS</h2>
            </div>
            <div class="carousel team-members team-members-shadow" data-dots="false" data-items="3">
                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/butterflyvalve.png') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div class="team-desc p-5" style="background-color: #005199">
                        <a href="/stack-parking" style="text-decoration: none">
                            <h2 class="fw-semibold" style="font-family:Verdana; color:#ffdd00">Butterfly Valve</h2>
                            <span></span>
                            <p class="text-light" style=" font-family: montserrat;">Design & Manufacturing : API602/ISO
                                15761 for Class 150 &
                                1500, ASME B 16.34 for Class
                                2500...
                            </p>
                            <h5 class="text-light" style="font-family: montserrat">About Forged Gate Globe Check Valve
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/ballvalve.webp') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div class="team-desc p-5" style="background-color: #005199">
                        <a href="/cantilever-parking" style="text-decoration: none">
                            <h2 class="fw-semibold" style="font-family:Verdana; color:#ffdd00">Ball Valve</h2>
                            <span></span>
                            <p class="text-light" style=" font-family: montserrat;">Gate Valves are used extensively
                                throughout the
                                Refineries,Hydrocarbon,Energy and process
                                industries.
                            </p>
                            <h5 class="text-light" style="font-family: montserrat">About Gate Valve</h5>
                        </a>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/gateglobevalve.jpg') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div class="team-desc p-5" style="background-color: #005199">
                        <a href="/stack-parking" style="text-decoration: none">
                            <h2 class="fw-semibold" style="font-family:Verdana; color:#ffdd00">Forged Gate Globe
                                Check Valve</h2>
                            <span></span>
                            <p class="text-light" style=" font-family: montserrat;">Design & Manufacturing : API602/ISO
                                15761 for Class 150 &
                                1500, ASME B 16.34 for Class
                                2500...
                            </p>
                            <h5 class="text-light" style="font-family: montserrat">About Forged Gate Globe Check Valve
                            </h5>
                        </a>
                    </div>
                </div> --}}

    {{-- <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/globevalve.jpg') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div class="team-desc p-5" style="background-color: #005199">
                        <a href="/suspended-parking" style="text-decoration: none">
                            <h2 class="fw-semibold" style="font-family:Verdana; color:#ffdd00">Globe Valve</h2>
                            <span></span>
                            <p class="text-light" style=" font-family: montserrat;">Globe Valves are extensively used
                                through-out the
                                Refineries,Hydrocarbon,Energy and process &
                                the powe...
                            </p>
                            <h5 class="text-light" style="font-family: montserrat">About Globe Valve</h5>
                        </a>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/swingcheckvalve.png') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div class="team-desc p-5" style="background-color: #005199">
                        <a href="/stack-double-parking" style="text-decoration: none">
                            <h2 class="fw-semibold" style="font-family:Verdana; color:#ffdd00">Swing Check Valve
                            </h2>
                            <span></span>
                            <p class="text-light" style=" font-family: montserrat;">STEELSTRONG VALVES has extensive
                                experience in
                                manufacturing, Swing, Tilting Disc and
                                Non-Slam Check...
                            </p>
                            <h5 class="text-light" style="font-family: montserrat">About Swing Check Valve</h5>
                        </a>
                    </div>
                </div>

                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/trunnionvalve.jpg') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div class="team-desc p-5" style="background-color: #005199">
                        <a href="/bike-parking" style="text-decoration: none">
                            <h2 class="fw-semibold" style="font-family:Verdana; color:#ffdd00">Trunnion Mounted
                                Ball Valve</h2>
                            <span></span>
                            <p class="text-light" style="font-family: montserrat;">STEELSTRONG VALVES has extensive
                                experience in
                                manufacturing Trunnion Mounted, Side & Top
                                Entry...
                            </p>
                            <h5 class="text-light" style="font-family: montserrat">About Trunnion Mounted Ball Valve</h5>
                        </a>
                    </div>
                </div>

                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/floatingvalve.png') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div class="team-desc p-5" style="background-color: #005199">
                        <a href="/bike-parking" style="text-decoration: none">
                            <h2 class="fw-semibold" style="font-family:Verdana; color:#ffdd00">Floating Ball
                                Valve</h2>
                            <span></span>
                            <p class="text-light" style=" font-family: montserrat;">STEELSTRONG VALVES has extensive
                                experience in
                                manufacturing Floating Ball Valves, both Soft
                                and Metal Seated..
                            </p>
                            <h5 class="text-light" style="font-family: montserrat">About Floating Ball Valve</h5>
                        </a>
                    </div>
                </div>

            </div> --}}
    {{-- </div> --}}
    {{-- </section> --}}


    {{-- <section class="background-dark text-white">
        <div class="container-fluid">
            <div class="heading-text text-center heading-section">
                <h2>Independent Parking Systems</h2>
            </div>
            <div class="carousel team-members team-members-shadow" data-dots="false" data-items="3">
                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/parking-photos/Puzzle.jpeg') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div style="background-color:#c31e2f" class="team-desc text-white">
                        <h2>Puzzle (2+3) Parking </h2>
                        <span></span>
                        <p>The Puzzle-Parking System, also referred to as the Lift-Slide System, is probably the most
                            popular among other Self-Parking Systems and one of the most commonly use system in India
                        </p>

                    </div>
                </div>
                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/parking-photos/tower.jpg') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div style="background-color:#c31e2f" class="team-desc text-white">
                        <h2>Tower Parking Systems</h2>
                        <span></span>
                        <p>An automatic tower parking system is always the right choice if the floor space available is
                            limited. Instead of expanding in width, the tower system moves upward or downward- your vehicle
                            is moved via a transporter to a free parking space where it’s safely parked system
                        </p>

                    </div>
                </div>
                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/park10.jpeg') }}">
                    </div>
                    <div style="background-color:#c31e2f" class="team-desc text-white">
                        <h2>Rotary Parking Systems</h2>
                        <span></span>
                        <p>Automated Rotary Car Parking Systems operate on a simple wheel mechanism which helps minimize the
                            area or volume required for car parking
                        </p>

                    </div>
                </div>
                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/park9.jpeg') }}">
                    </div>
                    <div style="background-color:#c31e2f" class="team-desc text-white">
                        <h2>Circulatory Systems</h2>
                        <span></span>
                        <p>The Circulation parking system is a special type of multi- level, mechanized car parking system
                            suited for restricted basements or podiums which have insufficient space for driveways or ramps
                        </p>

                    </div>
                </div>

                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/parking-photos/CarLift.jpg') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div style="background-color:#c31e2f" class="team-desc text-white">
                        <h2>Car Lifts</h2>
                        <span></span>
                        <p>Car lift are the right choice where there are podium or basement parking space which eliminates
                            the ramp space and cost
                        </p>

                    </div>
                </div>

                <div class="team-member">
                    <div class="team-image mb-0">
                        <img src="{{ asset('Asset/images/anzox/parking-photos/Cart-tower.jpeg') }}"
                            style="width:100%; height:600px; object-fit:cover;">
                    </div>
                    <div style="background-color:#c31e2f" class="team-desc text-white">
                        <h2 class="">Cart Parking Systems</h2>
                        <span></span>
                        <p>The Tri Dimensional Car is a fully automated car parking system. Only a few simple operations are
                            required to store or retrieve a vehicle
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!-- WHAT WE DO -->
    {{-- <section>
    <div class="container">
        <div class="heading-text heading-section m-b-80">
            <h2>WHAT WE DO</h2>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="icon-box medium fancy">
                    <div class="icon">
                        <a href="#"><i class="fa fa-car"></i></a>
                    </div>
                    <h4>Powerful template</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consecte adipiscing elit.
                        Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box medium fancy">
                    <div class="icon">
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <h4>Flexible Layouts</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consecte adipiscing elit.
                        Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box medium fancy">
                    <div class="icon">
                        <a href="#"><i class="far fa-lightbulb"></i></a>
                    </div>
                    <h4>Retina Ready</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consecte adipiscing elit.
                        Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="icon-box medium fancy">
                    <div class="icon">
                        <a href="#"><i class="fa fa-phone"></i></a>
                    </div>
                    <h4>100% Responsive Layout</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consecte adipiscing elit.
                        Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box medium fancy">
                    <div class="icon">
                        <a href="#"><i class="fa fa-code"></i></a>
                    </div>
                    <h4>Clean Modern Code</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consecte adipiscing elit.
                        Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box medium fancy">
                    <div class="icon">
                        <a href="#"><i class="fa fa-life-ring"></i></a>
                    </div>
                    <h4>Free Updates & Support</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consecte adipiscing elit.
                        Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- END WHAT WE DO -->

    <!-- COUNTERS -->
    {{-- <section class="text-center background-image p-t-200 p-b-100" style="
          background-image: url(homepages/business/images/parallax/2.jpg);
          background-position: bottom left;
        ">
    <div class="container">
        <div class="row">
            <div class="heading-text heading-section m-b-200">
                <h2>GROWTH YOUR BUSINESS!</h2>
                <span class="lead">Beautiful nature, and rare feathers!. amam ipsum dolor sit
                    amet.</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="text-center">
                    <div class="icon"><i class="fa fa-3x fa-code"></i></div>
                    <div class="counter">
                        <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600"
                            data-seperator="true"></span>
                    </div>
                    <div class="seperator seperator-small"></div>
                    <p>LINES OF CODE</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="text-center">
                    <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
                    <div class="counter">
                        <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100"
                            data-seperator="true"></span>
                    </div>
                    <div class="seperator seperator-small"></div>
                    <p>CUPS OF COFFEE</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="text-center">
                    <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
                    <div class="counter">
                        <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50"
                            data-seperator="true"></span>
                    </div>
                    <div class="seperator seperator-small"></div>
                    <p>FINISHED PROJECTS</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="text-center">
                    <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
                    <div class="counter">
                        <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48"
                            data-seperator="true"></span>
                    </div>
                    <div class="seperator seperator-small"></div>
                    <p>SATISFIED CLIENTS</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- end: COUNTERS -->

    <!-- WHY CHOOSE US -->
    {{-- <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading-text heading-section m-b-60">
                    <h2>WHAT CHOOSE US</h2>
                </div>
                <div class="accordion toggle fancy clean accordion-transparent">
                    <div class="ac-item">
                        <h5 class="ac-title">WORLDWIDE BUSINESS COMPANY</h5>
                        <div class="ac-content" style="display: none">
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet, consectetur, adipisci velit, sed quia non numquam eius
                            modi tempora incidunt ut labore et dolore magnam aliquam
                            quaerat voluptatem.
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">IDENTIFY SMALL BUSINESS PAIN POINTS</h5>
                        <div class="ac-content" style="display: none">
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet, consectetur, adipisci velit, sed quia non numquam eius
                            modi tempora incidunt ut labore et dolore magnam aliquam
                            quaerat voluptatem.
                        </div>
                    </div>
                    <div class="ac-item ac-active">
                        <h5 class="ac-title">YOUR DATA ARE SECURE</h5>
                        <div class="ac-content">
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet, consectetur, adipisci velit, sed quia non numquam eius
                            modi tempora incidunt ut labore et dolore magnam aliquam
                            quaerat voluptatem.
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">BETTER COMUNICATION</h5>
                        <div class="ac-content" style="display: none">
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet, consectetur, adipisci velit, sed quia non numquam eius
                            modi tempora incidunt ut labore et dolore magnam aliquam
                            quaerat voluptatem.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="heading-text heading-section">
                    <h2>OUR SKILLS</h2>
                </div>
                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="100" data-delay="100" data-type="%">
                        <div class="progress-title">CONSULTING</div>
                    </div>
                </div>

                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="94" data-delay="200" data-type="%">
                        <div class="progress-title">SUPPORT</div>
                    </div>
                </div>

                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="78" data-delay="300" data-type="%">
                        <div class="progress-title">MANAGEMENT</div>
                    </div>
                </div>

                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="65" data-delay="400" data-type="%">
                        <div class="progress-title">ECONOMY</div>
                    </div>
                </div>

                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="78" data-delay="300" data-type="%">
                        <div class="progress-title">INVESTMENT</div>
                    </div>
                </div>

                <div class="p-progress-bar-container title-up small color">
                    <div class="p-progress-bar" data-percent="65" data-delay="400" data-type="%">
                        <div class="progress-title">MANAGEMENT AGREEMENTS</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- WHY CHOOSE US -->

    <!-- PARALLAX -->
    {{-- <section class="text-center text-light p-t-150 p-b-150" data-bg-parallax="homepages/business/images/parallax/1.jpg')}}">
<div class="container">
    <h2>PARALLAX SECTION</h2>
    <span class="lead">Beautiful nature, and rare feathers!. amam ipsum dolor sit
        amet.</span>
    <p class="lead">
        We offer a range of services for both businesses and individuals
        companies, Beautiful nature, and rare feathers!. Morbi sagittis, sem
        quis lacinia faucibus, orci ipsum gravida tortor.
    </p>

    <a href="#" class="btn btn-outline btn-light"><span>Learn More</span></a>
</div>
</section> --}}
    <!-- end: PARALLAX -->

    <!-- CLIENTS -->
    {{-- <section>
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>OUR CLIENTS</h2>
            <span class="lead">Our awesome clients we've had the pleasure to work with!
            </span>
        </div>

        <ul class="grid grid-5-columns">
            <li>
                <a href="#"><img src="{{asset('Asset/images/clients/1.png')}}" alt="" /> </a>
</li>
<li>
    <a href="#"><img src="{{asset('Asset/images/clients/2.png')}}" alt="" /> </a>
</li>
<li>
    <a href="#"><img src="{{asset('Asset/images/clients/3.png')}}" alt="" /> </a>
</li>
<li>
    <a href="#"><img src="{{asset('Asset/images/clients/4.png')}}" alt="" /> </a>
</li>
<li>
    <a href="#"><img src="{{asset('Asset/images/clients/5.png')}}" alt="" /> </a>
</li>
<li>
    <a href="#"><img src="{{asset('Asset/images/clients/6.png')}}" alt="" /> </a>
</li>
<li>
    <a href="#"><img src="{{asset('Asset/images/clients/7.png')}}" alt="" /> </a>
</li>
<li>
    <a href="#"><img src="{{asset('Asset/images/clients/8.png')}}" alt="" /> </a>
</li>
<li>
    <a href="#"><img src="{{asset('Asset/images/clients/9.png')}}" alt="" /> </a>
</li>
<li>
    <a href="#"><img src="{{asset('Asset/images/clients/10.png')}}" alt="" /> </a>
</li>
</ul>
</div>
</section> --}}
    <!-- CLIENTS -->

    <!-- HISTORY -->
    {{-- <section class="background-grey p-b-60">
    <div class="container">
        <div class="heading-text heading-section text-center m-b-40">
            <h2>COMPANY HISTORY</h2>
            <span class="lead">Beautiful nature, and rare feathers!. amam ipsum dolor sit
                amet.</span>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="m-b-40">
                    <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis
                        lacinia faucibus, orci ipsum gravida tortor, vel interdum mi
                        sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        facilisis ut venenatis eu, sodales vel dolor.
                    </span>
                </div>
            </div>
            <div class="col-lg-6">
                <img alt="" class="img-fluid" src="{{asset('Asset/homepages/business/images/office.jpg')}}" />
</div>
</div>
</div>
</section> --}}
    <!-- end: HISTORY -->

    <!-- CALL TO ACTION -->
    {{-- <section style="background-color: #005199">

        <div class="">
            <div class="container-fluid text-center">
                <h1 style="font-family: 'Playball', cursive; color:#ffdd00">
                    "Growth is never by mere chance, it is the result of forces working together."
                </h1>
            </div>
        </div>
    </section> --}}
@endsection
