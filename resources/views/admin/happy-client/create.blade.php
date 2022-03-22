@extends('admin.master')

@section('title')
    Admin | Happy Client
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                    <!-- Default form login -->
                        <form action="{{route('store-happy-client')}}" method="post" class="border border-light p-5"
                              enctype="multipart/form-data">
                            @csrf
                            <p class="h4 mb-4 text-center">Add Happy Client</p>

                            <!-- Iamge link -->
                            <div class="md-form mt-0">
                                <input type="text" value="{{old('link')}}" name="link" id="slider_title" class="form-control">
                                <label for="slider_title">Happy Client Link</label>
                            </div>
                            <div class="form-group mb-3 text-danger">
                                @error('link')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            {{--slider image--}}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload (228*150)</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file"  onchange="loadfile(event)"  name="image" class="custom-file-input" id="slider_image"
                                           aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="slider_image">Happy Client Logo</label>
                                </div>
                            </div>
                            <img src="" id="preimage" width="100%" height="200" alt="">
                            <div class="form-group text-danger">
                                @error('image')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Submit</button>

                        </form>
                        <!-- Default form login -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function loadfile(event) {
            var output=document.getElementById('preimage');
            output.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection

@section('js')

@endsection
