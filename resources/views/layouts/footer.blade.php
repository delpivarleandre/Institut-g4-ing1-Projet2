<footer class="footer bg-green-900 relative pt-1">
    <div class="container mx-auto px-6">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-200 uppercase mt-4 md:mt-0 mb-2">Liens utiles</span>
                    <span class="my-2"><a href="{{route('acceuil.index')}}" class="text-white  text-md hover:text-white-500">Accueil</a></span>
                    <span class="my-2"><a href="{{route('presentation.index')}}" class="text-white  text-md hover:text-white-500">Présentation</a></span>
                    <span class="my-2"><a href="{{route('contact.index')}}" class="text-white  text-md hover:text-white-500">Contact</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-200 uppercase mt-4 md:mt-0 mb-2">Nos réseaux sociaux</span>
                    <span class="my-2"><i style="color: white;" class="fab fa-facebook"></i>  <a href="#" class="text-white text-md hover:text-white-500">Facebook</a></span>
                    <span class="my-2"><i style="color: white;" class="fab fa-instagram"></i>  <a href="#" class="text-white  text-md hover:text-white-500">Instagram</a></span>
                    <span class="my-2"><i style="color: white;" class="fab fa-twitter"></i>  <a href="#" class="text-white text-md hover:text-white-500">Twitter</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-200 uppercase mt-4 md:mt-0 mb-2">Nous trouver</span>
                    <span class="my-2"><a href="#" class="text-white  text-md hover:text-white-500">Bâtiment Les Passerelles, 24 Avenue Joannès Masset, 69009 Lyon</a></span>
                    <span class="my-2"><a href="tel:+33484250128" class="text-white  text-md hover:text-white-500">04 84 25 01 28</a></span>
                    <span class="my-2"><a href="mailto:eco.service.institut.g4@gmail.com" class="text-white  text-md hover:text-white-500">eco.service.institut.g4@gmail.com</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-white font-bold mb-2">
                    &copy; Éco Services <?php echo date("Y"); ?>
                </p>
            </div>
        </div>
    </div>
</footer>
