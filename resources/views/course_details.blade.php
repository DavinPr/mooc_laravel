@extends('layout.main')
@extends('layout.latest_content')

@section('title', 'Course')


@section('content')
<!-- bradcam_area_start -->
<div class="courses_details_banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="course_text">
                    <h3>{{ $course->course_title }}</h3>
                    <div class="prise">
                        <span class="active">Free</span>
                    </div>
                    <div class="hours">
                        <div class="video">
                            <div class="single_video">
                                <i class="fa fa-play-circle-o"></i> <span>{{ count($course->video) }} videos</span>
                            </div>
                            <div class="single_video">
                                <i class="fa fa-clock-o"></i> <span>4 Menit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<div class="courses_details_info">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="single_courses">
                    <h3>Objectives</h3>
                    <p>{{ $course->course_explaination }}</p>
                    <h3 class="second_title">Course Outline</h3>
                </div>
                <div class="outline_courses_info">
                    <div id="accordion">
                    @foreach($course->outline as $outlines)
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{ $outlines->outline_id }}" aria-expanded="false" aria-controls="{{ $outlines->outline_id }}">
                                        <i class="flaticon-question"></i> {{ $outlines->outline_title }}
                                    </button>
                                </h5>
                            </div>
                            <div id="{{ $outlines->outline_id }}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    {{ $outlines->outline_description }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="courses_sidebar">
                    <div class="video_thumb">
                        <img src="{{ $course->course_thumbnail }}" alt="">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=ehgYlyAFcYs">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="author_info">
                        <div class="auhor_header">
                            <div class="thumb" >
                                <img src="{{ $course->source->source_image }}" alt="" style="width:100px" class="rounded">
                            </div>
                            <div class="name">
                                <h3>{{ $course->source->source_name }}</h3>
                                <p>{{ $course->source->source_profession }}</p>
                            </div>
                        </div>
                        <p class="text_info">
                            {{ $course->source->source_quotes}}
                        </p>
                        <ul>
                            <li><a href="#"> <i class="fa fa-envelope"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="ti-linkedin"></i> </a></li>
                        </ul>
                    </div>
                    <a href="/list_videos/{{ $course->id }}" class="boxed_btn">See Videos</a>
                    <div class="feedback_info">
                        <h3>Write your feedback</h3>
                        <p>Your rating</p>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>

                        <form action="#">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Write your feedback"></textarea>
                            <button type="submit" class="boxed_btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection