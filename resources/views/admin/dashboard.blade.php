@extends('admin.layouts.app')



@section('content')

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">

    <div class="bg-white rounded-lg shadow p-6 border-l-4 border-blue-600">
        <p class="text-sm text-gray-500">Total Bookings</p>
        <p class="text-3xl font-bold mt-2">{{ $consultations->count() }}</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6 border-l-4 border-green-600">
        <p class="text-sm text-gray-500">Today Bookings</p>
        <p class="text-3xl font-bold mt-2">
            {{ $consultations->where('created_at','>=',now()->startOfDay())->count() }}
        </p>
    </div>

    <div class="bg-white rounded-lg shadow p-6 border-l-4 border-slate-600">
        <p class="text-sm text-gray-500">Logged in as</p>
        <p class="text-lg font-semibold mt-2">
            {{ auth()->user()->name }}
        </p>
    </div>

</div>

<div class="bg-white rounded-lg shadow gap-6 mb-10" style="margin-top:20px;">

    <div class="px-6 py-4 border-b flex justify-between items-center">
        <h3 class="text-lg font-semibold">Booked Consultations</h3>
        <span class="text-sm text-gray-500">
            Total: {{ $consultations->count() }}
        </span>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                <tr>
                    <th class="px-4 py-3 text-left">#</th>
                    <th class="px-4 py-3 text-left">Name</th>
                    <th class="px-4 py-3 text-left">Email</th>
                    <th class="px-4 py-3 text-left">Phone</th>
                    <th class="px-4 py-3 text-left">Message</th>
                    <th class="px-4 py-3 text-left">Date</th>
                </tr>
            </thead>

            <tbody class="divide-y">
            @forelse($consultations as $consultation)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 font-medium">{{ $consultation->name }}</td>
                    <td class="px-4 py-3">{{ $consultation->email }}</td>
                    <td class="px-4 py-3">{{ $consultation->phone }}</td>
                    <td class="px-4 py-3 text-gray-600">
                        {{ Str::limit($consultation->message, 30) }}
                    </td>
                    <td class="px-4 py-3 text-gray-500">
                        {{ $consultation->created_at->format('d M Y') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center py-6 text-gray-500">
                        No consultations found
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection
