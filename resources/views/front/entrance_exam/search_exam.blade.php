@extends('front.layout.master')

@section('title', 'search_exam')

@section('styles')
    <link rel="stylesheet" href="front/OnlineEdu/css/search_exam.css">
@endsection

@section('body')
    <div><h1>Type in your visitor ID</h1></div>
    <form action="search_exam">
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                    <input class="search_input" type="text" name="search" placeholder="Exam ID..."
                           value="{{ request('search') }}">
                    <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                </div>
            </div>
            @if(request('search') !== null)
                @if($entrance_exam_results->entrance_mark !== null)
                    <div>
                        <h3>Your ID: {{ request('search') }}</h3>
                        <h3>Your mark: {{ $entrance_exam_results->entrance_mark }}</h3>
                    </div>
                @else
                    <div>
                        <h3>There's no result :(</h3>
                    </div>
                @endif
            @endif
        </div>
    </form>

@endsection
