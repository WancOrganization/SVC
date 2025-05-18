@extends('layouts.base')
@section('content')
<section id="page-content" class="p-b-0 background-dark ">
    <div class="container">
        <div class="row m-b-40">
            <div class="sidebar sticky-sidebar col-lg-5">
                <div class="heading-text text-white text-left heading-section">
                    <h2>Car Lifts</h2>
                </div>
                <div class="project-description text-white">
                    <h3> Car lift are the right choice where there are podium or basement parking space which eliminates the ramp space and cost.</h3>
                </div>

                <ul class="list-icon list-icon-arrow text-white">
                    <li>Anti - fall Braking System.</li>
                    <li> Specially designed for areas between set - back lines.</li>
                    <li> Safe Access to Car and Passengers.</li>
                    <li>PLC Integrated control system with Multiple safety Function.</li>
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
                                        <td>  <strong class="text-danger">Power Pack :</strong></td>
                                        <td> <strong class=""> 3 Hp.</strong></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="text-danger">Loading Capacity : </strong></td>
                                        <td>  <strong class="">2000 kg.</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="text-danger">Electrical Supply :</strong></td>
                                        <td><strong class=""> 3 Phase, 415 volts / 50 Hz,AC supply.</strong></td>
                                    </tr>
                                    <tr>
                                        <td>  <strong class="text-danger">Operation :</strong></td>
                                        <td> <strong class="">Turn Key / Push Button.</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="text-danger">Safety Locks : </strong></td>
                                        <td><strong class=""> Electrical and mechanical Locks.</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="text-danger">Sensors :</strong></td>
                                        <td><strong class=""> Human Detection Sensors</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        </div>

                    <div class="mt-5"> <a href="/contact-us" class="btn btn-danger btn-roundeded ">BOOK NOW</a></div>
            </div>
            <div class="col-lg-7">
                <div class="portfolio-content" data-lightbox="gallery">
                    <a title="" data-lightbox="gallery-image" href="images/portfolio/project/30.jpg">
                        <img src="{{asset('Asset/images/anzox/carlift1.png')}}" data-animate="fadeInUp">
                    </a>
                    <br><br>
                    <a title="" data-lightbox="gallery-image" href="images/portfolio/project/41.jpg">
                        <img src="{{asset('Asset/images/anzox/parking-photos/CarLift.jpeg')}}" data-animate="fadeInUp">
                    </a>
                    <br><br>
                    <a title="" data-lightbox="gallery-image" href="images/portfolio/project/42.jpg">
                        <img src="{{asset('Asset/images/anzox/parking-photos/CarLift.jpg')}}" data-animate="fadeInUp">
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
