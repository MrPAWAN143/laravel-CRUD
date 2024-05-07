@extends('layouts.master')

@section('pagetitle','HomePage')

@section('contant')

<h1 class="text-center">

Blog Post Form

</h1>

<form action="/createPost" method="POST">
    <div class="row">
        <div class="col-md-4 m-auto">

            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="col-md-12 mb-4">
                <label for="title">Title
                </label>
                    <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="col-md-12 mb-4">
                <label for="discription">Discription
                </label>
                    <textarea rows="5" class="form-control" id="discription" name="discription"></textarea>
            </div>
            <div class="col-md-12 mb-4">
                <label for="author">Author
                </label>
                    <input type="text"  class="form-control" id="author" name="author">
            </div>
            <div class="col-md-12 mt-4">
              
                    <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </div>


</form>
    
@endsection
    