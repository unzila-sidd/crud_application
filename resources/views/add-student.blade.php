@extends ('layouts.layout')

@section('content')
<div class="form">
<form method="post" action="{{route('save.student')}}">
@csrf
    <div class="form-input">
        <label>Name</label></br>
        <input class="form-control" type="text" value="" placeholder="Your Name" name="name"></br>
        <label>Email</label></br>
        <input class="form-control" type="email" value="" placeholder="Your Name" name="email"></br>
        <input type="submit" name="submit">
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
</style>