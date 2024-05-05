<div class="flex justify-center items-center">
  <div class="mx-auto p-2 bg-black shadow-lg rounded-lg">
      <div class="bg-white p-4 shadow rounded">
        <div class="flex flex-nowrap gap-4 items-center justify-start">
          <span class="flex-grow-0 flex-shrink-0 basis-1/5">Vocha</span>
          <span class="flex-grow-0 flex-shrink-0 basis-1/10">
              <img src="{{ asset('icons8-tick-30.png') }}" alt="tick" />
          </span>
          <span class="flex-grow-0 flex-shrink-0 basis-1/10">
              <img src="{{ asset('icons8-cross-30.png') }}" alt="cross" />
          </span>
          <span class="flex-grow-0 flex-shrink-0 basis-3/5">Sababu ya X</span>
        </div>
      </div>
      <form method="POST" action="/home/confirm">
        <div class="bg-white p-4 shadow rounded border-t border-gray-500">
          @for ($i = 0; $i < 10; $i++)                   
          <div class="flex flex-nowrap gap-4 mt-2 justify-start">
            <span class="flex-grow-0 flex-shrink-0 basis-1/5">567899</span>
            <span class="flex-grow-0 flex-shrink-0 basis-1/10">
              <input type="radio" id="tickRadio" name="choice{{ $i }}" value="tick" class="accent-blue-500">
            </span>
            <span class="flex-grow-0 flex-shrink-0 basis-1/10">
              <input type="radio" id="crossRadio" name="choice{{ $i }}" value="cross" class="accent-red-500">
            </span>
            <span class="flex-grow-0 flex-shrink-0 basis-3/5">
              <input type="text" id="reasonInput" name="reasonInput" placeholder="Sababu ya X" class="w-full px-2 py-1 border rounded">
            </span>  
          </div>
          @endfor
        </div>
      </form>
  </div>
</div>