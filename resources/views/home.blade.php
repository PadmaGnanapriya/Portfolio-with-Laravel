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


<img src="{{ asset(.'/'.$article->image) }}" alt="" title="">


@endsection