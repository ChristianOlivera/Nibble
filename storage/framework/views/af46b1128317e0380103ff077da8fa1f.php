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
     <?php $__env->slot('title', null, []); ?> Iniciar Sesión <?php $__env->endSlot(); ?>

    <section id="login" class="container-fluid">
        <h2 class="title-login">Ingresar a mi Cuenta</h2>

        <div class="login-container">
            <form action="<?php echo e(route('auth.login.process')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="email" class="form-label text-white fs-4">Email:</label>
                    <input type="email" id="email" name="email" class="form-control bg-dark text-white p-2 mb-4" value="<?php echo e(old('email')); ?>">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label text-white fs-4">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control bg-dark text-white p-2 mb-5">
                </div>
                <button type="submit" class="btn btn-primary w-100 fs-4">Ingresar</button>
            </form>
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
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel\Parcial1\resources\views/auth/login-form.blade.php ENDPATH**/ ?>