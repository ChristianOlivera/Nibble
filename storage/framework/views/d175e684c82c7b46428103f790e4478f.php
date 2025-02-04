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
     <?php $__env->slot('title', null, []); ?> Nosotros <?php $__env->endSlot(); ?>

    <section id="about" class="container-fluid">
      <div class="container">
        <h2 class="title-about">SOBRE NOSOTROS</h2>
        <p class="info-about">"En NIBBLE, cada hamburguesa es elaborada con pasión y dedicación. Desde nuestros inicios, nos hemos comprometido a ofrecer hamburguesas que no solo satisfagan, sino que sorprendan. Seleccionamos ingredientes frescos y de la más alta calidad para garantizar un sabor auténtico y excepcional en cada bocado. Nuestro proceso artesanal, desde la elección de la carne hasta la mezcla de nuestras salsas exclusivas, refleja nuestra pasión por la excelencia culinaria. En NIBBLE, creemos que una hamburguesa perfecta puede transformar una comida en una experiencia inolvidable. ¡Te invitamos a probar la diferencia que hace nuestra dedicación!"</p>
      </div>
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-0">
          <div class="col">
            <img src="<?php echo e(url('/img/about/about_1.jpg')); ?>" alt="" class="img-fluid">
          </div>
          <div class="col">
            <img src="<?php echo e(url('/img/about/about_2.jpg')); ?>" alt="" class="img-fluid">
          </div>
          <div class="col">
            <img src="<?php echo e(url('/img/about/about_3.jpg')); ?>" alt="" class="img-fluid">
          </div>
          <div class="col">
            <img src="<?php echo e(url('/img/about/about_4.jpg')); ?>" alt="" class="img-fluid">
          </div>
        </div>
      </div>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\Parcial1\resources\views/about.blade.php ENDPATH**/ ?>