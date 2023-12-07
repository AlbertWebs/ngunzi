@extends('front.master-page')

@section('content')
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{asset('theme/assets/img/inner-pages/braadcrumb-bg5.jpg')}}');">
    <div class="company-name">Nguzi & Associates</div>
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="banner-content">
                <h1>News & Updates</h1>
                <ul class="breadcrumb-list">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li>News & Update</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>

 <div class="blog-details-page pt-130 mb-130">
    <div class="container">
       <div class="row g-lg-4 gy-5">
          <div class="col-lg-10" style="margin:0 auto">
             <div class="post-thumb mb-25">
                <img src="assets/img/inner-pages/blog-dt-big.jpg" alt>
             </div>
             <div class="post-tag-and-title">
                <ul class="tags">
                   <li>
                      <a href="blog-standard.html">
                         <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <path d="M7.58455 3.09152C7.58455 3.4429 7.72414 3.7799 7.9726 4.02837C8.22107 4.27684 8.55807 4.41643 8.90946 4.41643C9.26085 4.41643 9.59785 4.27684 9.84632 4.02837C10.0948 3.7799 10.2344 3.4429 10.2344 3.09152C10.2344 2.74013 10.0948 2.40313 9.84632 2.15466C9.59785 1.90619 9.26085 1.7666 8.90946 1.7666C8.55807 1.7666 8.22107 1.90619 7.9726 2.15466C7.72414 2.40313 7.58455 2.74013 7.58455 3.09152ZM8.46782 3.09152C8.46782 2.97439 8.51435 2.86205 8.59718 2.77923C8.68 2.69641 8.79233 2.64988 8.90946 2.64988C9.02659 2.64988 9.13892 2.69641 9.22175 2.77923C9.30457 2.86205 9.3511 2.97439 9.3511 3.09152C9.3511 3.20865 9.30457 3.32098 9.22175 3.4038C9.13892 3.48662 9.02659 3.53315 8.90946 3.53315C8.79233 3.53315 8.68 3.48662 8.59718 3.4038C8.51435 3.32098 8.46782 3.20865 8.46782 3.09152Z"></path>
                            <path d="M11.1167 0H7.06602C6.83178 5.00265e-05 6.60715 0.093142 6.44154 0.2588L0.258612 6.44173C0.0930223 6.60737 0 6.832 0 7.06621C0 7.30042 0.0930223 7.52505 0.258612 7.69068L4.30932 11.7414C4.47495 11.907 4.69958 12 4.93379 12C5.168 12 5.39263 11.907 5.55827 11.7414L11.7412 5.55846C11.9069 5.39285 11.9999 5.16822 12 4.93398V0.883276C12 0.649017 11.9069 0.424352 11.7413 0.258706C11.5756 0.0930591 11.351 0 11.1167 0ZM11.1167 4.93398L4.93379 11.1169L0.883087 7.06621L7.06602 0.883276H11.1167V4.93398Z"></path>
                         </svg>
                         Consulting
                      </a>
                   </li>
                   <li>
                      <a href="blog-standard.html">
                         <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <g>
                               <path d="M6 5.25C6.09946 5.25 6.19484 5.28951 6.26517 5.35984C6.33549 5.43016 6.375 5.52554 6.375 5.625V6.75H7.5C7.59946 6.75 7.69484 6.78951 7.76517 6.85983C7.83549 6.93016 7.875 7.02554 7.875 7.125C7.875 7.22446 7.83549 7.31984 7.76517 7.39017C7.69484 7.46049 7.59946 7.5 7.5 7.5H6.375V8.625C6.375 8.72446 6.33549 8.81984 6.26517 8.89017C6.19484 8.96049 6.09946 9 6 9C5.90054 9 5.80516 8.96049 5.73484 8.89017C5.66451 8.81984 5.625 8.72446 5.625 8.625V7.5H4.5C4.40054 7.5 4.30516 7.46049 4.23484 7.39017C4.16451 7.31984 4.125 7.22446 4.125 7.125C4.125 7.02554 4.16451 6.93016 4.23484 6.85983C4.30516 6.78951 4.40054 6.75 4.5 6.75H5.625V5.625C5.625 5.52554 5.66451 5.43016 5.73484 5.35984C5.80516 5.28951 5.90054 5.25 6 5.25Z"></path>
                               <path d="M2.625 0C2.72446 0 2.81984 0.0395088 2.89016 0.109835C2.96049 0.180161 3 0.275544 3 0.375V0.75H9V0.375C9 0.275544 9.03951 0.180161 9.10983 0.109835C9.18016 0.0395088 9.27554 0 9.375 0C9.47446 0 9.56984 0.0395088 9.64017 0.109835C9.71049 0.180161 9.75 0.275544 9.75 0.375V0.75H10.5C10.8978 0.75 11.2794 0.908035 11.5607 1.18934C11.842 1.47064 12 1.85218 12 2.25V10.5C12 10.8978 11.842 11.2794 11.5607 11.5607C11.2794 11.842 10.8978 12 10.5 12H1.5C1.10218 12 0.720644 11.842 0.43934 11.5607C0.158035 11.2794 0 10.8978 0 10.5V2.25C0 1.85218 0.158035 1.47064 0.43934 1.18934C0.720644 0.908035 1.10218 0.75 1.5 0.75H2.25V0.375C2.25 0.275544 2.28951 0.180161 2.35984 0.109835C2.43016 0.0395088 2.52554 0 2.625 0ZM0.75 3V10.5C0.75 10.6989 0.829018 10.8897 0.96967 11.0303C1.11032 11.171 1.30109 11.25 1.5 11.25H10.5C10.6989 11.25 10.8897 11.171 11.0303 11.0303C11.171 10.8897 11.25 10.6989 11.25 10.5V3H0.75Z"></path>
                            </g>
                         </svg>
                         03 April, 2023
                      </a>
                   </li>
                </ul>
                <h2>Consulting Ethics: Navigating Moral Dilemmas in Client Relationships.</h2>
             </div>
             <p>In an era where environmental consciousness is becoming increasingly important, sustainable living has taken center stage. This blog post delves into the world of eco-friendly homes and green building, showcasing how these practices contribute to a greener future. Discover the latest trends and innovations in sustainable real estate, from energy-efficient designs to renewable materials. Explore the benefits of eco-friendly homes, such as reduced carbon footprint, lower utility costs, and improved indoor air quality. Gain insights into green building techniques, including passive design, solar panels, rainwater harvesting, and smart home technologies.</p>
             <p>The business consulting process involves a series of steps that consultants follow when working with clients to address specific challenges, improve operations, or achieve organizational goals. While the exact process may vary depending on the consulting firm and the nature of the engagemen.</p>
             <blockquote>
                <div class="quoat-icon">
                   <svg xmlns="http://www.w3.org/2000/svg" width="26" height="18" viewBox="0 0 26 18">
                      <path d="M20.6832 6.05443L20.4534 6.62147L21.0549 6.73371C23.6453 7.21714 25.5 9.46982 25.5 12.0337C25.5 13.573 24.8343 15.0529 23.6667 16.09C22.4982 17.1192 20.9207 17.6286 19.3329 17.4722C16.4907 17.1844 14.2846 14.6588 14.3404 11.7032C14.4201 7.67759 15.8945 5.07458 17.6289 3.38578C19.3761 1.68459 21.4158 0.884497 22.6452 0.531618L22.6591 0.527628L22.6728 0.52284C22.7152 0.507954 22.7704 0.5 22.8713 0.5C23.1425 0.5 23.3799 0.624329 23.5265 0.85037L23.5277 0.852289C23.7128 1.13485 23.6857 1.4981 23.4524 1.75822L23.4523 1.75827C22.2163 3.13698 21.2806 4.57999 20.6832 6.05443Z" stroke="white" />
                      <path d="M6.84136 6.05442L6.61159 6.62147L7.21303 6.73371C9.80353 7.21714 11.6582 9.46983 11.6582 12.0337C11.6582 13.573 10.9925 15.0529 9.82487 16.09C8.65615 17.1194 7.07865 17.6285 5.50008 17.4722C2.67976 17.1842 0.498651 14.7207 0.498651 11.8126V11.6985C0.579458 7.67556 2.05336 5.07393 3.7871 3.38579C5.53424 1.6846 7.574 0.884504 8.8034 0.531628L8.81731 0.527636L8.83096 0.522848C8.8734 0.507959 8.92859 0.500008 9.02944 0.500008C9.3007 0.500008 9.53807 0.624359 9.68459 0.850338L9.6859 0.852327C9.87103 1.13488 9.84386 1.49811 9.61059 1.75823L9.61054 1.75828C8.37446 3.13698 7.43881 4.57999 6.84136 6.05442Z" stroke="white" />
                   </svg>
                </div>
                <p>The business consulting process involves a series of steps that consultants follow when working with clients to address specific challenges, improve operations, or achieve organizational goals.</p>
                <cite>Rakhab Uddin</cite>
             </blockquote>
             <div class="row g-4 mb-20">
                <div class="col-sm-6">
                   <div class="blog-dt-img">
                      <img class="img-fluid" src="assets/img/inner-pages/blog-dt-sm1.jpg" alt>
                   </div>
                </div>
                <div class="col-sm-6">
                   <div class="blog-dt-img">
                      <img class="img-fluid" src="assets/img/inner-pages/blog-dt-sm2.jpg" alt>
                   </div>
                </div>
             </div>
             <p>Whether you're a lifelong car lover or simply intrigued by the world of cars, this exploration will leave you with a deepened understanding and appreciation for the artistry, innovation, and joy that cars and driving bring to our lives.</p>
             <div class="blog-tag-social-area">
                <div class="bolg-tag">
                   <h6>Tag:</h6>
                   <ul>
                      <li><a href="blog-standard-2.html">Industry,</a></li>
                      <li><a href="blog-standard-2.html">Marketing,</a></li>
                      <li><a href="blog-standard-2.html">Technology,</a></li>
                      <li><a href="blog-standard-2.html">Health Care</a></li>
                   </ul>
                </div>
                <div class="social-area">
                   <h6>Share:</h6>
                   <ul class="social-link d-flex align-items-center">
                      <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                      <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                      <li><a href="https://www.pinterest.com/"><i class="bx bxl-linkedin"></i></a></li>
                      <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                   </ul>
                </div>
             </div>
             <div class="row mb-100">
                <div class="col-lg-12">
                   <div class="details-navigation">
                      <div class="single-navigation">
                         <a class="arrow" href="#blog-details">
                            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                               <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                            </svg>
                         </a>
                         <div class="content">
                            <a href="blog-details-2.html">Prev Post</a>
                            <h6><a href="blog-details-2.html">Consulting vs. In-House Expertise: Finding the Right Balance</a></h6>
                         </div>
                      </div>
                      <div class="single-navigation two text-end">
                         <div class="content">
                            <a href="blog-details-2.html">Next Post</a>
                            <h6><a href="blog-details-2.html">Consulting Industry Adapts to the Changing Business Landscape</a></h6>
                         </div>
                         <a class="arrow" href="blog-details-2.html">
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
    </div>
 </div>
@endsection
