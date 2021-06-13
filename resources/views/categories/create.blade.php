@extends('layout.app')
@section('content')
<div class="card-body">
        <form action="{{route('categories.store')}}" method="POST" class="user">
            @csrf
                <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                        name="name" aria-describedby="emailHelp"
                        placeholder="Category">
                 </div>
                                        
                <button  class="btn btn-primary btn-user btn-block">
                        create
                </button>           
        </form>
        
</div>

@endsection