@extends('layouts.app')

@section('title', 'DBX Conecta - CRM, Automação e IA para vender mais')

@section('content') 
    <div class="min-h-[100dvh] bg-[#0a0a0a] text-white overflow-x-hidden">
        @include('landing.components.nav')

        <main>
            @include('landing.components.hero')

            <section id="dores">
                @include('landing.components.pain-points')
            </section>

            <section id="solucao">
                @include('landing.components.solution')
            </section>

            <section id="como-funciona">
                @include('landing.components.how-it-works')
            </section>

            <section id="funcionalidades">
                @include('landing.components.features')
            </section>

            <section id="beneficios">
                @include('landing.components.benefits')
            </section>

            <section id="comparativo">
                @include('landing.components.comparison')
            </section>

            <section id="segmentos">
                @include('landing.components.segments')
            </section>

            <section id="demo">
                @include('landing.components.demo')
            </section>

            <section id="prova-social">
                @include('landing.components.social-proof')
            </section>

            <section id="faq">
                @include('landing.components.faq')
            </section>

            <section id="signup">
                @include('landing.components.final-cta')
            </section>
        </main>

        @include('landing.components.footer')
        @include('landing.components.whatsapp-float')
        @include('landing.components.signup-flow')
    </div>
@endsection