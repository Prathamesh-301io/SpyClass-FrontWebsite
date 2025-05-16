<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/teachers') ?>" 
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Teacher Manual
            </a>
        </div>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Reports Module</h2>

        <!-- Student Information -->
        <div id="student-information" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Student Information</h3>
            <p class="text-gray-700 mb-4">
                The Student Information section provides a variety of reports related to student data. 
                Teachers can generate reports like Student Report, Guardian Report, Student History, and more. 
                Each report comes with filter options to narrow down the data, such as by class, section, or academic year. 
                Users can export the generated reports in Excel or PDF format for offline use. 
                This functionality helps teachers keep track of essential student data efficiently.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/student-information.png') ?>" 
                 alt="Student Information" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Attendance -->
        <div id="attendance" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Attendance</h3>
            <p class="text-gray-700 mb-4">
                The Attendance section offers reports like Attendance Report and Student Attendance Type Report. 
                Teachers can view detailed attendance records for each student or class. 
                Filter options allow for customized reporting based on date ranges, class, and attendance types. 
                Reports can be exported as Excel or PDF for record-keeping or analysis.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/attendance.png') ?>" 
                 alt="Attendance Reports" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Examination -->
        <div id="examination" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Examination</h3>
            <p class="text-gray-700 mb-4">
                The Examination module provides Rank Reports to assess students' academic performance. 
                Teachers can view rank-based evaluations for each class and subject. 
                The generated reports can be filtered by class and section and exported as needed.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/examination.png') ?>" 
                 alt="Examination Reports" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Online Examination -->
        <div id="online-examination" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Online Examination</h3>
            <p class="text-gray-700 mb-4">
                This module includes reports related to online exams, such as Result Report, Exams Report, 
                Exams Attempt Report, and Exams Rank Report. Teachers can monitor online exam performance, 
                view attempts made by students, and analyze ranking data. 
                The reports are filterable and can be exported in various formats.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/online-examination.png') ?>" 
                 alt="Online Examination Reports" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Lesson Plan -->
        <div id="lesson-plan" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Lesson Plan</h3>
            <p class="text-gray-700 mb-4">
                The Lesson Plan module provides reports on syllabus progress and subject-specific lesson plans. 
                Teachers can track the completion status of each topic and view detailed lesson plans for their subjects. 
                These reports help ensure that the syllabus is on track and that lessons are planned methodically.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/lesson-plan.png') ?>" 
                 alt="Lesson Plan Reports" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Transport -->
        <div id="transport" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Transport</h3>
            <p class="text-gray-700 mb-4">
                This module provides reports on student transport arrangements, including vehicle numbers, routes, and driver details. 
                Teachers can verify transport assignments and view driver profiles. 
                These reports help in maintaining the transport schedule and ensuring safety.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/transport.png') ?>" 
                 alt="Transport Reports" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Hostel -->
        <div id="hostel" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Hostel</h3>
            <p class="text-gray-700 mb-4">
                The Hostel section provides reports about hostel accommodations, including student room and bed details. 
                Teachers can track which student is assigned to which room, making hostel management more organized.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/hostel.png') ?>" 
                 alt="Hostel Reports" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Alumni -->
        <div id="alumni" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Alumni</h3>
            <p class="text-gray-700 mb-4">
                The Alumni section lists students who have passed out, filtered by the year of graduation. 
                It helps maintain a record of former students and track their educational history.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/alumni.png') ?>" 
                 alt="Alumni Reports" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>
