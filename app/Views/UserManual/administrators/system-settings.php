<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
         <a href="<?= base_url('usermanual/administrators') ?>" 
                class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Administrators Manual
            </a>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">System Settings</h2>

        <!-- General Settings -->
        <div id="general-settings" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">1. General Settings</h3>
            <p class="text-gray-700 mb-4">
                The General Settings section allows administrators to configure the basic information and branding of the school.
                It includes settings for the school name, contact details, session configuration, attendance preferences, language settings,
                and integration options like biometric devices and Zoom API. Filling these fields correctly ensures smooth operation
                and accurate data display across the system.
            </p>
            <p class="text-gray-700 mb-4">
                Key Fields:
            <ul class="list-disc list-inside pl-5">
                <li><strong>School Name, School Code, Address:</strong> Used for official documents and system branding.</li>
                <li><strong>Attendance Type:</strong> Choose between Day Wise, Period Wise, or Biometric Attendance.</li>
                <li><strong>Language and Date Settings:</strong> Set default language, date format, and timezone for the system.</li>
                <li><strong>Admission & Staff ID Settings:</strong> Customize the auto-generation of admission and staff numbers.</li>
                <li><strong>Online Exam Settings:</strong> Manage visibility of questions and answers during online exams.</li>
                <li><strong>Miscellaneous Settings:</strong> Includes invoice duplication, teacher restricted mode, and mobile app integration.</li>
                <li><strong>Zoom API Integration:</strong> Configure Zoom settings to manage online classes.</li>
            </ul>
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/general-settings.png') ?>"
                alt="General Settings"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Session Settings -->
        <div id="session-settings" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">2. Session Settings</h3>
            <p class="text-gray-700 mb-4">
                Session Settings define the academic year (like 2024-2025) for the school. Accurate session configuration is essential
                as it affects the management of student data, including exams, academics, syllabus, class, and section-related information.
                Changing the session will update how data is organized throughout the system.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/session-settings.png') ?>"
                alt="Session Settings"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Notification Settings -->
        <div id="notification-settings" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">3. Notification Settings</h3>
            <p class="text-gray-700 mb-4">
                Administrators can manage how notifications are sent to students, parents, and staff.
                Notifications can be sent through Email, SMS, or the Mobile App.
                Custom message templates can be created for categories like Student Admission, Exam Results, Fee Submission, and Attendance.
            </p>
            <p class="text-gray-700 mb-4">
                Available Notification Types:
            <ul class="list-disc list-inside pl-5">
                <li>Student Admission</li>
                <li>Exam Result</li>
                <li>Fee Submission</li>
                <li>Absent Attendance</li>
                <li>Login Credential</li>
                <li>Forgot Password</li>
            </ul>
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/notification-settings.png') ?>"
                alt="Notification Settings"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Print Header & Footer -->
        <div id="print-header-footer" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">4. Print Header & Footer</h3>
            <p class="text-gray-700 mb-4">
                Configure custom headers and footers for printed documents such as fee receipts and payslips.
                You can add branding elements, addresses, and contact details as needed.
            </p>
            <div class="grid grid-cols-1 gap-4">
                <img src="<?= base_url('public/images/UserManual/administrators/print-header.png') ?>"
                    alt="Print Header"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
                <img src="<?= base_url('public/images/UserManual/administrators/print-footer.png') ?>"
                    alt="Print Footer"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            </div>
        </div>

        <!-- Roles Permission -->
        <div id="roles-permission" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">5. Roles Permission</h3>
            <p class="text-gray-700 mb-4">
                Manage user roles and permissions efficiently. Assign specific permissions to roles like Admin, Teacher, Accountant, and more.
                Over 150 modules can be accessed or restricted based on the role configuration.
            </p>
            <div class="grid grid-cols-1 gap-4">
                <img src="<?= base_url('public/images/UserManual/administrators/add-role.png') ?>"
                    alt="Adding Role"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
                <img src="<?= base_url('public/images/UserManual/administrators/assign-permission.png') ?>"
                    alt="Assigning Permission"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            </div>
        </div>

        <!-- Users -->
        <div id="users" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">6. Users</h3>
            <p class="text-gray-700 mb-4">
                View, manage, and control user accounts including students, parents, and staff.
                Administrators can activate or deactivate users to control their access.
                Additional features include viewing admission numbers, class details, and contact information.
            </p>
            <div class="grid grid-cols-1 gap-4">
                <p class="text-gray-700 mb-4 font-bold">
                    Students List
                </p>
                <img src="<?= base_url('public/images/UserManual/administrators/users-student.png') ?>"
                    alt="Students List"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
                     <p class="text-gray-700 mb-4 font-bold">
                    Parents List
                </p>
                <img src="<?= base_url('public/images/UserManual/administrators/users-parent.png') ?>"
                    alt="Parents List"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
                     <p class="text-gray-700 mb-4 font-bold">
                    Staff List
                </p>
                <img src="<?= base_url('public/images/UserManual/administrators/users-staff.png') ?>"
                    alt="Staff List"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            </div>
        </div>
    </div>
</section>