@extends('front.master-page')

@section('content')
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{asset('theme/assets/img/inner-pages/braadcrumb-bg3.jpg')}}');">
    <div class="company-name">Nguzi & Associates</div>
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="banner-content">
                <h1>Area of Expertise</h1>
                <ul class="breadcrumb-list">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li>Area of Expertise</li>

                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>

 <div class="horizontal-scrolling-section pt-130 mb-130">
    <div class="container">
       <div class="row g-4 mb-60">
            <div class="col-lg-6">
                <div class="case-study-card2 magnetic-item">
                    <div class="case-img">
                        <img src="{{asset('theme/assets/img/inner-pages/accounting.jpg')}}" alt>
                    </div>
                    <div class="case-content">
                    <div class="category-and-title">
                        <a href="{{url('/')}}/area-of-expertise/slung">Acounting Services</a>
                        <h4><a href="{{url('/')}}/area-of-expertise/slung">Precision in Numbers: Tailored Accounting Services for Your Financial Success</a></h4>
                    </div>
                    <div class="details-btn">
                        <a class="primary-btn2 btn-hover" href="{{url('/')}}/area-of-expertise/slung">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z"></path>
                            </svg>
                            <span></span>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="case-study-card2 magnetic-item">
                    <div class="case-img">
                    <img src="{{asset('theme/assets/img/inner-pages/pexels-nataliya-vaitkevich-6863186.jpg')}}" alt>
                    </div>
                    <div class="case-content">
                    <div class="category-and-title">
                        <a href="{{url('/')}}/area-of-expertise/slung">Tax Services</a>
                        <h4><a href="{{url('/')}}/area-of-expertise/slung">Precision in Finance: Comprehensive Tax Services for Your Financial Success</a></h4>
                    </div>
                    <div class="details-btn">
                        <a class="primary-btn2 btn-hover" href="{{url('/')}}/area-of-expertise/slung">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z"></path>
                            </svg>
                            <span></span>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="case-study-card2 magnetic-item">
                    <div class="case-img">
                    <img src="{{asset('theme/assets/img/inner-pages/pexels-pixabay-265087.jpg')}}" alt>
                    </div>
                    <div class="case-content">
                    <div class="category-and-title">
                        <a href="{{url('/')}}/area-of-expertise/slung">Internal Audit</a>
                        <h4><a href="{{url('/')}}/area-of-expertise/slung">Navigating Assurance: The Crucial Role of Internal Audit in Organizational Integrity</a></h4>
                    </div>
                    <div class="details-btn">
                        <a class="primary-btn2 btn-hover" href="{{url('/')}}/area-of-expertise/slung">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z"></path>
                            </svg>
                            <span></span>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="case-study-card2 magnetic-item">
                    <div class="case-img">
                    <img src="{{asset('theme/assets/img/inner-pages/pexels-towfiqu-barbhuiya-9882203.jpg')}}" alt>
                    </div>
                    <div class="case-content">
                    <div class="category-and-title">
                        <a href="{{url('/')}}/area-of-expertise/slung">Debt Collection</a>
                        <h4><a href="{{url('/')}}/area-of-expertise/slung">Reclaiming Financial Harmony: Expert Debt Collection Solutions</a></h4>
                    </div>
                    <div class="details-btn">
                        <a class="primary-btn2 btn-hover" href="{{url('/')}}/area-of-expertise/slung">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z"></path>
                            </svg>
                            <span></span>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
       </div>

    </div>
 </div>
@endsection
