<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pearson Education</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans  bg-black"  >
  <!-- Header -->
  <header class="bg-black text-white py-6">
    <div class="container mx-auto flex justify-between items-center">
      <nav>
        <ul class="flex space-x-4">
          <li><a href="#" class="hover:underline">For School</a></li>
          <li><a href="#" class="hover:underline">For College</a></li>
          <li><a href="#" class="hover:underline">For Work</a></li>
          <li><a href="#" class="hover:underline">Explore Pearson</a></li>
        </ul>
      </nav>
      <div class="flex justify-end space-x-2">
      <a class="text-sm bg-white text-black font-bold hover:bg-light-blue-500 hover:text-black hover:bg-blue-700 py-3 px-4 rounded" href={{route('register')}}>Sign up</a>
      <a class="text-sm bg-white text-black  font-bold hover:bg-light-blue-500 hover:text-black hover:bg-blue-700 py-3 px-4  rounded" href={{route('login')}}>Login</a>
      </div>
    </div>
  </header>

  @yield('content')

  <!-- Footer -->
  <footer class="bg-black text-white py-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
      <div>
        <h4 class="font-bold mb-2">Explore</h4>
        <ul>
          <li><a href="#" class="hover:underline">Schools</a></li>
          <li><a href="#" class="hover:underline">College</a></li>
          <li><a href="#" class="hover:underline">Work</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-2">Major businesses</h4>
        <ul>
          <li><a href="#" class="hover:underline">Assessments</a></li>
          <li><a href="#" class="hover:underline">Pearson Languages</a></li>
          <li><a href="#" class="hover:underline">International Schools</a></li>
          <li><a href="#" class="hover:underline">Pearson VUE</a></li>
          <li><a href="#" class="hover:underline">Virtual Schools</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-2">About us</h4>
        <ul>
          <li><a href="#" class="hover:underline">Careers</a></li>
          <li><a href="#" class="hover:underline">Efficacy at Pearson</a></li>
          <li><a href="#" class="hover:underline">Investor Relations</a></li>
          <li><a href="#" class="hover:underline">Our Company</a></li>
          <li><a href="#" class="hover:underline">Pearson.com</a></li>
          <li><a href="#" class="hover:underline">Report Piracy</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center mt-8 text-sm">
      <p>Terms of Use | Privacy | Cookies | Do Not Sell or Share My Personal Information | Accessibility | Patent Notice</p>
      <p>&copy; 1996-2024 Pearson All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
