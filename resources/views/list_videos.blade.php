@extends('layout.main')
@extends('layout.bradcam')
@extends('layout.latest_content')

@section('title', 'Video')
@section('bradcam_title', $course->course_title)

@section('content')
<div class="popular_courses plus_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <h3>List Video </h3>
                    <!-- <p>Belajar pemrograman mudah dan gratis <br> Tunggu apa 
                        lagi.</p> -->
                </div>
            </div>
        </div>
    </div>
    <div class="all_courses">
        <div class="container">
            <div class="row">
                @foreach( $course->video as $videos)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_courses">
                        <div class="thumb">
                            <img src="{{ $course->course_thumbnail }}" alt="">
                        </div>
                        <div class="courses_info">
                            <h3><a href="/course_details/{{ $course->id }}">{{ $videos->video_name }}</a></h3>
                            <div class="star_prise d-flex justify-content-between">
                                <div class="star">
                                    <i class="flaticon-clock"></i>
                                    <span>{{$videos->video_runtime}}</span>
                                </div>
                                <a class="popup-video" href="{{ $videos->video_link }}">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection