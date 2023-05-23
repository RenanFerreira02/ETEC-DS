@extends('templates.head')

<title>Contato</title>

@section('content')

<div class="w-3/4 absolute blob-maker blob-sec lg:top-[-22em] md:top-[-2em] drop-shadow-lg">
    <img src="assets/img/blob-maker.svg" />
</div>

<section class="form">

    <div class="flex flex-wrap justify-center items-center content-center main-top">

        <div class="px-8 pt-6 pb-8 mb-4 lg:w-1/4 md:w-4/5">
            <h1 class="mt-2 block mt-1 text-4xl leading-tight font-bold text-slate-100 drop-shadow-lg mb-5">
                Contato
            </h1>
            <p class="block mt-1 leading-tight text-xl lg:text-[#FFF] md:text-gray-200 drop-shadow-lg">
                O CamargoLabs tem o compromisso de garantir a melhor experiência possível para nossos usuários.
                </br>
                Se você tiver alguma dúvida, comentário ou sugestão, não hesite em entrar em contato conosco.
                Basta preencher o formulário ao lado e nossa equipe de suporte técnico terá prazer em ajudá-lo.
                </br>
                Também estamos abertos a sugestões e ideias para melhorias em nossos serviços e na experiência do usuário. Queremos ouvir você e trabalhar juntos para fornecer um ambiente acadêmico de alta qualidade.
                </br>
                Agradecemos antecipadamente pelo seu feedback e aguardamos sua mensagem!
            </p>
        </div>

        <div class="lg:w-1/4 md:w-1/2">

            <form action="/mande-uma-sugestao" method="post" class="bg-white shadow-md rounded-md px-9 py-10 mb-2 w-full m-auto">

                @csrf

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="txNome" id="txNome" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#FF6F3C] peer" placeholder=" " required />
                    <label for="txNome" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#FF6F3C] peer-focus:dark:text-[#FF6F3C] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nome
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="email" name="txEmail" id="txEmail" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#FF6F3C] peer" placeholder=" " required />
                    <label for="txEmail" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#FF6F3C] peer-focus:dark:text-[#FF6F3C] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Email
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="txAssunto" id="txAssunto" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#FF6F3C] peer" placeholder=" " required />
                    <label for="txAssunto" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#FF6F3C] peer-focus:dark:text-[#FF6F3C] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Assunto
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <textarea type="text" name="txMensagem" id="txMensagem" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#FF6F3C] peer" placeholder=" " required></textarea>
                    <label for="txMensagem" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#FF6F3C] peer-focus:dark:text-[#FF6F3C] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Mensagem
                    </label>
                </div>

                <div class="flex items-center content-center flex-wrap m-auto justify-center">
                    <input type="submit" value="Enviar" class="text-white bg-[#FF6F3C] hover:bg-[#DA2C43] focus:ring-4 focus:outline-none focus:ring-[#eea7b2] font-medium rounded-md w-full sm:w-auto px-8 py-2 text-center mt-5 cursor-pointer" />
                </div>

            </form>
        </div>

    </div>

</section>


@endsection