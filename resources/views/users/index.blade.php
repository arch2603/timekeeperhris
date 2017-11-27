@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="medium-12 large-12 columns">
      <h4>Users</h4>
      <div class="medium-2  columns"><a class="button hollow success" href="{{ route('new_user') }}">ADD NEW USER</a></div>

      <!--<pre> </pre> -->

      <table class="stack">
        <thead>
        <tr>
          <th width="200">User Name</th>
          <th width="200">Name</th>
          <th width="200">Email</th>
          <th width="200">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{$user->user_name}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              <a class="hollow button" href="{{ route('show_user', ['user_id' => $user->id]) }}">EDIT</a>
              <!--<a class="hollow button warning" href="">BOOK A ROOM</a>-->
            </td>

          </tr>
        @endforeach

        </tbody>
      </table>


    </div>
  </div>

@endsection