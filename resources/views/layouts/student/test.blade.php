<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Documents - WebSim Institute</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <style>
            .dropdown:hover .dropdown-menu {
                display: block;
            }
            .sub-menu {
                display: none;
                padding-left: 1rem;
            }
            .menu-item:hover .sub-menu {
                display: block;
            }
            .document-icon {
                width: 40px;
                height: 40px;
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            .pdf-icon { background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="%23e53e3e" d="M181.9 256.1c-5-16-4.9-46.9-2-46.9 8.4 0 7.6 36.9 2 46.9zm-1.7 47.2c-7.7 20.2-17.3 43.3-28.4 62.7 18.3-7 39-17.2 62.9-21.9-12.7-9.6-24.9-23.4-34.5-40.8zM86.1 428.1c0 .8 13.2-5.4 34.9-40.2-6.7 6.3-29.1 24.5-34.9 40.2zM248 160h136v328c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V24C0 10.7 10.7 0 24 0h200v136c0 13.2 10.8 24 24 24zm-8 171.8c-20-12.2-33.3-29-42.7-53.8 4.5-18.5 11.6-46.6 6.2-64.2-4.7-29.4-42.4-26.5-47.8-6.8-5 18.3-.4 44.1 8.1 77-11.6 27.6-28.7 64.6-40.8 85.8-.1 0-.1.1-.2.1-27.1 13.9-73.6 44.5-54.5 68 5.6 6.9 16 10 21.5 10 17.9 0 35.7-18 61.1-61.8 25.8-8.5 54.1-19.1 79-23.2 21.7 11.8 47.1 19.5 64 19.5 29.2 0 31.2-32 19.7-43.4-13.9-13.6-54.3-9.7-73.6-7.2zM377 105L279 7c-4.5-4.5-10.6-7-17-7h-6v128h128v-6.1c0-6.3-2.5-12.4-7-16.9zm-74.1 255.3c4.1-2.7-2.5-11.9-42.8-9 37.1 15.8 42.8 9 42.8 9z"/></svg>'); }
            .doc-icon { background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="%232b6cb0" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm57.1 120H305c7.7 0 13.4 7.1 11.7 14.7l-38 168c-1.2 5.5-6.1 9.3-11.7 9.3h-38c-5.5 0-10.3-3.8-11.6-9.1-25.8-103.5-20.8-81.2-25.6-110.5h-.5c-1.1 14.3-2.4 17.4-25.6 110.5-1.3 5.3-6.1 9.1-11.6 9.1H117c-5.6 0-10.5-3.9-11.7-9.4l-37.8-168c-1.7-7.5 4-14.6 11.7-14.6h24.5c5.7 0 10.7 4 11.8 9.7 15.6 78 20.1 109.5 21 122.2 1.6-10.2 7.3-32.7 29.4-122.7 1.3-5.4 6.1-9.1 11.7-9.1h29.1c5.6 0 10.4 3.8 11.7 9.2 24 100.4 28.8 124 29.6 129.4-.2-11.2-2.6-17.8 21.6-129.2 1-5.6 5.9-9.5 11.5-9.5zM384 121.9v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg>'); }
            .jpg-icon { background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="%23ed8936" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48zm32-48h224V288l-23.5-23.5c-4.7-4.7-12.3-4.7-17 0L176 352l-39.5-39.5c-4.7-4.7-12.3-4.7-17 0L80 352v64zm48-240c-26.5 0-48 21.5-48 48s21.5 48 48 48 48-21.5 48-48-21.5-48-48-48z"/></svg>'); }
            
            @media (max-width: 768px) {
                .sidebar {
                    transform: translateX(-100%);
                    transition: transform 0.3s ease-in-out;
                }
                .sidebar.open {
                    transform: translateX(0);
                }
                .top-nav {
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    z-index: 50;
                }
                .main-content {
                    margin-top: 64px; /* Adjust based on your navbar height */
                }
            }
            .sidebar .menu-item > a {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .sidebar .menu-item > a::after {
                content: '\25BC';
                font-size: 0.7em;
                transition: transform 0.3s ease;
            }
            .sidebar .menu-item.active > a::after {
                transform: rotate(-180deg);
            }
        </style>
    </head>
    <body class="bg-gray-100 font-sans">
        <nav class="top-nav bg-blue-900 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center">
                    <button id="sidebarToggle" class="mr-4 md:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <a href="/" class="text-2xl font-bold flex items-center">
                        <img alt="WebSim Institute logo, a stylized 'W' made of interconnected nodes" src="/websim-logo.png" width="40" height="40" class="mr-2">
                        WebSim Institute
                    </a>
                </div>
                <div class="flex items-center">
                    <input type="text" placeholder="Search..." class="bg-blue-800 text-white px-3 py-1 rounded-lg mr-4 hidden md:block">
                    <div class="dropdown inline-block relative">
                        <button class="flex items-center space-x-2">
                            <img alt="User profile picture, a smiling woman with short dark hair" src="/user-avatar.jpg" class="w-8 h-8 rounded-full" width="32" height="32">
                            <span class="hidden md:inline-block">Jane Doe</span>
                            <svg class="fill-current h-4 w-4 hidden md:inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 bg-white rounded-md shadow-xl right-0 mt-2">
                            <li><a class="rounded-t hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap" href="/profile">Profile</a></li>
                            <li><a class="hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap" href="/settings">Settings</a></li>
                            <li><a class="rounded-b hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    
        <div class="flex">
            <aside id="sidebar" class="sidebar bg-blue-800 text-white w-64 min-h-screen p-4 fixed md:relative z-40">
                <nav>
                    <ul class="space-y-2">
                        <li><a href="/dashboard" class="block py-2 px-4 rounded hover:bg-blue-700">Dashboard</a></li>
                        <li><a href="/fees" class="block py-2 px-4 rounded hover:bg-blue-700">Fees</a></li>
                        <li><a href="/bio-data" class="block py-2 px-4 rounded hover:bg-blue-700">Bio Data</a></li>
                        <li><a href="/other-payments" class="block py-2 px-4 rounded hover:bg-blue-700">Other Payments</a></li>
                        <li><a href="/course-registration" class="block py-2 px-4 rounded hover:bg-blue-700">Course Registration</a></li>
                        <li><a href="/results" class="block py-2 px-4 rounded hover:bg-blue-700">Results</a></li>
                        <li class="menu-item">
                            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Accommodation</a>
                            <ul class="sub-menu">
                                <li><a href="/accommodation/current" class="block py-2 px-4 rounded hover:bg-blue-600">View Current Accommodation</a></li>
                                <li><a href="/accommodation/apply" class="block py-2 px-4 rounded hover:bg-blue-600">Apply for Accommodation</a></li>
                            </ul>
                        </li>
                        <li><a href="/my-documents" class="block py-2 px-4 rounded bg-blue-700">My Documents</a></li>
                    </ul>
                </nav>
            </aside>
    
            <main class="flex-1 p-4 md:p-6 md:ml-0 main-content">
                <h1 class="text-3xl font-bold mb-6">My Documents</h1>
                
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md mb-6">
                    <h2 class="text-2xl font-semibold mb-4">Uploaded Documents</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full bg-white">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="py-3 px-4 text-left">Document Type</th>
                                    <th class="py-3 px-4 text-left">File Name</th>
                                    <th class="py-3 px-4 text-left hidden md:table-cell">Upload Date</th>
                                    <th class="py-3 px-4 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4 flex items-center">
                                        <div class="document-icon pdf-icon mr-3"></div>
                                        Admission Letter
                                    </td>
                                    <td class="py-3 px-4">admission_letter_2023.pdf</td>
                                    <td class="py-3 px-4 hidden md:table-cell">2023-05-15</td>
                                    <td class="py-3 px-4">
                                        <a href="/documents/view/admission_letter_2023.pdf" class="text-blue-500 hover:underline mr-3">View</a>
                                        <a href="/documents/download/admission_letter_2023.pdf" class="text-green-500 hover:underline">Download</a>
                                    </td>
                                </tr>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4 flex items-center">
                                        <div class="document-icon jpg-icon mr-3"></div>
                                        Student ID Card
                                    </td>
                                    <td class="py-3 px-4">student_id_card.jpg</td>
                                    <td class="py-3 px-4 hidden md:table-cell">2023-05-20</td>
                                    <td class="py-3 px-4">
                                        <a href="/documents/view/student_id_card.jpg" class="text-blue-500 hover:underline mr-3">View</a>
                                        <a href="/documents/download/student_id_card.jpg" class="text-green-500 hover:underline">Download</a>
                                    </td>
                                </tr>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4 flex items-center">
                                        <div class="document-icon pdf-icon mr-3"></div>
                                        Transcript
                                    </td>
                                    <td class="py-3 px-4">transcript_2023_spring.pdf</td>
                                    <td class="py-3 px-4 hidden md:table-cell">2023-06-10</td>
                                    <td class="py-3 px-4">
                                        <a href="/documents/view/transcript_2023_spring.pdf" class="text-blue-500 hover:underline mr-3">View</a>
                                        <a href="/documents/download/transcript_2023_spring.pdf" class="text-green-500 hover:underline">Download</a>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-4 flex items-center">
                                        <div class="document-icon doc-icon mr-3"></div>
                                        Course Schedule
                                    </td>
                                    <td class="py-3 px-4">course_schedule_fall_2023.doc</td>
                                    <td class="py-3 px-4 hidden md:table-cell">2023-07-01</td>
                                    <td class="py-3 px-4">
                                        <a href="/documents/view/course_schedule_fall_2023.doc" class="text-blue-500 hover:underline mr-3">View</a>
                                        <a href="/documents/download/course_schedule_fall_2023.doc" class="text-green-500 hover:underline">Download</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md mb-6">
                    <h2 class="text-2xl font-semibold mb-4">Upload New Document</h2>
                    <form action="/documents/upload" method="POST" enctype="multipart/form-data" class="space-y-4">
                        <div>
                            <label for="document_type" class="block text-sm font-medium text-gray-700 mb-2">Document Type</label>
                            <select id="document_type" name="document_type" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500" required>
                                <option value="">Select Document Type</option>
                                <option value="id_card">ID Card</option>
                                <option value="transcript">Transcript</option>
                                <option value="medical_record">Medical Record</option>
                                <option value="accommodation_contract">Accommodation Contract</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="document_file" class="block text-sm font-medium text-gray-700 mb-2">Upload File</label>
                            <input type="file" id="document_file" name="document_file" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="document_description" class="block text-sm font-medium text-gray-700 mb-2">Description (optional)</label>
                            <textarea id="document_description" name="document_description" rows="3" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-200">Upload Document</button>
                    </form>
                </div>
    
                <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
                    <p class="font-bold">Document Guidelines</p>
                    <ul class="list-disc list-inside mt-2">
                        <li>All documents should be in PDF, DOC, DOCX, JPG, or PNG format.</li>
                        <li>Maximum file size: 10MB</li>
                        <li>Ensure all uploaded documents are clear and legible.</li>
                        <li>Do not upload expired or outdated documents.</li>
                    </ul>
                </div>
            </main>
        </div>
    
        <footer class="bg-blue-900 text-white py-4 mt-8">
            <div class="container mx-auto text-center">
                <p>&copy; 2023 WebSim Institute. All rights reserved.</p>
                <p class="mt-2">
                    <a href="/privacy-policy" class="hover:underline">Privacy Policy</a> | 
                    <a href="/terms-of-service" class="hover:underline">Terms of Service</a> | 
                    <a href="/contact-us" class="hover:underline">Contact Us</a>
                </p>
            </div>
        </footer>
    
        <script>
            document.getElementById('sidebarToggle').addEventListener('click', function() {
                document.getElementById('sidebar').classList.toggle('open');
            });
    
            // Close sidebar when clicking outside of it
            document.addEventListener('click', function(event) {
                const sidebar = document.getElementById('sidebar');
                const sidebarToggle = document.getElementById('sidebarToggle');
                if (!sidebar.contains(event.target) && event.target !== sidebarToggle) {
                    sidebar.classList.remove('open');
                }
            });
    
            // Toggle sub-menu visibility
            document.querySelectorAll('.sidebar .menu-item > a').forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.parentElement.classList.toggle('active');
                    const subMenu = this.nextElementSibling;
                    if (subMenu) {
                        subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
                    }
                });
            });
        </script>
    </body>
    </html>