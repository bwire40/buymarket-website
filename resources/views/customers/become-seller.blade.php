@extends('layouts.customer')

@section('title', 'Become Seller')
<style>
  .checkbox:checked+.check-icon {
    display: flex;
  }
</style>

@section('content')

  <section class="max-w-7xl mx-auto">
    <div tabindex="0" aria-label="form" class="focus:outline-none w-full bg-accent p-10">
      <div class="md:flex items-center border-b pb-6 border-gray-200">
        <div class="flex items-center md:mt-0 mt-4">
          <div class="w-8 h-8 bg-indigo-700 rounded flex items-center justify-center">
            <p tabindex="0" class="focus:outline-none text-base font-medium leading-none text-white">01</p>
          </div>
          <p tabindex="0" class="focus:outline-none text-base ml-3 font-medium leading-4 text-gray-800">Sign Up</p>
        </div>
        <div class="flex items-center md:mt-0 mt-4 md:ml-12">
          <div class="w-8 h-8 bg-gray-100 rounded flex items-center justify-center">
            <p tabindex="0" class="focus:outline-none text-base font-medium leading-none text-gray-800">02</p>
          </div>
          <p tabindex="0" class="focus:outline-none text-base ml-3 font-medium leading-4 text-gray-800">Security Check
          </p>
        </div>
        <div class="flex items-center md:mt-0 mt-4 md:ml-12">
          <div class="w-8 h-8 bg-gray-100 rounded flex items-center justify-center">
            <p tabindex="0" class="focus:outline-none text-base font-medium leading-none text-gray-800">03</p>
          </div>
          <p tabindex="0" class="focus:outline-none text-base ml-3 font-medium leading-4 text-gray-800">Confirm Info</p>
        </div>
        <div class="flex items-center md:mt-0 mt-4 md:ml-12">
          <div class="w-8 h-8 bg-gray-100 rounded flex items-center justify-center">
            <p tabindex="0" class="focus:outline-none text-base font-medium leading-none text-gray-800">04</p>
          </div>
          <p tabindex="0" class="focus:outline-none text-base ml-3 font-medium leading-4 text-gray-800">Onboarding</p>
        </div>
      </div>
      <h1 tabindex="0" role="heading" aria-label="profile information"
        class="focus:outline-none text-3xl font-bold text-gray-800 mt-12">Profile info</h1>
      <p tabindex="0" class=" focus:outline-none text-sm font-light leading-tight text-gray-600 mt-4">Fill in the data
        for
        profile. It will take a couple of minutes. <br />You only need a passport</p>
      <h2 tabindex="0" class="focus:outline-none text-xl font-semibold leading-7 text-gray-800 mt-10">Personal data</h2>
      <p tabindex="0" class="focus:outline-none text-sm font-light leading-none text-gray-600 mt-0.5">Your details and
        place of birth</p>
      <div class="mt-8 md:flex items-center">
        <div class="flex flex-col">
          <label class="mb-3 text-sm leading-none text-gray-800">First name</label>
          <input type="name" tabindex="0" aria-label="Enter first name"
            class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200"
            value="William" />
        </div>
        <div class="flex flex-col md:ml-12 md:mt-0 mt-8">
          <label class="mb-3 text-sm leading-none text-gray-800">Last name</label>
          <input type="name" tabindex="0" aria-label="Enter last name"
            class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200"
            value="Smith" />
        </div>
      </div>
      <div class="mt-12 md:flex items-center">
        <div class="flex flex-col">
          <label class="mb-3 text-sm leading-none text-gray-800">Email Address</label>
          <input type="email" tabindex="0" aria-label="Enter email Address"
            class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200"
            value="smith.william@gmail.com" />
        </div>
        <div class="flex flex-col md:ml-12 md:mt-0 mt-8">
          <label class="mb-3 text-sm leading-none text-gray-800">Phone number</label>
          <input type="number" tabindex="0" aria-label="Enter phone number"
            class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200"
            value="+81 839274" />
        </div>
      </div>
      <div class="mt-12 md:flex items-center">
        <div class="flex flex-col">
          <label class="mb-3 text-sm leading-none text-gray-800">Date of birth</label>
          <input type="" tabindex="0" aria-label="Enter date of birth"
            class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200"
            value="28.03.1997" />
        </div>
        <div class="flex flex-col md:ml-12 md:mt-0 mt-8">
          <label class="mb-3 text-sm leading-none text-gray-800">Place of birth</label>
          <input type="name" tabindex="0" aria-label="Enter place of birth"
            class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200"
            value="San Diego, CA, USA" />
        </div>
      </div>
      <div class="mt-12">
        <div class="py-4 flex items-center">
          <div
            class="bg-white dark:bg-gray-800 border rounded-sm border-gray-400 dark:border-gray-700 w-4 h-4 flex flex-shrink-0 justify-center items-center relative">
            <input aria-labelledby="agree" checked type="checkbox"
              class="focus:outline-none focus:ring-2 focus:ring-gray-700 checkbox focus:opacity-100 opacity-0 absolute cursor-pointer w-full h-full" />
            <div class="check-icon hidden bg-blue-500 text-white rounded-sm">
              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_layout-svg1.svg" alt="check-icon">
            </div>
          </div>
          <p id="agree" tabindex="0" class="focus:outline-none text-sm leading-none ml-2">I agree with the <span
              class="text-indigo-700">terms of service</span></p>
        </div>
      </div>
      <button role="button" aria-label="Next step"
        class="flex items-center justify-center py-4 px-7 focus:outline-none bg-white border rounded border-gray-400 mt-7 md:mt-14 hover:bg-gray-100  focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">
        <span class="text-sm font-medium text-center text-gray-800 capitalize">Next Step</span>
        <img class="mt-1 ml-3" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_layout-svg2.svg" alt="arrow">
      </button>
    </div>
  </section>

@endsection
