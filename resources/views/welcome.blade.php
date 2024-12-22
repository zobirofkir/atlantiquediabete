<x-app-layout>
    <div class="container mx-auto md:py-10 py-5">
        <div class="flex flex-col md:flex-row gap-10 items-center min-h-screen justify-center px-4">
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('images/affiche.jpeg') }}"
                     alt="Affiche"
                     class="w-full md:w-1/2 object-cover rounded-lg shadow-lg hover:rotate-0 md:hover:-rotate-3 hover:shadow-2xl hover:drop-shadow-xl hover:scale-105 transition ease-in-out duration-200" />
            </div>
            <div class="w-full md:w-1/2 bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition ease-in-out duration-200">
                <form action="{{ route('inscription.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <label for="first_name" class="text-gray-700 font-semibold">Nom :</label>
                        <input type="text" name="first_name" id="first_name"
                               placeholder="Entrez votre nom"
                               class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="last_name" class="text-gray-700 font-semibold">Prénom :</label>
                        <input type="text" name="last_name" id="last_name"
                               placeholder="Entrez votre prénom"
                               class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="city" class="text-gray-700 font-semibold">Ville :</label>
                        <input type="text" name="city" id="city"
                               placeholder="Entrez votre ville"
                               class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="secteur" class="text-gray-700 font-semibold">Spécialité :</label>
                        <select name="secteur" id="secteur"
                                class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                onchange="toggleOtherSecteurInput(this)">
                            <option value="public">Public</option>
                            <option value="liberale">Libérale</option>
                            <option value="chu">Chu</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="phone" class="text-gray-700 font-semibold">Téléphone :</label>
                        <input type="text" name="phone" id="phone"
                               placeholder="Entrez votre numéro de téléphone"
                               class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="address" class="text-gray-700 font-semibold">Adresse :</label>
                        <input type="text" name="address" id="address"
                               placeholder="Entrez votre adresse"
                               class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="objectifs" class="text-gray-700 font-semibold">Objectifs attendus de la formation :</label>
                        <input type="text" name="objectifs" id="objectifs"
                               placeholder="Entrez vos objectifs"
                               class="w-full py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>
                    <div>
                        <button type="submit"
                                class="w-full py-3 px-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-200 font-semibold">
                            Sauvegarder
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
