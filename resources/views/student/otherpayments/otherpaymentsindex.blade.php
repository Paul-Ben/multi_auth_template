@extends('layouts.student.studentDashboardLayout')
@section('content')
    <div>
        <h1 class="text-3xl font-bold mb-8">Other Payments</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Virtual Reality Lab Access</h2>
                <p class="text-gray-600 mb-4">Access to state-of-the-art VR equipment and software.</p>
                <p class="text-2xl font-bold text-blue-600 mb-4">$150.00</p>
                <a href="/pay/vr-lab"
                    class="bg-blue-500 text-white px-4 py-2 rounded inline-block hover:bg-blue-600 transition duration-200">Pay
                    Now</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">3D Printing Credits</h2>
                <p class="text-gray-600 mb-4">Credits for using the institute's 3D printers for projects.</p>
                <p class="text-2xl font-bold text-blue-600 mb-4">$50.00</p>
                <a href="/pay/3d-printing"
                    class="bg-blue-500 text-white px-4 py-2 rounded inline-block hover:bg-blue-600 transition duration-200">Pay
                    Now</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">AI Compute Time</h2>
                <p class="text-gray-600 mb-4">Access to high-performance computing for AI projects.</p>
                <p class="text-2xl font-bold text-blue-600 mb-4">$200.00</p>
                <a href="/pay/ai-compute"
                    class="bg-blue-500 text-white px-4 py-2 rounded inline-block hover:bg-blue-600 transition duration-200">Pay
                    Now</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Holographic Display Rental</h2>
                <p class="text-gray-600 mb-4">Rent advanced holographic displays for presentations.</p>
                <p class="text-2xl font-bold text-blue-600 mb-4">$100.00</p>
                <a href="/pay/holo-display"
                    class="bg-blue-500 text-white px-4 py-2 rounded inline-block hover:bg-blue-600 transition duration-200">Pay
                    Now</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Quantum Computing Workshop</h2>
                <p class="text-gray-600 mb-4">Intensive weekend workshop on quantum computing basics.</p>
                <p class="text-2xl font-bold text-blue-600 mb-4">$300.00</p>
                <a href="/pay/quantum-workshop"
                    class="bg-blue-500 text-white px-4 py-2 rounded inline-block hover:bg-blue-600 transition duration-200">Pay
                    Now</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Brain-Computer Interface Lab</h2>
                <p class="text-gray-600 mb-4">Access to cutting-edge BCI equipment and research facilities.</p>
                <p class="text-2xl font-bold text-blue-600 mb-4">$250.00</p>
                <a href="/pay/bci-lab"
                    class="bg-blue-500 text-white px-4 py-2 rounded inline-block hover:bg-blue-600 transition duration-200">Pay
                    Now</a>
            </div>
        </div>

        <div class="mt-12 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Custom Payment</h2>
            <p class="text-gray-600 mb-4">Need to make a payment for something not listed above? Use our custom payment
                form:</p>
            <form action="/custom-payment" method="GET" class="space-y-4">
                <div>
                    <label for="payment-reason" class="block text-sm font-medium text-gray-700">Payment Reason</label>
                    <input type="text" id="payment-reason" name="reason" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="payment-amount" class="block text-sm font-medium text-gray-700">Amount ($)</label>
                    <input type="number" id="payment-amount" name="amount" required min="0.01" step="0.01"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <button type="submit"
                    class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-200">Process
                    Custom Payment</button>
            </form>
        </div>

        <div class="mt-12">
            <h2 class="text-2xl font-semibold mb-4">Payment Methods</h2>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="mb-4">We accept the following payment methods:</p>
                <div class="flex space-x-4">
                    <img alt="Visa logo" src="/visa-logo.png" width="50" height="30" class="float-animation">
                    <img alt="Mastercard logo" src="/mastercard-logo.png" width="50" height="30"
                        class="float-animation">
                    <img alt="PayPal logo" src="/paypal-logo.png" width="50" height="30" class="float-animation">
                    <img alt="Bitcoin logo" src="/bitcoin-logo.png" width="30" height="30" class="float-animation">
                    <img alt="Ethereum logo" src="/ethereum-logo.png" width="30" height="30" class="float-animation">
                </div>
                <p class="mt-4 text-sm text-gray-600">For cryptocurrency payments, please contact our finance department for
                    current exchange rates and wallet addresses.</p>
            </div>
        </div>

        <div class="mt-8 bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            <p class="font-bold">Need assistance?</p>
            <p>If you have any questions about payments or need to discuss special arrangements, please contact our finance
                department at <a href="mailto:finance@websim.institute" class="underline">finance@websim.institute</a> or
                call us at +1 (555) 123-4567.</p>
        </div>
    </div>
@endsection
