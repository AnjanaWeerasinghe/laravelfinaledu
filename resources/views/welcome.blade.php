@extends('layouts.fruntend')

@section('content')
<!-- Main Banner -->
<section
  class="bg-gray-200 text-left py-60 bg-cover bg-center"
  style="background-image: url('{{ asset('images/person-holding-light-bulb-with-graduation-cap.jpg') }}'); padding-left: 50px;">
  <div style="max-width: 600px;">
    <h1 class="text-6xl font-bold text-white mb-4">Learning is a lifelong journey.</h1>
    <h1 class="text-4xl font-bold text-white">We're here for every step of the way.</h1>
  </div>
</section>





  <!-- Three Main Sections -->
  <section class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 py-16 ">
    <div class="bg-white p-8 shadow">
      <h2 class="text-2xl font-bold mb-4">School</h2>
      <p>We work alongside schools and families around the world to enhance every learning journey.</p>
      <button class="bg-black text-white py-2 px-4 mt-4">Explore schools</button>
    </div>
    <div class="bg-white p-8 shadow">
      <h2 class="text-2xl font-bold mb-4">College & University</h2>
      <p>See how our global higher education offerings help shape futures.</p>
      <button class="bg-black text-white py-2 px-4 mt-4">Discover college and university offerings</button>
    </div>
    <div class="bg-white p-8 shadow">
      <h2 class="text-2xl font-bold mb-4">Work</h2>
      <p>We offer products that solve the skills challenge and empower future generations of workers.</p>
      <button class="bg-black text-white py-2 px-4 mt-4">Upskill with us</button>
    </div>
  </section>

  <!-- Secondary Banner -->
  <section class="bg-black py-16 flex justify-center items-center">
  <div class="bg-black shadow-lg rounded-lg p-8 flex items-center  w-full">
    <div class="w-1/2 text-center px-4">
      <img src="{{ asset('images/smart-student-holding-file.jpg') }}" alt="Educational journey" class="rounded shadow-md">
    </div>
    <div class="w-1/2 text-left px-4">
      <h2 class="text-5xl text-white font-bold">
        Learning is our business.</h2>
        <h2 class="text-4xl text-white "> As the world's leading learning company, we have many businesses to support your educational journey.</h2>


      <button class="bg-white text-black py-2 px-4 mt-4 br hover:bg-grayCustom">
        See our global businesses
      </button>
    </div>
  </div>
</section>



  <!-- Educational Essentials -->
  <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 py-16 bg-black">
  <div class="bg-white p-8 shadow">
    <img src="{{ asset('images/pexels-tima-miroshnichenko-5428148.jpg') }}" alt="Pearson Assessments" class="w-full h-412 mb-2 transform transition-transform duration-300 ease-in-out hover:scale-110">
    <div class="flex flex-col justify-between ">
      <h3 class="text-2xl font-bold mb-2">Pearson Assessments</h3>
      <p class="mb-2">Our internationally recognized assessments enable you to demonstrate your knowledge, from school through to work.</p>
      <button class="bg-black text-white py-2 px-4">Visit assessments</button>
    </div>
  </div>
  <div class="bg-white p-8 shadow">
    <img src="{{ asset('images/pexels-max-fischer-5211470.jpg') }}" alt="Pearson Languages" class="w-full h-412 mb-2 transform transition-transform duration-300 ease-in-out hover:scale-110">
    <div class="flex flex-col justify-between  ">
      <h3 class="text-2xl font-bold mb-2">Pearson Languages</h3>
      <p class="mb-2">Everyone should have the confidence to be themselves in any language. We're here to support you on that journey.</p>
      <button class="bg-black text-white py-2 px-4">Visit languages</button>
    </div>
  </div>
</section>

<section class="container mx-auto px-4 py-16">
  <h2 class="text-3xl font-bold text-center mb-12 text-white">Latest Posts</h2>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($posts as $post)
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">

          <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ $post->tital }}</h3>
          <div class="mb-1 text-muted">{{ date('Y-m-d', strtotime($post->created_at)) }}</div>
          <p class="text-gray-600 mb-4">
            {{$post->description}}
          </p>

        </div>
      </div>
    @endforeach
  </div>
</section>






@endsection


