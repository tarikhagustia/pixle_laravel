@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="" method="POST" action="{{ url('/status/new') }}">
                      {{ csrf_field() }}
                      <textarea class="form-control" name="status" placeholder="Update status ...."></textarea>
                      <button type="submit" class="btn btn-primary pull-right" style="margin-top : 10px;">Update status</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Untuk statusnya -->
@foreach ($teman as $babaturan)
@if($babaturan->user_id == Auth::user()->id)
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-info">
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-8 text-right col-xs-12 status-temen">
                <h3>
                  <a href="{{ url('/profile')}}">{{ $babaturan->name }}</a>
                </h3>
                <p>
                {{ $babaturan->status }}
                </p>
              </div>
              <div class="col-sm-2 col-xs-12">
                <img class="img-responsive img-circle profile-teman center-block" src="@if ($saya == NULL)/images/angular.png @else {{$saya->images}} @endif" alt="" width="150px"/>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@else
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <img class="img-responsive img-circle profile-teman center-block" src="{{$babaturan->images}}" alt="" width="150px"/>
            </div>
            <div class="col-sm-10 col-xs-12 status-temen">
              <p>
                <h3><a href="{{ url('#') }}">{{ $babaturan->name }} </a></h3>
                {{ $babaturan->status }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@endforeach


<!-- Starys diriku -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-2 col-sm-offset-8 text-right col-xs-12 status-temen">
                      <h3>
                        <a href="{{ url('/profile')}}">{{ Auth::User()->name }}</a>
                      </h3>
                      <p>
                        @if ($saya == NULL)
                            Belum ada status, coba Buat status
                        @else
                            {{ $saya->status }}
                        @endif
                      </p>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                      <img class="img-responsive img-circle profile-teman center-block" src="@if ($saya == NULL)/images/angular.png @else {{$saya->images}} @endif" alt="" width="150px"/>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
