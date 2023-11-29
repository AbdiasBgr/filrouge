<x-layouts.formation>
    <section id="consultation">
        <div class="container py-20">
            <div class="text-center m-auto mb-20 md:w-1/2">
                <h4 class="font-bold text-color-secondary mb-4">Vous souhaitez consulter nos experts ou avez-vous une question ?</h4>
                <h1 class="title">Demande de Consultation</h1>
            </div>
            <form action="{{ route('consultation.submit') }}" method="post">
                @csrf
                <div class="w-full m-auto text-center md:w-2/3">
                    <div class="text-color-primary-dark grid gap-6 mb-6 md:grid-cols-1">
                        <div class="text-color-primary-dark bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" readonly>
                            {{ Auth::user()->name }}
                        </div>
                        <div class="text-color-primary-dark bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" readonly>
                            {{ Auth::user()->telephone }}
                        </div>
                    </div>
                    <textarea rows="4" name="message" class="text-color-primary-dark bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Décrivez votre demande de consultation"></textarea>
                    <button class="btn mt-10" type="submit">Soumettre la demande</button>
                </div>
            </form>
        </div>
    </section>
</x-layouts.formation>