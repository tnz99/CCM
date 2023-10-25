<?php $__env->startSection('content'); ?>
<section class="d-flex justify-content-between">
    <div class="mt-197 ml-146">
        <div>
            <h4 class="text-white fw-400 ">Enter your details</h4>
            <form class="d-flex flex-column">
                <input class="fs-20 w-513 mb-23 " type="text" placeholder="Full name"/>
                <input class="fs-20 w-513 mb-23 " type="email" placeholder="E-mail" />
                <input class="fs-20 w-513 " type="text" placeholder="Country" />

                <button class="w-320 bg-yellow fs-30 font-normal lh-normal mt-50 " type="submit">
                    Register

                    <svg width="34" height="38" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0001 0C17.5636 0 18.1042 0.222427 18.5026 0.618324L33.3777 15.3961C34.2075 16.2205 34.2075 17.5573 33.3777 18.3817C32.5479 19.206 31.2023 19.206 30.3725 18.3817L19.1251 7.20778V35.8889C19.1251 37.0549 18.1737 38 17.0001 38C15.8264 38 14.875 37.0549 14.875 35.8889V7.20778L3.62762 18.3817C2.79774 19.206 1.45227 19.206 0.622393 18.3817C-0.207464 17.5573 -0.207464 16.2205 0.622393 15.3961L15.4975 0.618324C15.8959 0.222427 16.4365 0 17.0001 0Z" fill="black"/>
                        <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.709422 0.704783 -0.709422 -0.704783 17 12.6667)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                        <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.709422 -0.704783 -0.709422 0.704783 25.5001 27.0222)" stroke="black" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </button>
            </form>
        </div>

        <div class="mt-46 ">
            <h4 class="text-green">Success</h4>
            <p class="text-white">we will redirect you back to home</p>
        </div>

        <div class="">
            <h5 class="text-white lh-normal fw-600">Socials:</h5>
            <ul class="list-none d-flex align-items-center justify-content-around">
                <li></li>
            </ul>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.circular_nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('circular_nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/register.blade.php ENDPATH**/ ?>