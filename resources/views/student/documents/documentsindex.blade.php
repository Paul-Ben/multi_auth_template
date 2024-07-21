@extends('layouts.student.studentDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">My Documents</h1>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Uploaded Documents</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-6 text-left">Document Type</th>
                            <th class="py-3 px-6 text-left">File Name</th>
                            <th class="py-3 px-6 text-left">Upload Date</th>
                            <th class="py-3 px-6 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4 px-6 flex items-center">
                                <div class="document-icon pdf-icon mr-3"></div>
                                Admission Letter
                            </td>
                            <td class="py-4 px-6">admission_letter_2023.pdf</td>
                            <td class="py-4 px-6">2023-05-15</td>
                            <td class="py-4 px-6">
                                <a href="/documents/view/admission_letter_2023.pdf"
                                    class="text-blue-500 hover:underline mr-3">View</a>
                                <a href="/documents/download/admission_letter_2023.pdf"
                                    class="text-green-500 hover:underline">Download</a>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4 px-6 flex items-center">
                                <div class="document-icon jpg-icon mr-3"></div>
                                Student ID Card
                            </td>
                            <td class="py-4 px-6">student_id_card.jpg</td>
                            <td class="py-4 px-6">2023-05-20</td>
                            <td class="py-4 px-6">
                                <a href="/documents/view/student_id_card.jpg"
                                    class="text-blue-500 hover:underline mr-3">View</a>
                                <a href="/documents/download/student_id_card.jpg"
                                    class="text-green-500 hover:underline">Download</a>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4 px-6 flex items-center">
                                <div class="document-icon pdf-icon mr-3"></div>
                                Transcript
                            </td>
                            <td class="py-4 px-6">transcript_2023_spring.pdf</td>
                            <td class="py-4 px-6">2023-06-10</td>
                            <td class="py-4 px-6">
                                <a href="/documents/view/transcript_2023_spring.pdf"
                                    class="text-blue-500 hover:underline mr-3">View</a>
                                <a href="/documents/download/transcript_2023_spring.pdf"
                                    class="text-green-500 hover:underline">Download</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 flex items-center">
                                <div class="document-icon doc-icon mr-3"></div>
                                Course Schedule
                            </td>
                            <td class="py-4 px-6">course_schedule_fall_2023.doc</td>
                            <td class="py-4 px-6">2023-07-01</td>
                            <td class="py-4 px-6">
                                <a href="/documents/view/course_schedule_fall_2023.doc"
                                    class="text-blue-500 hover:underline mr-3">View</a>
                                <a href="/documents/download/course_schedule_fall_2023.doc"
                                    class="text-green-500 hover:underline">Download</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Upload New Document</h2>
            <form action="/documents/upload" method="POST" enctype="multipart/form-data" class="space-y-4">
                <div>
                    <label for="document_type" class="block text-sm font-medium text-gray-700 mb-2">Document Type</label>
                    <select id="document_type" name="document_type"
                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"
                        required>
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
                    <input type="file" id="document_file" name="document_file"
                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div>
                    <label for="document_description" class="block text-sm font-medium text-gray-700 mb-2">Description
                        (optional)</label>
                    <textarea id="document_description" name="document_description" rows="3"
                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-200">Upload
                    Document</button>
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
    </div>
@endsection
