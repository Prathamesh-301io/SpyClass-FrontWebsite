<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/teachers') ?>"
                class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Teacher Manual
            </a>
        </div>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Student Information Overview</h2>

        <!-- Student Details -->
        <div id="student-details-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Student Details</h3>
            <p class="text-gray-700 mb-4">
                This section displays a list of all students filtered by class and section. You can view detailed information for each student, including profile, exams, documents, and timeline.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/student-details.png') ?>" alt="Student Details" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            <div class="grid grid-cols-1 gap-4 mt-3">
                <div class="flex flex-col items-center space-y-2">
                    <p class="text-gray-700 font-semibold text-center">
                        Students Profile
                    </p>
                    <img src="<?= base_url('public/images/UserManual/teachers/student-profile.png') ?>"
                        alt="Student Profile"
                        class="rounded-xl shadow-lg w-full max-w-lg">
                </div>

                <div class="flex flex-col items-center space-y-2">
                    <p class="text-gray-700 font-semibold text-center">
                        Students Documents
                    </p>
                    <img src="<?= base_url('public/images/UserManual/teachers/student-documents.png') ?>"
                        alt="Student Documents"
                        class="rounded-xl shadow-lg w-full max-w-lg">
                </div>

                <div class="flex flex-col items-center space-y-2">
                    <p class="text-gray-700 font-semibold text-center">
                        Students Timeline
                    </p>
                    <img src="<?= base_url('public/images/UserManual/teachers/student-timeline.png') ?>"
                        alt="Student Timeline"
                        class="rounded-xl shadow-lg w-full max-w-lg">
                </div>
            </div>

        </div>

        <!-- Student Admission -->
        <div id="student-admission-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Student Admission</h3>
            <p class="text-gray-700 mb-4">
                Teachers can add or update student information, including transport details, hostel details, parent/guardian details, address details, and miscellaneous information.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/student-admission.png') ?>" alt="Student Admission" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Online Admission -->
        <div id="online-admission-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Online Admission</h3>
            <p class="text-gray-700 mb-4">
                Displays the list of students who applied for admission online via the website. Only approved students will be enrolled.
            </p>
        </div>

        <!-- Disabled Students -->
        <div id="disabled-students-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Disabled Students</h3>
            <p class="text-gray-700 mb-4">
                This section shows a list of students who have been marked as disabled or inactive.
            </p>
        </div>

        <!-- Bulk Delete -->
        <div id="bulk-delete-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Bulk Delete</h3>
            <p class="text-gray-700 mb-4">
                Allows bulk deletion of students based on class and section selection.
            </p>
        </div>

        <!-- Student Categories -->
        <div id="student-categories-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Student Categories</h3>
            <p class="text-gray-700 mb-4">
                Teachers can manage categories like Open, SC, OBC, ST, NT, and more to classify students efficiently.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/student-categories.png') ?>" alt="Student Categories" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Student Behavior -->
        <div id="student-behavior-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Student Behavior</h3>
            <p class="text-gray-700 mb-4">
                Teachers can add and update students' behavior records after filtering by class and section. The system also shows the history of previous behavior records.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/student-behavior.png') ?>" alt="Student Behavior" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>