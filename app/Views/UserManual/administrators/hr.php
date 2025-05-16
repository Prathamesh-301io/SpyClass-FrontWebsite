<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/administrators') ?>"
                class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Administrator Manual
            </a>
        </div>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Human Resource Module</h2>

        <!-- Staff Directory -->
        <div id="staff-directory" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Staff Directory</h3>
            <p class="text-gray-700 mb-4">
                The Staff Directory section provides administrators with a comprehensive list of all staff members registered in the system.
                It includes essential details like staff name, role, department, contact number, email, and status.
                Administrators can view staff profiles, edit details, and manage employment information from this section.
                Having an organized directory helps in managing human resources effectively and ensuring easy access to staff data when needed.
                The list can be filtered based on roles or departments for better navigation and quick access.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/staff-directory.png') ?>"
                alt="Staff Directory" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Staff Profile -->
        <div id="staff-profile" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Staff Profile</h3>
            <p class="text-gray-700 mb-4">
                The Staff Profile page shows complete staff details, including personal info, attendance, payroll, leaves, and more.
                Administrators can update profiles and manage records efficiently.
            </p>

            <!-- Staff Profile Image -->
            <img src="<?= base_url('public/images/UserManual/administrators/staff-profile.png') ?>"
                alt="Staff Profile" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            <p class="text-gray-600 text-sm mt-2">Staff profile details including personal and employment information.</p>

            <!-- Payroll Details Image -->
            <img src="<?= base_url('public/images/UserManual/administrators/staff-payroll.png') ?>"
                alt="Payroll Details" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto mt-4">
            <p class="text-gray-600 text-sm mt-2">Payroll details with salary structure and allowances.</p>

            <!-- Leave Details Image -->
            <img src="<?= base_url('public/images/UserManual/administrators/staff-leaves.png') ?>"
                alt="Leave Details" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto mt-4">
            <p class="text-gray-600 text-sm mt-2">Leave records showing approved, pending, and rejected requests.</p>

            <!-- Attendance Details Image -->
            <img src="<?= base_url('public/images/UserManual/administrators/staff-attendance.png') ?>"
                alt="Attendance Details" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto mt-4">
            <p class="text-gray-600 text-sm mt-2">Attendance records highlighting present and absent days.</p>

            <!-- Timeline Image -->
            <img src="<?= base_url('public/images/UserManual/administrators/staff-timeline.png') ?>"
                alt="Timeline" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto mt-4">
            <p class="text-gray-600 text-sm mt-2">Timeline showing key updates and changes in the staff profile.</p>
        </div>


        <!-- Add Staff -->
        <div id="add-staff" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Staff</h3>
            <p class="text-gray-700 mb-4">
                Administrators can add new staff members using the Add Staff form. The form includes fields like Name,
                Role, Department, Contact Information, Joining Date, and more. Adding staff through this feature ensures
                that all required information is captured accurately. The system will automatically generate a unique ID for each new staff member.
                Proper entry of staff details facilitates smooth payroll processing, attendance management, and efficient human resource tracking.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/add-staff.png') ?>"
                alt="Add Staff" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Staff Attendance -->
        <div id="staff-attendance" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Staff Attendance</h3>
            <p class="text-gray-700 mb-4">
                The Staff Attendance section allows administrators to mark attendance manually.
                Administrators can filter attendance records by staff roles and date. After selecting the desired filters,
                they can mark staff members as Present, Absent, or on Leave. This feature helps maintain accurate attendance records
                and ensures that payroll calculations are based on correct data.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/staff-attendance-1.png') ?>"
                alt="Staff Attendance" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Payroll Management -->
        <div id="payroll" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Payroll Management</h3>
            <p class="text-gray-700 mb-4">
                The Payroll section helps administrators generate payrolls by filtering based on staff roles, month, and year.
                Administrators can view salary slips, download, or print them directly from the system.
                Generating payroll in a streamlined manner ensures accuracy and helps maintain financial transparency.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/payroll.png') ?>"
                alt="Payroll Management" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Approve Leave Requests -->
        <div id="leave-requests" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Approve Leave Requests</h3>
            <p class="text-gray-700 mb-4">
                Administrators can view, approve, or reject leave requests made by staff. The request list shows the
                status of each leave (Pending, Approved, or Disapproved) along with the reason provided.
                Admins can update the status and add comments when necessary, ensuring transparent leave management.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/leave-requests.png') ?>"
                alt="Leave Requests" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Teachers Rating -->
        <div id="teachers-rating" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Teachers Rating</h3>
            <p class="text-gray-700 mb-4">
                The Teachers Rating section allows administrators to view the ratings given to teachers by students.
                Each rating is displayed with the teacher’s name, student’s name, rating score (out of 5), and any additional comments.
                Administrators can review, approve, or delete ratings as necessary.
                Only approved ratings will be reflected in the system and made visible to others.
                This feature helps in maintaining a transparent feedback system while ensuring that inappropriate or inaccurate ratings are filtered out.
                The admin can also generate reports based on teacher ratings to analyze performance trends over time.
                Approving ratings ensures that only relevant and verified feedback is considered in evaluations.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/teachers-rating.png') ?>"
                alt="Teachers Rating" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

    </div>
</section>