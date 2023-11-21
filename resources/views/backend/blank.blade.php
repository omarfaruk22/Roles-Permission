@extends('backend.master_template.master_template')
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Role</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Roles & Permissions</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Role</li>
                </ol>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Create New Role</header>
                     
                    </div>
                    @include('backend.includes.message')
                    <div class="card-body" id="bar-parent">
                       




                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection