<section id="contact">
    <div class="container py-20">
        <div class="text-center m-auto mb-20 md:w-1/2">
            <h4 class="font-bold text-color-secondary mb-4">Voulez-faire partie de notre communaute? ou avez-vous une question ?</h4>
            <h1 class="title">Contactez-nous</h1>
        </div>

        <form action="{{ route('contact.submit') }}" method="post">
            @csrf
            <div class="w-full m-auto text-center md:w-2/3">
                <div class="text-color-primary-dark grid gap-6 mb-6 md:grid-cols-2">
                    <input type="text" name="nom" value="{{ old('nom') }}" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Nom">

                    <input type="email" name="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="E-mail">

                    <input type="tel" name="telephone" value="{{ old('telephone') }}" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Téléphone">

                    <input type="text" name="societe" value="{{ old('societe') }}" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Entreprise">
                </div>

                <textarea rows="4" name="content" class="text-color-primary-dark bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Message">{{ old('message') }} </textarea>

                <button class="btn mt-10" type="submit">Envoyer le message</button>
            </div>
        </form>
    </div>
</section>