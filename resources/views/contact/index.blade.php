@extends('app')
@section('contents')
    <div class="row justify-content-center ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-6 border p-3 rounded-2xl">
            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" id="" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" id="" name="email" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="" name="subject" value="{{ old('subject') }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Message</label>
                    <textarea name="message" class="form-control" >{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
