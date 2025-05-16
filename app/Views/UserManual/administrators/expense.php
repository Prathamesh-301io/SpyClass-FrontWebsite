<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/administrators') ?>"
                class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Administrator Manual
            </a>
        </div>

        <!-- Add Expense -->
        <div id="add-expense" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Expense</h3>
            <p class="text-gray-700 mb-4">
                The Add Expense form allows administrators to record all types of expenses efficiently. 
                The form includes fields such as Expense Head (examples: Office Supplies, Utilities, Maintenance), Name, Invoice Number, Date, and Amount. 
                Users can attach relevant documents like bills or receipts for reference and auditing purposes. 
                A description field is provided to add extra details for clarity and tracking. 
                This module ensures organized and transparent recording of expenses, which aids in budget management and financial reporting. 
                Accurate expense entries help maintain the institution’s financial health and accountability.
            <br>
                The Expense List presents all recorded expense entries in an easy-to-navigate table format. 
                Administrators have options to view details, download attached documents, edit entries, or delete them when necessary. 
                This feature makes managing and reviewing expenses straightforward and efficient. 
                It provides quick access to expense information, helping in timely updates and accurate financial control. 
                Keeping an organized expense list supports overall institutional budget management and audit readiness.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/expense-list.png') ?>" alt="Expense List"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Search Expense -->
        <div id="search-expense" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Search Expense</h3>
            <p class="text-gray-700 mb-4">
                The Search Expense feature offers various predefined time filters like Today, This Week, Last Week, This Month, Last Month, and more. 
                Administrators can select any option to quickly find specific expense records. 
                For more precision, a custom Period filter lets users specify exact date ranges. 
                The filtered results are displayed in a clear list format for easy review. 
                This search functionality streamlines auditing and reporting by making expense data retrieval fast and flexible.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/search-expense.png') ?>" alt="Search Expense"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Expense Head -->
        <div id="expense-head" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Expense Head</h3>
            <p class="text-gray-700 mb-4">
                The Expense Head module enables administrators to define and manage expense categories such as Rent, Salaries, Office Supplies, and Maintenance. 
                Each expense head has a name and a detailed description for better understanding. 
                Proper categorization of expenses simplifies financial reporting and budgeting processes. 
                Administrators can add, edit, or delete expense heads to reflect changing financial requirements. 
                This flexibility helps maintain organized and meaningful expense records that aid in decision-making and control.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/expense-head.png') ?>" alt="Expense Head"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

    </div>
</section>
