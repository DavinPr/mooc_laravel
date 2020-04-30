@section('courses_item')
<!-- popular_courses_start -->
<div class="popular_courses plus_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <h3>Popular Courses</h3>
                    <p>Belajar pemrograman mudah dan gratis <br> Tunggu apa 
                        lagi.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="course_nav">
                    <nav>
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Courses</a>
                            </li>
                            @foreach( $categories as $category)
                            <li class="nav-item">
                                <a class="nav-link" id="{{$category->id}}-tab" data-toggle="tab" href="#{{$category->id}}" role="tab" aria-controls="{{$category->id}}" aria-selected="false">{{ $category->category_name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
    <div class="all_courses">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        @foreach( $courses as $course)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_courses">
                                <div class="thumb">
                                    <a href="/course_details/{{ $course->id }}">
                                        <img src={{ $course->course_thumbnail }} alt="">
                                    </a>
                                </div>
                                <div class="courses_info">
                                    <span>{{ $course->category->category_name }}</span>
                                    <h3><a href="/course_details/{{ $course->id }}">{{ $course->course_title }}</a></h3>
                                    <div class="star_prise d-flex justify-content-between">
                                        <div class="star">
                                            <i class="flaticon-clock"></i>
                                            <span>{{$course->course_videos_count}} videos</span>
                                        </div>
                                        <div class="prise">
                                            <span class="active_prise">
                                                Free
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-xl-12">
                            <div class="more_courses text-center">
                                <a href="#" class="boxed_btn_rev">More Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($categories as $category)
                <div class="tab-pane fade" id="{{$category->id}}" role="tabpanel" aria-labelledby="{{$category->id}}-tab">
                    <div class="row">
                    @foreach($courses->where('category_id', $category->id) as $course)
                        <div class="col-xl-4 col-lg-4 col-md-6  col-md-6">
                            <div class="single_courses">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ $course->course_thumbnail }}" alt="">
                                    </a>
                                </div>
                                <div class="courses_info">
                                    <span{{ $course->category->category_name }}</span>
                                    <h3><a href="#">{{ $course->course_title }}</h3>
                                    <div class="star_prise d-flex justify-content-between">
                                        <div class="star">
                                            <i class="flaticon-mark-as-favorite-star"></i>
                                            <span>(4.5)</span>
                                        </div>
                                        <div class="prise">
                                            <span class="offer">$89.00</span>
                                            <span class="active_prise">
                                                $49
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <div class="col-xl-12">
                            <div class="more_courses text-center">
                                <a href="#" class="boxed_btn_rev">More Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- popular_courses_end-->

@endsection