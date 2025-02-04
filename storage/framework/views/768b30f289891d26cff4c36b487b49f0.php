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
     <?php $__env->slot('title', null, []); ?> Inicio <?php $__env->endSlot(); ?>

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
                <a href="<?php echo e(route('menu')); ?>">VER MENU <i class="fa-solid fa-arrow-right"></i></a>
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
                <a href="<?php echo e(route('about')); ?>">SOBRE NOSOTROS <i class="fa-solid fa-arrow-right"></i></a>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\Parcial2\resources\views/home.blade.php ENDPATH**/ ?>