@extends('admin.layouts.blank')

@section('content')

<div class="container-fluid">
    <form action="{{route('admin.packages .delete.submit',['package' => $package->id])}}" method="POST">
        @csrf
        <div class="text-center">
            <h3 class="text-center">Are You Sure to delete this package?</h3>
            <small class="small text-center">Once you delete, cannot be restored.</small>
        </div>
        <div class="col-12 text-center p-5 m-3">
            <button class="btn btn-danger" href="">Yes, Delete</button>
            <a class="btn btn-primary" href="{{route('admin.packages.get')}}">Cancel</a>
        </div>
    </form>
</div>

@endsection