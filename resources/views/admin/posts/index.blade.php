

@extends('layouts.admin')





@section('content')


     <table class="table">
         <thead>
           <tr>
             <th>Id</th>
             <th>Owner</th>
             <th>Category</th>
             <th>Photo</th>
             <th>Title</th>
             <th>Body</th>
             <th>Created</th>
             <th>Updated</th>
           </tr>
         </thead>
         <tbody>

         @if($posts)

             @foreach($posts as $post)

           <tr>
             <td>{{$post->id}}</td>
             <td>{{$post->user->name}}</td>
             <td>{{$post->category_id}}</td>
             <td>{{$post->photo_id}}</td>
             <td>{{$post->title}}</td>
             <td>{{$post->body}}</td>
             <td>{{$post->created_at}}</td>
             <td>{{$post->updated_at}}</td>
           </tr>

           @endforeach
          @endif
         </tbody>
       </table>


@stop