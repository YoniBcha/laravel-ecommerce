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
            <form method="POST" action="{{ route('file.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Select File</label>
                    <input type="file" class="form-control" id="" name="file">
                </div>

                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>

        <div class="">
            <table>
                <thead>
                    <tr>
                        <th>File Name</th>
                        <th>File Size</th>
                        <th>File View</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                        <tr>
                            <td>{{ $file->name }}</td>
                            <td>{{ $file->size }}</td>
                            <td class="">
                                <img width="" height="300px" src="/storage/{{ $file->file_path }}" alt="">
                            </td>
                            <td><a href="{{ route('file.download', $file->id) }}" class="btn btn-primary">Download</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
