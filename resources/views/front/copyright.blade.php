@extends('front.master')

@section('content')
<div class="case-study-details-wrapper pt-130 mb-130">
    <div class="container-fluid one pl--95">
       <div class="case-study-details-top mb-70">
          <div class="row g-lg-4 gy-5">
             <div class="col-lg-8" style="margin:0 auto">
                <div class="details-page-content">
                   <h2>Copyright Statement</h2>
                   {{-- <h3>Privacy</h3> --}}
                   <p class="first-para">
                    <div>
                        {{--  --}}
                        Copyright © {{date('Y')}} Ngunzi & Associates. All rights reserved.<br><br>

                        The content, design, and materials on this website are protected by copyright and other intellectual property laws. Any unauthorized use, reproduction, or distribution of the content on this website without the express written permission of Ngunzi & Associates is strictly prohibited.<br><br>

                        Ngunzi & Associates and its logo are registered trademarks of Ngunzi & Associates. All other trademarks, service marks, and trade names are the property of their respective owners.<br><br>

                        The information provided on this website is for general informational purposes only and does not constitute professional advice. Ngunzi & Associates disclaims any liability for decisions made based on the information provided on this website.<br><br>

                        For inquiries regarding the use of content on this website, please contact Ngunzi & Associates at contact@Ngunziassociates.com.

                        Thank you for visiting Ngunzi & Associates.

                        {{--  --}}
                    </div>
                   </p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
