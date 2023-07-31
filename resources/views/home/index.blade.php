@extends('layouts.base')

@section('content')

    <section>

    <!-- Carousel Start -->

    <x-slide.index/>

    <!-- Carousel End -->


    <!-- About Start -->

    <x-about.index/>

    <!-- About End -->


    <!--Booking hotel start-->

    <x-booking.index/>

    <!--Booking hotel end-->


    <!-- Services Start -->

     <x-service.index/>

    <!-- Services End -->


    <!-- Features Start -->

    <x-features.index/>

    <!-- Features End -->


    <!-- Team Start -->

    <x-team.index/>

    <!-- Team End -->


    <!-- Testimonial Start -->

    <x-testimonial.index/>

    <!-- Testimonial End -->


    <!-- Blog Start -->

        <x-blog.index/>

    <!-- Blog End -->

    </section>

@endsection
