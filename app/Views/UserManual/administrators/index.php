<section class="py-12 bg-white">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/') ?>"
                class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back
            </a>
        </div>

        <div class="text-center mb-10">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800">Administrators User Manual</h2>
            <p class="mt-2 text-gray-600">Explore features available to administrators with guides for each module.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div id="front-office-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/administrators/front-office') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Front Office</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/administrators/front-office#setup-front-office') ?>"
                            class="hover:text-purple-600 hover:underline transition">Setup Front Office</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/front-office#admission-enquiry') ?>"
                            class="hover:text-purple-600 hover:underline transition">Admission Enquiry</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/front-office#visitor-book') ?>"
                            class="hover:text-purple-600 hover:underline transition">Visitor Book</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/front-office#phone-call-log') ?>"
                            class="hover:text-purple-600 hover:underline transition">Phone Call Log</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/front-office') ?>"
                            class="hover:text-purple-600 hover:underline transition">& more (2)</a>
                    </li>
                </ul>
            </div>

            <div id="fees-collection-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/administrators/fees-collection') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Fees Collection</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/administrators/fees-collection#collect-fees') ?>"
                            class="hover:text-purple-600 hover:underline transition">Collect Fees</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/fees-collection#search-fees-payment') ?>"
                            class="hover:text-purple-600 hover:underline transition">Search Fees Payment</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/fees-collection#search-due-fees') ?>"
                            class="hover:text-purple-600 hover:underline transition">Search Due Fees</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/fees-collection#fees-reminder') ?>"
                            class="hover:text-purple-600 hover:underline transition">Fees Reminder</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/fees-collection') ?>"
                            class="hover:text-purple-600 hover:underline transition">& more (5)</a>
                    </li>
                </ul>
            </div>

            <div id="income-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/administrators/income') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Income</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/administrators/income#add-income') ?>"
                            class="hover:text-purple-600 hover:underline transition">Add Income</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/income#income-list') ?>"
                            class="hover:text-purple-600 hover:underline transition">Income List</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/income#search-income') ?>"
                            class="hover:text-purple-600 hover:underline transition">Search Income</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/income#income-head') ?>"
                            class="hover:text-purple-600 hover:underline transition">Income Head</a>
                    </li>

                </ul>
            </div>

            <div id="expense-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/administrators/expense') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Expense</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/administrators/expense#add-expense') ?>"
                            class="hover:text-purple-600 hover:underline transition">Add Expense</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/expense#expense-list') ?>"
                            class="hover:text-purple-600 hover:underline transition">Expense List</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/expense#search-expense') ?>"
                            class="hover:text-purple-600 hover:underline transition">Search Expense</a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/expense#expense-head') ?>"
                            class="hover:text-purple-600 hover:underline transition">Expense Head</a>
                    </li>
                </ul>
            </div>

            <div id="teachers-attendance" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/administrators/attendance') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Attendance Management</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/administrators/attendance#students-attendance') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Students Attendance
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/attendance#attendance-by-date') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Attendance By Date
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/attendance#approve-leave') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Approve Leave
                        </a>
                    </li>
                </ul>
            </div>

            <div id="system-settings-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/administrators/system-settings') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">System Settings</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/administrators/system-settings#general-settings') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            General Settings
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/system-settings#session-settings') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Session Settings
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/system-settings#notification-settings') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Notification Settings
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/system-settings#print-header-footer') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Print Header & Footer
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/system-settings') ?>"
                            class="hover:text-purple-600 hover:underline transition">& more (3)</a>
                        </a>
                    </li>
                </ul>
            </div>

            <div id="certificate-idcard-management" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/administrators/certificate-idcard-management') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Certificate & ID Card Management</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/administrators/certificate-idcard-management#student-certificate') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Student Certificate
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/certificate-idcard-management#generate-certificate') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Generate Certificate
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/certificate-idcard-management#student-id-card') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Student ID Card
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/certificate-idcard-management#generate-id-card') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Generate ID Card
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/certificate-idcard-management') ?>"
                            class="hover:text-purple-600 hover:underline transition">& more (2)</a>
                    </li>
                </ul>
            </div>

            <div id="inventory-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/administrators/inventory') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Inventory</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/administrators/inventory#issue-item') ?>" class="hover:text-purple-600 hover:underline transition">
                            Issue Item
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/inventory#item-supplier') ?>" class="hover:text-purple-600 hover:underline transition">
                            Item Supplier
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/inventory#item-store') ?>" class="hover:text-purple-600 hover:underline transition">
                            Item Store
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/inventory#item-category') ?>" class="hover:text-purple-600 hover:underline transition">
                            Item Category
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/inventory') ?>"
                            class="hover:text-purple-600 hover:underline transition">& more (2)</a>
                    </li>
                </ul>
            </div>

            <div id="library-menu" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/administrators/library') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Library</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li>
                        <a href="<?= base_url('usermanual/administrators/library#book-list') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Book List
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/library#add-book') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Add Book
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/library#issue-return') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Issue/Return
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/library#add-students') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            Add Students as Members
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/library') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                            & more (1)</a>
                    </li>
                </ul>
            </div>

            <div id="hr-management" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all hover:bg-purple-50 mb-6">
                <a href="<?= base_url('usermanual/administrators/hr') ?>">
                    <h3 class="text-xl font-semibold text-purple-700 mb-4">Human Resource Management</h3>
                </a>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2">
                    <li><a href="<?= base_url('usermanual/administrators/hr#staff-directory') ?>" class="hover:text-purple-600 hover:underline transition">Staff Directory</a></li>
                    <li><a href="<?= base_url('usermanual/administrators/hr#payroll') ?>" class="hover:text-purple-600 hover:underline transition">Payroll Management</a></li>
                    <li><a href="<?= base_url('usermanual/administrators/hr#staff-attendance') ?>" class="hover:text-purple-600 hover:underline transition">Staff Attendance</a></li>
                    <li><a href="<?= base_url('usermanual/administrators/hr#leave-requests') ?>" class="hover:text-purple-600 hover:underline transition">Approve Leave Requests</a></li>
                    <li>
                        <a href="<?= base_url('usermanual/administrators/hr') ?>"
                            class="hover:text-purple-600 hover:underline transition">
                             & more (1)</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>