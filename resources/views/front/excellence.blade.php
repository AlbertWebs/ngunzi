@extends('front.master-page')

@section('content')
@foreach ($Service as $Ser)
<div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .55), rgba(0, 0, 0, 0.55) 101.02%), url('{{url('/')}}/uploads/services/{{$Ser->image}}');">
    <div class="company-name">Ngunzi & Associates</div>
    <div class="container-fluid one pl--95">
       <div class="row">
          <div class="col-lg-12">
             <div class="banner-content">
                <h1>{{$Ser->category}}</h1>
                <ul class="breadcrumb-list">
                   <li><a href="{{url('/')}}">Home</a></li>
                   <li>Area of Expertise</li>
                   <li>{{$Ser->category}}</li>
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
                   <h2>{{$Ser->category}}</h2>
                   <h3>{{$Ser->title}}</h3>
                   <p class="first-para">
                       {!!html_entity_decode($Ser->content)!!}
                   </p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

 <?php
    $ServiceProcessNext = DB::table('services')->where('id', '<>',  $Ser->id )->limit('1')->orderBy('id','ASC')->get();

    $ServiceProcessPrev = DB::table('services')->where('id', '<>',  $Ser->id )->limit('1')->orderBy('id','DESC')->get();
 ?>
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
                   @foreach ($ServiceProcessPrev as  $Service)
                   <div class="content">
                        <a href="{{url('/')}}/area-of-expertise/{{$Service->slung}}">{{$Service->category}}</a>
                        <h6><a href="{{url('/')}}/area-of-expertise/{{$Service->slung}}">{{$Service->title}}</a></h6>
                    </div>
                   @endforeach

                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="45" viewBox="0 0 60 45">
                   <path d="M19.333 17.2061L38.666 45.0001H0L19.333 17.2061Z" />
                   <path d="M59.9993 44.9998H41.5429L20 13.4972L29.2254 0L59.9993 44.9998Z" />
                </svg>
                <div class="single-navigation two text-end">
                @foreach ($ServiceProcessNext as  $Service)
                   <div class="content">
                        <a href="{{url('/')}}/area-of-expertise/{{$Service->slung}}">{{$Service->category}}</a>
                        <h6><a href="{{url('/')}}/area-of-expertise/{{$Service->slung}}">{{$Service->title}}</a></h6>
                   </div>
                @endforeach
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
 @endforeach
@endsection
