@extends('layouts.master')

@section('pagetitle','itemlist')

@section('contant')

<table class="table table-striped">
    <thead>
        <tr class="table table-primary">
          <th class="border" scope="col">SNo</th>
          <th class="border" scope="col">Title</th>
          <th class="border" scope="col">Discription</th>
          <th class="border" scope="col">Created Date</th>
          <th class="border" scope="col">Update Date</th>
          <th class="border" scope="col">Author</th>
          <th class="border" scope="col">Action</th>
        </tr>
        <tr>
    </thead>
<?php $count = 1 ?>
   @foreach ($postblog as $postblog )
  
   <tbody class="pt-2 pb-3">
    <tr >
        <td class="border">{{$count}}</td>
        <td  class="border">{{$postblog->title}}</td>
        <td  class="border">{{$postblog->discription}}</td>
        <td  class="border">{{$postblog->created_at}}</td>
        <td  class="border">{{$postblog->updated_at}}</td>
        <td  class="border">{{$postblog->author}}</td>
        <td  class="acction d-flex gap-2 align-items-center justify-content-between">
            <a href="/edit/{{$postblog->id}}" class="btn btn-primary btn-sm">Edit</a> 
            
            <a href="/delete/{{$postblog->id}}" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
   </tbody>

   <?php $count++ ?>


       
   @endforeach

 


     
    </tr>
</table>

@endsection