@extends('layouts.base')
@section('content')
<section id="page-content" class="p-b-0 background-dark">
    <div class="container">
        <div class="row m-b-40">
            <div class="sidebar sticky-sidebar col-lg-5">
                <div class="heading-text  text-white text-left heading-section">
                    <h2>(-1+2) Stack Parking</h2>
                </div>
                <div class="project-description  text-white">
                    <h3></h3>
                </div>

                <ul class="list-icon  text-white list-icon-arrow">
                    <li>
                        This system comprises of 3 levels. <br>
                        •	Top (+2) <br>
                        •	Entry (+1) <br>
                        •	Pit (-1)
                    </li>
                    <li>Custom designs As per available space.</li>
                    <li>Automatic safety lock.</li>
                    <li>Complete use of Pit space.</li>
                    <li>Low noise production and power consumption.</li>
                    <li>Requires low Maintenance.</li>
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
                    <a title="" data-lightbox="gallery-image" href="{{asset('Asset/images/anzox/parking-photos/minusplus.jpg')}}">
                        <img src="{{asset('Asset/images/anzox/parking-photos/minusplus.jpg')}}" data-animate="fadeInUp">
                    </a>
                    <br><br>
                    <a title="" data-lightbox="gallery-image" href="{{asset('Asset/images/anzox/minus1.png')}}">
                        <img src="{{asset('Asset/images/anzox/minus1.png')}}" data-animate="fadeInUp">
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
