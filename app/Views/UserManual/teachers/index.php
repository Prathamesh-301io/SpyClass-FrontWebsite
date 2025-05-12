<section class="py-12 bg-white">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/') ?>"
                class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back
            </a>
        </div>
        <div class="text-center mb-10">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800">Teachers User Manual</h2>
            <p class="mt-2 text-gray-600">Explore features available to teachers with guides for each module.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div id="teachers-dashboard" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/view-profile-and-information') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Teacher Dashboard</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-profile-and-information#profile-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Students Search Option
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-profile-and-information#attendance-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Students Attendance Information
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-profile-and-information#events-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Daily Events & To-Do's
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-profile-and-information#notices-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Notices
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-profile-and-information#timeline-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Timeline
                        </a>
                    </li>
                </ul>
            </div>

            <div id="teachers-dashboard" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/view-student-information') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Student Information</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-student-information#student-details-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Student Details
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-student-information#student-admission-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Student Admission
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-student-information#online-admission-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Online Admission
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-student-information#disabled-students-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Disabled Students
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-student-information#bulk-delete-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Bulk Delete
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-student-information#student-categories-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Student Categories
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-student-information#student-behavior-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Student Behavior
                        </a>
                    </li>
                </ul>
            </div>



            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                <a href="<?= base_url('usermanual/teachers/homework-information') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Homework</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/homework-information#homework-list') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Homework List
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/homework-information#submission-status') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Submission Status
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/homework-information#download-material') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Download Homework Material
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/homework-information#upload-submissions') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Upload Submissions
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                <a href="<?= base_url('usermanual/teachers/online-exam-information') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Online Exam</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/online-exam-information#exam-list') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Exam List
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/online-exam-information#exam-details') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Exam Details
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/online-exam-information#start-test') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Start Test
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/online-exam-information#view-results') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            View Results
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/online-exam-information#print-analyze') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Print and Analyze Results
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/online-exam-information#reattempt-exam') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Reattempt Exam
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                <a href="<?= base_url('usermanual/teachers/attendance-information') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Attendance</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/attendance-information#attendance-calendar') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Attendance Calendar
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/attendance-information#attendance-legend') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Attendance Legend
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/attendance-information#apply-leaves') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Apply Leaves
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                <a href="<?= base_url('usermanual/teachers/download-center') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Download Center</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/download-center#assignments') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Assignments
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/download-center#study-material') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Study Material
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/download-center#syllabus') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Syllabus
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/download-center#other-downloads') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Other Downloads
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/download-center#gallery') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Gallery
                        </a>
                    </li>
                </ul>
            </div>


            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                <a href="<?= base_url('usermanual/teachers/communication') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Communication</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/communication#notice-board') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Notice Board
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/communication#rules-regulations') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Rules and Regulations
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/communication#events') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Events
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('usermanual/teachers/communication#todo-list') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            To-Do List
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('usermanual/teachers/communication#holiday-lists') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Holiday Lists
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                <a href="<?= base_url('usermanual/teachers/library') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Library</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/library#books-list') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Books List
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/library#issued-books') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Issued Books
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                <a href="<?= base_url('usermanual/teachers/transport-hostel') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Transport & Hostel</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/transport-hostel#transport-routes') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Transport Routes
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/transport-hostel#hostel-rooms') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Hostel Rooms
                        </a>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</section>