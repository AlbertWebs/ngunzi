@extends('front.master-page')

@section('content')
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{asset('theme/assets/img/inner-pages/braadcrumb-bg3.jpg')}}');">
    <div class="company-name">Nguzi & Associates</div>
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="banner-content">
                <h1>Book Keeping</h1>
                <ul class="breadcrumb-list">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li>Area of Expertise</li>
                   <li>Book Keeping</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>

 <div class="case-study-details-wrapper pt-130 mb-130">
    <div class="container-fluid one pl--95">
       <div class="case-study-details-top mb-70">
          <div class="row g-lg-4 gy-5">
             <div class="col-lg-8" style="margin:0 auto">
                <div class="details-page-content">
                   <h2>Digital Banking Transformation</h2>
                   <p class="first-para">T he banking industry is a multifaceted sector of the economy that involves the buying, selling, development, management, and financing of real property, which includes land and physical structures. It plays a significant role in the global economy and encompasses various aspects of real estate transactions and operations. The real estate industry is influenced by economic conditions, population growth, urbanization trends, and government policies. It is a vital part of the economy, providing housing, commercial spaces, and infrastructure for communities and businesses , helping individuals and organizations navigate property transactions and investments.</p>
                   <p>In a rapidly evolving and complex healthcare landscape, health and care consulting serves as a valuable resource for healthcare organizations looking to navigate challenges, improve patient care, and remain competitive. The advantages of consulting services are often realized through improved outcomes, increased patient satisfaction, and better overall healthcare delivery. Real estate professionals, from realtors to property developers, play crucial roles in this industry.</p>
                   <p class="moretext">To empower organizations to thrive and achieve their full potential by providing strategic insights, innovative solutions, and expert guidance. We partner with our clients to enhance efficiency, competitiveness, and sustainability in an ever-evolving business landscape. moreless-button</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

 <div class="case-study-navigation-section mb-130">
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="details-navigation">
                <div class="single-navigation">
                   <a class="arrow" href="#blog-details">
                      <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                         <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                   </a>
                   <div class="content">
                      <a href="#blog-details">Prev Post</a>
                      <h6><a href="#blog-details">Consulting vs. In-House Expertise: Finding the Right Balance</a></h6>
                   </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="45" viewBox="0 0 60 45">
                   <path d="M19.333 17.2061L38.666 45.0001H0L19.333 17.2061Z" />
                   <path d="M59.9993 44.9998H41.5429L20 13.4972L29.2254 0L59.9993 44.9998Z" />
                </svg>
                <div class="single-navigation two text-end">
                   <div class="content">
                      <a href="#blog-details">Next Post</a>
                      <h6><a href="#blog-details">Consulting Industry Adapts to the Changing Business Landscape</a></h6>
                   </div>
                   <a class="arrow" href="#blog-details">
                      <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                         <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                   </a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
