<x-app-layout>

    <div class="container mx-auto md:py-10 py-5">
        <div class="flex flex-col md:flex-row gap-10 items-center min-h-screen justify-center px-4 ">
            
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('images/affiche.jpeg') }}" 
                     alt="Affiche" 
                     class="w-full md:w-[420px] h-auto object-cover rounded-lg shadow-lg md:hover:-rotate-3 rotate-0 hover:shadow-2xl hover:drop-shadow-2xl hover:scale-105 transition ease-in-out duration-200" />
            </div>
    
            <div class="w-full md:w-1/2 bg-white rounded-lg shadow-lg p-8 md:hover:rotate-3 rotate-0 hover:shadow-2xl hover:drop-shadow-2xl hover:scale-105 transition ease-in-out duration-200">
                <h1 class="md:text-3xl text-2xl md:text-left text-center font-bold mb-5">Inscription</h1>
                <p class="text-gray-700 font-semibold">
                    Rendez-vous le samedi 16 novembre de 09h00 à 19h30 en direct sur la chaîne Youtube, la page Facebook de la Société marocaine de Diabétologie SMD.
                </p>
                <form action="{{ route('inscription.store') }}" method="POST" class="space-y-5 ">
                    @csrf
    
                    <div class="flex flex-col gap-2">
                        <label for="first_name" class="text-gray-700 font-semibold">Nom :</label>
                        <input type="text" name="first_name" id="first_name" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
    
                    <div class="flex flex-col gap-2">
                        <label for="last_name" class="text-gray-700 font-semibold">Prénom :</label>
                        <input type="text" name="last_name" id="last_name" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-gray-700 font-semibold">Email :</label>
                        <input type="text" name="email" id="email" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
    
                    <div class="flex flex-col gap-2">
                        <label for="city" class="text-gray-700 font-semibold">Ville :</label>
                        <input type="text" name="city" id="city" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
    
                    <div class="flex flex-col gap-2">
                        <label for="speciality" class="text-gray-700 font-semibold">Spécialité  :</label>
                        <select name="speciality" id="speciality" 
                                class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                onchange="toggleOtherSpecialityInput(this)">
                            <option value="endocrinologue">Endocrinologue</option>
                            <option value="diabétologie">Diabétologue</option>
                            <option value="nutritionniste">Nutritionniste</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    
                    <div id="other-speciality-container" class="flex flex-col gap-2 hidden">
                        <label for="other_speciality" class="text-gray-700 font-semibold">Autre Spécialité :</label>
                        <input type="text" name="other_speciality" id="other_speciality" 
                                class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
    
                    <div class="flex flex-col gap-2">
                        <label for="phone" class="text-gray-700 font-semibold">Téléphone :</label>
                        <input type="text" name="phone" id="phone" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
    
                    <div class="flex flex-row gap-4 mt-4">
                        <button type="submit" 
                                class="w-full md:w-1/2 py-3 px-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition ease-in-out duration-200 font-semibold">
                                S’inscrire
                        </button>

                        <a href="{{ asset('assets/programme/pdf.pdf') }}" class="w-full text-center md:w-1/2 py-3 px-4 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition ease-in-out duration-200 font-semibold">
                            Programme
                        </a>
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
