@extends('backend.master_template.master_template')
@section('styles')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Admin</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Admin</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Admin</li>
                </ol>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Create New Admin</header>
                     
                    </div>
                    @include('backend.includes.message')
                    <div class="card-body" id="bar-parent">
                        <form action="{{route('adminsave')}}" method="post" id="form_sample_1" class="form-horizontal">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                   <div class="form-group">
                                    <label for="name"> Name</label> 
                                    <input type="text" name="name" id="name" placeholder="Enter a Name" class="form-control" value="{{ old('name') }}">
                                    <span class="text-danger">
                                      @error('name')
                                        {{ $message }}
                                      @enderror
                                    </span>
                                   </div>
                                   <div class="form-group">
                                    <label for="email">User Email</label> 
                                    <input type="email" name="email" id="email" placeholder="Enter User Email" class="form-control" value="{{ old('email') }}">
                                    <span class="text-danger">
                                      @error('email')
                                        {{ $message }}
                                      @enderror
                                    </span>
                                   </div>
                                   <div class="form-group">
                                    <label for="roles">Assign Roles</label>
                                    <select name="roles[]" id="roles" class="form-control select2" multiple>
                                            
                                             @foreach ($roles as $role)
                                              <option value="{{ $role->name }}">{{ $role->name }}</option>
                                             @endforeach
                                        </select>
                                  </div>
                                  
                               

                                  
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">User Name</label> 
                                        <input type="text" name="username" id="username" placeholder="Enter a User Name" class="form-control" value="{{ old('username') }}">
                                        <span class="text-danger">
                                          @error('username')
                                            {{ $message }}
                                          @enderror
                                        </span>
                                       </div>
                                    <div class="form-group">
                                        <label for="password"> Password</label> 
                                        <input type="password" name="password" id="password" placeholder="Enter a Password" class="form-control" value="{{ old('password') }}">
                                        <span class="text-danger">
                                          @error('password')
                                            {{ $message }}
                                          @enderror
                                        </span>
                                       </div>
                                       <div class="form-group">
                                        <label for="confirmed">Confirm Password</label> 
                                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="form-control" value="{{ old('confirmed') }}">
                                        <span class="text-danger">
                                          @error('password_confirmation')
                                            {{ $message }}
                                          @enderror
                                        </span>
                                       </div>
                                    <div class="form-group">
                                        <button class="form-control btn btn-info" >Add Admin</button>
                                      </div>



                                </div>
                          
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.select2').select2({
        theme: 'default', // or another theme you are using
    });
});
</script>

@endsection
