@extends('layouts.admin.index')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">First name</th>
        <th scope="col">m name</th>
        <th scope="col">l name</th>
        <th scope="col">username</th>
        <th scope="col">password</th>
        <th scope="col">create_at</th>
        <th scope="col">update_at</th>
        <th scope="col">role_as</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )


      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->f_name }}</td>
        <td>{{ $user->m_name }}</td>
        <td>{{ $user->l_name }}</td>
        <td>{{ $user->username  }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->create_at }}</td>
        <td>{{ $user->update_at }}</td>
        <td>{{ $user->role_as }}</td>
      </tr>
      @endforeach

    </tbody>
  </table>

@endsection
