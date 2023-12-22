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
    <h3>Customers Details</h3>
</div>
    <table class="table">
        <thead>
            <tr >
                <h2>ID : {{$customer->id}}</h2>
                <h2>Name : {{$customer->name}}</h2>
                <h2>Email : {{$customer->email}}</h2>
                <h2>Phone : {{$customer->phone}}</h2>
                <h2>Address : {{$customer->address}}</h2>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
