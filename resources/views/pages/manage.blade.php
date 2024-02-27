@include('partials._nav')

<div class="container py-5">
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

@include('partials._footer')