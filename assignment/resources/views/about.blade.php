@extends('layouts.master')


@section('title','about us')
@section('title_text','our company')




@section('aboutbackground')
    @include('partials.aboutbackground')
@endsection

@section('aboutser')
    @include('partials.aboutservices')
@endsection


@section('aboutclients')
    @include('partials.aboutclients')
@endsection








@section('item')
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Team Members</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{asset('assets/images/team_01.jpg')}}" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Johnny William</h4>
                <span>CO-Founder</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection




    
