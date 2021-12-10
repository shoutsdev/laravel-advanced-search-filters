<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 8 Advanced Search</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.filter') }}" method="GET">
                        <div class="row">
                            <div class="col-xl-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $name ?? '' }}">
                            </div>
                            <div class="col-xl-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $email ?? '' }}">
                            </div>
                            <div class="col-xl-3 mt-2">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="{{ $username ?? '' }}">
                            </div>
                            <div class="col-xl-3 mt-2">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control" value="{{ $age ?? '' }}">
                            </div>
                            <div class="col-xl-12 text-right mt-2">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Age</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td> {{ $key+1 }}</td>
                        <td> {{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->age }}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>

</body>
</html>
