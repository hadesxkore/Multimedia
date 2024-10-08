<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Wherehouse</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom CSS for the timeline design */
        .timeline-item {
            position: relative;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            height: 50%;
            background-color: #e5e7eb;
        }
        .timeline-item:nth-child(even)::before {
            left: -50%;
        }
        .timeline-item:first-child::before {
            display: none;
        }
        .timeline-item:nth-child(odd) {
            align-self: flex-start;
        }
        .timeline-item:nth-child(even) {
            align-self: flex-end;
        }
        .icon-hover:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease-in-out;
        }
        .feature-card {
    position: relative;
    transition: transform 0.2s ease;
}

.feature-card:hover {
    transform: translateY(-5px); /* Lift effect on hover */
}

.icon-container {
    width: 64px; /* Set a fixed width for the icon container */
    height: 64px; /* Set a fixed height for the icon container */
    border-radius: 50%; /* Round the container */
    background-color: #f8fafc; /* Light background for contrast */
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

.icon {
    width: 40px; /* Adjust the icon size */
    height: 40px; /* Adjust the icon size */
}

.bg-gray-50 {
    background-color: #f9fafb; /* Ensure the background is light gray */
}


    </style>
</head>
<body class="bg-gray-100">

<!-- About Wherehouse Section -->
<section class="bg-[#080D1C] py-12">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Left Side: 3D Illustration -->
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <img src="images/01.png" alt="3D Illustration" class="w-full h-auto max-h-[400px] object-contain rounded-lg shadow-lg">
            </div>

            <!-- Right Side: Text Content -->
            <div class="w-full md:w-1/2 p-10 bg-gray-100 rounded-lg shadow-lg">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">About Wherehouse</h1>
                <p class="text-lg text-gray-600">
                    Wherehouse is a web-based Warehouse Rental Management System designed to facilitate seamless interactions between lessors and lessees. It aims to modernize the traditional warehouse rental process by providing an efficient, user-friendly platform for managing rentals.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Key Features Section -->
<section class="bg-gray-900 py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-white mb-12 text-center">Key Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- User Registration and Management -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300 flex items-center">
                <img src="images/user.png" alt="User Registration" class="w-16 h-16 mr-4">
                <div>
                    <h3 class="text-2xl font-semibold text-white">User Registration and Management</h3>
                    <p class="text-gray-300 mt-4">
                        Allows users to create accounts, manage profiles, and update personal information.
                    </p>
                </div>
            </div>
            <!-- Warehouse Profiles -->
            <div class="bg-gray-700 p-8 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 flex items-center">
                <img src="images/warehouse2.png" alt="Warehouse Profiles" class="w-16 h-16 mr-4">
                <div>
                    <h3 class="text-2xl font-semibold text-white ">Warehouse Profiles</h3>
                    <p class="text-gray-300 mt-4">
                        Users can create detailed warehouse profiles, including images and 2D mapping.
                    </p>
                </div>
            </div>
            <!-- Lease Agreement Creation -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300 flex items-center">
                <img src="images/agreement.png" alt="Lease Agreement Creation" class="w-16 h-16 mr-4">
                <div>
                    <h3 class="text-2xl font-semibold text-white">Lease Agreement Creation</h3>
                    <p class="text-gray-300 mt-4">
                        Facilitates the generation of lease agreements that clearly outline terms and conditions for both parties.
                    </p>
                </div>
            </div>
            <!-- Direct Messaging -->
            <div class="bg-gray-700 p-8 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 flex items-center">
                <img src="images/email.png" alt="Direct Messaging" class="w-16 h-16 mr-4">
                <div>
                    <h3 class="text-2xl font-semibold text-white">Direct Messaging</h3>
                    <p class="text-gray-300 mt-4">
                        Enables direct communication between lessors and lessees for inquiries and issue resolution.
                    </p>
                </div>
            </div>
            <!-- Real-Time Notifications -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300 flex items-center">
                <img src="images/notif.png" alt="Real-Time Notifications" class="w-16 h-16 mr-4">
                <div>
                    <h3 class="text-2xl font-semibold text-white">Real-Time Notifications</h3>
                    <p class="text-gray-300 mt-4">
                        Keeps users informed about important updates and status changes.
                    </p>
                </div>
            </div>
            <!-- Dashboard Overview -->
            <div class="bg-gray-700 p-8 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 flex items-center">
                <img src="images/dashboard2.png" alt="Dashboard Overview" class="w-16 h-16 mr-4">
                <div>
                    <h3 class="text-2xl font-semibold text-white">Dashboard Overview</h3>
                    <p class="text-gray-300 mt-4">
                        Provides a centralized view of warehouse listings, user profiles, and rental agreements.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Primary Users Section -->
<section class="bg-gray-900 py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-white mb-12 text-center">Primary Users</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Lessees Card -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 relative">
                <img src="images/lessee.png" alt="Lessees" class="absolute top-[-40px] left-1/2 transform -translate-x-1/2 w-16 h-16"> <!-- Icon added here -->
                <h3 class="text-2xl font-semibold text-white text-center">Lessees</h3>
                <p class="text-gray-300 mt-4 text-center">
                    Individuals or businesses seeking warehouse space for rent.
                </p>
            </div>
            <!-- Lessors Card -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 relative">
                <img src="images/lessor.png" alt="Lessors" class="absolute top-[-40px] left-1/2 transform -translate-x-1/2 w-16 h-16"> <!-- Icon added here -->
                <h3 class="text-2xl font-semibold text-white text-center">Lessors</h3>
                <p class="text-gray-300 mt-4 text-center">
                    Property owners or managers looking to rent out their warehouse spaces.
                </p>
            </div>
            <!-- Administrators Card -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 relative">
                <img src="images/admin.png" alt="Administrators" class="absolute top-[-40px] left-1/2 transform -translate-x-1/2 w-16 h-16"> <!-- Icon added here -->
                <h3 class="text-2xl font-semibold text-white text-center">Administrators</h3>
                <p class="text-gray-300 mt-4 text-center">
                    Users responsible for overseeing the system and managing user accounts and warehouse listings.
                </p>
            </div>
        </div>
    </div>
</section>



<!-- Multimedia Section with Feature Cards -->
<section class="bg-[#080D1C]  py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-white mb-6 text-center">Multimedia Features</h2>
        <div class="grid grid-cols-2 gap-8"> <!-- Set grid to 2 columns -->
            <!-- Feature Card 1 -->
           <!-- Feature Card -->
<div class="feature-card flex flex-col items-center p-6 bg-gray-300 shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
    <div class="icon-container mb-4">
        <!-- Lottie Animation -->
        <lottie-player
            src="images/userAnimation.json" 
            background="transparent" 
            speed="1" 
            style="width: 100px; height: 100px;" 
            loop 
            autoplay>
        </lottie-player>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 text-center">User Management</h3>
    <p class="text-gray-600 text-center mt-2">Manage users efficiently and streamline access control.</p>
</div>

<!-- Include Lottie Player Script -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


            <!-- Feature Card 2 -->
            <div class="feature-card flex flex-col items-center p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
                <div class="icon-container mb-4">
                    <img src="images/warehouse.png" alt="Warehouse Profiles Icon" class="icon">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center">Warehouse Profiles</h3>
                <p class="text-gray-600 text-center mt-2">View and edit warehouse details in an intuitive interface.</p>
            </div>

            <!-- Feature Card 3 -->
            <div class="feature-card flex flex-col items-center p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
                <div class="icon-container mb-4">
                    <img src="images/contract.png" alt="Lease Agreement Icon" class="icon">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center">Lease Agreement Creation</h3>
                <p class="text-gray-600 text-center mt-2">Easily create and manage lease agreements.</p>
            </div>

          <!-- Feature Card 4 -->
<div class="feature-card flex flex-col items-center p-6 bg-gray-300 shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
    <div class="icon-container mb-4">
        <!-- Lottie Animation -->
        <lottie-player
            src="images/messageAnimation.json" 
            background="transparent" 
            speed="1" 
            style="width: 100px; height: 100px;" 
            loop 
            autoplay>
        </lottie-player>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 text-center">Direct Messaging</h3>
    <p class="text-gray-600 text-center mt-2">Communicate instantly with users via direct messaging.</p>
</div>


           <!-- Feature Card 5 -->
<div class="feature-card flex flex-col items-center p-6 bg-gray-300 shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
    <div class="icon-container mb-4">
        <!-- Lottie Animation -->
        <lottie-player
            src="images/notifAnimation.json" 
            background="transparent" 
            speed="1" 
            style="width: 100px; height: 100px;" 
            loop 
            autoplay>
        </lottie-player>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 text-center">Notifications</h3>
    <p class="text-gray-600 text-center mt-2">Stay updated with real-time notifications.</p>
</div>


            <!-- Feature Card 6 -->
            <div class="feature-card flex flex-col items-center p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
                <div class="icon-container mb-4">
                    <img src="images/dashboard.png" alt="Dashboard Overview Icon" class="icon">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center">Dashboard Overview</h3>
                <p class="text-gray-600 text-center mt-2">Get a comprehensive view of all activities in one place.</p>
            </div>
        </div>
    </div>
</section>


<!-- Proponents Section -->
<section class="bg-gray-900 py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-white mb-24 text-center">Meet Our Proponents</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Proponent Card 1 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 relative">
                <img src="images/diane.png" alt="Allyza Diane J. Perillo" class="absolute top-[-50px] left-1/2 transform -translate-x-1/2 w-24 h-24 rounded-full shadow-lg bg-white">
                <h3 class="text-2xl font-semibold text-white text-center mt-8">Allyza Diane J. Perillo</h3>
                <p class="text-gray-300 mt-4 text-center">Address: Daang Bago Dinalupihan, Bataan</p>
                <p class="mt-2 text-gray-300 text-center">Allyza is a reliable problem-solver and decision-maker, known for her calmness under pressure.</p>
                <p class="mt-2 font-bold text-gray-200 text-center">Project Role: Project Leader/Manager and Documentor</p>
                <p class="mt-2 text-gray-300 text-center">Responsible for overall coordination and execution of the capstone project, ensuring quality and efficiency.</p>
            </div>

            <!-- Proponent Card 2 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 relative">
                <img src="images/jars.png" alt="Jarielle L. Ramos" class="absolute top-[-50px] left-1/2 transform -translate-x-1/2 w-24 h-24 rounded-full shadow-lg bg-white">
                <h3 class="text-2xl font-semibold text-white text-center mt-8">Jarielle L. Ramos</h3>
                <p class="text-gray-300 mt-4 text-center">Address: Balanga, Bataan</p>
                <p class="mt-2 text-gray-300 text-center">Jarielle's strength and resilience shine through his ability to balance various responsibilities.</p>
                <p class="mt-2 font-bold text-gray-200 text-center">Project Role: Lead Designer / Assistant Programmer</p>
                <p class="mt-2 text-gray-300 text-center">Oversees visual aspects while collaborating with the development team.</p>
            </div>

            <!-- Proponent Card 3 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 relative">
                <img src="images/drex.png" alt="Ahldrex Jefferson M. Reyes " class="absolute top-[-50px] left-1/2 transform -translate-x-1/2 w-24 h-24 rounded-full shadow-lg bg-white">
                <h3 class="text-2xl font-semibold text-white text-center mt-8">Ahldrex Jefferson M. Reyes</h3>
                <p class="text-gray-300 mt-4 text-center">Address: 017 Macopa Street Landing Limay Bataan</p>
                <p class="mt-2 text-gray-300 text-center">Ahldrex’s attention to detail ensures every aspect of our projects is thoroughly reviewed.</p>
                <p class="mt-2 font-bold text-gray-200 text-center">Project Role: Lead Tester / Documentor</p>
                <p class="mt-2 text-gray-300 text-center">Responsible for testing deliverables and maintaining project documentation.</p>
            </div>

            <!-- Proponent Card 4 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 relative">
                <img src="images/kobie.png" alt="Kobie O. Villanueva" class="absolute top-[-50px] left-1/2 transform -translate-x-1/2 w-24 h-24 rounded-full shadow-lg bg-white">
                <h3 class="text-2xl font-semibold text-white text-center mt-8">Kobie O. Villanueva</h3>
                <p class="text-gray-300 mt-4 text-center">Address: 226 Sitio Toto Cupang Proper Balanga City Bataan</p>
                <p class="mt-2 text-gray-300 text-center">Kobie's attention to detail ensures projects are completed accurately.</p>
                <p class="mt-2 font-bold text-gray-200 text-center">Project Role: Lead Programmer</p>
                <p class="mt-2 text-gray-300 text-center">Guides the technical development of our capstone project.</p>
            </div>
        </div>
    </div>
</section>



</body>
</html>
