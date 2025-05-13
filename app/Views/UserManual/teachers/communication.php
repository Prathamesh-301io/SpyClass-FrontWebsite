<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <!-- Notice Board -->
          <div class="mb-6">
            <a href="<?= base_url('usermanual/teachers') ?>" class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Teacher Manual
            </a>
        </div>
        <div id="notice-board" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Notice Board</h3>
            <p class="text-gray-700 mb-4">
                The Notice Board section displays important notifications and announcements related to the school.
                Teachers and administrators can view details about upcoming events, school holidays, important circulars,
                and more. Notices are displayed in a visually appealing card format, making it easy to scan through
                the latest updates. Users can also filter notices based on date or category. This helps staff and students
                stay informed about important events and announcements efficiently.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/notice-details.png') ?>" alt="Notice Details" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
        <!-- Add Notice -->
        <div id="add-notice" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Notice</h3>
            <p class="text-gray-700 mb-4">
                Teachers and administrators with permission can compose new notices through this section.
                The form includes fields for entering the notice title, message content, notice date, and
                the date to publish the notice. There is also an option to select the intended recipients,
                including students, parents, staff members, and other stakeholders. Once published, the notice
                becomes visible to the selected audience on the notice board. This streamlined process helps
                ensure timely and organized communication within the school community.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/compose-notice.png') ?>" alt="Compose Notice" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            <p class="text-gray-700 mt-4">
                To compose a new notice, follow these steps:
            </p>
            <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                <li>
                    <strong>Title:</strong> Enter a concise and descriptive title for the notice. This title will appear as the heading
                    when displayed on the notice board.
                </li>
                <li>
                    <strong>Message:</strong> Write the main content of the notice. This message should clearly convey the information
                    or announcement to the intended recipients.
                </li>
                <li>
                    <strong>Notice Date:</strong> Select the date when the notice is created. This helps in organizing and sorting
                    notices chronologically.
                </li>
                <li>
                    <strong>Publish On:</strong> Specify the date when the notice should be published. This feature allows for
                    scheduling notices to appear at a later date.
                </li>
                <li>
                    <strong>Message To:</strong> Choose the recipients who will see the notice. Options include Students, Parents,
                    Admins, Teachers, Accountants, Librarians, Receptionists, and Bus Drivers. Multiple groups can be selected
                    based on the relevance of the notice.
                </li>
            </ul>
            <p class="text-gray-700 mt-4">
                After filling in all the necessary details, click on the "Submit" button to save and publish the notice. The
                notice will be visible to the selected audience on the specified date.
            </p>
        </div>

        <!-- Rules & Regulations -->
        <div id="rules-regulations" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Rules & Regulations</h3>
            <p class="text-gray-700 mb-4">
                This section outlines the school's rules and regulations, providing guidance on conduct and discipline.
                The rules may vary between students and staff, though some guidelines are applicable to both.
                For students, the rules typically cover academic behavior, attendance, and disciplinary measures.
                For staff, regulations may include professional conduct, punctuality, and job responsibilities.
                Ensuring familiarity with these rules promotes a harmonious and respectful school environment.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/rules-regulations.png') ?>" alt="Rules & Regulations" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            <p class="text-gray-700 mt-4">
                Keeping up with the school’s code of conduct helps maintain a disciplined atmosphere and encourages
                responsible behavior among students and staff alike.
            </p>
        </div>
    </div>
</section>