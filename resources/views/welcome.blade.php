<x-app-layout>

    <div class="container mx-auto md:py-10 py-5">
        <div class="flex flex-col md:flex-row gap-10 items-center min-h-screen justify-center px-4 ">
            
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('images/affiche.jpeg') }}" 
                     alt="Affiche" 
                     class="w-full md:w-[633px]  h-auto object-cover rounded-lg shadow-lg md:hover:-rotate-3 rotate-0 hover:shadow-2xl hover:drop-shadow-2xl hover:scale-105 transition ease-in-out duration-200" />
            </div>
    
            <div class="w-full md:w-1/2 bg-white rounded-lg shadow-lg p-8 md:hover:rotate-3 rotate-0 hover:shadow-2xl hover:drop-shadow-2xl hover:scale-105 transition ease-in-out duration-200">
                <h1 class="md:text-3xl text-2xl md:text-left text-center font-bold mb-5">Inscription</h1>
                
                <h3 class="text-gray-700 font-semibold">
                    <strong>Chères/Chers collègues</strong>
                </h3>
 
                <p class="text-gray-700 mt-2">
                    Nous avons le plaisir de vous informer que la Société Marocaine de Diabétologie (SMD) organise un événement à la Faculté de Médecine et de Pharmacie de Rabat, en présentiel et en virtuel, le Samedi 16 Novembre 2024, de 9h00 à 13h00, et ceci à l'occasion de la <strong>Journée Mondiale de Diabète</strong>. 
                    Cet événement sera une excellente occasion de partage de connaissances et d’expériences autour du thème: "Bien être et diabète". Nous aurons l’opportunité  des présentations de divers experts et de participer à des discussions enrichissantes. Pour accéder à la diffusion, veuillez vous connecter à notre chaîne YouTube à l'horaire indiqué. 
                    Nous espérons vous voir nombreux.
                </p>

                <h3 class="text-gray-700 font-semibold mt-2">
                    <strong>
                        Cordialement, 
                    </strong>
                    <br>
                    <strong>
                        Bureau de la SMD
                    </strong>
                </h3>
                <form action="{{ route('inscription.store') }}" method="POST" class="space-y-5">
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
                
                    <div class="flex flex-col gap-2">
                        <label for="city" class="text-gray-700 font-semibold">Ville :</label>
                        <input type="text" name="city" id="city" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('city') border-red-500 @enderror" 
                               value="{{ old('city') }}" />
                        @error('city')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="flex flex-col gap-2">
                        <label for="speciality" class="text-gray-700 font-semibold">Spécialité :</label>
                        <select name="speciality" id="speciality" 
                                class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('speciality') border-red-500 @enderror" 
                                onchange="toggleOtherSpecialityInput(this)">
                            <option value="empty" selected></option>
                            <option value="Cardiologue">Cardiologue</option>
                            <option value="Endocrinologue">Endocrinologue</option>
                            <option value="Médecin généraliste">Médecin généraliste</option>
                            <option value="Néphrologue">Néphrologue</option>
                            <option value="Neurologue">Neurologue</option>
                            <option value="Ophtalmologue">Ophtalmologue</option>
                            <option value="Psychiatre">Psychiatre</option>
                            <option value="Urologue">Urologue</option>
                            <option value="autre">Autre</option>
                        </select>
                        @error('speciality')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div id="other-speciality-container" class="flex flex-col gap-2 hidden">
                        <label for="other_speciality" class="text-gray-700 font-semibold">Autre Spécialité :</label>
                        <input type="text" name="other_speciality" id="other_speciality" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
                
                    <div class="flex flex-col gap-2">
                        <label for="phone" class="text-gray-700 font-semibold">Téléphone :</label>
                        <input type="text" name="phone" id="phone" 
                               class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('phone') border-red-500 @enderror" 
                               value="{{ old('phone') }}" />
                        @error('phone')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="flex flex-col gap-2">
                        <label for="in_person" class="text-gray-700 font-semibold">Est-ce que vous allez participer en présentiel ?</label>
                        <select name="in_person" id="in_person" 
                                class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('in_person') border-red-500 @enderror">
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                        @error('in_person')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="flex flex-col gap-2">
                        <label for="certificate" class="text-gray-700 font-semibold">Est-ce que vous avez besoin d'une attestation de participation ?</label>
                        <select name="certificate" id="certificate" 
                                class="w-full py-[12px] px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('certificate') border-red-500 @enderror">
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                        @error('certificate')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
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
