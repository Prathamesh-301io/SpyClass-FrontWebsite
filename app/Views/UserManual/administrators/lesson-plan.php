<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/teachers') ?>" class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Teacher Manual
            </a>
        </div>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Lesson Plan Management</h2>
        <!-- Manage Lesson Plan -->
        <div id="manage-lesson-plan" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Manage Lesson Plan</h3>
            <p class="text-gray-700 mb-4">
                This section allows teachers to view the subject-wise timetable for the week. Teachers with appropriate permissions can edit or delete lesson plans.
                The view includes an overview of the lessons and topics to be taught during the specified week. It helps teachers manage their schedules efficiently.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/manage-lesson-plan.png') ?>" alt="Manage Lesson Plan" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            <p class="text-gray-700 mb-4">
                Add Lesson and Add Topic features are also available for easy lesson planning and organization.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/add-lesson-plan.png') ?>" alt="Manage Lesson Plan" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Manage Syllabus Status -->
        <div id="manage-syllabus-status" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Manage Syllabus Status</h3>
            <p class="text-gray-700 mb-4">
                Teachers can filter by class, section, subject group, and subject to view the complete list of lessons and topics. This feature helps track the completion status of each topic, ensuring that the syllabus coverage is up to date and well-organized.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/manage-syllabus-status.png') ?>" alt="Manage Syllabus Status" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Add Lesson -->
        <div id="add-lesson" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Lesson</h3>
            <p class="text-gray-700 mb-4">
                Teachers can add new lessons by specifying the class, section, subject group, and subject. Previously added lessons can also be viewed, edited, or deleted as needed. The option to print lesson plans is available for easy offline reference.
            </p>
            <div class="flex gap-4 justify-center">
                <div class="w-1/2">
                    <img src="<?= base_url('public/images/UserManual/teachers/view-lesson.png') ?>" alt="View Lesson"
                        class="rounded-xl shadow-lg object-contain w-full h-auto">
                </div>
                <div class="w-1/2">
                    <img src="<?= base_url('public/images/UserManual/teachers/add-lesson.png') ?>" alt="Add Lesson"
                        class="rounded-xl shadow-lg object-contain w-full h-auto">
                </div>
            </div>
            <p class="text-gray-700 mt-4">
                Add lesson and add topic features are also available for easy lesson planning and organization.
            </p>
        </div>

        <div id="add-topic" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Topic</h3>
            <p class="text-gray-700 mb-4">
                Similar to lessons, topics can be added, edited, viewed, or deleted. Teachers can categorize topics according to the curriculum structure, ensuring all essential subtopics are covered comprehensively. This feature enhances lesson planning and topic tracking.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <div class="max-w-xs">
                    <img src="<?= base_url('public/images/UserManual/teachers/add-topic.png') ?>" alt="Add Topic"
                        class="rounded-xl shadow-lg object-contain w-full h-auto">
                </div>
                <div class="max-w-xs">
                    <img src="<?= base_url('public/images/UserManual/teachers/view-topic.png') ?>" alt="View Topic"
                        class="rounded-xl shadow-lg object-contain w-full h-auto">
                </div>
            </div>
            <p class="text-gray-700 mt-4">
                Adding and managing topics efficiently helps teachers systematically cover the curriculum and track progress effectively.
            </p>
        </div>



    </div>
</section>