<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/students') ?>"
                class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Student Manual
            </a>
        </div>

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Communication</h2>

        <!-- Notice Board -->
        <div id="notice-board" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Notice Board</h3>
            <p class="text-gray-700 mb-4">
                The Notice Board serves as a central hub for all public announcements, urgent notifications, and important updates.
                It includes information about holidays, exam schedules, event reminders, and any critical announcements for students and staff.
            </p>
            <p class="text-gray-700 mb-4">
                Notices are posted by authorized personnel such as administrators and teachers. Make sure to check the Notice Board regularly
                to stay updated with the latest information.
            </p>
            <p class="text-gray-700 mb-4">
                You can view the complete list of notices, see details of each announcement, and download attached documents if available.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/notice-board.png') ?>" alt="Notice Board" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <div id="rules-regulations" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Rules and Regulations</h3>
            <p class="text-gray-700 mb-4">
                This section outlines the rules and regulations applicable to both students and staff. These guidelines ensure
                a disciplined and organized environment within the institution.
            </p>
            <p class="text-gray-700 mb-4">
                Some regulations are common for both students and staff, while others differ based on roles. For example:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-1">
                <li><strong>For Students:</strong> Attendance policies, dress code, exam conduct, and code of behavior.</li>
                <li><strong>For Staff:</strong> Work hours, leave policies, professional conduct, and classroom management.</li>
                <li><strong>Common Rules:</strong> Maintaining discipline, respecting institutional property, and following safety protocols.</li>
            </ul>
            <p class="text-gray-700 mb-4">
                Rules may be updated periodically, and it is essential to review them to ensure compliance. Any violations
                can result in disciplinary action as specified by the institution's policies.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/rules-regulations.png') ?>" alt="Rules and Regulations" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <div id="events" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Events</h3>
            <p class="text-gray-700 mb-4">
                This section displays all upcoming, ongoing, and past events in a calendar format. Events can include school functions,
                academic activities, celebrations, and important announcements.
            </p>
            <p class="text-gray-700 mb-4">
                Events are color-coded to differentiate between types (e.g., academic, cultural, public). Click on an event to view more details
                such as event description, date, time, and location.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/events-calendar.png') ?>" alt="Events Calendar" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <div id="todo-list" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">To-Do List</h3>
            <p class="text-gray-700 mb-4">
                The to-do list helps students and staff organize tasks and activities efficiently. You can add, update, or mark tasks as completed.
                This feature ensures you never miss important deadlines or activities.
            </p>
            <p class="text-gray-700 mb-4">
                Typical tasks may include homework submissions, exam preparations, meeting schedules, or project deadlines. The list can be
                filtered by due date or priority.
            </p>

            <!-- Images Side by Side -->
            <div class="flex justify-center gap-6 mb-4">
                <img src="<?= base_url('public/images/UserManual/students/todo-list-view.png') ?>"
                    alt="To-Do List View"
                    class="rounded-xl shadow-lg max-w-sm object-contain">
            </div>
            <div class="flex justify-center gap-6 mb-4">
                <img src="<?= base_url('public/images/UserManual/students/todo-add-task.png') ?>"
                    alt="To-Do List View"
                    class="rounded-xl shadow-lg max-w-sm object-contain">

            </div>

            <p class="text-gray-700 mb-4">
                To add a new task, simply click the "Add Task" button, enter the task details such as name, due date, priority, and description.
                You can then click on "Save" to add it to your to-do list. Tasks can be edited or marked as complete once added.
            </p>
            <p class="text-gray-700 mb-4">
                Each task also has options to edit or delete. Simply click on a task to modify or remove it, and mark the task as complete once finished.
            </p>
        </div>

        <div id="holiday-lists" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Holiday Lists</h3>
            <p class="text-gray-700 mb-4">
                View the holiday calendar for the entire academic year. The list is organized month-wise, showing all holidays including public,
                national, and school-specific holidays. Each holiday entry includes the holiday name and date.
            </p>
            <p class="text-gray-700 mb-4">
                You can switch between months to see upcoming holidays or view holidays for a specific time period. This helps students and staff
                plan their activities around scheduled breaks.
            </p>

            <div class="flex justify-center gap-6 mb-4" >
                <img src="<?= base_url('public/images/UserManual/students/holiday-list-view.png') ?>"
                    alt="Holiday List View"
                    class="rounded-xl shadow-lg max-w-sm object-contain">
            </div>
            <div class="flex justify-center gap-6 mb-4">
                <img src="<?= base_url('public/images/UserManual/students/holiday-detail.png') ?>"
                    alt="Holiday List View"
                    class="rounded-xl shadow-lg max-w-sm object-contain">
            </div>
        </div>
    </div>
</section>