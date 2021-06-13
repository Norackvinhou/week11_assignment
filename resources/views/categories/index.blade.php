@extends('layout.app')
@section('content')

<div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <thead>
                                        <tr>
                                        <th>#</th>
                                            <th>Name</th>
                                            <th>
                                            <a class="btn btn-primary" href="{{route('categories.create')}}">+ new</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{$loop-> index+1}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>Edit | delete</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                        </table>
                            </div>

</div>
@endsection