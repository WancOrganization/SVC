@extends('layouts.base')
@section('content')
<section id="page-content" class="p-b-0 background-dark ">
    <div class="container">
        <div class="row m-b-40">
            <div class="sidebar sticky-sidebar col-lg-5">
                <div class="heading-text text-left text-white heading-section">
                    <h2>Tower Parking</h2>
                </div>
                <div class="project-description text-white">
                    <h3>An automatic tower parking system is always the right choice if the floor space available is limited. Instead of expanding in width, the tower system moves upward or downward- your vehicle is moved via a transporter to a free parking space where it’s safely parked system.</h3>
                </div>

                <ul class="list-icon list-icon-arrow text-white">
                    <li>Anti-theft and damage protection.</li>
                    <li>Computerized control systems.</li>
                    <li>Access via remote control.</li>
                    <li>Specially designed for areas between set-back lines and buildings.</li>
                    <li>Safe access to the car parking without any narrow ramps or dark access routes.</li>
                    <li>PLC integrated control system.</li>
                    <li>Multi-Level cost effective System.</li>
                    </ul>
                    <div class="mt-5">
                        <h3 style="color: #c31e2f">General Specifications</h3>

                        <div class="table-responsive">
                            <table class="table table-bordered text-white">
                                <thead>
                                    <tr>
                                        <th><strong class="text-danger">Drive : </strong></th>
                                        <th><strong class=""> Hydraulic.</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <strong class="text-danger">Vertical Movement : </strong></td>
                                        <td>  <strong class="">Hydraulic / Electrical Motor.</strong></td>
                                    </tr>
                                    <tr>
                                        <td>   <strong class="text-danger">Horizontal Movement : </strong></td>
                                        <td> strong class="">Hydraulic / Electrical Motor.</strong></td>
                                    </tr>
                                    <tr>
                                        <td>  <strong class="text-danger">Power Pack :</strong></td>
                                        <td> <strong class=""> 10 Hp.</strong></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="text-danger">Loading Capacity : </strong></td>
                                        <td>  <strong class="">2000 / 2500 kg.</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="text-danger">Electrical Supply :</strong></td>
                                        <td><strong class=""> 3 Phase, 415 volts / 50 Hz,AC supply.</strong></td>
                                    </tr>
                                    <tr>
                                        <td>  <strong class="text-danger">Operation :</strong></td>
                                        <td>  <strong class="">Push Button, Touch Screen or RFID Cards.</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="text-danger">Safety Locks : </strong></td>
                                        <td> <strong class=""> Electrical, Hydraulic, mechanical Locks.</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong class="text-danger">Sensors :</strong></td>
                                        <td><strong class=""> Motion Detection Sensors</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>

                    <div class="mt-5"> <a href="/contact-us" class="btn btn-danger btn-roundeded ">BOOK NOW</a></div>
            </div>
            <div class="col-lg-7    ">
                <div class="portfolio-content" data-lightbox="gallery">
                    <a title="" data-lightbox="gallery-image" href="images/portfolio/project/30.jpg">
                        <img src="{{asset('Asset/images/anzox/towerParking1.png')}}" data-animate="fadeInUp">
                    </a>
                    <br><br>
                    <a title="" data-lightbox="gallery-image" href="images/portfolio/project/41.jpg">
                        <img src="{{asset('Asset/images/anzox/parking-photos/tower.jpg')}}" data-animate="fadeInUp">
                    </a>
                    <br><br>
                    <a title="" data-lightbox="gallery-image" href="images/portfolio/project/42.jpg">
                        <img src="{{asset('Asset/images/anzox/parking-photos/Tower3.jpg')}}" data-animate="fadeInUp">
                    </a>
                    <br><br>

                </div> <div class="text-white mt-3">
                    *NOTE*
                    These are only Concept Images. For details information contact our project & sales engineers
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
