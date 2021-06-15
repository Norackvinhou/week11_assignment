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
                                            @can('store-category')
                                            <a class="btn btn-primary" href="{{route('categories.create')}}">+ new</a>
                                            @endcan
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
                                                @can('update-category')
                                                    <li>
                                                           <a class="btn btn-primary" href="{{route('categories.edit', $category->id) }}">Edit</a>
                                                    </li>
                                               @endcan

                                               @can('destroy-category')
                                                    <li>
                                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                                 @csrf
                                                                  @method('delete')
                                                         <button type="submit" class="btn btn-danger">Delete</button>
                                                         </form>
                                                      </li>
                                                @endcan
                                                 </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                        </table>
                            </div>

</div>
@endsection