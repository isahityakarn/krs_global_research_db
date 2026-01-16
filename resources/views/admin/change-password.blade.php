@extends('admin._app')



@section('body-containt')
    {{-- <div class="d-flex vh-100"> --}}
        {{-- <div class="container my-auto"> --}}
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow mt-5 mb-4">
                        <x-header-page url="" buttonName="Add new" headerName="Change Password" display="no" />
                        <div class="card-body">
                            <form action="{{ route('change-password') }}" method="post" class="row">
                                @csrf
                                <x-input name="password" label="New Password" :value="old('password')" csize="col-lg-12" />
                                <x-button-info label="Change Password" csize="col-lg-12" />

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    {{-- </div> --}}

  
@endsection
