@extends('welcome')

@section('title')
Padma-Gnanapriya-Contact
@endsection


@section('navbars')
<li><a href="home">Home</a></li>
<li><a href="about">About</a></li>
<li><a href="eduction">Education</a></li>
<li><a href="skills">Skills</a></li>
<li class="active"><a href="contact">Contact</a></li>
@endsection


@section('content')
<h1>Contact</h1>
                <div class="rainbow">
                    <a href="tel:+94766328189">
                        <h2>Call</h2>
                        <img src="mobile.gif?width=10" />076-632-8189
                    </a>
                    <br />
                </div>
                <div class="rainbow">
                    <a href="sms:+94766328189">
                        <h2>SMS</h2>
                        <img src="sms.gif?width=10" />0766328189
                    </a>
                    <br />
                </div>
                <div class="rainbow">
                    <a href="mailto:padmaganapriya@gmail.com">
                        <h2>email</h2>
                        <img src="email.gif?width=10" />padmaganapriya@gmail.com
                    </a>
                    <br />
                    <a href="mailto:padmaganapriya@outlook.com">padmaganapriya@outlook.com</a>
                </div>
                <div class="rainbow">
                    <a href="https://api.whatsapp.com/send?phone=+94766328189">
                        <h2>Whatsapp</h2>
                        <img src="whatsapp.gif?width=10" />0766328189
                    </a>
                    <br />
                </div>

@endsection
