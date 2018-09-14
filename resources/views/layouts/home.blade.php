@extends('layouts.app')

@section('home')
    @include("components.home.header")
    <section class="columns plane">
        <div class="row plane-animation">
            <div class="columns">
                <div class="">
                    <div class="cloud1"></div>
                    <div class="cloud2"></div>
                    <div class="plane-shadow"></div>
                    <div class="plane"></div>
                    <div class="cloud3"></div>
                    <div class="cloud4"></div>
                </div>
            </div>
        </div>
    </section>
    @include("components.home.offers")
    <section id="About" class="about">
        <div class="container d-flex h-100">
            <div class="row align-items-center">
                <div class="col-7 col-sm">
                    <h4 class="title">About Us</h4>
                    <p class="mt-50">Now, if you are interested in being the best player, getting really good money and
                        knowing some tricks and advices of what to do in a live tournament games, here is the best place
                        to
                        learn them.</p>
                </div>

                <div class="col-5 col-sm h-100">
                    <div class="row h-50">
                        <div class="col about-icon">
                            <img class="about-icon-svg"
                                 src="storage/img/about/calendar.svg">
                        </div>
                        <div class="col about-icon">
                            <img class="about-icon-svg"
                                 src="storage/img/about/landmark.svg">
                        </div>
                        <div class="col about-icon">
                            <img class="about-icon-svg"
                                 src="storage/img/about/resort.svg">
                        </div>
                    </div>
                    <div class="row h-50">
                        <div class="col about-icon">
                            <img class="about-icon-svg"
                                 src="storage/img/about/suitcase.svg">
                        </div>
                        <div class="col about-icon">
                            <img class="about-icon-svg"
                                 src="storage/img/about/take-off.svg">
                        </div>
                        <div class="col about-icon">
                            <img class="about-icon-svg"
                                 src="storage/img/about/wallet.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include("components.home.contact")
    @include("components.home.footer")
@stop
