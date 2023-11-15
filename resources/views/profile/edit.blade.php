@extends('base.app')

@section('titulo', 'Dashboard')

@section('content')

<div class="grid grid-cols 4 gap-4">
<div
  class="block rounded-lg bg-rose-800 p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
  <h5
    class="pt-4 text-2xl font-medium leading-tight text-white">
    {{ __('Perfil') }}
  </h5>
  <p class="pt-2 pb-2 mb-2 text-base text-white">
    Atualize seu perfil.
  </p>
</div>

<div class="pb-10 pt-5"> <!--bg-rose-800 bg-opacity-20-->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg shadow-rose-700">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg shadow-rose-700">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg shadow-rose-700">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection