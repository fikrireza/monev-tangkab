<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>eMonev</title>

    @section('stylesheets')
        @include('layouts.stylesheets')
    @show
</head>

    <body>
        <div class="modal-container">
            @section('modals')
            @show
        </div>

        @section("navbar")
            @include('layouts.navbar')
        @show
        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                @include('layouts.sidebar')

                <!-- Main content -->
                <div class="content-wrapper">

                    @section('content')
                        <!-- Page Header (if any) and content here -->
                    @show

                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>
        <!-- /page container -->
        @section('scripts')
            @include('layouts.scripts')
        @show
    </body>
</html>
