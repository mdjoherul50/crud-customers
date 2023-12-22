<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Customer Form</title>
</head>
<body>

<div class="container mt-5">
    <div class="display-4"> Create Customer </div>
        <form action="{{route('customers.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="lastName">Name</label>
                <input type="text" class="form-control" id="lastName" name="name" placeholder="Enter  name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter address" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <div> 
        <a  class=" btn btn-secondary mt-2" href="{{route('customers.index')}}">Back</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
