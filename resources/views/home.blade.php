@extends('welcome')

@section('title')
Padma-Gnanapriya-Home
@endsection

@section('navbars')
<li class="active"><a href="home">Home</a></li>
<li><a href="about">About</a></li>
<li><a href="eduction">Education</a></li>
<li><a href="skills">Skills</a></li>
<li><a href="contact">Contact</a></li>
@endsection

@section('content')
<style>
.intro{
    padding:30px;
    font-size:60px;
    line-height:70px;
}
</style>
<div class="intro">
Hello, I'm Padma Gnanapriya
</div>



@endsection