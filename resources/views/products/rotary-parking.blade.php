@extends('layouts.base')
@section('content')
<section id="page-content" class="p-b-0 background-dark ">
    <div class="container">
        <div class="row m-b-40">
            <div class="sidebar sticky-sidebar col-lg-5">
                <div class="heading-text text-white text-left heading-section">
                    <h2>Rotary Parking</h2>
                </div>
                <div class="project-description text-white">
                    <h3>Automated Rotary Car Parking Systems operate on a simple wheel mechanism which helps minimize the area or volume required for car parking.
                        In a space with only 2 parking spots, parking is done Vertically.
                        </h3>
                </div>

                <ul class="list-icon list-icon-arrow text-white">
                    <li>Safety measures like anti – falling of the pallet.</li>
                    <li>The use of an electronic Safety zone ensures driver safety.</li>
                    <li>Cost effective when extra land space is limited.</li>
                    <li>Human & car safety is ensured.</li>
                    <li>Requires low maintenance.</li>
                    <li>Direction of the rotation is automatically selected which reduces the time of picking and parking.</li>
                    <li>Mechanical design permits up to 18-30 cars parks.</li>
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
                                    <td>
                                        <strong class="text-danger">Circulation Drive:  </strong></td>
                                    <td>   <strong class="">Chain</strong>></td>
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


                    <ul class="list-group">

                        <li class="list-group-item  text-white  background-dark ">
                            <div class="d-flex  justify-content-between">
                                <strong class="text-danger">Drive : </strong>
                                <strong class=""> Hydraulic / Traction.</strong>
                            </div>
                        </li>
                        <li class="list-group-item  text-white  background-dark ">
                            <div class="d-flex  justify-content-between">
                                <strong class="text-danger">Circulation Drive:  </strong>
                                <strong class="">Chain</strong>
                            </div>
                        </li>

                        <li class="list-group-item  text-white  background-dark">
                            <div class="d-flex  justify-content-between">
                                <strong class="text-danger">Power Pack :</strong>
                                <strong class=""> 10 Hp.</strong>
                            </div>
                        </li>
                        <li class="list-group-item  text-white  background-dark">
                            <div class="d-flex  justify-content-between">
                                <strong class="text-danger">Loading Capacity : </strong>
                                <strong class="">2000 / 2500 kg.</strong>
                            </div>
                        </li>
                        <li class="list-group-item  text-white  background-dark">
                            <div class="d-flex  justify-content-between">
                                <strong class="text-danger">Electrical Supply :</strong>
                                <strong class=""> 3 Phase, 415 volts / 50 Hz,AC supply.</strong>
                            </div>
                        </li>
                        <li class="list-group-item  text-white  background-dark">
                            <div class="d-flex  justify-content-between">
                                <strong class="text-danger">Operation :</strong>
                                <strong class="">Push Button, Touch Screen or RFID Cards.</strong>
                            </div>
                        </li>
                        <li class="list-group-item  text-white  background-dark">
                            <div class="d-flex  justify-content-between">
                                <strong class="text-danger">Safety Locks : </strong>
                                <strong class=""> Electrical, Hydraulic, mechanical Locks.</strong>
                            </div>
                        </li>
                        <li class="list-group-item  text-white  background-dark">
                            <div class="d-flex  justify-content-between">
                                <strong class="text-danger">Sensors :</strong>
                                <strong class=""> Motion Detection Sensors</strong>
                            </div>
                        </li>
                    </ul>



                    </div>

                <div class="mt-5"> <a href="/contact-us" class="btn btn-danger btn-roundeded ">BOOK NOW</a></div>
            </div>
            <div class="col-lg-7">
                <div class="portfolio-content" data-lightbox="gallery">
                    <a title="" data-lightbox="gallery-image" href="images/portfolio/project/30.jpg">
                        <img src="{{asset('Asset/images/anzox/rotaryParking1.png')}}" data-animate="fadeInUp">
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
