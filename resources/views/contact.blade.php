@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
    <div class="flex items-center justify-center min-h-screen px-6">
        <div class="p-6 rounded-lg shadow-lg max-w-2xl w-full">
            <h1 class="text-3xl font-bold text-white text-center">CONTACT</h1>
            <p class="text-white mt-4 text-center">Feel free to reach out to me through any of the platforms below:</p>
            <div class="mt-6 space-y-4 flex flex-col items-center">
                <p class="text-white text-lg flex items-center gap-3">
                    <i class="fa-solid fa-envelope text-red-500 text-2xl"></i>
                    <a href="mailto:nicholdan.arangurin@hcdc.edu.ph" class="no-underline text-white text-lg">nicholdan.arangurin@hcdc.edu.ph</a>
                </p>
                <p class="text-white text-lg flex items-center gap-3">
                    <i class="fa-brands fa-discord text-blue-500 text-2xl"></i>
                    <span class="font-semibold text-lg">mans3489</span>
                </p>
                <p class="text-white text-lg flex items-center gap-3">
                    <i class="fa-brands fa-github text-gray-400 text-2xl"></i>
                    <a href="https://github.com/manstadek" target="_blank" class="no-underline text-white text-lg">https://github.com/manstadek</a>
                </p>
            </div>
        </div>
    </div>
@endsection
