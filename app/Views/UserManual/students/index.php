<section class="py-12 bg-white">
    <div class="container mx-auto px-4 max-w-screen-xl">
    <div class="mb-6">
            <a href="<?= base_url('usermanual/') ?>"
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back
            </a>
        </div>
        <div class="text-center mb-10">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800">Student User Manual</h2>
            <p class="mt-2 text-gray-600">Explore features available to students with guides for each module.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                <a href="<?= base_url('usermanual/students/view-profile-and-information') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Dashboard</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                    <li>
                        <a href="<?= base_url('usermanual/students/view-profile-and-information#profile-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            View Profile
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/students/view-profile-and-information#fees-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Academic Fees
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/students/view-profile-and-information#exams-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Examinations
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/students/view-profile-and-information#documents-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Documents
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/students/view-profile-and-information#timeline-section') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Timeline
                        </a>
                    </li>
                </ul>

            </div>


            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                <a href="<?= base_url('usermanual/students/academics-information') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Academics</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                    <li>
                        <a href="<?= base_url('usermanual/students/academics-information#class-timetable') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Class Timetable 
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/students/academics-information#lesson-plan') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Lesson Plan
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/students/academics-information#zoom-meetings') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Zoom Meetings
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/students/academics-information#syllabus-status') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Syllabus Status 
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/students/academics-information#teacher-review') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Teacher Review
                        </a>
                    </li>
                </ul>
            </div>


            <a href="<?= base_url('usermanual/students/homework') ?>">
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Homework</h3>
                    <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                        <li>View assigned homework with due dates.</li>
                        <li>Submit homework documents online.</li>
                    </ul>
                </div>
            </a>

            <a href="<?= base_url('usermanual/students/onlineexams') ?>">
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Online Exams</h3>
                    <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                        <li>Attend scheduled online exams.</li>
                        <li>Review past exam results and feedback.</li>
                    </ul>
                </div>
            </a>

            <a href="<?= base_url('usermanual/students/attendance') ?>">
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Attendance</h3>
                    <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                        <li>Check daily attendance records.</li>
                        <li>Track monthly attendance summary.</li>
                    </ul>
                </div>
            </a>

            <a href="<?= base_url('usermanual/students/noticeboard') ?>">
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Notice Board</h3>
                    <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                        <li>Read latest notices and announcements.</li>
                        <li>Filter notices by category or date.</li>
                    </ul>
                </div>
            </a>

            <a href="<?= base_url('usermanual/students/profile') ?>">
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Profile</h3>
                    <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                        <li>View and update personal details.</li>
                        <li>Change password or contact info.</li>
                    </ul>
                </div>
            </a>
        </div>
    </div>
</section>