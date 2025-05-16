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

            <div id="students-dashboard" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
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

            <div id="teachers-attendance" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/attendance') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Attendance Management</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/attendance#students-attendance') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Students Attendance
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/attendance#attendance-by-date') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Attendance By Date
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/attendance#approve-leave') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Approve Leave
                        </a>
                    </li>
                </ul>
            </div>

            <div id="online-exam" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/view-online-examination') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Online Examination</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-online-examination#exam-list') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Online Exam List
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-online-examination#add-exam') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Add Exam
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-online-examination#assign-students') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Assign Students
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-online-examination#add-question') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Add Question to Exam
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-online-examination#evaluate-exam') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Evaluate Exam
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/view-online-examination#question-bank') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Question Bank
                        </a>
                    </li>
                </ul>
            </div>

            <div id="teachers-lesson-plan" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/lesson-plan') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Lesson Plan Management</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/lesson-plan#manage-lesson-plan') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Manage Lesson Plan
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/lesson-plan#manage-syllabus-status') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Manage Syllabus Status
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/lesson-plan#add-lesson') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Add Lesson
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/lesson-plan#add-topic') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Add Topic
                        </a>
                    </li>
                </ul>
            </div>

            <div id="teachers-academics" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/academics') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Academics Management</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/academics#class-timetable') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Class Timetable
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/academics#teachers-timetable') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Teachers Timetable
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/academics#assign-class-teacher') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Assign Class Teacher
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/academics#subject-group') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Subject Group
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/academics#subjects') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Subjects
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/academics#classes') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Classes
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/academics#sections') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Sections
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/academics#zoom-meeting') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Zoom Meeting
                        </a>
                    </li>
                </ul>
            </div>

            <div id="human-resource-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/human-resource') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Human Resource</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/human-resource#staff-directory') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Staff Directory
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/human-resource#apply-leave') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Apply Leave
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/human-resource#leave-application-form') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Leave Application Form
                        </a>
                    </li>
                </ul>
            </div>

            <div id="communication-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/communication') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Communication</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/communication#notice-board') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Notice Board
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/communication#add-notice') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Add Notice
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/communication#rules-regulations') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Rules & Regulations
                        </a>
                    </li>
                </ul>
            </div>


            <div id="download-center" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/download-center') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Download Center</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/download-center#upload-contents') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Upload Contents
                        </a>
                    </li>
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

            <div id="homework-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/homework') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Homework</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/homework#homework-list') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Homework List
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/homework#add-homework') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Add Homework
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/homework#evaluate-homework') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Evaluate Homework
                        </a>
                    </li>
                </ul>
            </div>

            <div id="reports-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/teachers/reports') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Reports</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/teachers/reports#student-information') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Student Information
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/reports#attendance') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Attendance
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/reports#examination') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Examination
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/reports#online-examination') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Online Examination
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/reports#lesson-plan') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Lesson Plan
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/reports#transport') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Transport
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/reports#hostel') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Hostel
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/teachers/reports#alumni') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Alumni
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>