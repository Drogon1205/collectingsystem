<x-app-layout>

    <div class="container mt-4">

        <div class="row">

            <div class="col-2">
                @include('sidebar')
            </div>

            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h6>Create New Route</h6>
                        <br>

                    </div>

                    <div class="card-body">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                        <form action="/Management/Route" method="POST">
                            @csrf

                            <label for="">New Route</label>
                            <input type="text" class="form-control" placeholder="Enter New Route" name="route">
                            <input type="submit" class="btn btn-danger mt-2" value="Create">
                        </form>

                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
