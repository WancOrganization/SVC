@extends('layouts.base')
@section('content')
<section id="page-content" class="p-b-0 background-dark text-white">
    <div class="container">
        <div class="row m-b-40">
            <div class="sidebar sticky-sidebar col-lg-5">
                <div class="heading-text text-left heading-section">
                    <h2>Customized Solutions</h2>
                </div>
                <div class="project-description">
                    <h3>Designed for two level  parking Capacity. These systems are available in Hydraulic based  or Traction Based systems.</h3>
                </div>

                <ul class="list-icon list-icon-arrow">
                    <li>Custom designs to suit different projects.</li>
                    <li>Constructive use of vertical space.</li>
                    <li>Anti -Fall Frame</li>
                    <li>Safety Featured Inbuilt</li>
                    <li>Indoor and Outdoor use</li>
                    <li>Cost effective system</li>
                    </ul>
                
                <div> <a href="" class="btn btn-danger btn-roundeded">BOOK NOW</a></div>
            </div>
            <div class="col-lg-7">
                <div class="portfolio-content" data-lightbox="gallery">
                    <a title="" data-lightbox="gallery-image" href="{{asset('Asset/images/anzox/customized.png')}}">
                        <img src="{{asset('Asset/images/anzox/customized.png')}}" data-animate="fadeInUp">
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
