<div class="hidden md:block carousel relative container mx-auto" style="max-width:1600px;">
  <div class="carousel-inner relative overflow-hidden w-full">
    @foreach ($home_data as $data)
      <!-- Slide 1 -->
      <input class="carousel-open hidden" type="radio" id="carousel-{{ $data['id'] }}" name="carousel" aria-hidden="true"
        @if ($loop->first) checked="checked" @endif>
      <div class="carousel-item absolute opacity-0" style="height:70vh;">
        <div class="relative h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center">

          <!-- Actual Image -->
          <img src="{{ Vite::asset($data['img']) }}" alt="Logo" class="absolute inset-0 w-full h-full object-cover">

          <div class="container mx-auto relative z-10">
            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
              <p class="text-white text-2xl my-4">{{ $data['name'] }}</p>
              <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
                href="#">view product</a>
            </div>
          </div>

        </div>
      </div>
    @endforeach
    <!-- Add additional indicators for each slide-->
    <ol class="carousel-indicators my-10">
      @foreach ($home_data as $index => $data)
        <li class="inline-block mr-3">
          <label for="carousel-{{ $data['id'] }}"
            class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
        </li>
      @endforeach
    </ol>

  </div>
</div>



{{-- for mobile devices and small screens --}}
<section class="md:hidden relative h-52 w-screen mx-auto flex pt-6 md:pt-0 md:items-center">

  <!-- Actual Image -->
  <img src="{{ Vite::asset('resources/images/products/perfume.jpg') }}" alt="Logo"
    class="absolute inset-0 w-full h-full object-cover">
  {{-- <div class="container mx-auto h-full w-full relative z-10 ">
    <div class="flex flex-col w-full h-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
      <p class="text-white text-2xl my-4">Perfume</p>
      <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
        href="#">view product</a>
    </div>

  </div> --}}

</section>
