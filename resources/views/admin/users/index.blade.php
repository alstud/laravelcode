@extends('layouts.admin')

@section('content')




    @if(Session::has('Deleted_user'))


        <p class="bg-danger">{{session('Deleted_user')}}</p>

    @endif



     <table class="table">
             <thead>
                   <tr>
                     <th>Id</th>
                     <th>Photo</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Role</th>
                     <th>Status</th>
                     <th>Created</th>
                     <th>Updated</th>
                   </tr>
             </thead>
         <tbody>



         @if($users)

             @foreach($users as $user)

                 <tr>
                     <td>{{$user->id}}</td>
                     <td><img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" height="50" > </td>
                     <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}} </a></td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->role->name}}</td>
                     <td>{{$user->is_active === 1 ? 'Active' : 'Not active' }}</td>
                     <td>{{$user->created_at->diffForHumans()}}</td>
                     <td>{{$user->updated_at->diffForHumans()}}</td>
                 </tr>


             @endforeach
         @endif



         </tbody>
       </table>




    @stop