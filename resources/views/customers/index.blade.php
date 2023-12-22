<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>CUstomer Details</title>
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between">
    <div class="display-3">Customers Details</div>
        <div>
            <a href="{{route('customers.create')}}" class="btn btn-primary mt-5">Create Customer</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td> {{$customer->id}}</td>
                <td> {{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->address}}</td>
                <td class="d-flex d-flex justify-content-around"> <a class="btn btn-primary me-2" href="{{url('/customers/'. $customer->id)}}">View</a>
                    <a class="btn btn-primary me-2" href="{{url('/customers/'. $customer->id . '/edit' )}}">Edit</a>
                  <form action="{{url('/customers/'. $customer->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger " type="submit">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
