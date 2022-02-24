@extends('layout.app')

@section('content')
<div class="relative">
    <img src="https://www.livingmagazine.net/wp-content/uploads/AdobeStock_104013817_1.jpg" class="absolute inset-0 object-cover w-full h-full" alt="" />
    <div class="relative bg-gray-900 bg-opacity-75">
      <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="flex flex-col items-center justify-between xl:flex-row">
          <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
            Avec Brandname  <br class="hidden md:block" />
            devenez propriétaire <span class="text-teal-accent-400"> en une semaine </span>
            </h2>
            <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                Brandname est le premier site de courtage en ligne au Sénégal. Inscrivez vous afin de profiter des maisons
                ou apartements
            </p>
          </div>
          <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
            <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
              <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                Inscrivez-vous
              </h3>
              <form action={{route('register')}} method="POST">
                @csrf
                  <div>
                    @error('')
                      
                    @enderror
                  </div>
                <div class="mb-1 sm:mb-2">
                  <label for="Name" class="inline-block mb-1 font-medium">Nom Complet</label>
                  <input
                    placeholder="Aziz Ndiaye"
                    type="text"
                    class="@error('name')  @enderror   flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                    name="name"
                    value={{old('name')}}
                  />
                  @error('name') <p class="text-xs text-red-500">{{message}}</p> @enderror
                </div>    
                <div class="mb-1 sm:mb-2">
                  <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                  <input
                    placeholder="ziza@example.sn"
                    type="text"
                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                    id="email"
                    name="email"
                    value={{old('email')}}
                  />
                  @error('email') <p class="text-xs text-red-500">{{$message}}</p> @enderror
                </div>
                <div class="mb-1 sm:mb-2">
                    <label for="password" class="inline-block mb-1 font-medium">Mot de passe</label>
                    <input
                      placeholder="••••••"
                      type="password"
                      class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                      id="email"
                      name="password"
                    />
                    <div class="mb-1 sm:mb-2">
                      <label for="password_confirmation" class="inline-block mb-1 font-medium">Mot de passe a nouveau</label>
                      <input
                        placeholder="•••••"
                        type="password"
                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                        id="email"
                        name="password"
                      />
                    @error('password') <p class="text-xs text-red-500">{{$message}} </p> @enderror
                  </div>
                <div class="mt-4 mb-2 sm:mb-4">
                  <button
                    type="submit"
                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-400 hover:bg-purple-700 focus:shadow-outline focus:outline-none"
                  >
                    Subscribe
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection