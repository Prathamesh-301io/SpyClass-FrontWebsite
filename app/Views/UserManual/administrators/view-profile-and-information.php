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
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Teacher Dashboard Overview</h2>

        <!-- Students Search Option -->
        <div id="students-search-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Students Search Option</h3>
            <p class="text-gray-700 mb-4">
                Teachers can search for students by name, ID, roll number, admission number, location ID, or national ID. 
                The search results will display all matched students in a list view, where you can also view the detailed profile of each student.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/students-search.png') ?>" alt="Students Search" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Students Attendance Information -->
        <div id="attendance-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Students Attendance Information</h3>
            <p class="text-gray-700 mb-4">
                Teachers can see the total number of students in the classes assigned to them, along with the attendance breakdown: 
                number of presents, absents, late arrivals, and half-days. This section provides an overview of class attendance.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/students-attendance.png') ?>" alt="Attendance Information" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Daily Events & To-Do's -->
        <div id="events-tasks-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Daily Events & To-Do's</h3>
            <p class="text-gray-700 mb-4">
                Teachers can view daily events and tasks, as well as add, update, and delete items from their to-do list. 
                This section helps organize daily academic and administrative tasks efficiently.
            </p>
            <div class="flex justify-center gap-6 mb-4">
                <img src="<?= base_url('public/images/UserManual/teachers/events-tasks-view.png') ?>" alt="Events & Tasks" class="rounded-xl shadow-lg w-1/2">
                <img src="<?= base_url('public/images/UserManual/teachers/add-update-task.png') ?>" alt="Add or Update Task" class="rounded-xl shadow-lg w-1/2">
            </div>
        </div>

        <!-- Notices -->
        <div id="notices-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Notices</h3>
            <p class="text-gray-700 mb-4">
                This section shows unread important notices organized by week and day. Teachers can quickly access notices relevant to them 
                and stay updated on institutional announcements, schedule changes, or events.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/notices.png') ?>" alt="Notices" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Timeline -->
        <div id="timeline-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Timeline</h3>
            <p class="text-gray-700 mb-4">
                The timeline feature tracks important teacher activities, updates, and progress throughout the academic year. 
                It provides a comprehensive view of all relevant milestones and events for teachers.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/timeline-teacher.png') ?>" alt="Timeline Section" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>
