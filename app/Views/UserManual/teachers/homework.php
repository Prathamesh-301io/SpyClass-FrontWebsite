<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/teachers') ?>" 
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Teacher Manual
            </a>
        </div>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Homework Module</h2>

        <!-- Homework List -->
        <div id="homework-list" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Homework List</h3>
            <p class="text-gray-700 mb-4">
                The Homework List section displays all homework assignments given to students. 
                Each entry includes details such as Class, Section, Subject, Group Subject, Homework Date, Submission Date, Evaluation Date, and Created By. 
                Teachers can view, edit, or delete any homework from this list. 
                Additionally, there are filtering options available to sort homework based on Class, Section, Subject Group, and Subjects, 
                helping teachers quickly find relevant assignments.
                This organized view ensures that teachers can efficiently manage homework records and updates.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/homework-list.png') ?>" 
                 alt="Homework List" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Add Homework -->
        <div id="add-homework" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Homework</h3>
            <p class="text-gray-700 mb-4">
                Teachers can create new homework assignments using the Add Homework form. 
                The form includes fields such as Class, Section, Subject Group, Subject, Homework Date, Submission Date, and an option to attach documents. 
                Teachers can also provide a detailed description of the homework to give students a clear understanding of the task. 
                This streamlined process ensures that all necessary information is recorded, making it easier for students to access their assignments.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/add-homework.png') ?>" 
                 alt="Add Homework" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Evaluate Homework -->
        <div id="evaluate-homework" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Evaluate Homework</h3>
            <p class="text-gray-700 mb-4">
                The Evaluate Homework section allows teachers to assess submitted homework from students. 
                Teachers can see a list of students in the specified class who have submitted their homework. 
                They can mark the submissions as evaluated and provide feedback if necessary. 
                The list also shows whether a particular submission has already been evaluated along with the evaluation date. 
                This feature helps teachers efficiently manage grading and ensure that all homework submissions are reviewed.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/evaluate-homework.png') ?>" 
                 alt="Evaluate Homework" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>
