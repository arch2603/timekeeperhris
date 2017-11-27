@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>{{$modify == 1 ? 'Modify User' : 'New User'}}</h4>
            <form action="{{ $modify == 1 ? route('update_user', ['user_id' => 1]) : route('create_user') }}" method="post">
                <div class="medium-4  columns">
                    <label>User Name</label>
                    <input name="user_name" type="text" value="{{ old('user_name') }}">
                    <small class="error">{{$errors->first('user_name')}}</small>
                </div>
                <div class="medium-4  columns">
                    <label>Title</label>
                    <select name="form[title]">
                        @foreach($titles as $title)
                            <option value="{{$title}}">{{$title}}.</option>

                        @endforeach
                    </select>
                </div>
                <div class="medium-4  columns">
                    <label>Name</label>
                    <input name="name" type="text" value="{{ old('name') }}">
                    <small class="error">{{$errors->first('name')}}</small>
                </div>
                <div class="medium-8  columns">
                    <label>Last Name</label>
                    <input name="last_name" type="text" value="{{ old('last_name') }}">
                    <small class="error">{{$errors->first('last_name')}}</small>
                </div>
                <div class="medium-8  columns">
                    <label>Mobile</label>
                    <input name="mobile" type="text" value="{{ old('mobile') }}">
                    <small class="error">{{$errors->first('mobile')}}</small>
                </div>

                <div class="medium-12  columns">
                    <label>Email</label>
                    <input name="email" type="text" value="{{ old('email') }}">
                    <small class="error">{{$errors->first('email')}}</small>
                </div>
                <div class="medium-12  columns">
                    <input value="SAVE" class="button success hollow" type="submit">
                </div>
            </form>
        </div>
    </div>
@endsection