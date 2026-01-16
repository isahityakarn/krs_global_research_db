@extends('admin._app')

@section('body-containt')
    <div class="container-fluid">
        <form action="{{ route('storePassword') }}" method="post" class="row">
      @csrf
            <x-input name="password" label="New Password" :value="old('password')" csize="col-lg-4"/>
            <x-button-info label="Change Password" csize="col-lg-4"/>
      
    </form>


@endsection
