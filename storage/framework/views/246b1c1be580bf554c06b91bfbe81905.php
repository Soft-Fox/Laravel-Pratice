<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Pixel Positions</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-black text-white pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="<?php echo e(Vite::asset('resources/images/logo.svg')); ?>" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Job</a>
                <a href="#">Careerw</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            <?php if(auth()->guard()->check()): ?>
                <div class="space-x-6 font-bold flex">
                    <a href ="/jobs/create">Post a Job</a>

                    <form method="POST" action="/logout">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button>Log Out</button>
                    </form>
                </div>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            <?php endif; ?>
            
        </nav>

        <main class="mt-10">
            <?php echo e($slot); ?>

        </main>
    </div>
    
</body>
</html><?php /**PATH C:\laragon\www\project1\resources\views/components/layout.blade.php ENDPATH**/ ?>