<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Stats Card -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500 text-sm">Total Bookings</h3>
                    <p class="text-2xl font-bold">{{ $consultations->count() }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500 text-sm">Today Bookings</h3>
                    <p class="text-2xl font-bold">
                        {{ $consultations->where('created_at', '>=', now()->startOfDay())->count() }}
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500 text-sm">Admin</h3>
                    <p class="text-2xl font-bold">{{ auth()->user()->name }}</p>
                </div>
            </div>

            <!-- Consultation List -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Booked Consultations</h3>

                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="border px-4 py-2 text-left">#</th>
                                    <th class="border px-4 py-2 text-left">Name</th>
                                    <th class="border px-4 py-2 text-left">Email</th>
                                    <th class="border px-4 py-2 text-left">Phone</th>
                                    <th class="border px-4 py-2 text-left">Message</th>
                                    <th class="border px-4 py-2 text-left">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($consultations as $consultation)
                                    <tr class="hover:bg-gray-50">
                                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                        <td class="border px-4 py-2">{{ $consultation->name }}</td>
                                        <td class="border px-4 py-2">{{ $consultation->email }}</td>
                                        <td class="border px-4 py-2">{{ $consultation->phone }}</td>
                                        <td class="border px-4 py-2">{{ $consultation->message }}</td>
                                        <td class="border px-4 py-2">
                                            {{ $consultation->created_at->format('d M Y') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center p-4 text-gray-500">
                                            No consultations found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>