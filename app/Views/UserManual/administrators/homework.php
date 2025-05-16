<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/administrators') ?>" 
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Administrator Manual
            </a>
        </div>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Homework Management Module</h2>

        <!-- Homework List -->
        <div id="homework-list" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Homework List</h3>
            <p class="text-gray-700 mb-4">
                The Homework List section is designed for administrators to oversee all homework assignments 
                created and managed by teachers. This section provides a comprehensive view of all homework details 
                such as Class, Section, Subject, Group Subject, Homework Date, Submission Date, Evaluation Date, and Created By. 
                Administrators can view, update, or remove any homework entry, maintaining a centralized record of assignments. 
                Filtering options allow sorting based on Class, Section, Subject Group, and Subject to efficiently manage the list. 
                This organized structure helps administrators ensure that homework is regularly updated and accurately recorded. 
                Monitoring homework assignments through this module also helps in maintaining academic consistency across the school.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/homework-list.png') ?>" 
                 alt="Homework List" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Add Homework -->
        <div id="add-homework" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Homework</h3>
            <p class="text-gray-700 mb-4">
                The Add Homework section empowers administrators to directly create homework assignments or oversee 
                those added by teachers. The form includes crucial fields such as Class, Section, Subject Group, Subject, 
                Homework Date, Submission Date, and an option to attach relevant documents. Additionally, administrators 
                can enter a clear and concise description of the task, helping students understand the assignment requirements. 
                By adding homework from this section, administrators can directly support teachers or fill in assignments when needed. 
                Ensuring accurate information during homework creation helps maintain a structured academic environment, making 
                it easier for students to access assignments and for teachers to evaluate them later.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/add-homework.png') ?>" 
                 alt="Add Homework" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Evaluate Homework -->
        <div id="evaluate-homework" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Evaluate Homework</h3>
            <p class="text-gray-700 mb-4">
                The Evaluate Homework section allows administrators to monitor how teachers assess and grade homework submissions. 
                This feature provides a list of students within a specific class who have submitted their homework. Administrators can 
                review the status of each submission, including whether it has been evaluated and the feedback provided. 
                This section is crucial for maintaining transparency and consistency in the homework evaluation process. 
                Administrators can also intervene if evaluations are missing or delayed, ensuring that students receive timely feedback. 
                Additionally, this module helps maintain a record of all evaluated assignments, which can be useful for academic reviews 
                or performance tracking.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/evaluate-homework.png') ?>" 
                 alt="Evaluate Homework" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>
