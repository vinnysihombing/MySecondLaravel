@extends('layouts.app')

@section('content')
    <div class="welcome-web">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h4 class="title-welcome">Selamat Datang!</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <hr class="new1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <p class="subtitle-welcome">
                    Selamat menjelajahi web ini!
                    @guest
                        <hr style="border: 0.5px solid grey"/>
                        Jika Anda belum memiliki akun silahkan <a href="{{ route('register') }}">Daftar</a> terlebih dahulu
                        <br/>
                        Jika Anda sudah memiliki akun silahkan melakukan <a href="{{ route('login') }}">Login</a>
                    @else
                        <hr style="border: 0.5px solid grey"/>
                        Anda sudah berhasil Login, silahkan mencoba fitur yang Anda miliki pada role yang diberikan pada Anda.
                    @endguest
                </p>
            </div>
        </div>
    </div>
@endsection