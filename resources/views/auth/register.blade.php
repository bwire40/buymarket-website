@extends("layouts.guest")
@section("title", "Sign Up")
@section("content")

  <div class="flex w-screen lg:h-screen overflow-hidden flex-wrap text-slate-800">
    <div class="relative hidden h-screen select-none flex-col justify-center bg-slate-900 text-center md:flex md:w-1/2">
      <div class="hidden md:block md:mx-auto  px-8 text-white xl:w-[40rem] my-32">
        <p class="mb-4">Welcome to our Online Shop. You don't just buy products but also the best experince.</p>
        <a href="#" class="font-semibold tracking-wide text-white underline underline-offset-4">Learn More</a>
      </div>
      <img class="hidden lg:block mx-auto w-11/12 max-w-lg rounded-lg object-cover"
        src="{{ Vite::asset("resources/images/products/shoe.jpg") }}" />
    </div>
    <div class="flex w-full flex-col md:w-1/2">
      <div class="flex justify-center pt-12 md:justify-start md:pl-12">
        <a href="#" class="text-2xl font-bold text-secondary"> BuyMarket . </a>
      </div>
      <div class="my-auto mx-auto flex flex-col justify-center px-6 pt-8 md:justify-start lg:w-[28rem]">
        <p class="text-center text-3xl font-bold md:text-left md:leading-tight">Create your free account</p>
        <p class="mt-6 text-center font-medium md:text-left">
          Already using BuyMarket?
          <a href="#" class="whitespace-nowrap font-semibold text-blue-700">Login here</a>
        </p>
        <button
          class="-2 mt-8 flex items-center justify-center rounded-md border px-4 py-1 outline-none ring-gray-400 ring-offset-2 transition hover:border-transparent hover:bg-black hover:text-white focus:ring-2"><img
            class="mr-2 h-5" src="{{ Vite::asset("resources/images/google.png") }}" alt /> Get started with
          Google</button>
        <div class="relative mt-8 flex h-px place-items-center bg-gray-200">
          <div class="absolute left-1/2 h-6 -translate-x-1/2 bg-white px-4 text-center text-sm text-gray-500">Or use email
            instead</div>
        </div>
        <form class="flex flex-col items-stretch pt-3 md:pt-8" method="POST" action="{{ route("register") }}">
          @csrf
          <div class="flex flex-col pt-4">
            <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-primary">
              <input type="text" id="login-name" name="name"
                class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none"
                placeholder="Name" />
            </div>
          </div>
          <div class="flex flex-col pt-4">
            <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-primary">
              <input type="email" id="login-email" name="email"
                class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none"
                placeholder="Email" />
            </div>
          </div>
          <div class="mb-4 flex flex-col pt-4">
            <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-primary">
              <input type="password" id="login-password" name="password"
                class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none"
                placeholder="Password (minimum 8 characters)" />
            </div>
          </div>
          <div class="mb-4 flex flex-col pt-4">
            <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-primary">
              <input type="password" id="password_confirmation" name="password_confirmation"
                class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none"
                placeholder="Confirm Password" />
            </div>
          </div>
          <div class="block">
            <input
              class="mr-2 h-5 w-5 appearance-none rounded border border-gray-300 bg-contain bg-no-repeat align-top text-black shadow checked:bg-primary focus:border-primary focus:shadow"
              type="checkbox" id="remember-me"
              style="background-image: url(&quot;data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 10l3 3l6-6'/%3e%3c/svg%3e&quot;)"
              checked />
            <label class="inline-block" for="remember-me"> I agree to the <a class="underline" href="#">Terms and
                Conditions</a></label>
            <p class="py-3">Already have an account? <a href="{{ route("login") }}"
                class="text-slate-800 underline">Sign
                In</a></p>
          </div>
          <button type="submit"
            class="mt-6 rounded-lg bg-primary px-4 py-2 text-center text-secondary text-base font-semibold shadow-md outline-none ring-slate-500 ring-offset-2 transition hover:bg-slate-700 hover:text-primary focus:ring-2 md:w-32">Sign
            up</button>
        </form>
      </div>
    </div>
  </div>

@endsection
