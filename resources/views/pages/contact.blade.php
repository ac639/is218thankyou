@extends('layouts.default')

@section('content')

    <h1>Contact</h1>

    <form method="post" action="{{route('contact.store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <textarea name='name' class="form-control" id="name" rows="1"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>

@endsection