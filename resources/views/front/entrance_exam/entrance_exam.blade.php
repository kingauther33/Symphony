@extends('front.layout.master')

@section('title', 'entrance_exam')
<link rel="stylesheet" href="front/OnlineEdu/css/entranceexam.css">
@section('styles')

@endsection

@section('body')
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="mb-5"><img src="front/OnlineEdu/img/entrance/computing-feat.jpg" alt="Image" class="img-fluid rounded"></p>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="site-section-heading mb-3">Entrance exam information </h2>
                    <p> An entrance exam through which they can know the knowledge level of the participant and thus
                        depending on the exam marks they segregate the participants or the students into the appropriate
                        classrooms
                    </p>
                    <p class="mb-4">The students will be given training right from the basics till the certification
                        level and for the participants having the minimum knowledge about the basics will be segregated
                        in to the class where they direct start with the basic certification topics with out touching
                        the basic concepts of the subject.</p>

                    <p><a href="contact" class="btn__entrance">Join This Program</a></p>
                </div>
            </div>
            <p><a href="search_exam" class="lmao"><span class="fa fa-star"></span>    Click here for grades</a></p>
        </div>
    </div>



@endsection
