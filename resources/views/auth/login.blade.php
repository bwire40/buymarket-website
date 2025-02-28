@extends("layouts.guest")
@section("title", "Sign In")
@section("content")
  <div class="flex flex-wrap">
    <div class="flex w-full flex-col md:w-1/2">
      <div class="flex justify-center pt-12 md:-mb-24 md:justify-start md:pl-12">
        <a href="{{ route("home") }}" class="border-b-gray-700 border-b-4 pb-2 text-2xl font-bold text-gray-900"> BuyMarket
          . </a>
      </div>
      <div class="lg:w-[28rem] mx-auto my-auto flex flex-col justify-center pt-8 md:justify-start md:px-6 md:pt-0">
        <p class="text-left text-3xl font-bold">Welcome back!</p>
        <p class="mt-2 text-left text-gray-500">Welcome back, please enter your details.</p>
        <button
          class="-2 mt-8 flex items-center justify-center rounded-md border px-4 py-1 outline-none ring-gray-400 ring-offset-2 transition focus:ring-2 hover:border-transparent hover:bg-black hover:text-white"><img
            class="mr-2 h-5" src="https://static.cdnlogo.com/logos/g/35/google-icon.svg" alt /> Log in with
          Google</button>
        <div class="relative mt-8 flex h-px place-items-center bg-gray-200">
          <div class="absolute left-1/2 h-6 w-14 -translate-x-1/2 bg-white text-center text-sm text-gray-500">or</div>
        </div>
        <form method="POST" action="{{ route("login") }}" class="flex flex-col pt-3 md:pt-8">
          @csrf
          <div class="flex flex-col pt-4">
            <div class="focus-within:border-b-gray-500 relative flex overflow-hidden border-b-2 transition">
              <input type="email" id="login-email" name="email"
                class="w-full flex-1 appearance-none border-gray-300 bg-white px-4 py-2 text-base text-gray-700 placeholder-gray-400 focus:outline-none"
                placeholder="Email" />
            </div>
          </div>
          <div class="mb-12 flex flex-col pt-4">
            <div class="focus-within:border-b-gray-500 relative flex overflow-hidden border-b-2 transition">
              <input type="password" id="login-password" name="password"
                class="w-full flex-1 appearance-none border-gray-300 bg-white px-4 py-2 text-base text-gray-700 placeholder-gray-400 focus:outline-none"
                placeholder="Password" />
            </div>
          </div>
          <button type="submit"
            class="w-full rounded-lg bg-primary px-4 py-2 text-center text-base font-semibold text-black shadow-md ring-gray-500 ring-offset-2 transition focus:ring-2">Log
            in</button>
        </form>
        <!-- Remember Me -->
        <div class="block mt-4">
          <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox"
              class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
              name="remember">
            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __("Remember me") }}</span>
          </label>
        </div>
        <div class="py-12 text-center">
          <p class="whitespace-nowrap text-gray-600">
            Don't have an account?
            <a href="{{ route("register") }}" class="underline-offset-4 font-semibold text-gray-900 underline">Sign up for
              free.</a>
          </p>
        </div>
      </div>
    </div>
    <div class="pointer-events-none relative hidden h-screen select-none bg-black md:block md:w-1/2">
      <div class="absolute bottom-0 z-10 px-8 text-slate-800 opacity-100">
        <p class="mb-8 text-3xl font-semibold leading-10">Experience is the Best teacher at Buymarket. Pay for more with
          less.</p>
        <p class="mb-4 text-3xl font-semibold">Emmanuel Bwire</p>
        <p class="">Founder, Software Engineer</p>
        <p class="mb-7 text-sm opacity-70">BuyMarket</p>
      </div>
      <img class="-z-1 absolute top-0 h-full w-full object-cover opacity-90"
        src="{{ Vite::asset("resources/images/products/white_shoe.jpg") }}" />
    </div>
  </div>

@endsection
