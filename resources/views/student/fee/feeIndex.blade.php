@extends('layouts.student.studentDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">Fees Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Current Balance</h2>
                <p class="text-4xl font-bold text-blue-600">$2,500.00</p>
                <p class="text-sm text-gray-500 mt-2">Due by: August 15, 2023</p>
                <a href="/pay-fees"
                    class="mt-4 bg-blue-500 text-white px-4 py-2 rounded inline-block hover:bg-blue-600 transition duration-200 pulse">Pay
                    Now</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Payment History</h2>
                <ul class="divide-y divide-gray-200">
                    <li class="py-2 flex justify-between">
                        <span>Tuition Fee (Semester 1)</span>
                        <span class="font-semibold">$5,000.00</span>
                    </li>
                    <li class="py-2 flex justify-between">
                        <span>Library Fee</span>
                        <span class="font-semibold">$200.00</span>
                    </li>
                    <li class="py-2 flex justify-between">
                        <span>Lab Access Fee</span>
                        <span class="font-semibold">$300.00</span>
                    </li>
                </ul>
                <a href="/payment-history" class="mt-4 text-blue-500 hover:underline block text-right">View Full History</a>
            </div>
        </div>

        <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Fee Breakdown</h2>
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="text-left py-2 px-4">Fee Type</th>
                        <th class="text-left py-2 px-4">Amount</th>
                        <th class="text-left py-2 px-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4">Tuition Fee (Semester 2)</td>
                        <td class="py-2 px-4">$5,000.00</td>
                        <td class="py-2 px-4"><span
                                class="bg-yellow-200 text-yellow-800 py-1 px-2 rounded-full text-sm">Pending</span></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">Technology Fee</td>
                        <td class="py-2 px-4">$500.00</td>
                        <td class="py-2 px-4"><span
                                class="bg-green-200 text-green-800 py-1 px-2 rounded-full text-sm">Paid</span></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">Student Activity Fee</td>
                        <td class="py-2 px-4">$100.00</td>
                        <td class="py-2 px-4"><span
                                class="bg-red-200 text-red-800 py-1 px-2 rounded-full text-sm">Overdue</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-8 bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            <p class="font-bold">Payment Options:</p>
            <p>We offer various payment methods including credit card, bank transfer, and our new cryptocurrency option. For
                details, please visit our <a href="/payment-options" class="underline">payment options page</a>.</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Need Assistance?</h2>
            <p class="mb-4">If you have any questions about your fees or need to discuss a payment plan, please don't
                hesitate to contact our finance department.</p>
            <a href="/contact-finance"
                class="bg-green-500 text-white px-4 py-2 rounded inline-block hover:bg-green-600 transition duration-200">Contact
                Finance Department</a>
        </div>
    </div>
@endsection
