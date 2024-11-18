<x-app-layout>

    <div class="container mx-auto md:py-10 py-5">
        <div class="flex flex-col md:flex-row gap-10 items-center min-h-screen justify-center px-4 ">
            
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('images/affiche.jpeg') }}" 
                     alt="Affiche" 
                     class="w-full md:w-[400px]  h-auto object-cover rounded-lg shadow-lg md:hover:-rotate-3 rotate-0 hover:shadow-2xl hover:drop-shadow-2xl hover:scale-105 transition ease-in-out duration-200" />
            </div>
    
            <div class="w-full md:w-1/2 bg-white rounded-lg shadow-lg p-8 md:hover:rotate-3 rotate-0 hover:shadow-2xl hover:drop-shadow-2xl hover:scale-105 transition ease-in-out duration-200">
                <h1 class="md:text-3xl text-2xl md:text-left text-center font-bold mb-5">Attestation</h1>
                
                <form action="{{ route('attestation.store') }}" method="POST" class="space-y-5">
                    @csrf
                
                    <div class="flex flex-col gap-2">
                        <label for="first_name" class="text-gray-700 font-semibold">Nom :</label>
                        <input type="text" name="first_name" id="first_name" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('first_name') border-red-500 @enderror" 
                               value="{{ old('first_name') }}" />
                        @error('first_name')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="flex flex-col gap-2">
                        <label for="last_name" class="text-gray-700 font-semibold">Prénom :</label>
                        <input type="text" name="last_name" id="last_name" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('last_name') border-red-500 @enderror" 
                               value="{{ old('last_name') }}" />
                        @error('last_name')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                                
                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-gray-700 font-semibold">Email :</label>
                        <input type="text" name="email" id="email" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('email') border-red-500 @enderror" 
                               value="{{ old('email') }}" />
                        @error('email')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                                
                    <div class="flex flex-row gap-4 mt-4">
                        <button type="submit" 
                                class="w-full md:w-1/2 py-3 px-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition ease-in-out duration-200 font-semibold">
                            Demand d'attestation
                        </button>
                
                    </div>
                </form>
            </div>
        </div>
    </div>


@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Toastify({
                text: "{{ session('success') }}",
                duration: 5000,
                close: true,
                gravity: "top",
                position: "center",
                backgroundColor: "#4CAF50",
                stopOnFocus: true,
                style: {
                    width: window.innerWidth < 640 ? "100%" : "400px", 
                    textAlign: "center"
                }
            }).showToast();
        });
    </script>
@endif            
</x-app-layout>
