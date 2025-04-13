<div class="w-full flex items-center justify-center">

  <div class=" p-6 bg-white rounded-lg shadow-lg w-full max-w-md">
    <div class="text-center">
      <svg class="w-12 h-12 mx-auto text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c-.549-1.165-2.03-2-3.228-2 1.511-2.687 4.622-4.5 8-4.5 4.418 0 8 2.914 8 6.5v3.5c0 .887-.362 1.688-.945 2.255.168.589.262 1.22.262 1.855 0 2.627-2.373 4.75-5.3 4.75-1.944 0-3.573-.816-4.7-2H8c-.548 0-1-.445-1-1V9zm2 10h4c1.105 0 2-.895 2-2s-.895-2-2-2h-4v4zm0-6h6c.552 0 1-.447 1-1s-.448-1-1-1h-6v2z"></path>
      </svg>
      <h2 class="mt-3 text-xl font-semibold text-gray-700">Submit Your Query</h2>
    </div>
    <form class="mt-6">
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
        <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter your name" required>
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter your email" required>
      </div>
      <div class="mb-4">
        <label for="problem" class="block text-sm font-medium text-gray-700">Describe Your Problem:</label>
        <textarea id="problem" name="problem" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Please provide details of your issue" required></textarea>
      </div>
      <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit Query</button>
    </form>
    <p class="mt-4 text-sm text-gray-600 text-center">We'll get back to you soon!</p>
  </div>


</div>