@extends('layout.main')
@extends('layout.courses_item')
@extends('layout.latest_content')

@section('title', 'Tugas Laravel')
@section('home_active') class="active" @endsection

@section('content')
<!-- slider_area_start -->
<div class="slider_area ">
    <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-md-6">
                    <div class="illastrator_png">
                        <img src="img/banner/edu_ilastration.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="slider_info">
                        <h3>Learn your <br>
                            Favorite Course <br>
                            From Online</h3>
                        <a href="/course" class="boxed_btn">Browse Our Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="single_about_info">
                    <h3>Over 7000 Tutorials <br>
                        from 20 Courses</h3>
                    <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god
                        moving. Moving in fourth air night bring upon you’re it beast let you dominion likeness open
                        place day great wherein heaven sixth lesser subdue fowl </p>
                    <a href="/course" class="boxed_btn">Enroll a Course</a>
                </div>
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-6">
                <div class="about_tutorials">
                    <div class="courses">
                        <div class="inner_courses">
                            <div class="text_info">
                                <span>20+</span>
                                <p> Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="courses-blue">
                        <div class="inner_courses">
                            <div class="text_info">
                                <span>7638</span>
                                <p> Courses</p>
                            </div>

                        </div>
                    </div>
                    <div class="courses-sky">
                        <div class="inner_courses">
                            <div class="text_info">
                                <span>230+</span>
                                <p> Courses</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end -->

@endsection