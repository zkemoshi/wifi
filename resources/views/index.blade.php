<x-layout>
    <div class="container mx-auto px-4">
        <div class="flex flex-col justify-center items-center h-30">
            <h2 class="text-4xl text-center my-10">WiFi Internet</h2>
            <img
                src="{{ asset('icons8-wifi-50.png') }}"
                alt="Description of the image"
            />
        </div>
        <div class="max-w-md mx-auto mt-20 p-6 bg-white shadow-md rounded-md">
            <h2 class="text-2xl font-semibold mb-4 text-center">Kuingia</h2>
            <form method="POST" action="/home">
                @csrf
                <div class="mb-4">
                    <input
                        type="text"
                        id="email"
                        name="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="Weka username or email"
                    />
                </div>
                <div class="mb-4">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="Weka code or password"
                    />
                </div>
                <button
                    type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
                >
                    Ingia
                </button>
            </form>
        </div>
    </div>
</x-layout>
