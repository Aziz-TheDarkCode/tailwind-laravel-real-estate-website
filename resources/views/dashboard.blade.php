@extends('layout.app')

@section('content')
<div class=" lg:mt-16 px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-2xl mx-auto sm:max-w-xl md:max-w-2xl">
      <div class="text-center">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                Bienvenue
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            <span class="relative inline-block leading-10">
              <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                <defs>
                  <pattern id="b039bae0-fdd5-4311-b198-8557b064fce0" x="0" y="0" width=".135" height=".30">
                    <circle cx="1" cy="1" r=".7"></circle>
                  </pattern>
                </defs>
                <rect fill="url(#b039bae0-fdd5-4311-b198-8557b064fce0)" width="52" height="24"></rect>
              </svg>
              <span class="relative">Vous</span>
            </span>
             souhaitez acheter une maison ou louer un appartement ?
          </h2>
          <p class="text-base text-gray-500 md:text-lg">
            BrandName est la solution idéale . Découvrez plus de 8000 appartements et maisons a votre gout .
          </p>
        </div>
        <form class="flex flex-col items-center w-full mb-4 md:flex-row md:px-16">
          <input
            placeholder="Où voulez-vous habiter ?"
            required=""
            type="text"
            class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
          />
          <input
            type="submit" value="Decouvrir"
            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-purple-600 hover:bg-purple-700 focus:shadow-outline focus:outline-none"
          />
          
        
        </form>
        <a
          href="#step-section"
          aria-label="Scroll down"
          class="mt-10 flex items-center justify-center w-10 h-10 mx-auto text-gray-600 duration-300 transform border border-gray-400 rounded-full hover:text-deep-purple-accent-400 hover:border-deep-purple-accent-400 hover:shadow hover:scale-110"
        >
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
            <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
          </svg>
        </a>
      </div>
    </div>

  <div id="step-section" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block leading-10">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="b039bae0-fdd5-4311-b198-8557b064fce0" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#b039bae0-fdd5-4311-b198-8557b064fce0)" width="52" height="24"></rect>
          </svg>
          <span class="relative">Les </span>
        </span>
            etapes pour vous offrir votre maison de rêve
      </h2>
    <div class="grid max-w-2xl mx-auto">
    <div class="flex">
      <div class="flex flex-col items-center mr-6">
        <div class="w-px h-10 opacity-0 sm:h-full"></div>
        <div>
          <div class="flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full">
            1
          </div>
        </div>
        <div class="w-px h-full bg-gray-300"></div>
      </div>
      <div class="flex flex-col pb-6 sm:items-center sm:flex-row sm:pb-0">
        <div class="sm:mr-5">
          <div class="flex items-center justify-center w-16 h-16 my-3 rounded-full bg-indigo-50 sm:w-24 sm:h-24">
            <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
            
          </div>
        </div>
        <div>
          <p class="text-xl font-semibold sm:text-base">Choisissez votre maison</p>
          <p class="text-sm text-gray-700">
                Choisissez la maison ou l'appartement qui vous convienne le plus parmi notre large palette 
          </p>
        </div>
      </div>
    </div>
    <div class="flex">
      <div class="flex flex-col items-center mr-6">
        <div class="w-px h-10 bg-gray-300 sm:h-full"></div>
        <div>
          <div class="flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full">
            2
          </div>
        </div>
        <div class="w-px h-full bg-gray-300"></div>
      </div>
      <div class="flex flex-col pb-6 sm:items-center sm:flex-row sm:pb-0">
        <div class="sm:mr-5">
          <div class="flex items-center justify-center w-16 h-16 my-3 rounded-full bg-indigo-50 sm:w-24 sm:h-24">
            <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <p class="text-xl font-semibold sm:text-base">Prenez Rendez-vous</p>
          <p class="text-sm text-gray-700">
                Prenez un rendez vous avec un de nos courtier le plus proche de la maison choisie afin de visiter cette derniere
          </p>
        </div>
      </div>
    </div>
    <div class="flex">
      <div class="flex flex-col items-center mr-6">
        <div class="w-px h-10 bg-gray-300 sm:h-full"></div>
        <div>
          <div class="flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full">
            3
          </div>
        </div>
        <div class="w-px h-full opacity-0"></div>
      </div>
      <div class="flex flex-col pb-6 sm:items-center sm:flex-row sm:pb-0">
        <div class="sm:mr-5">
          <div class="flex items-center justify-center w-16 h-16 my-3 rounded-full bg-indigo-50 sm:w-24 sm:h-24">
            <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <p class="text-xl font-semibold sm:text-base">Payez et devenez propriétaire</p>
          <p class="text-sm text-gray-700">
            The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. Michael Knight a young loner.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col max-w-screen-lg overflow-hidden bg-white border rounded shadow-sm lg:flex-row sm:mx-auto">
      <div class="relative lg:w-1/2">
        <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" class="object-cover w-full lg:absolute h-80 lg:h-full" />
        <svg class="absolute top-0 right-0 hidden h-full text-white lg:inline-block" viewBox="0 0 20 104" fill="currentColor">
          <polygon points="17.3036738 5.68434189e-14 20 5.68434189e-14 20 104 0.824555778 104"></polygon>
        </svg>
      </div>
      <div class="flex flex-col justify-center p-8 bg-white lg:p-16 lg:pl-10 lg:w-1/2">
        <div>
          <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
            Brand new
          </p>
        </div>
        <h5 class="mb-3 text-3xl font-extrabold leading-none sm:text-4xl">
            Voulez-vous devenir courtier ?
        </h5>
        <p class="mb-5 text-gray-800">
          <span class="font-bold">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Etiam sem neque, molestie sit amet venenatis et, dignissim ut erat. Sed aliquet velit id dui eleifend, sed consequat odio sollicitudin.
        </p>
        <div class="flex items-center">
          <button
            type="submit"
            class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Commencer maintenant
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection