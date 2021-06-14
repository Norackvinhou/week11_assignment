@extends('layout.app')
@section('content')

@extends('layout.app')
@section('content')
<div class="card-body">
        <form action="{{route('categories.update', $category->id)}}" method="POST" class="user">
            @csrf
            @method('put')
                <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                        name="name" aria-describedby="emailHelp"
                        placeholder="edit category" value="{{ $category->name }}"> 
                 </div>
                                        
                <button  class="btn btn-primary btn-user btn-block">
                        save Edit
                </button>           
        </form>
        
</div>

@endsection
@endsection