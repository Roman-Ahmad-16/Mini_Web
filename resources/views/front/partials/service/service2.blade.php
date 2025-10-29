    <div class="why-choose-us-area rts-section-gapBottom rts_jump_animation-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-four center">
                        <span class="pre">Easy Business Solution</span>
                        <h2 class="title rts-text-anime-style-1">What We <span>Do</span></h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">

                @foreach ( $service_categories as $category)
                
                <div class="col-lg-4 col-md-6 col-sm-12 rts-jump__item">
                    <div class="single-why-choose-four">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset($category->image) }}" alt="choose">
                        </a>
                        <div class="inner-content">
                            <div class="icon">
                                <i class="{{ $category->icon }}" style="font-size:40px;"></i>
                            </div>
                            <a href="#">
                                <h5 class="title">{{$category->title}} </h5>
                            </a>
                            <p class="disc">
                                {{$category->description}}
                            </p>
                            <a href="{{ route('front.categoryWiseService' , $category->id) }}" class="read-more">Read More <i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
