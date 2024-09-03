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
    <div class="container mt-5">
        <h1 class="text-center mb-4">Students</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary" style="padding: 5px 12px;">Add Student</a>
        </div>
        <style>
            .table-responsive {
                width: 100%;

                table {
                    width: 100%;
                    margin: 5px 5px;
                    padding: 5px 5px;

                    tr {
                        border-bottom: 1px solid black;

                        .act-btn {
                            padding: 5px;
                            width: 100px;
                            margin-left: 20px;
                            margin-right: -10px;
                            /* padding-left: 40px; */
                            display: flex;

                            /* padding: 2px; */
                            button {
                                margin-right: 1px;
                                margin-left: 10px;
                                padding: 2px 8px;
                            }

                        }

                    }

                    th {
                        border-left: #333;
                    }
                }
            }
        </style>


        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered" id="students-table">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th class="">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center align-middle">
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($student->id); ?></td>
                            <td><?php echo e($student->first_name); ?></td>
                            <td><?php echo e($student->last_name); ?></td>
                            <td><?php echo e($student->email); ?></td>
                            <td><?php echo e($student->phone); ?></td>
                            <td><?php echo e($student->dob); ?></td>
                            <td class="text-center act-btn">
                                <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="  btn btn-warning btn-sm mx-1"
                                    style="margin-left:40px;padding: 2px 8px;">Edit</a>
                                <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script>
            $(document).ready(function () {
                $('#students-table').DataTable({
                    "pagingType": "full_numbers",
                    "language": {
                        "search": "Filter records:"
                    },
                    "columnDefs": [
                        { "orderable": false, "targets": -1 }
                    ]
                });
            });
        </script>
    <?php $__env->stopPush(); ?>

    <style>
        .container {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-weight: 600;
            font-size: 2rem;
        }

        .table thead {
            background-color: #343a40;
            color: #fff;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .btn-primary {
            background-color: #6f42c1;
            border-color: #6f42c1;
        }

        .btn-primary:hover {
            background-color: #563d7c;
            border-color: #563d7c;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .btn {
            border-radius: 8px;
            transition: all 0.2s ease-in-out;
        }

        .btn:hover {
            transform: scale(1.05);
        }
    </style>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\RutujaPawar\Task_Students_management_system\resources\views/students/index.blade.php ENDPATH**/ ?>