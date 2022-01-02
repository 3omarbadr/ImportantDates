@extends('admin.layouts.master')

@section('main')

<div class="main-content">
    <div class="container">
        <div class="page-header">
            <div>
                <h2 class="main-content-title">Add Color</h2>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Colors</li>
                    </ol>
                </nav>
            </div>

        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h6 class="card-title mb-1">Add Color</h6>
                                </div>
                                <form action="{{ route('color.store') }}" method="POST">
                                    @csrf
                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-4">
                                            <label>Color Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control"  placeholder="Enter Color Name"
                                                name="name" type="text">
                                                @error('name') <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-4">
                                            <label>Color Code</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input class="form-control"  placeholder="Enter Color code"
                                                name="code" type="color">
                                        </div>
                                    </div>

                                    <div class="row justify-content-end">

                                        <div class="col-md-8">
                                            <div class="btn-group" role="group">
                                                <button type="submit"
                                                    class="btn ripple btn-primary me-2">Submit</button>
                                                <a class="btn ripple btn-secondary text-light"
                                                    href="{{route('color.index')}}">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="d-flex justify-content-center my-3">

                        {{$countrys->links()}}

                    </div> --}}
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- end main content -->

@endsection
