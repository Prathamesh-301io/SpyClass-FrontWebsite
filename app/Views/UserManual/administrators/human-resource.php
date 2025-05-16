<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/teachers') ?>" class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Teacher Manual
            </a>
        </div>
        <!-- Staff Directory -->
        <div id="staff-directory" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Staff Directory</h3>
            <p class="text-gray-700 mb-4">
                The Staff Directory module displays all staff members in both card view and list view.
                Each staff profile shows essential details such as name, designation, staff ID, and a rating (stars) based on performance or seniority.
                The card view offers a visually appealing way to browse staff members, while the list view provides a compact, easy-to-read format.
                Users can also filter staff by their roles, such as teachers, administrators, or support staff, to quickly find relevant personnel.
                This module helps in maintaining a well-organized staff database and supports quick access to staff profiles.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/staff-directory.png') ?>" alt="Staff Directory" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Apply Leave -->
        <div id="apply-leave" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Apply Leave</h3>
            <p class="text-gray-700 mb-4">
                The Apply Leave module enables staff to view and manage their leave applications efficiently.
                The leave list displays crucial information such as staff name, leave type, leave date, number of days, application date, status, and available actions.
                The status column shows whether the leave is pending, approved, or disapproved, helping staff track their applications.
                Additionally, a view button is available to display a detailed leave application, allowing the staff to verify the leave history.
                This streamlined interface ensures that all leave-related information is easily accessible and manageable.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/leave-list.png') ?>" alt="Leave List" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">

            <p class="text-gray-700 mt-4 mb-4">
                Upon clicking the view button, detailed information regarding the leave application is displayed.
                This includes all the relevant fields such as leave type, applied dates, duration, status, and any attached documents.
                This feature allows staff and approvers to carefully review the leave request before taking any action.
                The detailed view aids in maintaining a transparent leave management process and helps in accurate record-keeping.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/view-leave.png') ?>" alt="View Leave" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Apply Leave Form -->
        <div id="leave-application-form" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Apply Leave Form</h3>
            <p class="text-gray-700 mb-4">
                The Apply Leave Form allows staff members to submit a leave application with all necessary details.
                The form requires the staff to fill out fields such as Add Details, Apply Date, Available Leave, Leave From Date, Leave To Date, Reason, and Attach Document.
                Once submitted, the application is sent to the designated authority for approval.
                The system also validates mandatory fields like available leave and leave dates to ensure accurate submissions.
                Staff can attach supporting documents for verification if required.
                This form simplifies the leave application process, making it straightforward and efficient.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/leave-form.png') ?>" alt="Leave Form" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            <p class="text-gray-700 mt-4">
                After submission, the leave request is reviewed by the concerned authority, who can approve, disapprove, or keep the application pending.
                Staff members are notified of the decision via the system dashboard or notifications.
            </p>
        </div>

    </div>
</section>