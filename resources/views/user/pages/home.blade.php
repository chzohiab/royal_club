@extends('user.layouts.app')

@section('usercontent')
<div class="rc-banner">
    <div class="banner-bg">
        <img src="{{ asset('assets/images/banner-bg.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>Step into the Arena: Every Inning, an Unseen Adventure</h1>
                <p>A Rollercoaster of Surprises Awaits in Every Inning – Your Adventure Begins Here.</p>
                <a href="" class="watch-video">
                    <div class="icon">
                        <i class="fas fa-play"></i>
                    </div>
                    <span>Watch Video</span>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="banner-img">
                    <img src="{{ asset('assets/images/banner.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection