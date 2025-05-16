<style>
    html {
        scroll-behavior: smooth;
    }

    .attendance-legend span {
        display: inline-block;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        margin-right: 8px;
    }

    .attendance-present {
        background-color: #34D399;
    }

    /* Green */
    .attendance-absent {
        background-color: #EF4444;
    }

    /* Red */
    .attendance-late {
        background-color: #FBBF24;
    }

    /* Yellow */
    .attendance-halfday {
        background-color: #FB923C;
    }

    /* Orange */
    .attendance-holiday {
        background-color: #9CA3AF;
    }

    /* Gray */
</style>

<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/students') ?>"
                class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Student Manual
            </a>
        </div>

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Attendance Information Overview</h2>

        <!-- Attendance Calendar -->
        <div id="attendance-calendar" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Attendance Calendar</h3>
            <p class="text-gray-700 mb-4">
                The attendance calendar visually represents your attendance records with color-coded blocks for each date.
                Easily identify your presence, absence, late marks, half-days, and holidays.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/attendance-calendar.png') ?>" alt="Attendance Calendar" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Attendance Legend -->
        <div id="attendance-legend" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Attendance Legend</h3>
            <p class="text-gray-700 mb-4">
                The colors in the calendar indicate your attendance status:
            </p>
            <div class="attendance-legend text-gray-700 mb-4">
                <p><span class="attendance-present"></span> Present (Green)</p>
                <p><span class="attendance-absent"></span> Absent (Red)</p>
                <p><span class="attendance-late"></span> Late (Yellow)</p>
                <p><span class="attendance-halfday"></span> Half Day (Orange)</p>
                <p><span class="attendance-holiday"></span> Holiday (Gray)</p>
            </div>
        </div>

        <div id="apply-leaves" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Apply Leaves</h3>
            <p class="text-gray-700 mb-4">
                The Apply Leaves section allows you to manage your leave applications. You can view the list of applied leaves, including their status (Pending, Approved, Rejected), and also apply for new leaves.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="text-center">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Applied Leaves List</h4>
                    <p class="text-gray-600 mb-2">
                        View and manage your previously applied leaves. You can edit or delete leaves that are still pending approval.
                    </p>
                    <img src="<?= base_url('public/images/UserManual/students/applied-leaves-list.png') ?>"
                        alt="Applied Leaves List" class="rounded-xl shadow-lg w-full max-w-md mx-auto">
                </div>
                <div class="text-center">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Add Leave</h4>
                    <p class="text-gray-600 mb-2">
                        Apply for a new leave by providing the date range, reason, and optionally attaching relevant documents.
                    </p>
                    <img src="<?= base_url('public/images/UserManual/students/add-leave.png') ?>"
                        alt="Add Leave Form" class="rounded-xl shadow-lg w-full max-w-md mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>