<x-app-layout>
    <div class="container mx-auto py-10">
        <div class="flex flex-col md:flex-row gap-10 items-center min-h-screen justify-center px-4 ">
            
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('images/affiche.jpeg') }}" 
                     alt="Affiche" 
                     class="w-full md:w-3/4 h-auto object-cover rounded-lg shadow-lg hover:-rotate-2 hover:shadow-2xl hover:drop-shadow-2xl hover:scale-105 transition ease-in-out duration-200" />
            </div>
    
            <div class="w-full md:w-1/2 bg-white rounded-lg shadow-lg p-8 hover:rotate-2 hover:shadow-2xl hover:drop-shadow-2xl hover:scale-105 transition ease-in-out duration-200">
                
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        {{ session('success') }}
                    </div>
                    
                @endif

                <form action="{{ route('inscription.store') }}" method="POST" class="space-y-5 ">
                    @csrf
    
                    <div class="flex flex-col gap-2">
                        <label for="first_name" class="text-gray-700 font-semibold">Nome :</label>
                        <input type="text" name="first_name" id="first_name" 
                               class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
    
                    <div class="flex flex-col gap-2">
                        <label for="last_name" class="text-gray-700 font-semibold">Prénom :</label>
                        <input type="text" name="last_name" id="last_name" 
                               class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
    
                    <div class="flex flex-col gap-2">
                        <label for="city" class="text-gray-700 font-semibold">Ville :</label>
                        <input type="text" name="city" id="city" 
                               class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
    
                    <div class="flex flex-col gap-2">
                        <label for="speciality" class="text-gray-700 font-semibold">Spécialité :</label>
                        <select name="speciality" id="speciality" 
                                class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                onchange="toggleOtherSpecialityInput(this)">
                            <option value="endecreno">Endecreno</option>
                            <option value="diabétologie">Diabétologie</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    
                    <div id="other-speciality-container" class="flex flex-col gap-2 hidden">
                        <label for="other_speciality" class="text-gray-700 font-semibold">Autre Spécialité :</label>
                        <input type="text" name="other_speciality" id="other_speciality" 
                                class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
    
                    <div class="flex flex-col gap-2">
                        <label for="phone" class="text-gray-700 font-semibold">Téléphone :</label>
                        <input type="text" name="phone" id="phone" 
                               class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
    
                    <div>
                        <button type="submit" 
                                class="w-full py-3 px-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition ease-in-out duration-200 font-semibold">
                            Sauvegarder
                        </button>
                    </div>
                </form>
            </div>
    
        </div>
    </div>

    <script>
        function toggleOtherSpecialityInput(select) {
            const otherSpecialityContainer = document.getElementById('other-speciality-container');
            if (select.value === 'autre') {
                otherSpecialityContainer.classList.remove('hidden');
            } else {
                otherSpecialityContainer.classList.add('hidden');
            }
        }
    </script>
</x-app-layout>
