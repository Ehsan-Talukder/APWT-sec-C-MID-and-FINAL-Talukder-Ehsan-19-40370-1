@extends('layouts.app')<br>
@section('content')<br><br>
    <form action="{{route('registration')}}" method="post" style ="border-style: solid">
        {{csrf_field()}}
        <h1>REGISTRATION</h1>
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="name">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}"class="form-control" placeholder="email">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}"class="form-control" placeholder="phone">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Date of Birth</span>
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control" placeholder="Date of Birth">
            @error('dob')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        
        <div class="col-md-4 form-group">
            <span>Password</span>
            <input type="password" name="password" value="{{old('password')}}"class="form-control" placeholder="password">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Confirm Password</span>
            <input type="password" name="cpassword" value="{{old('confirm password')}}" class="form-control" placeholder="Confirm Password">
            @error('confirm password')
            <span class="text-danger">{{$message}}</span>
             @enderror
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Submit" >
    </form>
@endsection