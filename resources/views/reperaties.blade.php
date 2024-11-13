<x-layout>
    <div class="container flex flex-wrap py-8 mx-auto">
        <!-- Linkerzijde -->
        <div class="w-full mb-8 lg:w-3/4">
            <h1 class="mb-6 text-3xl font-bold text-center">Prijzen en Verwachte Duur van Reparaties</h1>
            <p class="mb-8 text-center text-white">Bekijk onze reparatiediensten, inclusief kosten en geschatte tijd. <br><br>
            Alle telefoonreparaties worden opgenomen, met uitzondering van die van Chinese afkomst.</p>


            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-3 font-semibold text-left text-gray-600">Reparatie</th>
                            <th class="px-4 py-3 font-semibold text-left text-gray-600">Prijs</th>
                            <th class="px-4 py-3 font-semibold text-left text-gray-600">Verwachte Duur</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="transition-colors duration-200 hover:bg-gray-50">
                            <td class="px-4 py-3 border-b">Schermvervanging</td>
                            <td class="px-4 py-3 border-b">€150</td>
                            <td class="px-4 py-3 border-b">1-2 uur</td>
                        </tr>
                        <tr class="transition-colors duration-200 hover:bg-gray-50">
                            <td class="px-4 py-3 border-b">Batterijvervanging</td>
                            <td class="px-4 py-3 border-b">€80</td>
                            <td class="px-4 py-3 border-b">30-60 minuten</td>
                        </tr>
                        <tr class="transition-colors duration-200 hover:bg-gray-50">
                            <td class="px-4 py-3 border-b">Software-installatie</td>
                            <td class="px-4 py-3 border-b">€50</td>
                            <td class="px-4 py-3 border-b">1 uur</td>
                        </tr>
                        <tr class="transition-colors duration-200 hover:bg-gray-50">
                            <td class="px-4 py-3 border-b">Reiniging en Onderhoud</td>
                            <td class="px-4 py-3 border-b">€40</td>
                            <td class="px-4 py-3 border-b">1 uur</td>
                        </tr>
                        <tr class="transition-colors duration-200 hover:bg-gray-50">
                            <td class="px-4 py-3 border-b">Harde schijf vervanging</td>
                            <td class="px-4 py-3 border-b">€120</td>
                            <td class="px-4 py-3 border-b">2-3 uur</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Rechterkant met afspraakformulier -->
        <form action="{{ url('/google/calendar/event') }}" method="POST" style="color: black;">
            @csrf
            <b><label for="summary">Maak een afspraak</label></b>
            <input type="text" name="summary" id="summary" required>
            <br>
            <br>
            <b><label for="start">Begindatum:</label></b>
            <input type="datetime-local" name="start" id="start" required>
            <br>
            <br>
            <b><label for="end">Einddatum:</label></b>
            <input type="datetime-local" name="end" id="end" required>
            <br>
            <br>
            <button class="button2" type="submit">Bevestig uw afspraak</button>
        </form>


            </div>
        </div>
    </div>




</x-layout>
