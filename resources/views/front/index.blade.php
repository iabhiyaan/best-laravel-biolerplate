@extends('front.layouts.app')

@section('content')

<section class="site_banner" data-sal="fade" data-sal-duration="1000" data-sal-delay="600"
   data-sal-easing="ease-out-bounce">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-xl-6">
            <div class="banner_text">
               <div class="banner_text_inner">
                  <h5>{{ $dashboard_composer->banner_slogan_1 }}</h5>
                  <h1>{{ $dashboard_composer->banner_slogan_2 }}</h1>
                  <p>{{ $dashboard_composer->banner_description }}</p>
                  <a href="{{ route('courseList') }}" class="btn_1">View Course </a>
                  <!-- <a href="#" class="btn_2">Get Started </a> -->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- aboutus  -->
<section class="learning_part principle_section">
   <div class="container">
      <div class="row align-items-sm-center align-items-lg-stretch">
         <div class="col-md-7 col-lg-7">
            <div style="height: 400px;" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="600"
               data-sal-easing="ease-out-bounce">
               <!-- <img style="object-fit:cover;" src="img/school.jpg" alt=""> -->
               <iframe style="width: 100%;height: 100%"
                  src="https://www.youtube.com/embed/{{$dashboard_composer->youtubeVideo($dashboard_composer->about_us_videoLink)}}"
                  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
            </div>
         </div>
         <div class="col-md-5 col-lg-5">
            <div class="learning_member_text" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="700"
               data-sal-easing="ease-out-bounce">
               <!--<h5>-->
               <!--  message-->
               <!--</h5>-->
               <!--<h2>PRINCIPAL’S MESSAGE</h2>-->
               <h2>ABOUT SCHOOL</h2>
               <p>{{ $dashboard_composer->about_description }}</p>

               <a href="{{ route('getPage', 'about-us') }}" class="btn_1">Read More</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- about us-->

@if($pillars->count())
<!-- Four col section -->
<section class="feature_part">
   <div class="container">
      <div class="row">
         @php($i=600)
         @foreach($pillars as $key => $pillar)
         <div class="col-sm-6 col-xl-3" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="{{$i }}"
            data-sal-easing="ease-out-bounce">
            <div class="single_feature">
               <div class="single_feature_part">
                  <span class="single_feature_icon"><i class="{{ getClassNameForIcons($pillar->slug) }}"></i></span>
                  <h4>{{ $pillar->title }}</h4>
                  <p>{!! $pillar->description !!}</p>
               </div>
            </div>
         </div>
         @php($i += 100)
         @endforeach
      </div>
   </div>
</section>
@endif
<!-- Four col section -->

@if($courses->count())
<!-- special courses -->
<section class="special_course padding_top">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-5">
            <div class="section_tittle text-center" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600"
               data-sal-easing="ease-out-bounce">
               <p>popular courses</p>
               <h2>Special Courses</h2>
            </div>
         </div>
      </div>
      <div class="row">
         @php($i=600)
         @foreach($courses as $key => $course)
         <div class="col-sm-6 col-lg-3" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="{{ $i }}"
            data-sal-easing="ease-out-bounce">
            <div class="single_special_course">
               <img src="/images/main/{{ $course->image }}" class="special_img" alt="">
               <div class="special_course_text">
                  <a href="{{ route('courseInner', $course->slug) }}">
                     <h3 class="text-uppercase">{{ $course->title }}</h3>
                  </a>
                  <p>{{ $course->short_description }}</p>

               </div>
            </div>
         </div>
         @php($i += 100)
         @endforeach
      </div>
   </div>
</section>
<!-- special courses -->
@endif

<!-- learn with us -->
<section class="learning_part index_about_us_section">
   <div class="container">
      <div class="row align-items-sm-center align-items-lg-stretch">
         <div class="col-md-7 col-lg-7">
            <div class="learning_img" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="600"
               data-sal-easing="ease-out-bounce">
               <img class="middle_section__image" src="/images/learning_img.png" alt="">
            </div>
         </div>
         <div class="col-md-5 col-lg-5">
            <div class="learning_member_text" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="700"
               data-sal-easing="ease-out-bounce">
               <h5>{{ $dashboard_composer->middlesection_slogan_1 }}</h5>
               <h2>{{ $dashboard_composer->middlesection_slogan_2 }}</h2>
               <p>{{ $dashboard_composer->middlesection_description }}</p>

               <!--<a href="about.php" class="btn_1">Read More</a>-->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- learn with us -->

@if($teams->count())
<!-- Team section -->
<section class="blog_part section_padding">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-5">
            <div class="section_tittle text-center" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600"
               data-sal-easing="ease-out-bounce">
               <h2>Our Team</h2>
            </div>
         </div>
      </div>
      <div class="row">
         @php($i = 600)
         @foreach($teams as $key => $team)
         <div class="col-sm-6 col-lg-3 col-xl-3" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="{{ $i }}"
            data-sal-easing="ease-out-bounce">
            <div class="single-home-blog">
               <div class="card">
                  <img src="/images/main/{{ $team->image }}" class="card-img-top" alt="blog">
                  <div class="card-body">
                     <a>
                        <h5 class="card-title">{{ $team->title }}</h5>
                        <span class="text-muted mt-0">{{ $team->post }}</span>
                     </a>
                     <p>{{ $team->short_description }}</p>
                     <a href="{{ route('teamDetail', $team->slug) }}" class="btn btn-primary">Read More</a>
                  </div>
               </div>
            </div>
         </div>
         @php($i += 100 )
         @endforeach

      </div>
   </div>
</section>
<!-- Team section -->
@endif

@if($alumnis->count())
<!-- Alumni -->
<section class="testimonial_part">
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-xl-5">
            <div class="section_tittle text-center" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600"
               data-sal-easing="ease-out-bounce">
               <p>Alumni</p>
               <h2>Happy Students</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="testimonial_inner owl-carousel">
               @foreach($alumnis as $key => $alumni)
               <div class="testimonial_slider" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600"
                  data-sal-easing="ease-out-bounce">
                  <div class="row">
                     <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                        <div class="testimonial_slider_text">
                           <p>{!! $alumni->description !!}</p>
                           <h4>{{ $alumni->title }}</h4>
                           <h5> {{ $alumni->batch }} Batch</h5>
                        </div>
                     </div>
                     <div class="col-lg-4 col-xl-2 col-sm-4">
                        <div class="testimonial_slider_img">
                           <img src="/images/main/{{ $alumni->image }}" alt="student">
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Alumni -->
@endif

@if($blogs->count())
<!-- Blog section -->
<section class="blog_part section_padding">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-5">
            <div class="section_tittle text-center" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600"
               data-sal-easing="ease-out-bounce">
               <p>Our Blog</p>
               <h2>Students Blog</h2>
            </div>
         </div>
      </div>
      <div class="row">
         @php($i = 600)
         @foreach($blogs as $key => $blog)
         <div class="col-sm-6 col-lg-4 col-xl-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="{{ $i }}"
            data-sal-easing="ease-out-bounce">
            <div class="single-home-blog">
               <div class="card">
                  <img src="/images/main/{{ $blog->image }}" class="card-img-top" alt="blog">
                  <div class="card-body">
                     <a href="{{ route('blogInner', $blog->slug) }}">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                     </a>
                     <p>{{ $blog->short_description }} </p>
                     <a href="{{ route('blogInner', $blog->slug) }}" class="btn_4">Read More</a>
                  </div>
               </div>
            </div>
         </div>
         @php($i += 100)
         @endforeach
      </div>
   </div>
</section>
<!-- Blog section -->
@endif
@endsection