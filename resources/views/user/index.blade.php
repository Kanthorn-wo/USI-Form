@extends('layouts.top-nav')

@section('title', 'Home Page')
@section('content-header', )
<h1 class="m-0">
  <small></small>
</h1>
@endsection
@section('main-content')
<!-- ./row -->
<div class="row">

  <div class="col-12 col-sm-12">
    <div class="card card-primary card-tabs">
      <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
          <li class="pt-2 px-3">
            <h3 class="card-title">แบบฟอร์ม</h3>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home"
              role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Form 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile"
              role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Form 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages"
              role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Form 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings"
              role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">Form 4</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="custom-tabs-two-tabContent">
          <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel"
            aria-labelledby="custom-tabs-two-home-tab">
            @include('user.form1')
          </div>
          <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
            aria-labelledby="custom-tabs-two-profile-tab">
            @include('user.form2')
          </div>
          <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel"
            aria-labelledby="custom-tabs-two-messages-tab">
            @include('user.form3')
          </div>
          <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel"
            aria-labelledby="custom-tabs-two-settings-tab">
            @include('user.form4')
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection