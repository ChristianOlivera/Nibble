<x-layout>
    <x-slot:title>Inicio</x-slot:title>

    <section id="front" class="container-fluid">
        <div class="front-container">
            <div class="front-info">
                <h2>Bienvenido a NIBBLE</h2>
                <p>Descubre el auténtico sabor de la hamburguesa en NIBBLE, donde la calidad se fusiona con la pasión.</p>
            </div>
        </div>
    </section>
    <section id="menu-home" class="container-fluid d-flex m-0 p-0">
        <div class="menu-container">
            <div class="menu-info">
                <h2>Conoce nuestro menú</h2>
                <p>"Nuestras burgers están hechas con carne 100% Angus, con pan casero que horneamos todos los días y una selección de ingredientes que las hacen únicas".</p>
                <a href="{{ route('menu') }}">VER MENU <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="menu-img"></div>
    </section>
    <section id="about-home" class="container-fluid d-flex m-0 p-0">
        <div class="about-img"></div>
        <div class="about-container">
            <div class="about-info">
                <h2>SOMOS NIBBLE</h2>
                <p>"Somos mucho más que una hamburguesería; descubre nuestro compromiso con la calidad, la creatividad y el sabor en cada hamburguesa".</p>
                <a href="{{ route('about') }}">SOBRE NOSOTROS <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
</x-layout>