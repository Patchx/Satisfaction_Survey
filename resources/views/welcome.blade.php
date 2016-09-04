@extends('layouts.basic_layout')

@section('content')

<div class="jumbotron">
  <h1>{{$year}} Employee Satisfaction Survey</h1>
  <p class="lead">Please follow the links below to complete your {{$year}} Employee Satisfaction Survey</p>
  <p><a class="btn btn-lg btn-success" href="#" role="button">Get Started</a></p>
</div>

<div class="row marketing">

  <div class="col-lg-6">
    <h4>Working hard for our customers</h4>
    <p>Did you know VueCorp spends $12 million dollars every year to improve customer experience? <a href="#">Learn More &raquo;</a></p>
  </div>

  <div class="col-lg-6">
    <h4>Green Initiatives</h4>
    <p>Learn how VueCorp employees are reducing waste and helping the environment <a href="#">Learn More &raquo;</a></p>
  </div>

  <div class="clearfix"></div>

  <div class="col-lg-6">
    <h4>Building a better team, together</h4>
    <p>Employee retention is top of mind at VueCorp. <a href="#">Learn More &raquo;</a></p>
  </div>

  <div class="col-lg-6">
    <h4>Your Opinion Matters!</h4>
    <p>Learn how VueCorp uses employee feedback to improve operations <a href="#">Learn More &raquo;</a></p>
  </div>

</div>

@endsection