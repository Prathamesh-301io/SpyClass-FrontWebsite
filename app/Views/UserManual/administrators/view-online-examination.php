<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/teachers') ?>" 
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Teacher Manual
            </a>
        </div>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Online Examination Overview</h2>

        <!-- Exam List -->
        <div id="exam-list" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Online Exam List</h3>
            <p class="text-gray-700 mb-4">View the list of all online exams. You can add students, edit exam details, add questions, evaluate responses, or delete exams as needed.</p>
            <img src="<?= base_url('public/images/UserManual/teachers/online-exam-list.png') ?>" alt="Add Exam" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Add Exam -->
        <div id="add-exam" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Exam</h3>
            <p class="text-gray-700 mb-4">Add new exams with details like title, duration, passing percentage, and more. Options include enabling auto result publishing, random question order, and enabling/disabling negative marking.</p>
            <img src="<?= base_url('public/images/UserManual/teachers/add-online-exam.png') ?>" alt="Add Exam" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Assign Students -->
        <div id="assign-students" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Assign Students</h3>
            <p class="text-gray-700 mb-4">Assign students, classes, and sections to the created online exam. You can filter students by class, section, or keywords.</p>
            <img src="<?= base_url('public/images/UserManual/teachers/assign-students.png') ?>" alt="Assign Students" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Add Question -->
        <div id="add-question" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Question to Exam</h3>
            <p class="text-gray-700 mb-4">Select questions from the question bank or create new questions. You can filter by subject, question type, difficulty level, class, and section.</p>
            <img src="<?= base_url('public/images/UserManual/teachers/add-question.png') ?>" alt="Add Question" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Evaluate Exam -->
        <div id="evaluate-exam" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Evaluate Exam</h3>
            <p class="text-gray-700 mb-4">Manually evaluate descriptive questions submitted by students. You can update scores and provide feedback.</p>
            <img src="<?= base_url('public/images/UserManual/teachers/evaluate-online-exam.png') ?>" alt="Evaluate Exam" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Question Bank -->
        <div id="question-bank" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Question Bank</h3>
            <p class="text-gray-700 mb-4">Manage questions efficiently by adding, editing, or deleting questions. You can also import questions from an Excel sheet for bulk upload.</p>
        </div>
    </div>
</section>
