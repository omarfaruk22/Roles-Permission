@extends('backend.master_template.master_template')
@section('styles')
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Admin</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">All Admin</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Admin</li>
                </ol>
            </div>
        </div>
 
                    @include('backend.includes.message')
                    <div class="main-content-inner">
                        <div class="row">
                            <!-- data table start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title float-left">User List</h4>
                                        <p class="pull-right mb-2">
                                     
                                                <a class="btn btn-primary text-white" href="{{ route('admincreate') }}">Create New Admin</a>
                                           
                                        </p>
                                        <div class="clearfix"></div>
                                        <div class="data-tables">
                                            <table id="dataTable" class="text-center">
                                                <thead class="bg-light text-capitalize">
                                                    <tr>
                                                        <th width="5%">Sl</th>
                                                        <th width="10%">Name</th>
                                                        <th width="10%">Email</th>
                                                        <th width="40%">Roles</th>
                                                        <th width="15%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($admins as $admin)
                                                    <tr>
                                                         <td>{{ $loop->index+1 }}</td>
                                                         <td>{{ $admin->name }}</td>
                                                         <td>{{ $admin->email }}</td>
                                                         <td>
                                                             @foreach ($admin->roles as $role)
                                                                 <span class="badge badge-info mr-1">
                                                                     {{ $role->name }}
                                                                 </span>
                                                             @endforeach
                                                         </td>
                                                         <td>
                                                             
                                                                 <a class="btn btn-success text-white" href="{{route('adminedit', $admin->id)}}">Edit</a>
                                                           
                                                             
                                                            
                                                             <a class="btn btn-danger text-white" href="{{route('admindelete',$admin->id)}}"
                                                             onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">
                                                                 Delete
                                                             </a>
                                                             <form id="delete-form-{{ $admin->id }}" action="{{route('admindelete',$admin->id)}}" method="POST" style="display: none;">
                                                                 @method('DELETE')
                                                                 @csrf
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
                            <!-- data table end -->
                            
                        </div>
                    </div>
               
            
        </div>
   
</div>

@endsection
@section('scripts')
<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

<script>
    /*================================
   datatable active
   ==================================*/
   if ($('#dataTable').length) {
       $('#dataTable').DataTable({
           responsive: true
       });
   }

</script>
@endsection