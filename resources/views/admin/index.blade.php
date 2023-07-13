@extends('admin/base')

@section('content')
    <div class="container p-5">
        <h3 class="text-white">
            Dashboard
        </h3>
        <p class="text-gray">
            Hello Admin, welcome to the E-Tax Admin Dashboard.
        </p>
        {{-- stats --}}
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">
                            {{$total_users}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Tax Filers</h5>
                        <p class="card-text">
                            {{$total_tax_filers}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Tax Payers</h5>
                        <p class="card-text">
                            0
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Taxes Filed</h5>
                        <p class="card-text">
                            {{$total_taxes_filed}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- end stats --}}
        {{-- Users table --}}
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td><a href="/admin/users/{{$user->id}}">Update</a></td>
                                            <td><a href="/admin/delete/{{$user->id}}">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Users table --}}
    </div>
@endsection
