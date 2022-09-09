{{-- Submit Html Form --}}
<h1>
   User Login
</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter username"><br><br> 
    <input type="password" name="password" placeholder="Enter password"><br><br> 
    <button type="submit">Login</button>
</form>


















{{-- <x-header data="Üsers Information Header"/> --}}
{{-- @include('header')
<h2>This is user Page.</h2>
@include('inner')


@foreach ($users as $user )
<h3>{{$user}}</h3>
@endforeach

@csrf
<script>
    var data =@json($users) ;
    console.warn(data);
</script> --}}


{{--  

    This if if-else loop

@if($user =='Dipesh')
<h1>Hi, {{$user}}</h1>
@elseif($user =='Hari')
<h1>Hi, {{$user}}</h1>
@else
<h1>Hi, Anonymous User</h1>
@endif --}}

{{-- 
    
    For loop
    
@for($i=0;$i<10;$i++)
<h4>{{$i}}</h4>
@endfor --}}


{{--
    
    For-each loop
    
    @foreach ($users as $user)
<h4>{{$user}}</h4>
@endforeach --}}