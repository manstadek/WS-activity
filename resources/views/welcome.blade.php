@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="flex items-center justify-center h-screen text-center bg-cover bg-center" 
         style="background-image: url('{{ asset('images/background.webp') }}');">
        <div class="p-6 rounded-lg shadow-lg max-w-md mx-auto">
            <img src="https://i.namu.wiki/i/j4LzRqrbK7V4y81OdCaIVUs9d94aX5fFemXvnPTex-oNT9pvM6_2MtkeJ6Y75gB7lqtJnx6oZnkmohiI1volxQ.webp" 
                 alt="Profile Image" 
                 class="w-40 h-40 mx-auto rounded-full mb-4">
            <h1 class="text-3xl font-bold text-white">Hi, I am Nichol Dan D. Arangurin</h1>
            <p class="text-white mt-4 text-justify">I am a third-year IT student. I enjoy creating websites and apps. </p>
        </div>
    </div>
@endsection
