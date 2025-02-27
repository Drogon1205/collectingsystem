<x-app-layout>

    <div class="container mt-4">

        <div class="row">

            <div class="col-2">
                @include('sidebar')
            </div>

            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h6><b>Create Route</b></h6>
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

                            @foreach ($routes as $route)
                            <tr>
                                <td>{{$route->id}}</td>
                                <td>{{$route->name}}</td>
                                <td><a href="#"class="btn btn-warning">Edit</a></td>



                                <td><form action="/Management/Route/{{$route->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                    </form></td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    {{$routes->links()}}

                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
