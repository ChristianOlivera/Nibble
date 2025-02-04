<x-layout>
    <x-slot:title>Nosotros</x-slot:title>

    <section id="about" class="container-fluid">
      <div class="container">
        <h2 class="title-about">SOBRE NOSOTROS</h2>
        <p class="info-about">"En NIBBLE, cada hamburguesa es elaborada con pasión y dedicación. Desde nuestros inicios, nos hemos comprometido a ofrecer hamburguesas que no solo satisfagan, sino que sorprendan. Seleccionamos ingredientes frescos y de la más alta calidad para garantizar un sabor auténtico y excepcional en cada bocado. Nuestro proceso artesanal, desde la elección de la carne hasta la mezcla de nuestras salsas exclusivas, refleja nuestra pasión por la excelencia culinaria. En NIBBLE, creemos que una hamburguesa perfecta puede transformar una comida en una experiencia inolvidable. ¡Te invitamos a probar la diferencia que hace nuestra dedicación!"</p>
      </div>
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-0">
          <div class="col">
            <img src="{{ url('/img/about/about_1.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col">
            <img src="{{ url('/img/about/about_2.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col">
            <img src="{{ url('/img/about/about_3.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col">
            <img src="{{ url('/img/about/about_4.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
</x-layout>