@extends('/admin/base')

@section('content')
        <div class="container px-5">
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
                                        <th scope="col">User ID</th>
                                        <th scope="col">Tax Year</th>
                                        <th scope="col">Nationality</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    @foreach ($formlist as $form)
                                        <tr>
                                            <th scope="row">{{$form->id}}</th>
                                            <td>{{$form->user_id}}</td>
                                            <td>{{$form->tax_year}}</td>
                                            <td>{{$form->nationality}}</td>
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