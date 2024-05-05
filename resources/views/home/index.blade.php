<x-layout> 
  <div class="bg-white pt-6">
    <div class="max-w-sm mx-auto p-4">
        <header class="text-left mb-4">
            <div class="flex justify-between">
              <h1 class="text-xl font-bold">Karibu, Christina</h1>
              <a href="#" class="inline-block text-white bg-blue-500 border border-blue-700 hover:bg-blue-700 hover:border-blue-800 px-4 py-2 rounded">Logout</a>
            </div>
            <p>Site: Mlimani City</p>
            <p>Date: 13 May, 2024</p>
        </header>
        <div class="flex justify-center items-center ">
          <div class="mx-auto p-2 bg-black shadow-lg rounded-lg">
              <div class="bg-white p-4 shadow rounded">
                  <div class="flex flex-nowrap gap-4 items-center justify-start">
                      <span class="flex-grow-0 flex-shrink-0 basis-1/5">Vocha</span>
                      <span class="flex-grow-0 flex-shrink-0 basis-1/10 flex items-center justify-center">
                          <img src="{{ asset('icons8-tick-30.png') }}" alt="tick" class="align-middle" />
                      </span>
                      <span class="flex-grow-0 flex-shrink-0 basis-1/10 flex items-center justify-center">
                          <img src="{{ asset('icons8-cross-30.png') }}" alt="cross" class="align-middle" />
                      </span>
                      <span class="flex-grow-0 flex-shrink-0 basis-3/5">Sababu ya X</span>
                  </div>
              </div>
              <form method="POST" action="/home/confirm">
                  <div class="bg-white p-4 shadow rounded border border-gray-300">
                      @for ($i = 0; $i < 10; $i++)
                      <div class="flex flex-nowrap gap-4 mt-2 justify-start items-center">
                          <span class="flex-grow-0 flex-shrink-0 basis-1/5">567899</span>
                          <span class="flex-grow-0 flex-shrink-0 basis-1/10 flex items-center justify-center">
                            @if ($i == 0) <!-- Only on the first iteration -->
                            <img src="{{ asset('icons8-tick-30.png') }}" alt="Tick" class="absolute -top-6 left-1/2 transform -translate-x-1/2"/>
                            @endif
                            <input type="radio" id="tickRadio{{ $i }}" name="choice{{ $i }}" value="tick" class="accent-blue-500">
                          </span>
                          <span class="flex-grow-0 flex-shrink-0 basis-1/10 flex items-center justify-center">
                            @if ($i == 0) <!-- Only on the first iteration -->
                            <img src="{{ asset('icons8-cross-30.png') }}" alt="Cross" class="absolute -top-6 left-1/2 transform -translate-x-1/2"/>
                            @endif  
                            <input type="radio" id="crossRadio{{ $i }}" name="choice{{ $i }}" value="cross" class="accent-red-500">
                          </span>
                          <span class="flex-grow-0 flex-shrink-0 basis-3/5">
                              <input type="text" id="reasonInput{{ $i }}" name="reasonInput{{ $i }}" placeholder="Sababu ya X" class="w-full px-2 py-1 border rounded">
                          </span>  
                      </div>
                      @endfor
                  </div>
                  <div class="mt-4">
                    <input type="text" id="additionalInput" name="additionalInput" placeholder="Weka kumbukumbu ya muamala" class="w-full px-2 py-1 border rounded">
                    <button type="submit" class="mt-2 w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Submit
                    </button>
                </div>
              </form>
          </div>
        </div>  
    </div>
  </div>
</x-layout>
