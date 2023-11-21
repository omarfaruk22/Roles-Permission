@extends('backend.master_template.master_template')
@section('content')
@section('styles')
<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection
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
                        <form action="{{route('rolesave')}}" method="post" id="form_sample_1" class="form-horizontal">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Role Name</label> 
                                    <input type="text" name="name" id="name" placeholder="Enter a Role Name" class="form-control" value="{{ old('name') }}">
                                    <span class="text-danger">
                                      @error('name')
                                        {{ $message }}
                                      @enderror
                                    </span>
                                   </div>
                                   <div class="form-group">
                                    <label for="name">Permissions</label>
        
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1">
                                        <label class="form-check-label" for="checkPermissionAll">All</label>
                                    </div>
                                    <hr>
                                    @php $i = 1; @endphp
                                    @foreach ($permission_groups as $group)
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="{{ $i }}Management" value="{{ $group->name }}" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                                                    <label class="form-check-label" for="checkPermission">{{ $group->name }}</label>
                                                </div>
                                            </div>
        
                                            <div class="col-9 role-{{ $i }}-management-checkbox">
                                                @php
                                                    $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                                                    $j = 1;
                                                @endphp
                                                @foreach ($permissions as $permission)
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="permissions[]" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                                                        <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                    @php  $j++; @endphp
                                                @endforeach
                                                <br>
                                            </div>
        
                                        </div>
                                        @php  $i++; @endphp
                                    @endforeach
        
                                    
                                </div>
                               

                                   <div class="form-group">
                                    <button class="form-control btn btn-info" >Save Role</button>
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
<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script>
    /**
         * Check all the permissions
         */
         $("#checkPermissionAll").click(function(){
             if($(this).is(':checked')){
                 // check all the checkbox
                 $('input[type=checkbox]').prop('checked', true);
             }else{
                 // un check all the checkbox
                 $('input[type=checkbox]').prop('checked', false);
             }
         });

         function checkPermissionByGroup(className, checkThis){
            const groupIdName = $("#"+checkThis.id);
            const classCheckBox = $('.'+className+' input');

            if(groupIdName.is(':checked')){
                 classCheckBox.prop('checked', true);
             }else{
                 classCheckBox.prop('checked', false);
             }
            implementAllChecked();
         }

         function checkSinglePermission(groupClassName, groupID, countTotalPermission) {
            const classCheckbox = $('.'+groupClassName+ ' input');
            const groupIDCheckBox = $("#"+groupID);

            // if there is any occurance where something is not selected then make selected = false
            if($('.'+groupClassName+ ' input:checked').length == countTotalPermission){
                groupIDCheckBox.prop('checked', true);
            }else{
                groupIDCheckBox.prop('checked', false);
            }
            implementAllChecked();
         }

         function implementAllChecked() {
             const countPermissions = {{ count($all_permissions) }};
             const countPermissionGroups = {{ count($permission_groups) }};

            //  console.log((countPermissions + countPermissionGroups));
            //  console.log($('input[type="checkbox"]:checked').length);

             if($('input[type="checkbox"]:checked').length >= (countPermissions + countPermissionGroups)){
                $("#checkPermissionAll").prop('checked', true);
            }else{
                $("#checkPermissionAll").prop('checked', false);
            }
         
         }
         


</script>
@endsection