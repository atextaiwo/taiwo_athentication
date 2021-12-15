@extends('main')

@section('content')
<main>
        <div class="container-fluid px-4">
            <div class="card mt-4">
                 <div class="card-body">
                    USERNAME:<span style="font-size: 22px; font-weight: bold;" > {{$user->name}}</span> <br>
                    EMAIL: <span style="font-size: 22px; font-weight: bold;" > {{$user->email}}</span> <br><br>
                    <a href="{{route('editprofile')}}" class="btn btn-primary">Edit profile</a>

                </div>
             </div>
         </div>
</main>
@endsection