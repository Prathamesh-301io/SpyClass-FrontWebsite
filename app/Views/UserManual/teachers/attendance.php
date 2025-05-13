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
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Attendance Management</h2>

        <!-- Students Attendance -->
        <div id="students-attendance" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Students Attendance</h3>
            <p class="text-gray-700 mb-4">
                Teachers can mark attendance by filtering students based on class and section. If the teacher is the class teacher, the list of students will be shown. 
                The default status for all students is set to "Present" for quick entry. Teachers can mark a student as "Absent", "Late", or "Half Day" if needed.
                If attendance has already been submitted, it will display a message: "Attendance Already Submitted. You Can Edit Record".
            </p>
            <p class="text-gray-700 mb-4">
                Teachers can also mark the entire class as "Holiday" with a single click, saving time when the whole class is absent. 
                After marking attendance, clicking "Save" will store all the entries automatically.
            </p>
            <div class="grid grid-cols-1 gap-4 mt-3">
                <p class="text-gray-700 font-semibold text-center">
                    Attendance Entry Form
                </p>
                <img src="<?= base_url('public/images/UserManual/teachers/attendance-form.png') ?>" 
                     alt="Attendance Form" 
                     class="rounded-xl shadow-lg w-full max-w-lg mx-auto">
            </div>
        </div>

        <!-- Attendance By Date -->
        <div id="attendance-by-date" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Attendance By Date</h3>
            <p class="text-gray-700 mb-4">
                This section allows teachers to view the attendance of students filtered by class, section, and date. The UI displays the status as "Present", "Absent", 
                "Late", or "Half Day" directly, giving a quick overview of student presence on a particular date.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/attendance-by-date.png') ?>" 
                 alt="Attendance By Date" 
                 class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Approve Leave -->
        <div id="approve-leave" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Approve Leave</h3>
            <p class="text-gray-700 mb-4">
                Teachers can approve or reject student leave applications from this section. Only leaves of students assigned to the class teacher will be displayed. 
                The interface shows a list of leave applications with actions like "Approve", "Reject", "Add Note", and "Delete".
            </p>
            <div class="grid grid-cols-1 gap-4 mt-3">
                <p class="text-gray-700 font-semibold text-center">
                    Leave Approval List
                </p>
                <img src="<?= base_url('public/images/UserManual/teachers/leave-approval-list.png') ?>" 
                     alt="Leave Approval List" 
                     class="rounded-xl shadow-lg w-full max-w-lg mx-auto">
                <p class="text-gray-700 font-semibold text-center">
                    Also Add Students Leave Application
                </p>
                <img src="<?= base_url('public/images/UserManual/teachers/add_leave_popup.png') ?>" 
                     alt="Approve Leave Popup" 
                     class="rounded-xl shadow-lg w-full max-w-md mx-auto">
            </div>
        </div>
    </div>
</section>
