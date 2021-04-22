@extends('layout')
@section('content')
<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 py-3">
                <h1 class="wow fadeInUp">Send to me</h1>

                <form method="POST" class="mt-5" action="/contact">
                    @csrf
                    <div class="form-group wow fadeInUp">
                        <label for="email" class="fw-medium fg-grey">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group wow fadeInUp">
                        @error('email')
                            <div style="color:red;">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4 wow fadeInUp">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>

                    @if(session('message'))
                        <div>
                            {{session('message')}}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection