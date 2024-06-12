<!-- resources/views/contact.blade.php -->

@extends('components.app')



@section('content')
    <div class="feedback fixed right-0 top-0 lg:w-1/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Fill in this form so we can get back to you.😊
        </p>




        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600" >Name</label>
                <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600" >Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
            </div>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-600" >Message</label>
                <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
            </div>
            <button class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg" type="submit">Submit</button>


            @if (session('success'))
            <div class="bg-green-200 text-green-900 p-3 mb-5 rounded-lg">
                {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <div class="bg-red-200 text-red-900 p-3 mb-5 rounded-lg">
                {{ session('error') }}
            </div>
            @endif
        </form>


    </div>
@endsection






























































