<footer class="relative bg-blueGray-200 pt-8 pb-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap text-left lg:text-left">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl fonat-semibold text-blueGray-700">Agradecimentos</h4>
                <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                    Obrigado por ler este trabalho de conclusão de curso. Caso tenha alguma sugestão ou dúvida, entre em
                    contato conosco através das redes sociais abaixo:
                </h5>
                <div class="mt-6 lg:mb-0 mb-6">
                    <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                        <i class="fab fa-twitter"></i></button>
                    <button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                        <i class="fab fa-facebook-square"></i></button>
                    <button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                        <i class="fab fa-dribbble"></i></button>
                    <button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-6/12 px-4 ml-auto">
                        <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Links Úteis</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                   href="{{ $page->limarka['page_render']['instituicao_website'] }}">
                                    {{ $page->limarka['instituicao'] }}
                                </a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                   href="https://github.com/reinanhs/limarka-render-html">Github Limarka render html</a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                   href="https://github.com/abntex/limarka">Github Limarka</a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                   href="https://github.com/ReinanHS/limarka-template-tcc">Limarka Template TCC </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-blueGray-300">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-blueGray-500 font-semibold py-1">
                    Copyright © <span id="get-current-year">{{ \Illuminate\Support\Carbon::now()->format('Y') }}</span>
                    <a href="https://github.com/{{ $page->limarka['page_render']['github_user'] }}"
                       class="text-blueGray-500 hover:text-blueGray-800">{{ $page->limarka['page_render']['github_user'] }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>