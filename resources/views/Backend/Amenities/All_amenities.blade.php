@extends('admin.admin_dashboard')
@section('admin')
 
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
          <a href="{{route('add.amenitie')}}" class="btn btn-info">All Amenities</a>   
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Amenities All</h6>
    
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Serial Number</th>
            <th>Amenities Name</th>
            <th>Action</th>
          </tr>

        </thead>
        <tbody>
          @foreach ($amenities as $key =>$item)
            
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->amenities_name}}</td>
            
            <td>
  <a href="{{route('edit.amenitie',$item->id)}}" class="btn btn-warning"> Edit </a>  
  <a href="{{route('delete.type',$item->id)}}" class="btn btn-danger" id="delete"> Delete </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>
<
@endsection