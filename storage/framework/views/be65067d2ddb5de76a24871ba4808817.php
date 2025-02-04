<?php
/** @var \App\Models\News $news */
?>
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
     <?php $__env->slot('title', null, []); ?> Confirmacion de eliminacion de <?php echo e($news->title); ?> <?php $__env->endSlot(); ?>

    <section class="container-fluid mb-5">
        <h2 class="title-delete">Confirmación de eliminación</h2>

        <p class="text-delete">Esta por eliminar el siguiente artículo, por favor confirme su eliminación.</p>

        <div class="card mb-3">
            <img src=<?php echo e($news->image); ?> class="card-img-top" alt=<?php echo e($news->description_image); ?>>
            <div class="card-body bg-dark text-white">
              <h5 class="card-title"><?php echo e($news->title); ?></h5>
              <p class="card-text"><?php echo e($news->resume); ?></p>
            </div>
            <form action="<?php echo e(route('news.delete.process', ['id' => $news->news_id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger rounded-0 w-100 p-3">Confirmar Eliminación</button>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\Parcial1\resources\views/news/delete-form.blade.php ENDPATH**/ ?>