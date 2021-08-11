@extends ('layouts.layout')

@section('content')
<div class="form">
@if(Session::has('student_add'))
<span>{{ Session::get('student_add')}}</span>
@endif
<form method="post" action="{{route('save.student')}}">
@csrf
    <div class="form-input">
        <label>Name</label></br>
        <input class="form-control" type="text" value="" placeholder="Your Name" name="name"></br>
        <label>Email</label></br>
        <input class="form-control" type="email" value="" placeholder="Your Name" name="email"></br>
        <input type="submit" name="submit" class="form-submit">
    </div>
</form>
</div>

@endsection
<style>

.form{
    width:50%;
    margin-right:auto;
    margin-left:auto;
    display:block;
    border:1px solid black;
    margin-top:1em;

}
.form-input{
    margin:20px
}
.form-control{
    border:1px solid green;
    padding:10px;
    width:100%;
}
.form-submit{
    padding:5px;
    border:1px solid black;
    font-size:14px;
    text-align:center;
    margin-top:12px;
}
</style>