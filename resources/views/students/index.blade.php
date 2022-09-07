@extends('students.layout')
@section('content') 
<div class="container">
    <div class="row bg-red" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-success">
                    <h2 class="text-center text-light">Student List</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/students/create')}}" class="btn btn-success btn-sm" title="Add new Student">
                        <i class="fa-solid fa-plus"></i>
                    </a><br><br>
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr >
                                    <th >Sl</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $item )
                                    
                                
                                <tr>
                                    <td class="text-left">{{$loop->iteration}}</td>
                                    <td class="text-justify">{{$item->name}}</td>
                                    <td class="text-left">{{$item->email}}</td>
                                    <td class="text-left">{{$item->address}}</td>
                                    <td class="text-left">{{$item->mobile}}</td>
                                    <td>
                                        <a href="{{url('/students/'.$item->id)}}" class="btn btn-info btn-sm" title="View Student" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                        <a href="{{url('/students/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Student" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                        <form method="POST" action="{{ url('/students/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

    </div>
</div>
@endsection
