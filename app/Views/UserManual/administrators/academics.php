<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/teachers') ?>" class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Teacher Manual
            </a>
        </div>
        <!-- Class Timetable -->
        <div id="class-timetable" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Class Timetable</h3>
            <p class="text-gray-700 mb-4">
                The Class Timetable module helps teachers view the complete schedule of their assigned classes.
                Teachers can search for a specific timetable by selecting the class and section. The displayed timetable includes subject names, room numbers, and the corresponding time slots.
                This organized structure assists in maintaining a well-structured academic schedule and minimizes confusion. Teachers can also print the timetable for offline reference.
                The interface is user-friendly, allowing quick navigation between different class timetables.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/class-timetable.png') ?>" alt="Class Timetable" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Teachers Timetable -->
        <div id="teachers-timetable" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Teachers Timetable</h3>
            <p class="text-gray-700 mb-4">
                The Teachers Timetable module displays the teaching schedule for each teacher.
                It shows the list of classes, subjects, room numbers, and respective time slots in which the teacher is responsible.
                This timetable helps teachers efficiently manage their workload and stay organized throughout the week.
                It also helps in identifying any overlapping schedules and ensures that teachers are prepared for their next class.
                With clear and concise information, teachers can quickly verify their teaching responsibilities.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/teachers-timetable.png') ?>" alt="Teachers Timetable" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Assign Class Teacher -->
        <div id="assign-class-teacher" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Assign Class Teacher</h3>
            <p class="text-gray-700 mb-4">
                This module allows the admin to assign specific teachers to various classes and sections.
                It displays a list of all existing classes, their sections, and the designated class teacher.
                Having a dedicated class teacher ensures smooth administration and better class management.
                Teachers with appropriate permissions can update or reassign a class teacher as needed.
                This feature is useful for managing teacher responsibilities and maintaining an organized academic environment.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/assign-class-teacher.png') ?>" alt="Assign Class Teacher" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Subject Group -->
        <div id="subject-group" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Subject Group</h3>
            <p class="text-gray-700 mb-4">
                The Subject Group module allows teachers to view and manage groups of related subjects.
                It helps in categorizing subjects according to different streams, such as Science, Arts, or Commerce.
                Grouping subjects enhances clarity and allows teachers to organize their teaching materials efficiently.
                The system also provides options to edit or update subject groups as per the latest academic structure.
                This feature plays a vital role in maintaining structured and cohesive subject management.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/subject-group.png') ?>" alt="Subject Group" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Subjects -->
        <div id="subjects" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Subjects</h3>
            <p class="text-gray-700 mb-4">
                The Subjects module displays a list of all subjects offered within the school.
                It categorizes each subject by its type, such as core, elective, or optional.
                This module helps teachers view the complete list of subjects, including details like subject codes and descriptions.
                Teachers can also filter subjects by class or stream to find specific information quickly.
                The subject listing is helpful for planning lessons and tracking the syllabus.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/subjects.png') ?>" alt="Subjects" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Classes -->
        <div id="classes" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Classes</h3>
            <p class="text-gray-700 mb-4">
                The Classes module displays a list of all the classes available in the school.
                Each class entry shows the associated sections and their respective class teachers.
                Teachers can navigate through the list to view the structure of different classes and their subdivisions.
                This module helps in identifying the class structure and associated faculty members.
                It ensures that teachers are aware of their assigned classes and sections.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/classes.png') ?>" alt="Classes" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Sections -->
        <div id="sections" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Sections</h3>
            <p class="text-gray-700 mb-4">
                The Sections module provides a detailed list of all sections within each class.
                It helps teachers identify the specific group of students they will be handling.
                Teachers can view, edit, or manage sections according to their assigned responsibilities.
                Having a clear section list makes it easy to track student attendance and manage classroom activities.
                This module also supports printing for offline records.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/sections.png') ?>" alt="Sections" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Zoom Meeting -->
        <div id="zoom-meeting" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Zoom Meeting</h3>
            <p class="text-gray-700 mb-4">
                The Zoom Meeting module helps teachers schedule and manage virtual meetings.
                Teachers can add new meetings by specifying the topic, class, section, start time, duration, and visibility settings.
                They can also choose whether the meeting is for staff only or open to students.
                The meeting list displays all scheduled meetings, showing the host's name, meeting status (started, running, closed), and options to start or delete the meeting.
                This module facilitates seamless virtual communication between teachers and students.
            </p>
            <div class="flex gap-4 justify-center">
                <img src="<?= base_url('public/images/UserManual/teachers/zoom-meeting-list.png') ?>" alt="Zoom Meeting List" class="rounded-xl shadow-lg w-1/2 object-contain">
                <img src="<?= base_url('public/images/UserManual/teachers/add-zoom-meeting.png') ?>" alt="Add Zoom Meeting" class="rounded-xl shadow-lg w-1/2 object-contain">
            </div>
        </div>

    </div>
</section>