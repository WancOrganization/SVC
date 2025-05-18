@extends('layouts.base')
@section('content')
<section id="page-content" class="p-b-0 background-dark ">
    <div class="container">
        <div class="row m-b-40">
            <div class="sidebar sticky-sidebar col-lg-5">
                <div class="text-white heading-text text-left heading-section">
                    <h2>Bike Parking</h2>
                </div>
                <div class="text-white project-description">
                    <h3>Bike Stack are designed for two level parking capacity.
                        Available in Hydraulic or Traction based systems.
                    </h3>
                </div>

                <ul class="text-white list-icon list-icon-arrow">
                    <li>
                        Constructive use of Space.
                    </li>
                    <li>Low Maintenance.</li>
                    <li>Simple Design.</li>

                </ul>
                <div class="mt-5">
                    <h3 style="color: #c31e2f">General Specifications</h3>

                    <div class="table-responsive">
                        <table class="table table-bordered text-white">
                            <thead>
                                <tr>
                                    <th><strong class="text-danger">Drive : </strong></th>
                                    <th><strong class=""> Hydraulic / Traction.</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>  <strong class="text-danger">Power Pack :</strong></td>
                                    <td> <strong class=""> 2 Hp.</strong></td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong class="text-danger">Loading Capacity : </strong></td>
                                    <td>  <strong class="">500 kg.</strong></td>
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
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-5"> <a href="/contact-us" class="btn btn-danger btn-roundeded ">BOOK NOW</a></div>
            </div>

            <div class="col-lg-7">
                <div class="portfolio-content" data-lightbox="gallery">
                    <a title="" data-lightbox="gallery-image" href="{{asset('Asset/images/anzox/bikeParking1.png')}}">
                        <img src="{{asset('Asset/images/anzox/bikeParking1.png')}}" data-animate="fadeInUp">
                    </a>
                    <br><br>
                    <a title="" data-lightbox="gallery-image" href="{{asset('Asset/images/anzox/bikeParking2.png')}}">
                        <img src="{{asset('Asset/images/anzox/bikeParking2.png')}}" data-animate="fadeInUp">
                    </a>
                    <br><br>
                    <a title="" data-lightbox="gallery-image" href="{{asset('Asset/images/anzox/bikepark3.png')}}">
                        <img src="{{asset('Asset/images/anzox/bikepark3.png')}}" data-animate="fadeInUp">
                    </a>
                    <br><br>

                </div>
                <div class="text-white mt-3">
                    *NOTE*
                    These are only Concept Images. For details information contact our project & sales engineers

                </div>


            </div>
        </div>
    </div>

</section>
@endsection
