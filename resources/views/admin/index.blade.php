@extends('admin._app')

@section('body-containt')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow mt-1 mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-center">
                            Complete
                        </h4>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="m-0 font-weight-bold text-center">
                            This Month : {{ $current_complete }}
                        </h6>

                        <h2>Total : {{ $total_complete }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow mt-1 mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-center">
                            Quotafull
                        </h4>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="m-0 font-weight-bold text-center">
                            This Month : {{ $current_quotafull }}
                        </h6>

                        <h2>Total : {{ $total_quotafull }}</h2>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card shadow mt-1 mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-center">
                            Terminate
                        </h4>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="m-0 font-weight-bold text-center">
                            This Month : {{ $current_terminate }}
                        </h6>

                        <h2>Total : {{ $total_terminate }}</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

