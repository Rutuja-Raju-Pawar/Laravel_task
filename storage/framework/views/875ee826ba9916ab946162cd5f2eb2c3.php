<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <head>
        <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>">
    </head>
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            /* Light gradient background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Modern font */
        }

        .container {
            margin: 40px auto;
            padding: 30px 50px;
            max-width: 800px;
            background-color: #ffffff;
            /* White background for form */
            border-radius: 12px;
            /* More pronounced rounded corners */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Stronger shadow */
            animation: fadeIn 1s ease-in-out;
            /* Fade-in effect */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            /* Larger font size */
            color: #333;
            font-weight: 700;
            /* Bolder title */
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .col-md-6 {
            flex: 0 0 50%;
            /* Adjusted to take up half of the row */
            max-width: 50%;
            padding: 0 15px;
        }

        .form-label {
            font-weight: 600;
            /* Slightly bolder labels */
            color: #444;
            /* Darker label color */
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            width: 100%;
            /* Full width inside the column */
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            /* Smooth transition for inputs */
        }

        .form-control:focus {
            border-color: #007bff;
            /* Blue border on focus */
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
            /* Soft shadow on focus */
        }

        .btn-success {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 18px;
            border-radius: 8px;
            background: linear-gradient(45deg, #28a745, #218838);
            /* Gradient button */
            border: none;
            color: #fff;
            font-weight: 600;
            transition: background 0.3s ease, transform 0.3s ease;
            /* Smooth transition and animation */
            margin-top: 20px;
        }

        .btn-success:hover {
            background: linear-gradient(45deg, #218838, #1e7e34);
            /* Darker gradient on hover */
            transform: translateY(-3px);
            /* Slight lift on hover */
        }
    </style>
    <div class="container">
        <h1>Edit Student</h1>

        <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="row">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        value="<?php echo e(old('first_name', $student->first_name)); ?>">
                </div>

                <div class="col-md-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="<?php echo e(old('last_name', $student->last_name)); ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="<?php echo e(old('email', $student->email)); ?>">
                </div>

                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        value="<?php echo e(old('phone', $student->phone)); ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo e(old('dob', $student->dob)); ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Update Student</button>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\RutujaPawar\Task_Students_management_system\resources\views/students/edit.blade.php ENDPATH**/ ?>