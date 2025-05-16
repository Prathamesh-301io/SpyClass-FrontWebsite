<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/administrators') ?>"
                class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Administrator Manual
            </a>
        </div>

        <!-- Add Income -->
        <div id="add-income" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Income</h3>
            <p class="text-gray-700 mb-4">
                The Add Income form enables administrators to accurately record various income entries.
                Input fields include Income Head (such as Tuition Fees, Bus Fees, Property Taxes), Name, Invoice Number, Date, and Amount.
                Users can attach supporting documents like invoices or receipts for verification.
                A description field allows additional context for each income record, ensuring detailed and transparent financial management.
                This module streamlines the process of income entry, helping maintain clear and organized records for auditing and reporting.

                The Income List displays all recorded income entries in a comprehensive table.
                Administrators can view, download attached documents, and perform edit or delete actions on each entry.
                This functionality ensures that income data is easily accessible and manageable.
                The interface allows quick verification and updates, keeping financial records up to date and accurate.
                It facilitates efficient monitoring and control over all income sources for the institution.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/add-income-list.png') ?>" alt="Income List"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Search Income -->
        <div id="search-income" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Search Income</h3>
            <p class="text-gray-700 mb-4">
                The Search Income feature offers multiple time-based filters for locating income records quickly.
                Administrators can select options like Today, This Week, Last Week, This Month, Last Month, Last 3 Months, Last 6 Months, Last 12 Months, This Year, Last Year, or specify a custom Period.
                After choosing the filter, the system displays matching income entries in a list format.
                This powerful search functionality helps in easy auditing, generating reports, or reviewing specific income transactions within desired timeframes.
                The customizable period option provides great flexibility for detailed financial analysis.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/search-income.png') ?>" alt="Search Income"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Income Head -->
        <div id="income-head" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Income Head</h3>
            <p class="text-gray-700 mb-4">
                The Income Head module allows administrators to create and manage categories for various income sources.
                Examples include Tuition Fees, Bus Charges, Property Taxes, Donations, and more.
                Each Income Head includes a name and a description for clarity.
                Categorizing income in this way improves financial organization and makes reporting more meaningful.
                Administrators can easily add, edit, or delete income heads as the institution’s income sources evolve, ensuring ongoing flexibility and control.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/income-head.png') ?>" alt="Income Head"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

    </div>
</section>