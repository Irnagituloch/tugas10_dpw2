@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5"></div>
    </div>
    <div class="card">
        <div class="card-header">
            Detail Data User
        </div>
        <div class="card-body">
            <h3>{{$user->nama}}</h3>
            <hr>
            <p> 
                Nama. {{$user->nama}} |
                Username : {{$user->username}} |
                Email : {{$user->email}} gr |
                Jenis Kelamin : {{$user->jenis_kelamin_string}}          
            </p>
           </div>
        </div>
    </div>
</div>
@endsection