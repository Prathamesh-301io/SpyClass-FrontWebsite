<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/students') ?>" 
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Student Manual
            </a>
        </div>

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Transport & Hostel Information</h2>

        <!-- Transport Routes -->
        <div id="transport-routes" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Transport Routes</h3>
            <p class="text-gray-700 mb-4">
                This section displays all the transport vehicles available for students, including buses and other vehicles. You can view the 
                assigned routes, bus number, driver details, and the students assigned to each vehicle.
            </p>
            <p class="text-gray-700 mb-4">
                Easily check which routes are available and the status of each vehicle (active/inactive). You can also see which students are assigned 
                to a particular route or vehicle.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/transport-routes.png') ?>" alt="Transport Routes" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            <p class="text-gray-700 mb-4 mt-2">
                Here shows Assigned Routes Details
            </p>
            <img src="<?= base_url('public/images/UserManual/students/transport-routes-details.png') ?>" alt="Transport Routes" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Hostel Rooms -->
        <div id="hostel-rooms" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Hostel Rooms</h3>
            <p class="text-gray-700 mb-4">
                This section provides details about all hostel rooms, including room numbers, capacity, and occupancy status. You can view which rooms 
                are available and which are already assigned. Each room will display the number of beds, students allocated, and whether it is occupied or vacant.
            </p>
            <p class="text-gray-700 mb-4">
                The cost per room or per bed is also mentioned, allowing students to understand the accommodation charges. Room details also include 
                room type (single/double/shared) and other facilities available.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/hostel-rooms.png') ?>" alt="Hostel Rooms" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>
