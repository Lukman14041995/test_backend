@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Data User')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Data Pengguna</h4>
            <p class="card-category"> Berikut Adalah Data Pengguna</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Birth Date</th>
                  <th>Birth Place</th>
                  <th>Gender</th>
                </thead>
                <tbody>
                  @foreach($user as $users)
                  <tr>
                    <td>{{$users->id}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->birth_date}}</td>
                    <td>{{$users->birth_place}}</td>
                    <td>{{$users->gender}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection