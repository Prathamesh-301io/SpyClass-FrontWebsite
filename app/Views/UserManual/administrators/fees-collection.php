<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/administrators') ?>" class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Administrator Manual
            </a>
        </div>

        <!-- Collect Fees -->
          <div id="collect-fees" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Collect Fees</h3>
            <p class="text-gray-700 mb-4">
                The Collect Fees module allows administrators to efficiently manage and record fee payments for students. 
                Administrators can search students by class and section to view the list of students. 
                Clicking on "Collect Fees" opens the student's fee section, where the fee structure is displayed based on the assigned fee group. 
                The form includes fields for the payment date, amount, discounts, fines, and payment mode (Cash, Cheque, DD, Bank Transfer, UPI, Card). 
                Fees rollback or revert options are available for correcting any mistakes, and receipt printing is supported.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/students-list.png') ?>" alt="Students List" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto mb-6">
            <img src="<?= base_url('public/images/UserManual/administrators/collect-fees.png') ?>" alt="Collect Fees" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            <img src="<?= base_url('public/images/UserManual/administrators/add-fees.png') ?>" alt="Collect Fees" class=" mt-2 rounded-xl shadow-lg w-full max-w-3xl mx-auto"
                style="height: 400px; object-fit: contain;">
        </div>

        <!-- Search Fees Payment -->
        <div id="search-fees-payment" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Search Fees Payment</h3>
            <p class="text-gray-700 mb-4">
                The Search Fees Payment feature helps administrators find specific payment records using a unique payment ID. 
                This streamlined search process enables quick access to payment details for verification or record-keeping. 
                Administrators can view, print, or revert payments if needed, ensuring accurate fee management.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/search-fees-payment.png') ?>" alt="Search Fees Payment" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Search Due Fees -->
        <!-- <div id="search-due-fees" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Search Due Fees</h3>
            <p class="text-gray-700 mb-4">
                The Search Due Fees module assists in identifying students who have outstanding fee payments. 
                Administrators can filter by fee group, class, and section to generate a list of students with unpaid fees. 
                This feature is useful for issuing reminders and managing fee collections efficiently.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/search-due-fees.png') ?>" alt="Search Due Fees" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div> -->

        <!-- Fees Reminder -->
        <div id="fees-reminder" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Fees Reminder</h3>
            <p class="text-gray-700 mb-4">
                The Fees Reminder feature enables administrators to send reminders to students regarding upcoming or overdue payments. 
                Reminders can be scheduled before and after the due date to ensure prompt fee submission. 
                This feature helps maintain consistent fee collection and minimizes payment delays.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/fees-reminder.png') ?>" alt="Fees Reminder" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Fees Carry Forward -->
        <div id="fees-carry-forward" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Fees Carry Forward</h3>
            <p class="text-gray-700 mb-4">
                The Fees Carry Forward module allows administrators to transfer any outstanding or advance fee amounts from one academic year to the next. 
                This ensures that any unpaid or excess fees from the previous year are seamlessly adjusted in the new session. 
                This feature helps in maintaining a continuous and transparent fee management process.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/fees-carry-forward.png') ?>" alt="Fees Carry Forward" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Fees Discount -->
        <div id="fees-discount" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Fees Discount</h3>
            <p class="text-gray-700 mb-4">
                The Fees Discount feature allows administrators to create and manage different types of discounts applicable to students. 
                These discounts can be based on various criteria like merit, sibling concession, or financial aid. 
                The defined discount types can be applied while generating the fee master or during fee collection.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/fees-discount.png') ?>" alt="Fees Discount" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Fees Type List -->
        <div id="fees-type-list" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Fees Type List</h3>
            <p class="text-gray-700 mb-4">
                The Fees Type List categorizes fees into various heads, such as Tuition Fees, Scholarship Fees, Exam Fees, and more. 
                Administrators can manage these types to ensure clarity while setting up the fee structure. 
                Defining accurate fee types helps streamline fee collection and reporting.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/fees-type-list.png') ?>" alt="Fees Type List" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Fees Group -->
        <div id="fees-group" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Fees Group</h3>
            <p class="text-gray-700 mb-4">
                The Fees Group module allows administrators to group multiple fee types under a single category, such as 10th Fees or 11th Fees. 
                Grouping fees helps in efficiently managing the collection process for different classes or academic levels.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/fees-group.png') ?>" alt="Fees Group" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Fees Master -->
        <div id="fees-master" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Fees Master</h3>
            <p class="text-gray-700 mb-4">
                The Fees Master module allows administrators to create comprehensive fee structures by combining fee types and groups. 
                This consolidated fee plan can be applied to various classes or academic sessions, making fee management more streamlined and consistent.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/fees-master.png') ?>" alt="Fees Master" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>