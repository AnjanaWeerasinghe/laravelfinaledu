@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('posts.store')}}" class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-2xl shadow-2xl w-full max-w-lg border border-gray-200 transform transition duration-500 hover:shadow-xl">
                        @csrf
  <h2 class="text-4xl font-extrabold mb-6 text-gray-800 text-center tracking-tight">📩 Contact Us</h2>
  <p class="text-sm text-gray-600 mb-8 text-center">We'd love to hear from you! Please fill out the form below.</p>

  <div class="mb-6">
    <label for="tital" class="block text-sm font-semibold text-gray-800 mb-2">post tital</label>
    <input type="tital" id="tital" name="tital"
           class="mt-1 block w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-50"
           placeholder="Anjana Weerasinghe" required>
  </div>

  <div class="mb-6">
    <label for="comment" class="block text-sm font-semibold text-gray-800 mb-2">Your Message</label>
    <textarea id="comment" name="description" rows="4"
              class="mt-1 block w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-gray-50"
              placeholder="Write your comment here..." required></textarea>
  </div>

  <div class="flex justify-end">
    <button type="submit"
            class="bg-gradient-to-r from-blue-500 to-blue-700 text-black font-bold py-3 px-6 rounded-lg shadow-md hover:shadow-lg hover:bg-blue-600 transition-transform duration-300 ease-in-out transform hover:scale-110">
      🚀 Send Message
    </button>
  </div>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
