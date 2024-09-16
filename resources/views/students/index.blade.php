<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Students List</h1>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Phone</th>
                    <th class="py-2 px-4 border-b">Address</th>
                    <th class="py-2 px-4 border-b">Date of Birth</th>
                    <th class="py-2 px-4 border-b">Gender</th>
                    <th class="py-2 px-4 border-b">Country</th>
                    <th class="py-2 px-4 border-b">State</th>
                    <th class="py-2 px-4 border-b">City</th>
                    <th class="py-2 px-4 border-b">Zip Code</th>
                    <th class="py-2 px-4 border-b">Religion</th>
                    <th class="py-2 px-4 border-b">Hobbies</th>
                    <th class="py-2 px-4 border-b">Parents Info</th>
                    <th class="py-2 px-4 border-b">Emergency Contact</th>
                    <th class="py-2 px-4 border-b">Profile Image</th>
                    <th class="py-2 px-4 border-b">Active</th>
                    <th class="py-2 px-4 border-b">Admission Date</th>
                    <th class="py-2 px-4 border-b">Graduation Date</th>
                    <th class="py-2 px-4 border-b">Parents Occupation</th>
                    <th class="py-2 px-4 border-b">Parents Contact</th>
                    <th class="py-2 px-4 border-b">Scholarship Status</th>
                    <th class="py-2 px-4 border-b">Transport</th>
                    <th class="py-2 px-4 border-b">Hostel</th>
                    <th class="py-2 px-4 border-b">Extra Curricular Activities</th>
                    <th class="py-2 px-4 border-b">Achievements</th>
                    <th class="py-2 px-4 border-b">Personal Statement</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $student->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->phone }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->address }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->date_of_birth }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->gender }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->country }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->state }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->city }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->zip_code }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->religion }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->hobbies }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->parents_info }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->emergency_contact }}</td>
                        <td class="py-2 px-4 border-b">
                            @if ($student->profile_image)
                                <img src="{{ asset('storage/' . $student->profile_image) }}" alt="Profile Image" class="w-16 h-16 object-cover">
                            @else
                                No Image
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b">{{ $student->is_active ? 'Yes' : 'No' }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->admission_date }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->graduation_date }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->parents_occupation }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->parents_contact }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->scholarship_status }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->transport }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->hostel }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->extra_curricular_activities }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->achievements }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->personal_statement }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('students.edit', $student->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
