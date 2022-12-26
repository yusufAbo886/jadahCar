@extends('admin.common.master')
@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title"> Slider</h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                </div>
            </div>
        </div>
        <!--begin::Form-->

        <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <div class="row">
                    <div class="col-sm form-group">
                        <label>Title En:</label>
                        <input class="form-control form-control-solid" id="theTitle" name="theTitle"
                               placeholder="Enter title En"

                               required/>
                        <span class="form-text text-muted">Please enter your full title </span>
                        @if ($errors->has('theTitle'))
                            <p class="text-danger">{{ $errors->first('theTitle') }}</p>
                        @endif
                    </div>

                </div>
                <div class="form-group">

                    <h2 class="titleSelectPhoto"> Image </h2>
                    <div class="col-md-12">
                        <div class="col-md-9">
                            <input type="text" type="hidden" name="file" id="fieldID" class="form-control"
                                   value="" placeholder="URL" required>
                        </div>
                        <div class="col-md-3">
                            <a href="javascript:open_popup('/public/lib/responsivefilemanager/filemanager/dialog.php?type=1&popup=1&multiple=0&field_id=fieldID')"
                               class="btn btn-primary" type="button">
                                select photo...(W:800px - H:425px)
                            </a>
                        </div>

                    </div>
                    <br>
                </div>
                <script type="text/javascript">
                    function open_popup(url) {
                        var w = 880;
                        var h = 570;
                        var l = Math.floor((screen.width - w) / 2);
                        var t = Math.floor((screen.height - h) / 2);
                        var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
                    }

                </script>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script>

        var pages = document.getElementById("pages");
        var homeBackground = document.getElementById("slider");
        pages.classList.add("menu-item-open");
        homeBackground.classList.add("menu-item-active");
    </script>

@endsection