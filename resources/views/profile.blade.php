@extends('layouts.app')
@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>
@endsection
@section('content')
<!-- Untuk statusnya -->
<div class="container">
    <div class="row">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-12">
              <img id="showgambar" class="img-responsive img-circle profile-teman center-block" src="@if(Auth::user()->images == null) /images/angular.png @else {{ Auth::user()->images }} @endif" alt="" width="150px"/>
            </div>
            <div class="text-left" align="center">
              <!-- <button type="button" name="button" class="btn btn-primary">Upload</button> -->
              <div class="row">
                <form class="" action="{{ url('/profile/gambar')}}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input id="inputgambar" type="file" class="col-sm-6 col-sm-offset-4" name="gambar" value="" />
                  <div class="col-sm-2 col-sm-offset-4">
                    <button type="submit" name="button" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-body">
                  <form class="" action="{{ url('/profile/edit')}}" method="POST">
                  <div class="row">
                    <div class="col-sm-12">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ Auth::user()->id}}">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" value="{{ Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control" placeholder="Kosongkan jika anda tidak ingin merubah password">
                        </div>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <button type="submit" class="btn btn-success pull-right" name="button">Save</button>
                  </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
