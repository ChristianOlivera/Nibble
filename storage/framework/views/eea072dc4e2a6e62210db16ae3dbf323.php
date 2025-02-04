<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Menu <?php $__env->endSlot(); ?>

    <section class="container-fluid">
      <h2 class="title-menu">"Nuestro menú, para los amantes de la buena comida."</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="<?php echo e(url('/img/menu/menu_1.jpg')); ?>" class="card-img-top" alt="SIMPLE CHEESEBURGER">
            <div class="card-body">
              <h3 class="card-title text-center text-white">SIMPLE CHEESEBURGER</h3>
              <p class="card-text text-white p-1 text-center">Medallón de carne Angus, queso cheddar, cebolla brunoise y nuestra exquisita salsa NIBBLE.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="<?php echo e(url('/img/menu/menu_2.jpg')); ?>" class="card-img-top" alt="DOBLE CHEESEBURGER">
            <div class="card-body">
              <h3 class="card-title text-center text-white">DOBLE CHEESEBURGER</h3>
              <p class="card-text text-white p-1 text-center">Doble medallón de carne Angus, doble queso cheddar, cebolla brunoise y nuestra exquisita salsa NIBBLE.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="<?php echo e(url('/img/menu/menu_3.jpg')); ?>" class="card-img-top" alt="TRIPLE CHEESEBURGER">
            <div class="card-body">
              <h3 class="card-title text-center text-white">TRIPLE CHEESEBURGER</h3>
              <p class="card-text text-white p-1 text-center">Triple medallón de carne Angus, triple queso cheddar, cebolla brunoise y nuestra exquisita salsa NIBBLE.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="<?php echo e(url('/img/menu/menu_4.jpg')); ?>" class="card-img-top" alt="LEVEL ONE">
            <div class="card-body">
              <h3 class="card-title text-center text-white">LEVEL ONE</h3>
              <p class="card-text text-white p-1 text-center">Dos medallones de carne Angus, doble queso Atuel, cebolla caramelizada y salsa picante.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="<?php echo e(url('/img/menu/menu_5.jpg')); ?>" class="card-img-top" alt="LEVEL TWO">
            <div class="card-body">
              <h3 class="card-title text-center text-white">LEVEL TWO</h3>
              <p class="card-text text-white p-1 text-center">Dos medallones de carne Angus, doble feta de queso cheddar, panceta, pepinillos, cebolla crispy, salsa picante y NIBBLE BBQ.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-dark">
            <img src="<?php echo e(url('/img/menu/menu_6.jpg')); ?>" class="card-img-top" alt="EXTRA LEVEL">
            <div class="card-body">
              <h3 class="card-title text-center text-white">EXTRA LEVEL</h3>
              <p class="card-text text-white p-1 text-center">Pan negro, tres medallones de carne Angus, triple queso cheddar, mucha panceta, salsa picante y NIBBLE BBQ.</p>
            </div>
          </div>
        </div>
      </div>
      <p class="announce">Puedes registrarte o iniciar sesión para reservar una fecha y probar las hamburguesas en nuestro local.</p>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel\Parcial2\resources\views/menu.blade.php ENDPATH**/ ?>