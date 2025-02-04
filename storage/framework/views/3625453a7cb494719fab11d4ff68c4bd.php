<?php
/** @var \App\Models\Category[]|\Illuminate\Database\Eloquent\Collection $categories */
/** @var \App\Models\News[]|\Illuminate\Database\Eloquent\Collection $news */
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
     <?php $__env->slot('title', null, []); ?> Novedades <?php $__env->endSlot(); ?>

    <section class="container-fluid">
        <h2 class="title-news">NOVEDADES</h2>

        <div class="container fluid d-flex justify-content-end">
            <form action="<?php echo e(route('news.index')); ?>" method="GET" class="mt-3">
                <div class="form-group d-flex">
                    <label for="category_id" class="text-white m-2">Categorias:</label>
                    <select id="category_id" class="form-control bg-dark text-white" name="category_id" onchange="this.form.submit()">
                        <option value="">Todo</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->category_id); ?>" <?php echo e(request('category_id') == $category->category_id ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </form>
        </div>

        <?php if(auth()->guard()->check()): ?>
            <div class="m-4">
                <a href="<?php echo e(route('news.create.form')); ?>" class="btn btn-success p-3">Crear Nuevo Artículo</a>
            </div>
        <?php endif; ?>

        <?php if($news->isNotEmpty()): ?>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 g-4 mt-4">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col" >
                        <div class="card-news card h-100 bg-dark d-flex flex-column">
                            <a class="text-decoration-none text-white" href="<?php echo e(route('news.view', ['id' => $news->news_id])); ?>">
                                <img src="<?php echo e(url($news->image)); ?>" class="card-img-top" alt="<?php echo e($news->description_image); ?>">                 
                                <div class="card-body">
                                    <h5 class="card-title p-1"><?php echo e($news->title); ?></h5>
                                    <p class="card-text p-1"><?php echo e($news->resume); ?></p>
                                </div>
                            </a>
                            <div class="mt-auto">
                                <div class="card-footer">
                                    <small class="text-white">Publicado el <?php echo e($news->created_at->format('d/m/Y')); ?></small>
                                </div>
                            </div>
                            <?php if(auth()->guard()->check()): ?>
                            <div class="d-flex">
                                <a href="<?php echo e(route('news.edit.form', ['id' => $news->news_id])); ?>" class="w-50 rounded-0 btn btn-outline-warning">Editar</a>
                                <a href="<?php echo e(route('news.delete.form', ['id' => $news->news_id])); ?>" class="w-50 rounded-0 btn btn-outline-danger">Eliminar</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p class="empty-text">No se encuentran artículos en esta categoria actualmente.</p>
        <?php endif; ?>
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
<?php /**PATH C:\xampp\htdocs\laravel\Parcial1\resources\views/news/index.blade.php ENDPATH**/ ?>