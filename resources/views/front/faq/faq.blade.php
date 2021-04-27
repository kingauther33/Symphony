@extends('front.layout.master')

@section('title', 'Faq')

@section('styles')
    <link rel="stylesheet" href="front/OnlineEdu/css/faq.css">
@endsection

@section('body')
    <h1>Frequently Asked Questions</h1>
    <div class="faq-container">
        <div class="faq active">
            <h3 class="faq-title">How to join the course?</h3>
            <p class="faq-text">On this the admin should be able to enter or update the procedures for joining the course that the institute offers</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="faq">
            <h3 class="faq-title">
                Why to join the institute?
            </h3>
            <p class="faq-text">The various benefits that the student
                can gain by joining the institution is to be provided</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="faq">
            <h3 class="faq-title">
                When will be Entrance Examinations Conducted?
            </h3>
            <p class="faq-text">Once in 6 months, and one need to check the website
                for knowing when is the entrance exam entitled, the fees for the entrance exam
                (admin will decide and displayed on the application form</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="faq">
            <h3 class="faq-title">
                Will there be any fees for the entrance exam?
            </h3>
            <p class="faq-text">Yes there will be and it will be available on the application form</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="faq">
            <h3 class="faq-title">How can I apply for the entrance exam</h3>
            <p class="faq-text">Once the entrance exams are entitled, one need to visit the centre for applying it
                through paper and fill all the necessary details through online. On the application form one should
                chose which course he/she wanted to pursue.</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="front/OnlineEdu/js/faq.js"></script>
@endsection
