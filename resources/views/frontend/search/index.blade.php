@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  -->
@section('title', 'Lawyer List')
<!-- Page Content -->
@section('content')
<div class="section-empty no-paddings">
  <div class="section-slider row-8 white">
    <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
      <ul class="slides">
        <li data-slider-anima="fade-left" data-time="1000">
          <div class="section-slide">
            <div class="bg-cover" style="background-image:url('images/slide1.jpg')"></div>
            <div class="container">
              <div class="container-middle">
                <div class="container-inner text-center">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                      <div class="col-md-12 anima">
                        <h1 class="text-white text-l heading_one">Consult Top Lawyers & Legal Advisors</h1>
                        <p class="text-center mb50">Kanoonvala helps you to find and hire top lawyers online. As an
                          online legal facilitation platform, Kanoonvala connects you with top District Court lawyers,
                          High Court lawyers, Supreme Court lawyers,Tribunal lawyers and Consumer Courts Lawyers .</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="section-empty">
  <div class="container content">
    <div class="row">
      <div class="col-md-4">
        <div class="search_filter">
          <div class="filter_heading">
            <div class="row">
              <div class="col-md-12">
                <h3>Apply Filter
                  <div class="pull-right"><a href="javascript:void(0)" class="clear-all">Clear All</a></div>
                </h3>
              </div>
            </div>
          </div>
          <form id="search-form">
            <div class="custom_filter">
              <div class="custom_filter_Search filter_box"><span class="bmd-form-group">
                  <input class="form-control" type="search" placeholder="Search Lawyer By Name" aria-label="Search"
                    id="lawyers_data_text" name="lawyers_data_text">
                </span>
                <div class="lawyers_search m-t-10"></div>
              </div>
              <div class="region_filter filter_box">
                <div class="inside_custom_search_heading">
                  <h3 class="second_heading">Legal Area</h3>
                </div>
                <div class="form-group">
                  <input class="form-control search-input" type="text" data-target="legalsearch" placeholder="Search Legal Area">
                </div>
                <div class="legalarea_search legalsearch" style="height: 200px; overflow:auto;">
                  @foreach ($specializationList as $key => $item)
                  <div class="form-check">
                    <label>
                      <input type="checkbox" {{ ($specialization == $item->slug)?'checked':'' }} name="specialization[]"
                        value="{{$item->id}}">
                      <span class="label-text">{{$item->name}}</span> </label>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="region_filter filter_box">
                <div class="inside_custom_search_heading">
                  <h3 class="second_heading">City</h3>
                </div>
                <div class="form-group">
                  <input class="form-control search-input" type="text" data-target="city_search" placeholder="Search City">
                </div>
                <div class="legalarea_search city_search" style="height: 200px; overflow:auto;">
                  @foreach ($cityList as $item)
                  <div class="form-check">
                    <label>
                      <input type="checkbox" name="cities[]" value="{{$item->id}}">
                      <span class="label-text">{{$item->city_name}}</span> </label>
                  </div>
                  @endforeach
                </div>
              </div>
             
              <!-- <div class="region_filter filter_box avai">
                <div class="inside_custom_search_heading">
                  <h3 class="second_heading">Availability</h3>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Search Region">
                </div>
                <div class="form-check">
                  <label>
                    <input type="radio" name="radio">
                    <span class="label-text">Now</span> </label>
                </div>
                <div class="form-check">
                  <label>
                    <input type="radio" name="radio">
                    <span class="label-text">Today</span> </label>
                </div>
                <div class="form-check">
                  <label>
                    <input type="radio" name="radio">
                    <span class="label-text">Tomorrow</span> </label>
                </div>
              </div> -->
              <!-- <div class="region_filter filter_box sort_by">
                <div class="inside_custom_search_heading">
                  <h3 class="second_heading">Sort By</h3>
                </div>
                <ol>
                  <li>Rating - High To Low</li>
                  <li>Popularity - High To Low</li>
                  <li>Fee - High To Low</li>
                  <li>Fee - Low To High</li>
                  <li>Experience - High To Low</li>
                  <li>Experience - Low To High</li>
                </ol>
              </div> -->
              <!-- <div class="region_filter filter_box">
                <div class="inside_custom_search_heading">
                  <h3 class="second_heading">Languages</h3>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Search Languages">
                </div>
                <div class="form-check">
                  <label>
                    <input type="radio" name="radio">
                    <span class="label-text">English</span> </label>
                </div>
                <div class="form-check">
                  <label>
                    <input type="radio" name="radio">
                    <span class="label-text">Assamese</span> </label>
                </div>
                <div class="form-check">
                  <label>
                    <input type="radio" name="radio">
                    <span class="label-text">Bengali</span> </label>
                </div>
                <div class="form-check">
                  <label>
                    <input type="radio" name="radio">
                    <span class="label-text">Dogri</span> </label>
                </div>
                <div class="form-check">
                  <label>
                    <input type="radio" name="radio">
                    <span class="label-text">Hindi</span> </label>
                </div>
              </div> -->
              <div class="region_filter filter_box">
                <div class="inside_custom_search_heading">
                  <h3 class="second_heading">Courts</h3>
                </div>
                <div class="form-group">
                  <input class="form-control search-input" type="text"  data-target="court_search" placeholder="Search Courts">
                </div>
                <div class="legalarea_search court_search" style="height: 200px; overflow:auto;">
                  @foreach ($courtList as $key => $item)
                  <div class="form-check">
                    <label>
                      <input type="checkbox" name="court[]" value="{{$key}}">
                      <span class="label-text">{{$item}}</span> </label>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-8 search-container">
        <!-- Lawyer Box Open -->
        @include('frontend/search/filter')


        <!-- Lawyer Box End -->
      </div>
    </div>
  </div>
</div>
@include('frontend/modalpopups/appointment')
@include('frontend/modalpopups/login-modal')
@stop