

 @extends('layouts.admin')

 @section('content')

        <h1>Create Users</h1>



   {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store' , 'files'=>true]) !!}


            {{csrf_field()}}

            <div class="form-group">
               {!! Form::label('name', 'Name:') !!}
               {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('status', 'Status:') !!}
                {!! Form::select('is_active',array(1=>'Active', 0 =>'Not Active'), 0, ['class'=>'form-control']) !!}
             </div>

            <div class="form-group">
                {!! Form::label('role', 'Role:') !!}
                {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                   {!! Form::label('photo_id', 'File:') !!}
                   {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
             </div>


            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password',  ['class'=>'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
            </div>

               {!! Form::close() !!}

        @include('includes.form_error')






 @stop