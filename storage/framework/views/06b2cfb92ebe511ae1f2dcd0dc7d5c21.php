<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['job']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['job']); ?>
<?php foreach (array_filter((['job']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal36665f0dc0e45320e21db1e20a989acf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36665f0dc0e45320e21db1e20a989acf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.panel','data' => ['class' => 'flex gap-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('panel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex gap-6']); ?>
    <div>
        <?php if (isset($component)) { $__componentOriginalfe582b78584eb4c719854d33f08bc7e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe582b78584eb4c719854d33f08bc7e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.employer-logo','data' => ['employer' => $job->employer]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('employer-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($job->employer)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe582b78584eb4c719854d33f08bc7e7)): ?>
<?php $attributes = $__attributesOriginalfe582b78584eb4c719854d33f08bc7e7; ?>
<?php unset($__attributesOriginalfe582b78584eb4c719854d33f08bc7e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe582b78584eb4c719854d33f08bc7e7)): ?>
<?php $component = $__componentOriginalfe582b78584eb4c719854d33f08bc7e7; ?>
<?php unset($__componentOriginalfe582b78584eb4c719854d33f08bc7e7); ?>
<?php endif; ?>
    </div>
    
    <div class="flex-1 flex flex-col">
        <a href='#' class="self-start text-sm text-gray-400 transition-color duration-300">
            <?php echo e($job->employer->name); ?>

        </a>
        
        <h3 class="font-blod text-xl mt-3 group-hover:text-blue-800 transition-color duration-300">
            <a href="<?php echo e($job->url); ?>">
                <?php echo e($job->title); ?>

            </a>
        </h3>
        
        <p class="text-sm text-gray-400 mt-auto"><?php echo e($job->schedule); ?> - <?php echo e($job->salary); ?></p>
    </div>

    <div class="">
        <div>
            <?php $__currentLoopData = $job->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal9ccaa90195d4e06c31c1de306aacdf44 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ccaa90195d4e06c31c1de306aacdf44 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tag','data' => ['tag' => $tag]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tag)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ccaa90195d4e06c31c1de306aacdf44)): ?>
<?php $attributes = $__attributesOriginal9ccaa90195d4e06c31c1de306aacdf44; ?>
<?php unset($__attributesOriginal9ccaa90195d4e06c31c1de306aacdf44); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ccaa90195d4e06c31c1de306aacdf44)): ?>
<?php $component = $__componentOriginal9ccaa90195d4e06c31c1de306aacdf44; ?>
<?php unset($__componentOriginal9ccaa90195d4e06c31c1de306aacdf44); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36665f0dc0e45320e21db1e20a989acf)): ?>
<?php $attributes = $__attributesOriginal36665f0dc0e45320e21db1e20a989acf; ?>
<?php unset($__attributesOriginal36665f0dc0e45320e21db1e20a989acf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36665f0dc0e45320e21db1e20a989acf)): ?>
<?php $component = $__componentOriginal36665f0dc0e45320e21db1e20a989acf; ?>
<?php unset($__componentOriginal36665f0dc0e45320e21db1e20a989acf); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\project1\resources\views/components/job-card-wide.blade.php ENDPATH**/ ?>