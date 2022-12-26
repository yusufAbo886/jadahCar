@extends('admin.common.master')

@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <div class="card-title">

                    <span class="card-icon">

                      <i class="flaticon2-heart-rate-monitor text-primary"></i>

                    </span>

                <h3 class="card-label">Slider</h3>

            </div>
            <div class="card-toolbar">

                <a href="{{asset('admin/slider/create')}}" class="btn btn-primary font-weight-bolder">

                    <i class="la la-plus"></i>New Record</a>
            </div>

        </div>

        <div class="card-body theDataTable">

            <!--begin: Datatable-->

            <table  class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                <thead class="cf">
                <tr>
                    <th>image</th>
                    <th>title </th>
                    <th>Action</th>
                </tr>

                </thead>
                <tbody>
                @foreach( $slider as $item)
                    <tr>
                        <td><img src="{{ $item->thePhoto}}" width="80"></td>
                        <td>{{$item->theTitle}}</td>

                        <td>
                            <div class='d-inline mr-4'><a class='btn btn-light-primary font-weight-bold' href='{{route('slider.edit',$item->id)}}'><i class='flaticon2-pen text-info'></i></a></div>
                            <button  class="btn btn-light-primary font-weight-bold delete" url="{{route('slider.destroy',$item->id)}}" id="{{ $item->id }}" content="{{csrf_token()}}"><i class='glyphicon glyphicon-trash text-danger'></i></button>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        var pages = document.getElementById("pages");
        var homeBackground = document.getElementById("slider");
        pages.classList.add("menu-item-open");
        homeBackground.classList.add("menu-item-active");
    </script>



@endsection
