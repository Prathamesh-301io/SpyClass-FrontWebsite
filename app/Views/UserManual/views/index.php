<?php
$roles = [
    [
        'title' => 'Students',
        'desc'  => 'Guides related to student-side activities in the ERP system. Helps students manage their academic records and school tasks.',
        'icon'  => 'user-graduate',
        'path'  => 'usermanual/students',
        'modules' => ['Attendance', 'Homework', 'Timetable', 'Exams']
    ],
    [
        'title' => 'Teachers',
        'desc'  => 'Includes tutorials for teachers to handle their duties such as class management, student evaluation, and communication.',
        'icon'  => 'chalkboard-teacher',
        'path'  => 'usermanual/teachers',
        'modules' => ['Add Homework', 'Mark Attendance', 'Gradebook', 'Communication']
    ],
    [
        'title' => 'Admin',
        'desc'  => 'Step-by-step setup and operational guides for school admins to configure and manage the ERP backend.',
        'icon'  => 'user-shield',
        'path'  => 'usermanual/admin',
        'modules' => ['Online Exam', 'Fees Management', 'User Roles', 'Settings']
    ]
];
?>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12 max-w-[1440px]">
        <!-- Page Title -->
        <div class="text-center mb-14">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800">User Manual</h2>
            <p class="mt-3 text-xl text-gray-600">Select a role to explore the complete documentation and module-specific guides.</p>
        </div>

        <!-- Role Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($roles as $role): ?>
                <a href="<?= base_url($role['path']); ?>" class="block bg-white rounded-2xl shadow-lg hover:shadow-2xl p-8 transition-all duration-300 group">
                    <div class="flex items-start space-x-5 mb-4">
                        <div class="bg-purple-100 text-purple-700 p-4 rounded-full">
                            <i class="fas fa-<?= $role['icon']; ?> fa-2x"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-purple-700"><?= $role['title']; ?></h3>
                            <p class="text-md text-gray-500 mt-1"><?= $role['desc']; ?></p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-sm font-medium text-gray-700 mb-1">Key Modules:</p>
                        <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                            <?php foreach ($role['modules'] as $module): ?>
                                <li><?= $module; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
