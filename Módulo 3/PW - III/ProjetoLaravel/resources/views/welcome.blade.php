@extends('templates.head')

<title>CamargoLabs</title>

@section('content')

<div class="w-2/4 absolute lg:top-[-7em] md:top-[0] blob-maker drop-shadow-lg">
    <img src="assets/img/blob-maker.svg" />
</div>

<section class="section-one">

    <div class="flex flex-wrap justify-around items-center content-center main-top">
        <div>
            <h1 class="mt-2 block mt-1 text-5xl leading-tight font-bold text-slate-100 drop-shadow-lg mb-5">Bem-Vindo(a) ao CamargoLabs!</h1>

            <p class="block mt-1 leading-tight font-semibold text-[#ffffff] drop-shadow-lg">
                Com nossa plataforma fácil de usar, você pode se comunicar facilmente com a equipe de suporte
                técnico da escola para relatar problemas ou compartilhar sugestões.
            </p>

        </div>

        <div>
            <img src="assets/img/main-group.svg" alt="">
        </div>

    </div>

</section>
@endsection