@extends('admin._app')

@section('js')
  


    <script>
        function submit_post_filter() {

            var page_no = $('#page_no').val();
            if (page_no != '0') {
                page_no = page_no;
            } else {
                page_no = '0';
            }
            var status = $('#status').val();
            if (status != '') {
                status = status;
            } else {
                status = 'null';
            }

            var pid = $('#pid').val();
            if (pid != '') {
                pid = pid;
            } else {
                pid = '';
            }

            var uid = $('#uid').val();
            if (uid != '') {
                uid = uid;
            } else {
                uid = '';
            }

            var sdate = $('#sdate').val();
            var edate = $('#edate').val();

            if (sdate != '' && edate != '') {
                sdate = sdate;
                edate = edate;
            } else {
                sdate = '';
                edate = '';
            }


            var appUrl = {!! json_encode(url('/')) !!};
            window.location.href = appUrl + '/survey-data/' + page_no + '/' + status + '/' +
            uid + '/' + pid + '/' + sdate + '/' + edate;

        }

        $(document).ready(function() {
            $('#filter_btn').click(function() {
                submit_post_filter();
            });

        });
    </script>
@endsection
@section('body-containt')
    <div class="card shadow mt-1 mb-4">
        <div class="card-header justify-content-between">
            <form class="row">
                <div class="col px-1">
                    <select class="form-control w-100" id="page_no">
                        <option value="0">Page No</option>
                        <option value="10" {{ $page_no == 10 ? 'selected' : '' }}>
                            Show 10
                        </option>
                        <option value="20" {{ $page_no == 20 ? 'selected' : '' }}>
                            Show 20
                        </option>
                        <option value="50" {{ $page_no == 50 ? 'selected' : '' }}>
                            Show 50
                        </option>
                      
                        <option value="120" {{ $page_no == 100 ? 'selected' : '' }}>
                            Show 100
                        </option>
                        <option value="200" {{ $page_no == 200 ? 'selected' : '' }}>
                            Show 200
                        </option>
                    
                        <option value="500" {{ $page_no == 500 ? 'selected' : '' }}>
                            Show 500
                        </option>
                        <option value="all" {{ $page_no == 'all' ? 'selected' : '' }}>
                            Show All
                        </option>
                    </select>
                </div>

                <div class="col px-1">
                    <select class="form-control w-100" id="status">
                        <option value="null" {{ $status === null ? 'selected' : '' }}>
                            Status
                        </option>
                        <option value="complete" {{ $status === 'complete' ? 'selected' : '' }}>
                            complete
                        </option>
                        <option value="quotafull" {{ $status === 'quotafull' ? 'selected' : '' }}>
                            quotafull
                        </option>
                        <option value="terminate" {{ $status === 'terminate' ? 'selected' : '' }}>
                            terminate
                        </option>
                    </select>
                </div>
               
                <div class="col px-1">
                    <input type="search" class="form-control w-100" placeholder="Uid" name="uid" id="uid"
                        value="{{ $uid ?? '0' }}">
                </div>

                <div class="col px-1">
                    <input type="search" class="form-control w-100" placeholder="Pid" name="pid" id="pid"
                    value="{{ $pid?? '0'  }}">
                </div>

                <div class="col px-1">
                    <input type="date" class="form-control w-100" name="sdate" id="sdate"
                        value="{{ $sdate ?? '' }}">
                </div>

                <div class="col px-1">
                    <input type="date" class="form-control w-100" name="edate" id="edate"
                        value="{{ $edate ?? '' }}">
                </div>
                <div class="col ps-1">
                    <button class="btn btn-primary w-100" type="button" id="filter_btn">Apply
                        Filter</button>

                </div>
            </form>
        </div>
        {{-- <div class="card-header justify-content-between">
            <input type="text" id="search" name="search" class="form-control w-100"
                placeholder="Search by pid, uid,status,ip and date">
            <div id="search-results"></div>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-sm">
                    <thead>
                        <tr>
                            <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'S.no') }}</th>
                            <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'pid') }}</th>
                            <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'uid') }}</th>
                            <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'status') }}</th>
                            <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'start ip') }}</th>
                            <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'Start Date time') }}</th>
                            <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'end ip') }}</th>
                            <th class="text-nowrap text-capitalize">{{ str_replace('_', ' ', 'Date time') }}</th>

                        </tr>
                    </thead>
                    <tbody id="showAll">
                        @foreach ($post as $key => $item)
                            <tr>
                                <td class="text-nowrap">{{ $key + 1 }}</td>
                                <td class="text-nowrap">{{ $item->pid }}</td>
                                <td class="text-nowrap">{{ $item->uid }} </td>
                                <td class="text-nowrap">{{ $item->status }} </td>
                                <td class="text-nowrap">{{ $item->start_ip }} </td>
                                <td class="text-nowrap">
                                    {{ Carbon\Carbon::parse($item->created_at ?? '')->format('d-M-Y H:i A') }} </td>
                                    <td class="text-nowrap">{{ $item->end_ip }} </td>
                                <td class="text-nowrap">
                                    {{ Carbon\Carbon::parse($item->updated_at?? '')->format('d-M-Y H:i A') }} </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            {{ $post->links('pagination::bootstrap-5') }}
        </nav>
    </div>
@endsection
