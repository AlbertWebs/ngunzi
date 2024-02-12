@extends('front.master-page')

@section('content')


 <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{asset('theme/assets/img/inner-pages/pexels-antony-trivet-13348192.jpg')}}');">
    <div class="company-name">Ngunzi & Associates</div>
    <div class="container-fluid one pl--95">
    <div class="row">
        <div class="col-lg-12">
            <div class="banner-content">
                <h1>Our Story</h1>
                <ul class="breadcrumb-list">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
      <div class="logo-section mb-130">
         <div class="container-fluid one">
            {{-- <div class="row">
               <div class="col-lg-12">
                  <div class="logo-wrapper">
                     <div class="logo-title">
                        <h6>
                           Our Trusted Partner
                           <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z"></path>
                           </svg>
                        </h6>
                     </div>
                     <div class="logo-area">
                        <div class="marquee_text2">
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-01.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-02.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-03.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-04.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-05.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-01.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-02.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-03.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-04.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-05.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-01.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-02.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-03.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-04.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-05.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-01.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-02.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-03.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-04.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-05.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-01.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-02.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-03.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-04.png')}}" alt></a>
                           <a href="#"><img src="{{asset('theme/assets/img/home1/company-logo-05.png')}}" alt></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div> --}}
         </div>
      </div>
      <div class="mission-section mb-130">
         <div class="container-fluid one pl--95">
            <div class="row g-lg-4 gy-5">
               <div class="col-lg-4">
                  <div class="mission-img">
                     <img src="{{asset('theme/assets/img/inner-pages/pexels-pixabay-53621.jpg')}}" alt>
                  </div>
               </div>
               <div class="col-lg-8 pl--95">
                  <div class="mission-content-wrap">
                     <div class="mission-content-top">
                        <div class="section-title1 w-890">
                           <h2>Provision of professional accounting, consultancy, and financial management services to organizations. </h2>
                        </div>
                        <p>
                            We are a seasoned Firm trading in the name Ngunzi & Associates. We have over 14 years in practical experience in different business environments which include, Medical, Digital Media, Legal, Logistics, Hospitality, Retail and Wholesale, businesses including Non-governmental organizations.
                            <br><br>
                            We have qualified team of Accountants at your disposal ready to handle any financial and tax assignments on behalf of all clients.
                        </p>

                     </div>
                     <div class="mission-content-bottom">
                        <h3>Our Mission</h3>
                        <p>

                            <h2>Empowering Financial Success through Expertise and Integrity</h2>
                            At Ngunzi & Associates, our mission is to empower individuals and businesses to achieve financial success by providing unparalleled expertise and unwavering integrity in financial and taxation services. We are committed to delivering personalized solutions that not only meet but exceed our clients' expectations, fostering long-term partnerships built on trust and transparency.
                        </p>
                        <p class="moretext">
                            We strive to simplify the complexities of financial management and taxation, offering a comprehensive suite of services tailored to the unique needs of each client. Our team of seasoned professionals is dedicated to staying abreast of ever-evolving financial landscapes and tax regulations, ensuring that our clients benefit from the latest insights and strategies.
                           <br><br>
                           Integrity is at the core of everything we do. We adhere to the highest ethical standards, maintaining the utmost confidentiality and reliability in handling our clients' financial matters. By fostering a culture of continuous improvement, innovation, and client-centricity, we aim to be the go-to partner for individuals and businesses seeking reliable, efficient, and forward-thinking financial and taxation services.
                           <br><br>
                           Through our commitment to excellence, we aspire to contribute to the financial well-being of our clients, helping them navigate the complexities of the financial world with confidence and peace of mind. At Ngunzi & Associates, we believe that everyone deserves financial success, and we are dedicated to being the catalyst that propels our clients toward their goals.
                        </p>
                        <a class="moreless-button">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="about-section2">
         <div class="about-top">
            <div class="container-fluid one pl--95">
               <div class="row">
                  <div class="col-xxl-10 col-lg-10" style="margin:0px auto">
                     <div class="about-content pr--95">
                        <div class="section-title1 two white mb-50">
                           <span>About Us</span>
                           <h6 style="color:#ffffff; font-weight:400">
                                {{--  --}}
                                Provision of professional accounting, consultancy, and financial management services to organizations. With a wide experience in we serve clients in various capacities ranging from book-keeping, financial management, Tax advisory, filing monthly and annual tax returns.<br><br>
                                Engaging Auditors on behalf of corporate clients and following up to ensure that audit assignment is well concluded, and a management letter issued to the client. The audit is done with the utmost degree of independence. Following up with my clients to ensure that the items highlighted in the management letter issued after the audit are addressed and if there are errors they are corrected in good time.<br><br>
                                We assist clients with cash flow management to ensure that invoices and bills are settled as and when they fall due. Through our guidance clients are able to make decisions on time and business opportunities are not missed out.<br><br>
                                Businesses are collapsing due to failure to maintain proper financial records and Ngunzi & Associates is here to assist business owners in with record keeping exercise. Poor record keeping leads to unrecognized assets and liabilities in the business books which has a direct impact on the business cash inflow or outflow. All business expenses have a direct impact on the business tax liability and if not recorded as and when incurred then business tax incident increases leading to unnecessary tax payment.<br><br>
                                Also, poor record keeping can lead to slow cash leaks that can eating all the business profit.

                                {{--  --}}
                           </h6>
                        </div>
                        <div class="review-and-feature">
                           {{-- <a href="#" class="review-area white">
                              <div class="review-name">
                                 <span>Review On</span>
                                 <img src="{{asset('theme/assets/img/home1/clutch-logo-white.svg')}}" alt>
                              </div>
                              <div class="review">
                                 <ul>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                 </ul>
                                 <span>(50 reviews)</span>
                              </div>
                           </a> --}}
                           <ul class="features">
                              <li>Problem Solving</li>
                              <li>Determine Probelm</li>
                              <li>Cost-Efficiency</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="cover-section" id="why">
        <div class="container-fluid one">
           <div class="col-lg-12">
              <div class="cover-wrapper">
                 <div class="row">
                    <div class="col-lg-12 gap-lg-5 gap-4 d-flex flex-lg-nowrap flex-wrap align-items-start justify-content-between">
                        <div class="why-choose-section ">
                            <div class="choose-content">
                                <div class="section-title1 two mb-50">
                                    <span>Why Choose Us</span>
                                    <h2>Business consulting is a professional service provided by individuals or firms to help
                                    organizations improve.
                                    </h2>
                                </div>
                                <div class="sulution-approach">
                                    <h3>Key Solution Approach :</h3>
                                    <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                            <path d="M12.1223 3.19025C12.163 3.23089 12.1953 3.27917 12.2174 3.33232C12.2394 3.38548 12.2508 3.44246 12.2508 3.5C12.2508 3.55755 12.2394 3.61453 12.2174 3.66768C12.1953 3.72084 12.163 3.76911 12.1223 3.80975L5.99725 9.93475C5.95661 9.9755 5.90833 10.0078 5.85518 10.0299C5.80203 10.0519 5.74505 10.0633 5.6875 10.0633C5.62996 10.0633 5.57298 10.0519 5.51982 10.0299C5.46667 10.0078 5.41839 9.9755 5.37775 9.93475L2.31525 6.87225C2.2331 6.7901 2.18695 6.67868 2.18695 6.5625C2.18695 6.44632 2.2331 6.3349 2.31525 6.25275C2.3974 6.1706 2.50882 6.12445 2.625 6.12445C2.74118 6.12445 2.8526 6.1706 2.93475 6.25275L5.6875 9.00638L11.5028 3.19025C11.5434 3.14951 11.5917 3.11719 11.6448 3.09513C11.698 3.07307 11.755 3.06172 11.8125 3.06172C11.87 3.06172 11.927 3.07307 11.9802 3.09513C12.0333 3.11719 12.0816 3.14951 12.1223 3.19025Z"></path>
                                        </svg>
                                        Expertise You Can Trust
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                            <path d="M12.1223 3.19025C12.163 3.23089 12.1953 3.27917 12.2174 3.33232C12.2394 3.38548 12.2508 3.44246 12.2508 3.5C12.2508 3.55755 12.2394 3.61453 12.2174 3.66768C12.1953 3.72084 12.163 3.76911 12.1223 3.80975L5.99725 9.93475C5.95661 9.9755 5.90833 10.0078 5.85518 10.0299C5.80203 10.0519 5.74505 10.0633 5.6875 10.0633C5.62996 10.0633 5.57298 10.0519 5.51982 10.0299C5.46667 10.0078 5.41839 9.9755 5.37775 9.93475L2.31525 6.87225C2.2331 6.7901 2.18695 6.67868 2.18695 6.5625C2.18695 6.44632 2.2331 6.3349 2.31525 6.25275C2.3974 6.1706 2.50882 6.12445 2.625 6.12445C2.74118 6.12445 2.8526 6.1706 2.93475 6.25275L5.6875 9.00638L11.5028 3.19025C11.5434 3.14951 11.5917 3.11719 11.6448 3.09513C11.698 3.07307 11.755 3.06172 11.8125 3.06172C11.87 3.06172 11.927 3.07307 11.9802 3.09513C12.0333 3.11719 12.0816 3.14951 12.1223 3.19025Z"></path>
                                        </svg>
                                        Tailored Solutions for Your Needs:
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                            <path d="M12.1223 3.19025C12.163 3.23089 12.1953 3.27917 12.2174 3.33232C12.2394 3.38548 12.2508 3.44246 12.2508 3.5C12.2508 3.55755 12.2394 3.61453 12.2174 3.66768C12.1953 3.72084 12.163 3.76911 12.1223 3.80975L5.99725 9.93475C5.95661 9.9755 5.90833 10.0078 5.85518 10.0299C5.80203 10.0519 5.74505 10.0633 5.6875 10.0633C5.62996 10.0633 5.57298 10.0519 5.51982 10.0299C5.46667 10.0078 5.41839 9.9755 5.37775 9.93475L2.31525 6.87225C2.2331 6.7901 2.18695 6.67868 2.18695 6.5625C2.18695 6.44632 2.2331 6.3349 2.31525 6.25275C2.3974 6.1706 2.50882 6.12445 2.625 6.12445C2.74118 6.12445 2.8526 6.1706 2.93475 6.25275L5.6875 9.00638L11.5028 3.19025C11.5434 3.14951 11.5917 3.11719 11.6448 3.09513C11.698 3.07307 11.755 3.06172 11.8125 3.06172C11.87 3.06172 11.927 3.07307 11.9802 3.09513C12.0333 3.11719 12.0816 3.14951 12.1223 3.19025Z"></path>
                                        </svg>
                                        Transparent and Ethical Practices:
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                            <path d="M12.1223 3.19025C12.163 3.23089 12.1953 3.27917 12.2174 3.33232C12.2394 3.38548 12.2508 3.44246 12.2508 3.5C12.2508 3.55755 12.2394 3.61453 12.2174 3.66768C12.1953 3.72084 12.163 3.76911 12.1223 3.80975L5.99725 9.93475C5.95661 9.9755 5.90833 10.0078 5.85518 10.0299C5.80203 10.0519 5.74505 10.0633 5.6875 10.0633C5.62996 10.0633 5.57298 10.0519 5.51982 10.0299C5.46667 10.0078 5.41839 9.9755 5.37775 9.93475L2.31525 6.87225C2.2331 6.7901 2.18695 6.67868 2.18695 6.5625C2.18695 6.44632 2.2331 6.3349 2.31525 6.25275C2.3974 6.1706 2.50882 6.12445 2.625 6.12445C2.74118 6.12445 2.8526 6.1706 2.93475 6.25275L5.6875 9.00638L11.5028 3.19025C11.5434 3.14951 11.5917 3.11719 11.6448 3.09513C11.698 3.07307 11.755 3.06172 11.8125 3.06172C11.87 3.06172 11.927 3.07307 11.9802 3.09513C12.0333 3.11719 12.0816 3.14951 12.1223 3.19025Z"></path>
                                        </svg>
                                        Proactive Approach to Compliance:
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                            <path d="M12.1223 3.19025C12.163 3.23089 12.1953 3.27917 12.2174 3.33232C12.2394 3.38548 12.2508 3.44246 12.2508 3.5C12.2508 3.55755 12.2394 3.61453 12.2174 3.66768C12.1953 3.72084 12.163 3.76911 12.1223 3.80975L5.99725 9.93475C5.95661 9.9755 5.90833 10.0078 5.85518 10.0299C5.80203 10.0519 5.74505 10.0633 5.6875 10.0633C5.62996 10.0633 5.57298 10.0519 5.51982 10.0299C5.46667 10.0078 5.41839 9.9755 5.37775 9.93475L2.31525 6.87225C2.2331 6.7901 2.18695 6.67868 2.18695 6.5625C2.18695 6.44632 2.2331 6.3349 2.31525 6.25275C2.3974 6.1706 2.50882 6.12445 2.625 6.12445C2.74118 6.12445 2.8526 6.1706 2.93475 6.25275L5.6875 9.00638L11.5028 3.19025C11.5434 3.14951 11.5917 3.11719 11.6448 3.09513C11.698 3.07307 11.755 3.06172 11.8125 3.06172C11.87 3.06172 11.927 3.07307 11.9802 3.09513C12.0333 3.11719 12.0816 3.14951 12.1223 3.19025Z"></path>
                                        </svg>
                                        Efficiency and Timeliness:
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                            <path d="M12.1223 3.19025C12.163 3.23089 12.1953 3.27917 12.2174 3.33232C12.2394 3.38548 12.2508 3.44246 12.2508 3.5C12.2508 3.55755 12.2394 3.61453 12.2174 3.66768C12.1953 3.72084 12.163 3.76911 12.1223 3.80975L5.99725 9.93475C5.95661 9.9755 5.90833 10.0078 5.85518 10.0299C5.80203 10.0519 5.74505 10.0633 5.6875 10.0633C5.62996 10.0633 5.57298 10.0519 5.51982 10.0299C5.46667 10.0078 5.41839 9.9755 5.37775 9.93475L2.31525 6.87225C2.2331 6.7901 2.18695 6.67868 2.18695 6.5625C2.18695 6.44632 2.2331 6.3349 2.31525 6.25275C2.3974 6.1706 2.50882 6.12445 2.625 6.12445C2.74118 6.12445 2.8526 6.1706 2.93475 6.25275L5.6875 9.00638L11.5028 3.19025C11.5434 3.14951 11.5917 3.11719 11.6448 3.09513C11.698 3.07307 11.755 3.06172 11.8125 3.06172C11.87 3.06172 11.927 3.07307 11.9802 3.09513C12.0333 3.11719 12.0816 3.14951 12.1223 3.19025Z"></path>
                                        </svg>
                                        Client-Centric Focus:
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                            <path d="M12.1223 3.19025C12.163 3.23089 12.1953 3.27917 12.2174 3.33232C12.2394 3.38548 12.2508 3.44246 12.2508 3.5C12.2508 3.55755 12.2394 3.61453 12.2174 3.66768C12.1953 3.72084 12.163 3.76911 12.1223 3.80975L5.99725 9.93475C5.95661 9.9755 5.90833 10.0078 5.85518 10.0299C5.80203 10.0519 5.74505 10.0633 5.6875 10.0633C5.62996 10.0633 5.57298 10.0519 5.51982 10.0299C5.46667 10.0078 5.41839 9.9755 5.37775 9.93475L2.31525 6.87225C2.2331 6.7901 2.18695 6.67868 2.18695 6.5625C2.18695 6.44632 2.2331 6.3349 2.31525 6.25275C2.3974 6.1706 2.50882 6.12445 2.625 6.12445C2.74118 6.12445 2.8526 6.1706 2.93475 6.25275L5.6875 9.00638L11.5028 3.19025C11.5434 3.14951 11.5917 3.11719 11.6448 3.09513C11.698 3.07307 11.755 3.06172 11.8125 3.06172C11.87 3.06172 11.927 3.07307 11.9802 3.09513C12.0333 3.11719 12.0816 3.14951 12.1223 3.19025Z"></path>
                                        </svg>
                                        Innovation and Technology:
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                            <path d="M12.1223 3.19025C12.163 3.23089 12.1953 3.27917 12.2174 3.33232C12.2394 3.38548 12.2508 3.44246 12.2508 3.5C12.2508 3.55755 12.2394 3.61453 12.2174 3.66768C12.1953 3.72084 12.163 3.76911 12.1223 3.80975L5.99725 9.93475C5.95661 9.9755 5.90833 10.0078 5.85518 10.0299C5.80203 10.0519 5.74505 10.0633 5.6875 10.0633C5.62996 10.0633 5.57298 10.0519 5.51982 10.0299C5.46667 10.0078 5.41839 9.9755 5.37775 9.93475L2.31525 6.87225C2.2331 6.7901 2.18695 6.67868 2.18695 6.5625C2.18695 6.44632 2.2331 6.3349 2.31525 6.25275C2.3974 6.1706 2.50882 6.12445 2.625 6.12445C2.74118 6.12445 2.8526 6.1706 2.93475 6.25275L5.6875 9.00638L11.5028 3.19025C11.5434 3.14951 11.5917 3.11719 11.6448 3.09513C11.698 3.07307 11.755 3.06172 11.8125 3.06172C11.87 3.06172 11.927 3.07307 11.9802 3.09513C12.0333 3.11719 12.0816 3.14951 12.1223 3.19025Z"></path>
                                        </svg>
                                        Long-Term Partnerships:
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
      </div>


      <div class="people-section mb-130 mt-100">
        <div class="container-fluid one pl--95">
           <div class="row g-lg-4 gy-5">
              <div class="col-lg-5">
                 <div class="people-left-content pr--95">
                    <div class="section-title1 two">
                       <span>Our People</span>
                       <h2>Excellent Service Provided by Our Superb Consultants.</h2>
                       <a class="primary-btn1 btn-hover" href="{{url('/')}}/who-we-are/#team">
                          Explore People
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z" />
                          </svg>
                          <span></span>
                       </a>
                    </div>
                    {{-- <div class="find-job-card">
                       <span></span>
                       <div class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M35.6529 3.71829L0 39.3693L2.63069 42L38.2817 6.34713V30.9976H42V0H11.0024V3.71829H35.6529Z" />
                          </svg>
                       </div>
                       <div class="content">
                          <h5>Golden Opportunity!</h5>
                          <p>Do you want to be a consultant? <a href="career.html">Find Jobs</a></p>
                       </div>
                    </div> --}}
                 </div>
              </div>
              <div class="col-lg-7">
                 <div class="row g-4">
                    <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                       <div class="people-card1">
                          <div class="people-flip-box-layer people-flip-box-front">
                             <div class="people-img">
                                <img src="{{url('/')}}/uploads/team/1622630835448.jpeg" alt>
                             </div>
                             <div class="content">
                                <h5><a href="#">Mr. Albert Muhatia</a></h5>
                                <span>IT Consultant</span>
                             </div>
                          </div>
                          <div class="people-flip-box-layer people-flip-box-back">
                             <div class="social-and-comtent">
                                <div class="social-and-btn">
                                   <ul class="social-icon">
                                      <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                                      <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                   </ul>
                                   <div class="explore-btn">
                                      <a href="people-details.html">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z" />
                                         </svg>
                                      </a>
                                   </div>
                                </div>
                                <p>“ The consultant then develops and implements a strategy or solution to address the client's needs.”</p>
                             </div>
                             <div class="phone-area">
                                <div class="icon">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 26 26">
                                      <path d="M13.5367 14.7299C12.5654 14.7253 11.6005 14.573 10.675 14.2784C9.94863 14.0353 9.29972 13.6039 8.79454 13.0282C8.28935 12.4524 7.94598 11.7529 7.79946 11.0011C7.47317 9.42986 8.06813 7.76849 9.43051 6.44251C9.57687 6.30005 9.72894 6.16358 9.88637 6.03345C10.5736 5.45807 11.3905 5.05858 12.2666 4.86946C13.1428 4.68035 14.0517 4.70729 14.9151 4.94797C15.7431 5.21236 16.469 5.72653 16.9932 6.4199C17.5174 7.11328 17.8141 7.95188 17.8427 8.82061C17.9062 9.84533 17.5722 10.8551 16.9102 11.6398C16.6597 11.9553 16.3272 12.1956 15.9491 12.3344C15.571 12.4732 15.162 12.5052 14.7669 12.4267C14.6039 12.3929 14.4494 12.3265 14.3126 12.2316C14.1758 12.1367 14.0596 12.0151 13.9709 11.8743C13.8913 11.7374 13.8401 11.5859 13.8205 11.4288C13.8008 11.2717 13.8131 11.1122 13.8565 10.9599C14.2357 9.52736 14.6209 7.35033 14.6248 7.32866C14.6347 7.27261 14.6555 7.21906 14.6861 7.17106C14.7167 7.12307 14.7565 7.08157 14.8031 7.04894C14.8498 7.0163 14.9024 6.99317 14.9579 6.98087C15.0135 6.96857 15.071 6.96733 15.127 6.97724C15.1831 6.98714 15.2366 7.00798 15.2846 7.03858C15.3326 7.06918 15.3741 7.10893 15.4067 7.15557C15.4394 7.2022 15.4625 7.25481 15.4748 7.31038C15.4871 7.36596 15.4883 7.42341 15.4784 7.47946C15.4624 7.57003 15.0828 9.71413 14.6946 11.1814C14.6809 11.2216 14.6756 11.2643 14.6789 11.3067C14.6823 11.3491 14.6942 11.3903 14.7141 11.4279C14.774 11.5108 14.8644 11.5664 14.9654 11.5826C15.2073 11.623 15.4557 11.5965 15.6836 11.506C15.9116 11.4155 16.1105 11.2645 16.2589 11.0691C16.773 10.4541 17.0306 9.66472 16.9782 8.86481C16.9575 8.17325 16.7233 7.50504 16.3078 6.95187C15.8923 6.3987 15.3157 5.98767 14.6573 5.77519C13.9319 5.57566 13.1689 5.55562 12.434 5.7168C11.6992 5.87798 11.0146 6.21553 10.4393 6.70034C10.3002 6.81604 10.1646 6.93694 10.0346 7.06347C9.36117 7.71866 8.28522 9.07844 8.64792 10.8247C8.76766 11.4243 9.04196 11.9821 9.44365 12.443C9.84535 12.9039 10.3605 13.2519 10.938 13.4524C12.9703 14.1007 15.891 14.1791 17.4293 12.266C17.5022 12.1793 17.6061 12.1246 17.7188 12.1136C17.8315 12.1025 17.944 12.1361 18.0323 12.207C18.1206 12.2779 18.1776 12.3805 18.1912 12.493C18.2047 12.6054 18.1737 12.7186 18.1048 12.8085C16.9669 14.2238 15.2353 14.7299 13.5367 14.7299Z"></path>
                                      <path d="M12.0532 12.4837C11.5951 12.4917 11.1482 12.3416 10.7879 12.0586C9.95631 11.393 9.93334 10.2365 10.1665 9.44911C10.2453 9.18694 10.3506 8.93345 10.4815 8.69295C10.8066 8.03693 11.3265 7.49738 11.97 7.14814C12.3603 6.94569 12.8053 6.87413 13.2394 6.94404C13.6735 7.01396 14.0736 7.22164 14.3806 7.5364C14.6933 7.87907 14.9288 8.28484 15.0713 8.72632C15.1071 8.83391 15.0993 8.95127 15.0496 9.05319C14.9999 9.15511 14.9122 9.23348 14.8054 9.27148C14.6985 9.30948 14.581 9.30408 14.4781 9.25643C14.3752 9.20879 14.2951 9.1227 14.2549 9.01665C14.1522 8.69059 13.9814 8.39004 13.754 8.13483C13.5752 7.95191 13.3415 7.83246 13.0885 7.79468C12.8355 7.7569 12.5771 7.80284 12.3526 7.92553C11.87 8.1977 11.4822 8.61094 11.2411 9.10981C11.1399 9.2968 11.0581 9.4937 10.9972 9.6974C10.8286 10.2668 10.8659 11.0104 11.3304 11.3822C11.8382 11.7904 12.6954 11.6179 13.1777 11.2019C13.5369 10.8783 13.8455 10.5026 14.0933 10.0874C14.1233 10.039 14.1625 9.99704 14.2088 9.96384C14.255 9.93064 14.3074 9.90687 14.3628 9.8939C14.4182 9.88092 14.4757 9.87899 14.5318 9.88821C14.588 9.89743 14.6418 9.91763 14.6902 9.94765C14.7386 9.97766 14.7805 10.0169 14.8137 10.0632C14.8469 10.1094 14.8707 10.1617 14.8837 10.2172C14.8967 10.2726 14.8986 10.33 14.8894 10.3862C14.8801 10.4424 14.8599 10.4962 14.8299 10.5446C14.5362 11.0337 14.1706 11.4759 13.7453 11.8562C13.2715 12.256 12.6731 12.4779 12.0532 12.4837Z"></path>
                                      <path d="M24.6996 26.0015H1.29998C0.955309 26.0011 0.624854 25.864 0.381135 25.6203C0.137416 25.3766 0.000344239 25.0462 8.47364e-08 24.7015V8.66841C-5.14206e-05 8.58603 0.023378 8.50535 0.0675423 8.43581C0.111707 8.36628 0.174776 8.31077 0.249359 8.2758C0.323942 8.24083 0.406948 8.22784 0.488649 8.23836C0.57035 8.24887 0.647361 8.28246 0.710655 8.33518L11.3428 17.1716C11.8091 17.5569 12.3952 17.7677 13.0002 17.7677C13.6052 17.7677 14.1913 17.5569 14.6577 17.1716L25.2889 8.33474C25.3523 8.282 25.4293 8.24841 25.511 8.23791C25.5928 8.22741 25.6758 8.24043 25.7504 8.27546C25.825 8.31048 25.8881 8.36605 25.9322 8.43565C25.9763 8.50525 25.9997 8.58599 25.9996 8.66841V24.7015C25.9992 25.0462 25.8622 25.3766 25.6184 25.6203C25.3747 25.864 25.0443 26.0011 24.6996 26.0015ZM0.866653 9.59183V24.7015C0.866653 24.9407 1.06078 25.1348 1.29998 25.1348H24.6996C24.8145 25.1348 24.9247 25.0892 25.006 25.0079C25.0873 24.9266 25.1329 24.8164 25.1329 24.7015V9.59183L15.2106 17.838C14.5887 18.352 13.807 18.6333 13.0002 18.6335C12.1933 18.6336 11.4116 18.3527 10.7894 17.8389L0.866653 9.59183Z"></path>
                                      <path d="M0.434172 9.10179C0.342147 9.10197 0.252454 9.07285 0.178087 9.01865C0.103719 8.96444 0.0485401 8.88797 0.020542 8.8003C-0.00745601 8.71264 -0.00681877 8.61834 0.0223615 8.53106C0.0515417 8.44379 0.10775 8.36807 0.182842 8.31487L4.08278 5.55025C4.17656 5.48377 4.29291 5.45726 4.40623 5.47656C4.51955 5.49586 4.62057 5.55939 4.68705 5.65316C4.75354 5.74694 4.78005 5.86329 4.76075 5.97662C4.74145 6.08994 4.67792 6.19095 4.58414 6.25744L0.684201 9.02206C0.611181 9.074 0.52378 9.10187 0.434172 9.10179ZM25.5662 9.10179C25.4766 9.10187 25.3892 9.074 25.3162 9.02206L21.4163 6.25744C21.3235 6.19062 21.2609 6.08984 21.242 5.97706C21.2232 5.86427 21.2498 5.74862 21.3159 5.65531C21.382 5.56201 21.4823 5.4986 21.5949 5.47892C21.7075 5.45924 21.8234 5.48488 21.9172 5.55025L25.8171 8.31487C25.8922 8.36802 25.9483 8.44367 25.9775 8.53086C26.0067 8.61805 26.0075 8.71227 25.9796 8.79989C25.9517 8.88751 25.8966 8.96399 25.8224 9.01826C25.7482 9.07253 25.6582 9.10179 25.5662 9.10179ZM17.0041 3.03522C16.9144 3.0353 16.8269 3.00744 16.7537 2.95549L14.6824 1.48651C14.2165 1.09272 13.6271 0.874976 13.0171 0.871254C12.4071 0.867532 11.8151 1.07807 11.3445 1.46615L9.24716 2.95549C9.15339 3.02198 9.03704 3.04848 8.92371 3.02918C8.81039 3.00988 8.70937 2.94635 8.64289 2.85258C8.57641 2.7588 8.5499 2.64245 8.5692 2.52912C8.5885 2.4158 8.65203 2.31479 8.7458 2.2483L10.8171 0.779325C11.4376 0.271931 12.2154 -0.00360176 13.017 3.55561e-05C13.8186 0.00367287 14.5938 0.286253 15.2097 0.799258L17.255 2.2483C17.3301 2.3015 17.3863 2.37722 17.4155 2.46449C17.4447 2.55177 17.4453 2.64607 17.4173 2.73373C17.3893 2.8214 17.3342 2.89787 17.2598 2.95208C17.1854 3.00628 17.0957 3.0354 17.0037 3.03522H17.0041ZM0.715401 25.7675C0.626173 25.7677 0.539066 25.7403 0.465979 25.6891C0.392892 25.638 0.337387 25.5655 0.307046 25.4815C0.276706 25.3976 0.273008 25.3064 0.296459 25.2203C0.31991 25.1342 0.369366 25.0575 0.438072 25.0005L10.3266 16.7847C10.3704 16.7483 10.4209 16.7209 10.4753 16.7041C10.5296 16.6873 10.5868 16.6813 10.6435 16.6865C10.7001 16.6918 10.7552 16.7082 10.8056 16.7347C10.8559 16.7612 10.9006 16.7974 10.9369 16.8412C10.9733 16.885 11.0007 16.9355 11.0175 16.9899C11.0343 17.0443 11.0403 17.1014 11.0351 17.1581C11.0298 17.2148 11.0134 17.2699 10.9869 17.3202C10.9604 17.3706 10.9242 17.4152 10.8804 17.4516L0.991863 25.6674C0.914246 25.7321 0.816424 25.7675 0.715401 25.7675ZM25.2846 25.7675C25.1835 25.7676 25.0857 25.7322 25.0081 25.6674L15.1196 17.4516C15.0747 17.4156 15.0374 17.371 15.0099 17.3204C14.9824 17.2699 14.9652 17.2143 14.9594 17.1571C14.9536 17.0998 14.9593 17.042 14.9761 16.9869C14.9929 16.9319 15.0205 16.8807 15.0573 16.8365C15.0941 16.7922 15.1393 16.7557 15.1903 16.7291C15.2414 16.7025 15.2972 16.6863 15.3546 16.6816C15.4119 16.6768 15.4697 16.6835 15.5244 16.7013C15.5791 16.719 15.6298 16.7475 15.6734 16.7851L25.5619 25.001C25.6306 25.0579 25.6801 25.1347 25.7035 25.2207C25.727 25.3068 25.7233 25.3981 25.6929 25.482C25.6626 25.5659 25.6071 25.6384 25.534 25.6896C25.4609 25.7408 25.3738 25.7677 25.2846 25.7675Z"></path>
                                      <path d="M21.6668 12.3427C21.5518 12.3427 21.4416 12.2971 21.3604 12.2158C21.2791 12.1346 21.2334 12.0243 21.2334 11.9094V3.03836C21.2321 3.04703 21.2148 3.03489 21.1858 3.03489H4.81471C4.80523 3.03432 4.79574 3.03568 4.7868 3.03888C4.77786 3.04208 4.76967 3.04707 4.76271 3.05353L4.76704 11.9094C4.76704 12.0243 4.72139 12.1346 4.64013 12.2158C4.55886 12.2971 4.44864 12.3427 4.33372 12.3427C4.21879 12.3427 4.10857 12.2971 4.02731 12.2158C3.94604 12.1346 3.90039 12.0243 3.90039 11.9094V3.03489C3.9072 2.79889 4.00723 2.57519 4.17859 2.41276C4.34994 2.25033 4.57867 2.16241 4.81471 2.16824H21.1858C21.4218 2.16241 21.6505 2.25033 21.8219 2.41276C21.9933 2.57519 22.0933 2.79889 22.1001 3.03489V11.9094C22.1001 12.0243 22.0544 12.1346 21.9732 12.2158C21.8919 12.2971 21.7817 12.3427 21.6668 12.3427Z"></path>
                                   </svg>
                                </div>
                                <div class="content">
                                  <a href="mailto:info@Ngunziassociates.com"><span>info@Ngunziassociates.com</span></a>
                               </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                       <div class="people-card1">
                          <div class="people-flip-box-layer people-flip-box-front">
                             <div class="people-img">
                                <img src="{{url('/')}}/uploads/team/1622630835448.jpeg" alt>
                             </div>
                             <div class="content">
                               <h5><a href="#">Mr. Albert Muhatia</a></h5>
                               <span>IT Consultant</span>
                            </div>
                          </div>
                          <div class="people-flip-box-layer people-flip-box-back">
                             <div class="social-and-comtent">
                                <div class="social-and-btn">
                                   <ul class="social-icon">
                                      <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                                      <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                   </ul>
                                   <div class="explore-btn">
                                      <a href="people-details.html">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z" />
                                         </svg>
                                      </a>
                                   </div>
                                </div>
                                <p>“ The consultant then develops and implements a strategy or solution to address the client's needs.”</p>
                             </div>
                             <div class="phone-area">
                                <div class="icon">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 26 26">
                                      <path d="M13.5367 14.7299C12.5654 14.7253 11.6005 14.573 10.675 14.2784C9.94863 14.0353 9.29972 13.6039 8.79454 13.0282C8.28935 12.4524 7.94598 11.7529 7.79946 11.0011C7.47317 9.42986 8.06813 7.76849 9.43051 6.44251C9.57687 6.30005 9.72894 6.16358 9.88637 6.03345C10.5736 5.45807 11.3905 5.05858 12.2666 4.86946C13.1428 4.68035 14.0517 4.70729 14.9151 4.94797C15.7431 5.21236 16.469 5.72653 16.9932 6.4199C17.5174 7.11328 17.8141 7.95188 17.8427 8.82061C17.9062 9.84533 17.5722 10.8551 16.9102 11.6398C16.6597 11.9553 16.3272 12.1956 15.9491 12.3344C15.571 12.4732 15.162 12.5052 14.7669 12.4267C14.6039 12.3929 14.4494 12.3265 14.3126 12.2316C14.1758 12.1367 14.0596 12.0151 13.9709 11.8743C13.8913 11.7374 13.8401 11.5859 13.8205 11.4288C13.8008 11.2717 13.8131 11.1122 13.8565 10.9599C14.2357 9.52736 14.6209 7.35033 14.6248 7.32866C14.6347 7.27261 14.6555 7.21906 14.6861 7.17106C14.7167 7.12307 14.7565 7.08157 14.8031 7.04894C14.8498 7.0163 14.9024 6.99317 14.9579 6.98087C15.0135 6.96857 15.071 6.96733 15.127 6.97724C15.1831 6.98714 15.2366 7.00798 15.2846 7.03858C15.3326 7.06918 15.3741 7.10893 15.4067 7.15557C15.4394 7.2022 15.4625 7.25481 15.4748 7.31038C15.4871 7.36596 15.4883 7.42341 15.4784 7.47946C15.4624 7.57003 15.0828 9.71413 14.6946 11.1814C14.6809 11.2216 14.6756 11.2643 14.6789 11.3067C14.6823 11.3491 14.6942 11.3903 14.7141 11.4279C14.774 11.5108 14.8644 11.5664 14.9654 11.5826C15.2073 11.623 15.4557 11.5965 15.6836 11.506C15.9116 11.4155 16.1105 11.2645 16.2589 11.0691C16.773 10.4541 17.0306 9.66472 16.9782 8.86481C16.9575 8.17325 16.7233 7.50504 16.3078 6.95187C15.8923 6.3987 15.3157 5.98767 14.6573 5.77519C13.9319 5.57566 13.1689 5.55562 12.434 5.7168C11.6992 5.87798 11.0146 6.21553 10.4393 6.70034C10.3002 6.81604 10.1646 6.93694 10.0346 7.06347C9.36117 7.71866 8.28522 9.07844 8.64792 10.8247C8.76766 11.4243 9.04196 11.9821 9.44365 12.443C9.84535 12.9039 10.3605 13.2519 10.938 13.4524C12.9703 14.1007 15.891 14.1791 17.4293 12.266C17.5022 12.1793 17.6061 12.1246 17.7188 12.1136C17.8315 12.1025 17.944 12.1361 18.0323 12.207C18.1206 12.2779 18.1776 12.3805 18.1912 12.493C18.2047 12.6054 18.1737 12.7186 18.1048 12.8085C16.9669 14.2238 15.2353 14.7299 13.5367 14.7299Z"></path>
                                      <path d="M12.0532 12.4837C11.5951 12.4917 11.1482 12.3416 10.7879 12.0586C9.95631 11.393 9.93334 10.2365 10.1665 9.44911C10.2453 9.18694 10.3506 8.93345 10.4815 8.69295C10.8066 8.03693 11.3265 7.49738 11.97 7.14814C12.3603 6.94569 12.8053 6.87413 13.2394 6.94404C13.6735 7.01396 14.0736 7.22164 14.3806 7.5364C14.6933 7.87907 14.9288 8.28484 15.0713 8.72632C15.1071 8.83391 15.0993 8.95127 15.0496 9.05319C14.9999 9.15511 14.9122 9.23348 14.8054 9.27148C14.6985 9.30948 14.581 9.30408 14.4781 9.25643C14.3752 9.20879 14.2951 9.1227 14.2549 9.01665C14.1522 8.69059 13.9814 8.39004 13.754 8.13483C13.5752 7.95191 13.3415 7.83246 13.0885 7.79468C12.8355 7.7569 12.5771 7.80284 12.3526 7.92553C11.87 8.1977 11.4822 8.61094 11.2411 9.10981C11.1399 9.2968 11.0581 9.4937 10.9972 9.6974C10.8286 10.2668 10.8659 11.0104 11.3304 11.3822C11.8382 11.7904 12.6954 11.6179 13.1777 11.2019C13.5369 10.8783 13.8455 10.5026 14.0933 10.0874C14.1233 10.039 14.1625 9.99704 14.2088 9.96384C14.255 9.93064 14.3074 9.90687 14.3628 9.8939C14.4182 9.88092 14.4757 9.87899 14.5318 9.88821C14.588 9.89743 14.6418 9.91763 14.6902 9.94765C14.7386 9.97766 14.7805 10.0169 14.8137 10.0632C14.8469 10.1094 14.8707 10.1617 14.8837 10.2172C14.8967 10.2726 14.8986 10.33 14.8894 10.3862C14.8801 10.4424 14.8599 10.4962 14.8299 10.5446C14.5362 11.0337 14.1706 11.4759 13.7453 11.8562C13.2715 12.256 12.6731 12.4779 12.0532 12.4837Z"></path>
                                      <path d="M24.6996 26.0015H1.29998C0.955309 26.0011 0.624854 25.864 0.381135 25.6203C0.137416 25.3766 0.000344239 25.0462 8.47364e-08 24.7015V8.66841C-5.14206e-05 8.58603 0.023378 8.50535 0.0675423 8.43581C0.111707 8.36628 0.174776 8.31077 0.249359 8.2758C0.323942 8.24083 0.406948 8.22784 0.488649 8.23836C0.57035 8.24887 0.647361 8.28246 0.710655 8.33518L11.3428 17.1716C11.8091 17.5569 12.3952 17.7677 13.0002 17.7677C13.6052 17.7677 14.1913 17.5569 14.6577 17.1716L25.2889 8.33474C25.3523 8.282 25.4293 8.24841 25.511 8.23791C25.5928 8.22741 25.6758 8.24043 25.7504 8.27546C25.825 8.31048 25.8881 8.36605 25.9322 8.43565C25.9763 8.50525 25.9997 8.58599 25.9996 8.66841V24.7015C25.9992 25.0462 25.8622 25.3766 25.6184 25.6203C25.3747 25.864 25.0443 26.0011 24.6996 26.0015ZM0.866653 9.59183V24.7015C0.866653 24.9407 1.06078 25.1348 1.29998 25.1348H24.6996C24.8145 25.1348 24.9247 25.0892 25.006 25.0079C25.0873 24.9266 25.1329 24.8164 25.1329 24.7015V9.59183L15.2106 17.838C14.5887 18.352 13.807 18.6333 13.0002 18.6335C12.1933 18.6336 11.4116 18.3527 10.7894 17.8389L0.866653 9.59183Z"></path>
                                      <path d="M0.434172 9.10179C0.342147 9.10197 0.252454 9.07285 0.178087 9.01865C0.103719 8.96444 0.0485401 8.88797 0.020542 8.8003C-0.00745601 8.71264 -0.00681877 8.61834 0.0223615 8.53106C0.0515417 8.44379 0.10775 8.36807 0.182842 8.31487L4.08278 5.55025C4.17656 5.48377 4.29291 5.45726 4.40623 5.47656C4.51955 5.49586 4.62057 5.55939 4.68705 5.65316C4.75354 5.74694 4.78005 5.86329 4.76075 5.97662C4.74145 6.08994 4.67792 6.19095 4.58414 6.25744L0.684201 9.02206C0.611181 9.074 0.52378 9.10187 0.434172 9.10179ZM25.5662 9.10179C25.4766 9.10187 25.3892 9.074 25.3162 9.02206L21.4163 6.25744C21.3235 6.19062 21.2609 6.08984 21.242 5.97706C21.2232 5.86427 21.2498 5.74862 21.3159 5.65531C21.382 5.56201 21.4823 5.4986 21.5949 5.47892C21.7075 5.45924 21.8234 5.48488 21.9172 5.55025L25.8171 8.31487C25.8922 8.36802 25.9483 8.44367 25.9775 8.53086C26.0067 8.61805 26.0075 8.71227 25.9796 8.79989C25.9517 8.88751 25.8966 8.96399 25.8224 9.01826C25.7482 9.07253 25.6582 9.10179 25.5662 9.10179ZM17.0041 3.03522C16.9144 3.0353 16.8269 3.00744 16.7537 2.95549L14.6824 1.48651C14.2165 1.09272 13.6271 0.874976 13.0171 0.871254C12.4071 0.867532 11.8151 1.07807 11.3445 1.46615L9.24716 2.95549C9.15339 3.02198 9.03704 3.04848 8.92371 3.02918C8.81039 3.00988 8.70937 2.94635 8.64289 2.85258C8.57641 2.7588 8.5499 2.64245 8.5692 2.52912C8.5885 2.4158 8.65203 2.31479 8.7458 2.2483L10.8171 0.779325C11.4376 0.271931 12.2154 -0.00360176 13.017 3.55561e-05C13.8186 0.00367287 14.5938 0.286253 15.2097 0.799258L17.255 2.2483C17.3301 2.3015 17.3863 2.37722 17.4155 2.46449C17.4447 2.55177 17.4453 2.64607 17.4173 2.73373C17.3893 2.8214 17.3342 2.89787 17.2598 2.95208C17.1854 3.00628 17.0957 3.0354 17.0037 3.03522H17.0041ZM0.715401 25.7675C0.626173 25.7677 0.539066 25.7403 0.465979 25.6891C0.392892 25.638 0.337387 25.5655 0.307046 25.4815C0.276706 25.3976 0.273008 25.3064 0.296459 25.2203C0.31991 25.1342 0.369366 25.0575 0.438072 25.0005L10.3266 16.7847C10.3704 16.7483 10.4209 16.7209 10.4753 16.7041C10.5296 16.6873 10.5868 16.6813 10.6435 16.6865C10.7001 16.6918 10.7552 16.7082 10.8056 16.7347C10.8559 16.7612 10.9006 16.7974 10.9369 16.8412C10.9733 16.885 11.0007 16.9355 11.0175 16.9899C11.0343 17.0443 11.0403 17.1014 11.0351 17.1581C11.0298 17.2148 11.0134 17.2699 10.9869 17.3202C10.9604 17.3706 10.9242 17.4152 10.8804 17.4516L0.991863 25.6674C0.914246 25.7321 0.816424 25.7675 0.715401 25.7675ZM25.2846 25.7675C25.1835 25.7676 25.0857 25.7322 25.0081 25.6674L15.1196 17.4516C15.0747 17.4156 15.0374 17.371 15.0099 17.3204C14.9824 17.2699 14.9652 17.2143 14.9594 17.1571C14.9536 17.0998 14.9593 17.042 14.9761 16.9869C14.9929 16.9319 15.0205 16.8807 15.0573 16.8365C15.0941 16.7922 15.1393 16.7557 15.1903 16.7291C15.2414 16.7025 15.2972 16.6863 15.3546 16.6816C15.4119 16.6768 15.4697 16.6835 15.5244 16.7013C15.5791 16.719 15.6298 16.7475 15.6734 16.7851L25.5619 25.001C25.6306 25.0579 25.6801 25.1347 25.7035 25.2207C25.727 25.3068 25.7233 25.3981 25.6929 25.482C25.6626 25.5659 25.6071 25.6384 25.534 25.6896C25.4609 25.7408 25.3738 25.7677 25.2846 25.7675Z"></path>
                                      <path d="M21.6668 12.3427C21.5518 12.3427 21.4416 12.2971 21.3604 12.2158C21.2791 12.1346 21.2334 12.0243 21.2334 11.9094V3.03836C21.2321 3.04703 21.2148 3.03489 21.1858 3.03489H4.81471C4.80523 3.03432 4.79574 3.03568 4.7868 3.03888C4.77786 3.04208 4.76967 3.04707 4.76271 3.05353L4.76704 11.9094C4.76704 12.0243 4.72139 12.1346 4.64013 12.2158C4.55886 12.2971 4.44864 12.3427 4.33372 12.3427C4.21879 12.3427 4.10857 12.2971 4.02731 12.2158C3.94604 12.1346 3.90039 12.0243 3.90039 11.9094V3.03489C3.9072 2.79889 4.00723 2.57519 4.17859 2.41276C4.34994 2.25033 4.57867 2.16241 4.81471 2.16824H21.1858C21.4218 2.16241 21.6505 2.25033 21.8219 2.41276C21.9933 2.57519 22.0933 2.79889 22.1001 3.03489V11.9094C22.1001 12.0243 22.0544 12.1346 21.9732 12.2158C21.8919 12.2971 21.7817 12.3427 21.6668 12.3427Z"></path>
                                   </svg>
                                </div>
                                <div class="content">
                                  <a href="mailto:info@Ngunziassociates.com"><span>info@Ngunziassociates.com</span></a>
                               </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                       <div class="people-card1">
                          <div class="people-flip-box-layer people-flip-box-front">
                             <div class="people-img">
                                <img src="{{url('/')}}/uploads/team/1622630835448.jpeg" alt>
                             </div>
                             <div class="content">
                               <h5><a href="#">Mr. Albert Muhatia</a></h5>
                               <span>IT Consultant</span>
                            </div>
                          </div>
                          <div class="people-flip-box-layer people-flip-box-back">
                             <div class="social-and-comtent">
                                <div class="social-and-btn">
                                   <ul class="social-icon">
                                      <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                                      <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                   </ul>
                                   <div class="explore-btn">
                                      <a href="people-details.html">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z" />
                                         </svg>
                                      </a>
                                   </div>
                                </div>
                                <p>“ The consultant then develops and implements a strategy or solution to address the client's needs.”</p>
                             </div>
                             <div class="phone-area">
                                <div class="icon">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 26 26">
                                      <path d="M13.5367 14.7299C12.5654 14.7253 11.6005 14.573 10.675 14.2784C9.94863 14.0353 9.29972 13.6039 8.79454 13.0282C8.28935 12.4524 7.94598 11.7529 7.79946 11.0011C7.47317 9.42986 8.06813 7.76849 9.43051 6.44251C9.57687 6.30005 9.72894 6.16358 9.88637 6.03345C10.5736 5.45807 11.3905 5.05858 12.2666 4.86946C13.1428 4.68035 14.0517 4.70729 14.9151 4.94797C15.7431 5.21236 16.469 5.72653 16.9932 6.4199C17.5174 7.11328 17.8141 7.95188 17.8427 8.82061C17.9062 9.84533 17.5722 10.8551 16.9102 11.6398C16.6597 11.9553 16.3272 12.1956 15.9491 12.3344C15.571 12.4732 15.162 12.5052 14.7669 12.4267C14.6039 12.3929 14.4494 12.3265 14.3126 12.2316C14.1758 12.1367 14.0596 12.0151 13.9709 11.8743C13.8913 11.7374 13.8401 11.5859 13.8205 11.4288C13.8008 11.2717 13.8131 11.1122 13.8565 10.9599C14.2357 9.52736 14.6209 7.35033 14.6248 7.32866C14.6347 7.27261 14.6555 7.21906 14.6861 7.17106C14.7167 7.12307 14.7565 7.08157 14.8031 7.04894C14.8498 7.0163 14.9024 6.99317 14.9579 6.98087C15.0135 6.96857 15.071 6.96733 15.127 6.97724C15.1831 6.98714 15.2366 7.00798 15.2846 7.03858C15.3326 7.06918 15.3741 7.10893 15.4067 7.15557C15.4394 7.2022 15.4625 7.25481 15.4748 7.31038C15.4871 7.36596 15.4883 7.42341 15.4784 7.47946C15.4624 7.57003 15.0828 9.71413 14.6946 11.1814C14.6809 11.2216 14.6756 11.2643 14.6789 11.3067C14.6823 11.3491 14.6942 11.3903 14.7141 11.4279C14.774 11.5108 14.8644 11.5664 14.9654 11.5826C15.2073 11.623 15.4557 11.5965 15.6836 11.506C15.9116 11.4155 16.1105 11.2645 16.2589 11.0691C16.773 10.4541 17.0306 9.66472 16.9782 8.86481C16.9575 8.17325 16.7233 7.50504 16.3078 6.95187C15.8923 6.3987 15.3157 5.98767 14.6573 5.77519C13.9319 5.57566 13.1689 5.55562 12.434 5.7168C11.6992 5.87798 11.0146 6.21553 10.4393 6.70034C10.3002 6.81604 10.1646 6.93694 10.0346 7.06347C9.36117 7.71866 8.28522 9.07844 8.64792 10.8247C8.76766 11.4243 9.04196 11.9821 9.44365 12.443C9.84535 12.9039 10.3605 13.2519 10.938 13.4524C12.9703 14.1007 15.891 14.1791 17.4293 12.266C17.5022 12.1793 17.6061 12.1246 17.7188 12.1136C17.8315 12.1025 17.944 12.1361 18.0323 12.207C18.1206 12.2779 18.1776 12.3805 18.1912 12.493C18.2047 12.6054 18.1737 12.7186 18.1048 12.8085C16.9669 14.2238 15.2353 14.7299 13.5367 14.7299Z"></path>
                                      <path d="M12.0532 12.4837C11.5951 12.4917 11.1482 12.3416 10.7879 12.0586C9.95631 11.393 9.93334 10.2365 10.1665 9.44911C10.2453 9.18694 10.3506 8.93345 10.4815 8.69295C10.8066 8.03693 11.3265 7.49738 11.97 7.14814C12.3603 6.94569 12.8053 6.87413 13.2394 6.94404C13.6735 7.01396 14.0736 7.22164 14.3806 7.5364C14.6933 7.87907 14.9288 8.28484 15.0713 8.72632C15.1071 8.83391 15.0993 8.95127 15.0496 9.05319C14.9999 9.15511 14.9122 9.23348 14.8054 9.27148C14.6985 9.30948 14.581 9.30408 14.4781 9.25643C14.3752 9.20879 14.2951 9.1227 14.2549 9.01665C14.1522 8.69059 13.9814 8.39004 13.754 8.13483C13.5752 7.95191 13.3415 7.83246 13.0885 7.79468C12.8355 7.7569 12.5771 7.80284 12.3526 7.92553C11.87 8.1977 11.4822 8.61094 11.2411 9.10981C11.1399 9.2968 11.0581 9.4937 10.9972 9.6974C10.8286 10.2668 10.8659 11.0104 11.3304 11.3822C11.8382 11.7904 12.6954 11.6179 13.1777 11.2019C13.5369 10.8783 13.8455 10.5026 14.0933 10.0874C14.1233 10.039 14.1625 9.99704 14.2088 9.96384C14.255 9.93064 14.3074 9.90687 14.3628 9.8939C14.4182 9.88092 14.4757 9.87899 14.5318 9.88821C14.588 9.89743 14.6418 9.91763 14.6902 9.94765C14.7386 9.97766 14.7805 10.0169 14.8137 10.0632C14.8469 10.1094 14.8707 10.1617 14.8837 10.2172C14.8967 10.2726 14.8986 10.33 14.8894 10.3862C14.8801 10.4424 14.8599 10.4962 14.8299 10.5446C14.5362 11.0337 14.1706 11.4759 13.7453 11.8562C13.2715 12.256 12.6731 12.4779 12.0532 12.4837Z"></path>
                                      <path d="M24.6996 26.0015H1.29998C0.955309 26.0011 0.624854 25.864 0.381135 25.6203C0.137416 25.3766 0.000344239 25.0462 8.47364e-08 24.7015V8.66841C-5.14206e-05 8.58603 0.023378 8.50535 0.0675423 8.43581C0.111707 8.36628 0.174776 8.31077 0.249359 8.2758C0.323942 8.24083 0.406948 8.22784 0.488649 8.23836C0.57035 8.24887 0.647361 8.28246 0.710655 8.33518L11.3428 17.1716C11.8091 17.5569 12.3952 17.7677 13.0002 17.7677C13.6052 17.7677 14.1913 17.5569 14.6577 17.1716L25.2889 8.33474C25.3523 8.282 25.4293 8.24841 25.511 8.23791C25.5928 8.22741 25.6758 8.24043 25.7504 8.27546C25.825 8.31048 25.8881 8.36605 25.9322 8.43565C25.9763 8.50525 25.9997 8.58599 25.9996 8.66841V24.7015C25.9992 25.0462 25.8622 25.3766 25.6184 25.6203C25.3747 25.864 25.0443 26.0011 24.6996 26.0015ZM0.866653 9.59183V24.7015C0.866653 24.9407 1.06078 25.1348 1.29998 25.1348H24.6996C24.8145 25.1348 24.9247 25.0892 25.006 25.0079C25.0873 24.9266 25.1329 24.8164 25.1329 24.7015V9.59183L15.2106 17.838C14.5887 18.352 13.807 18.6333 13.0002 18.6335C12.1933 18.6336 11.4116 18.3527 10.7894 17.8389L0.866653 9.59183Z"></path>
                                      <path d="M0.434172 9.10179C0.342147 9.10197 0.252454 9.07285 0.178087 9.01865C0.103719 8.96444 0.0485401 8.88797 0.020542 8.8003C-0.00745601 8.71264 -0.00681877 8.61834 0.0223615 8.53106C0.0515417 8.44379 0.10775 8.36807 0.182842 8.31487L4.08278 5.55025C4.17656 5.48377 4.29291 5.45726 4.40623 5.47656C4.51955 5.49586 4.62057 5.55939 4.68705 5.65316C4.75354 5.74694 4.78005 5.86329 4.76075 5.97662C4.74145 6.08994 4.67792 6.19095 4.58414 6.25744L0.684201 9.02206C0.611181 9.074 0.52378 9.10187 0.434172 9.10179ZM25.5662 9.10179C25.4766 9.10187 25.3892 9.074 25.3162 9.02206L21.4163 6.25744C21.3235 6.19062 21.2609 6.08984 21.242 5.97706C21.2232 5.86427 21.2498 5.74862 21.3159 5.65531C21.382 5.56201 21.4823 5.4986 21.5949 5.47892C21.7075 5.45924 21.8234 5.48488 21.9172 5.55025L25.8171 8.31487C25.8922 8.36802 25.9483 8.44367 25.9775 8.53086C26.0067 8.61805 26.0075 8.71227 25.9796 8.79989C25.9517 8.88751 25.8966 8.96399 25.8224 9.01826C25.7482 9.07253 25.6582 9.10179 25.5662 9.10179ZM17.0041 3.03522C16.9144 3.0353 16.8269 3.00744 16.7537 2.95549L14.6824 1.48651C14.2165 1.09272 13.6271 0.874976 13.0171 0.871254C12.4071 0.867532 11.8151 1.07807 11.3445 1.46615L9.24716 2.95549C9.15339 3.02198 9.03704 3.04848 8.92371 3.02918C8.81039 3.00988 8.70937 2.94635 8.64289 2.85258C8.57641 2.7588 8.5499 2.64245 8.5692 2.52912C8.5885 2.4158 8.65203 2.31479 8.7458 2.2483L10.8171 0.779325C11.4376 0.271931 12.2154 -0.00360176 13.017 3.55561e-05C13.8186 0.00367287 14.5938 0.286253 15.2097 0.799258L17.255 2.2483C17.3301 2.3015 17.3863 2.37722 17.4155 2.46449C17.4447 2.55177 17.4453 2.64607 17.4173 2.73373C17.3893 2.8214 17.3342 2.89787 17.2598 2.95208C17.1854 3.00628 17.0957 3.0354 17.0037 3.03522H17.0041ZM0.715401 25.7675C0.626173 25.7677 0.539066 25.7403 0.465979 25.6891C0.392892 25.638 0.337387 25.5655 0.307046 25.4815C0.276706 25.3976 0.273008 25.3064 0.296459 25.2203C0.31991 25.1342 0.369366 25.0575 0.438072 25.0005L10.3266 16.7847C10.3704 16.7483 10.4209 16.7209 10.4753 16.7041C10.5296 16.6873 10.5868 16.6813 10.6435 16.6865C10.7001 16.6918 10.7552 16.7082 10.8056 16.7347C10.8559 16.7612 10.9006 16.7974 10.9369 16.8412C10.9733 16.885 11.0007 16.9355 11.0175 16.9899C11.0343 17.0443 11.0403 17.1014 11.0351 17.1581C11.0298 17.2148 11.0134 17.2699 10.9869 17.3202C10.9604 17.3706 10.9242 17.4152 10.8804 17.4516L0.991863 25.6674C0.914246 25.7321 0.816424 25.7675 0.715401 25.7675ZM25.2846 25.7675C25.1835 25.7676 25.0857 25.7322 25.0081 25.6674L15.1196 17.4516C15.0747 17.4156 15.0374 17.371 15.0099 17.3204C14.9824 17.2699 14.9652 17.2143 14.9594 17.1571C14.9536 17.0998 14.9593 17.042 14.9761 16.9869C14.9929 16.9319 15.0205 16.8807 15.0573 16.8365C15.0941 16.7922 15.1393 16.7557 15.1903 16.7291C15.2414 16.7025 15.2972 16.6863 15.3546 16.6816C15.4119 16.6768 15.4697 16.6835 15.5244 16.7013C15.5791 16.719 15.6298 16.7475 15.6734 16.7851L25.5619 25.001C25.6306 25.0579 25.6801 25.1347 25.7035 25.2207C25.727 25.3068 25.7233 25.3981 25.6929 25.482C25.6626 25.5659 25.6071 25.6384 25.534 25.6896C25.4609 25.7408 25.3738 25.7677 25.2846 25.7675Z"></path>
                                      <path d="M21.6668 12.3427C21.5518 12.3427 21.4416 12.2971 21.3604 12.2158C21.2791 12.1346 21.2334 12.0243 21.2334 11.9094V3.03836C21.2321 3.04703 21.2148 3.03489 21.1858 3.03489H4.81471C4.80523 3.03432 4.79574 3.03568 4.7868 3.03888C4.77786 3.04208 4.76967 3.04707 4.76271 3.05353L4.76704 11.9094C4.76704 12.0243 4.72139 12.1346 4.64013 12.2158C4.55886 12.2971 4.44864 12.3427 4.33372 12.3427C4.21879 12.3427 4.10857 12.2971 4.02731 12.2158C3.94604 12.1346 3.90039 12.0243 3.90039 11.9094V3.03489C3.9072 2.79889 4.00723 2.57519 4.17859 2.41276C4.34994 2.25033 4.57867 2.16241 4.81471 2.16824H21.1858C21.4218 2.16241 21.6505 2.25033 21.8219 2.41276C21.9933 2.57519 22.0933 2.79889 22.1001 3.03489V11.9094C22.1001 12.0243 22.0544 12.1346 21.9732 12.2158C21.8919 12.2971 21.7817 12.3427 21.6668 12.3427Z"></path>
                                   </svg>
                                </div>
                                <div class="content">
                                   <a href="mailto:info@Ngunziassociates.com"><span>info@Ngunziassociates.com</span></a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
      <div class="contact-section2">
         <div class="container-fluid one pl--95">
            <div class="row g-4">
               <div class="col-lg-6 d-flex align-items-center">
                  <div class="contact-content">
                     <h2>Let’s Collaborate
                        with Your Team!
                     </h2>
                  </div>
               </div>
               <div class="col-lg-6 d-flex align-items-center justify-content-lg-center">
                  <div class="banner-btn magnetic-item">
                     <a href="mailto:info@Ngunziassociates.com">
                        <div class="bg">
                           <svg xmlns="http://www.w3.org/2000/svg" width="210" height="210" viewBox="0 0 210 210">
                              <path d="M126.624 15.7263L107.941 2.13881C106.188 0.863714 103.812 0.863712 102.059 2.1388L83.3763 15.7263C82.4229 16.4197 81.2551 16.7539 80.0792 16.6699L55.8337 14.9381C53.8159 14.794 51.91 15.88 51.0053 17.6893L40.6454 38.4093C40.1615 39.3769 39.3769 40.1615 38.4093 40.6454L17.6893 51.0053C15.88 51.91 14.794 53.8159 14.9381 55.8337L16.6699 80.0792C16.7539 81.2551 16.4197 82.4229 15.7263 83.3763L2.13881 102.059C0.863714 103.812 0.863712 106.188 2.1388 107.941L15.7263 126.624C16.4197 127.577 16.7539 128.745 16.6699 129.921L14.9381 154.166C14.794 156.184 15.88 158.09 17.6893 158.995L38.4093 169.355C39.3769 169.838 40.1615 170.623 40.6454 171.591L51.0053 192.311C51.91 194.12 53.8159 195.206 55.8337 195.062L80.0792 193.33C81.2551 193.246 82.4229 193.58 83.3763 194.274L102.059 207.861C103.812 209.136 106.188 209.136 107.941 207.861L126.624 194.274C127.577 193.58 128.745 193.246 129.921 193.33L154.166 195.062C156.184 195.206 158.09 194.12 158.995 192.311L169.355 171.591C169.838 170.623 170.623 169.838 171.591 169.355L192.311 158.995C194.12 158.09 195.206 156.184 195.062 154.166L193.33 129.921C193.246 128.745 193.58 127.577 194.274 126.624L207.861 107.941C209.136 106.188 209.136 103.812 207.861 102.059L194.274 83.3763C193.58 82.4229 193.246 81.2551 193.33 80.0792L195.062 55.8337C195.206 53.8159 194.12 51.91 192.311 51.0053L171.591 40.6454C170.623 40.1615 169.838 39.3769 169.355 38.4093L158.995 17.6893C158.09 15.88 156.184 14.794 154.166 14.9381L129.921 16.6699C128.745 16.7539 127.577 16.4197 126.624 15.7263Z" stroke-dasharray="2 2"></path>
                              <path d="M125.524 19.9263L107.941 7.13881C106.188 5.86371 103.812 5.86371 102.059 7.13881L84.4763 19.9263C83.5229 20.6197 82.3551 20.9539 81.1792 20.8699L58.3337 19.2381C56.3159 19.094 54.41 20.18 53.5053 21.9893L43.7454 41.5093C43.2615 42.4769 42.4769 43.2615 41.5093 43.7454L21.9893 53.5053C20.18 54.41 19.094 56.3159 19.2381 58.3337L20.8699 81.1792C20.9539 82.3551 20.6197 83.5229 19.9263 84.4763L7.13881 102.059C5.86371 103.812 5.86371 106.188 7.13881 107.941L19.9263 125.524C20.6197 126.477 20.9539 127.645 20.8699 128.821L19.2381 151.666C19.094 153.684 20.18 155.59 21.9893 156.495L41.5093 166.255C42.4769 166.738 43.2615 167.523 43.7454 168.491L53.5053 188.011C54.41 189.82 56.3159 190.906 58.3337 190.762L81.1792 189.13C82.3551 189.046 83.5229 189.38 84.4763 190.074L102.059 202.861C103.812 204.136 106.188 204.136 107.941 202.861L125.524 190.074C126.477 189.38 127.645 189.046 128.821 189.13L151.666 190.762C153.684 190.906 155.59 189.82 156.495 188.011L166.255 168.491C166.738 167.523 167.523 166.738 168.491 166.255L188.011 156.495C189.82 155.59 190.906 153.684 190.762 151.666L189.13 128.821C189.046 127.645 189.38 126.477 190.074 125.524L202.861 107.941C204.136 106.188 204.136 103.812 202.861 102.059L190.074 84.4763C189.38 83.5229 189.046 82.3551 189.13 81.1792L190.762 58.3337C190.906 56.3159 189.82 54.41 188.011 53.5053L168.491 43.7454C167.523 43.2615 166.738 42.4769 166.255 41.5093L156.495 21.9893C155.59 20.18 153.684 19.094 151.666 19.2381L128.821 20.8699C127.645 20.9539 126.477 20.6197 125.524 19.9263Z"></path>
                           </svg>
                        </div>
                        <div class="btn-content">
                           <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1865 1.06237L0 11.2484L0.751627 12L10.9376 1.81347V8.85645H12V0H3.14355V1.06237H10.1865Z"></path>
                           </svg>
                           <br> Contact Us <br> Now
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>


@endsection
