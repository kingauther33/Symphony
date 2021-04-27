@extends('front.layout.master')

@section('title', 'Instructors')

@section('body')
    <main>

        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Instructors</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="team-area pt-160 pb-160">
            <div class="container">
                <div class="row">
                    @foreach($teachers as $teacher)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <img src="front/OnlineEdu/img/gallery/{{ $teacher->avatar }}" alt="">

                                    <ul class="team-social">
                                        {{--                                    <li><div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fab fa-facebook-f"></i></a></div></li>--}}
                                        <li><a href="https://www.facebook.com/Valve/"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="https://twitter.com/valvesoftware?ref_src=twsrc%5Etfw"
                                               data-show-count="false"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-caption">
                                    <h3>{{ $teacher->fname }} {{ $teacher->lname }}</h3>
                                    <p>{{ $teacher->specialty }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
@endsection


