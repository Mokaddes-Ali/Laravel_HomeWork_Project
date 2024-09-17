<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Students List</h1>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Date of Birth</th>
                    <th class="py-2 px-4 border-b">Gender</th>
                    <th class="py-2 px-4 border-b">Address</th>
                    <th class="py-2 px-4 border-b">Religion</th>
                    <th class="py-2 px-4 border-b">Nationality</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Phone</th>
                    <th class="py-2 px-4 border-b">Parents Name</th>
                    <th class="py-2 px-4 border-b">Parents Phone</th>
                    <th class="py-2 px-4 border-b">Course</th>
                    <th class="py-2 px-4 border-b">Admission Date</th>
                    <th class="py-2 px-4 border-b">Addmission Fee</th>
                    <th class="py-2 px-4 border-b">Additional Notes</th>
                    <th class="py-2 px-4 border-b">Profile Image</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $student->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->date_of_birth }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->gender }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->address }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->religion }}</td>
                        <td class="py-2 px-4 border-b">{{$student->nationality }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->phone }}</td>
                        <td class="py-2 px-4 border-b">{{  $student->parents_name }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->parents_phone }}</td>

                        <td class="py-2 px-4 border-b">{{$student->course }}</td>
                        <td class="py-2 px-4 border-b">{{ $student->admission_year }}</td>
                        <td class="py-2 px-4 border-b">{{$student->admission_fee }}</td>
                        <td class="py-2 px-4 border-b">{{$student->additional_notes }}</td>
                        <td class="py-2 px-4 border-b">
                            @if ($student->profile_image)
                                <img src="{{ asset('storage/' . $student->profile_image) }}" alt="Profile Image" class="w-16 h-16 object-cover">
                            @else
                                No Image
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('students.edit', $student->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
