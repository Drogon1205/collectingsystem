<x-app-layout>

    <div class="container mt-4">

        <div class="row">

            <div class="col-2">
                @include('sidebar')
            </div>

            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h6>Create Route</h6>
                        <br>
                        <a href="/Management/Route/create" class="btn btn-primary float-end">Create Route</a>




                    </div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                {{ session('status') }}
            </div>
        @endif


                    <table class="table">

                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>

                        </thead>
                        <tbody>

                            @foreach ($routes as $routes)
                            <tr>
                                <td>{{$routes->id}}</td>
                                <td>{{$routes->name}}</td>
                                <td><a href="#"class="btn btn-warning">Edit</a></td>
                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
