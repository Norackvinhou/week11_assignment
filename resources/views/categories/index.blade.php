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
                                            <td>
                                                <ul>
                                                    <li>
                                                           <a class="btn btn-primary" href="{{route('categories.edit', $category->id) }}">Edit</a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                                 @csrf
                                                                  @method('delete')
                                                         <button type="submit" class="btn btn-danger">Delete</button>
                                                         </form>
                                                      </li>
                                                 </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                        </table>
                            </div>

</div>
@endsection