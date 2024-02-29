@include('partials._nav')

<div class="container py-5">

    <div class="row justify-content-between align-items-center mb-4">
        <div class="col-md-6">
            <h4 class="text-primary">Welcome {{ auth()->user()->first_name }}</h4>
        </div>
        <div class="col-md-6 text-end">
            <a href="/create" class="btn btn-secondary">Add Property</a>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h5>Your Listed Properties</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($houses as $house)
                            <tr>
                                <td><a href="/houses/{{$house->id}}">{{ $house->title }}</a></td>
                                <td>${{ $house->price }}</td>
                                <td>
                                    <a href="/houses/{{$house->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="/houses/{{$house->id}}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this house?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light py-4">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <p class="mb-0">Logged in as:</p>
                <h5 class="mb-0">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h5>
            </div>
            <!-- <div class="col-md-4 text-end">
                <p class="mb-0">Email:</p>
                <p class="mb-0">{{ auth()->user()->email }}</p>
            </div> -->
            <div class="col-md-2 text-end">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('partials._footer')