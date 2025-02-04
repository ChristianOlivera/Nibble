<x-layout>
    <x-slot:title>Menu</x-slot:title>

    <section class="container-fluid">
      <h2 class="title-menu">"Nuestro menú, para los amantes de la buena comida."</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="{{ url('/img/menu/menu_1.jpg') }}" class="card-img-top" alt="SIMPLE CHEESEBURGER">
            <div class="card-body">
              <h3 class="card-title text-center text-white">SIMPLE CHEESEBURGER</h3>
              <p class="card-text text-white p-1 text-center">Medallón de carne Angus, queso cheddar, cebolla brunoise y nuestra exquisita salsa NIBBLE.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="{{ url('/img/menu/menu_2.jpg') }}" class="card-img-top" alt="DOBLE CHEESEBURGER">
            <div class="card-body">
              <h3 class="card-title text-center text-white">DOBLE CHEESEBURGER</h3>
              <p class="card-text text-white p-1 text-center">Doble medallón de carne Angus, doble queso cheddar, cebolla brunoise y nuestra exquisita salsa NIBBLE.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="{{ url('/img/menu/menu_3.jpg') }}" class="card-img-top" alt="TRIPLE CHEESEBURGER">
            <div class="card-body">
              <h3 class="card-title text-center text-white">TRIPLE CHEESEBURGER</h3>
              <p class="card-text text-white p-1 text-center">Triple medallón de carne Angus, triple queso cheddar, cebolla brunoise y nuestra exquisita salsa NIBBLE.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="{{ url('/img/menu/menu_4.jpg') }}" class="card-img-top" alt="LEVEL ONE">
            <div class="card-body">
              <h3 class="card-title text-center text-white">LEVEL ONE</h3>
              <p class="card-text text-white p-1 text-center">Dos medallones de carne Angus, doble queso Atuel, cebolla caramelizada y salsa picante.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="{{ url('/img/menu/menu_5.jpg') }}" class="card-img-top" alt="LEVEL TWO">
            <div class="card-body">
              <h3 class="card-title text-center text-white">LEVEL TWO</h3>
              <p class="card-text text-white p-1 text-center">Dos medallones de carne Angus, doble feta de queso cheddar, panceta, pepinillos, cebolla crispy, salsa picante y NIBBLE BBQ.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="{{ url('/img/menu/menu_6.jpg') }}" class="card-img-top" alt="EXTRA LEVEL">
            <div class="card-body">
              <h3 class="card-title text-center text-white">EXTRA LEVEL</h3>
              <p class="card-text text-white p-1 text-center">Pan negro, tres medallones de carne Angus, triple queso cheddar, mucha panceta, salsa picante y NIBBLE BBQ.</p>
            </div>
          </div>
        </div>
      </div>
      <p class="announce">Puedes registrarte o iniciar sesión para reservar una fecha y probar las hamburguesas en nuestro local.</p>
    </section>
</x-layout>
