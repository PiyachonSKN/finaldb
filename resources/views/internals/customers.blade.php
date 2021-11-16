<title>Customers</title>
@extends('layout')

@section('content')
<div class="row">
    <div class="col-12">
    <h1>Customers</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
    <form action="customers" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        <div>{{ $errors->first('name') }}</div>
    </div>

    
    <div class="form-group">
    <label for="email">Email</label>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        <div>{{ $errors->first('email') }}</div>
    </div>


    <p></p>
    <button type="submit" class="btn btn-primary">Add Customer</button>

    @csrf
</form>
    </div>
</div>


<hr>
<div class="row">
    <div class="col-12">
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach ($customers as $customer)
        <tr>
        <td>{{$customer->id}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>{{$customer->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><span class="text-muted">({{$customer->email}})</td>

        </tr>
    @endforeach
</table>
    </div>
</div>

@endsection