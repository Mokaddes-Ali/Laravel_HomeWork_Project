<x-app-layout>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Field 1: Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name') }}">
            @error('name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 2: Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('email') }}">
            @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 3: Phone -->
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('phone') }}">
            @error('phone')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 4: Address -->
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" name="address" id="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('address') }}">
            @error('address')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 5: Date of Birth -->
        <div class="mb-4">
            <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('date_of_birth') }}">
            @error('date_of_birth')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 6: Gender -->
        <div class="mb-4">
            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
            <select name="gender" id="gender" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
            </select>
            @error('gender')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 7: Course -->
        <div class="mb-4">
            <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
            <input type="text" name="course" id="course" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('course') }}">
            @error('course')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 8: Year -->
        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
            <input type="text" name="year" id="year" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('year') }}">
            @error('year')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 9: Nationality -->
        <div class="mb-4">
            <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
            <input type="text" name="nationality" id="nationality" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('nationality') }}">
            @error('nationality')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 10: Language -->
        <div class="mb-4">
            <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
            <input type="text" name="language" id="language" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('language') }}">
            @error('language')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 11: Blood Group -->
        <div class="mb-4">
            <label for="blood_group" class="block text-sm font-medium text-gray-700">Blood Group</label>
            <input type="text" name="blood_group" id="blood_group" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('blood_group') }}">
            @error('blood_group')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 12: Religion -->
        <div class="mb-4">
            <label for="religion" class="block text-sm font-medium text-gray-700">Religion</label>
            <input type="text" name="religion" id="religion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('religion') }}">
            @error('religion')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 13: Hobbies -->
        <div class="mb-4">
            <label for="hobbies" class="block text-sm font-medium text-gray-700">Hobbies</label>
            <input type="text" name="hobbies" id="hobbies" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('hobbies') }}">
            @error('hobbies')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 14: Parents Info -->
        <div class="mb-4">
            <label for="parents_info" class="block text-sm font-medium text-gray-700">Parents Info</label>
            <input type="text" name="parents_info" id="parents_info" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('parents_info') }}">
            @error('parents_info')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 15: Emergency Contact -->
        <div class="mb-4">
            <label for="emergency_contact" class="block text-sm font-medium text-gray-700">Emergency Contact</label>
            <input type="text" name="emergency_contact" id="emergency_contact" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('emergency_contact') }}">
            @error('emergency_contact')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 16: Profile Image -->
        <div class="mb-4">
            <label for="profile_image" class="block text-sm font-medium text-gray-700">Profile Image</label>
            <input type="file" name="profile_image" id="profile_image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('profile_image')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 17: Is Active -->
        <div class="mb-4">
            <label for="is_active" class="block text-sm font-medium text-gray-700">Is Active</label>
            <input type="checkbox" name="is_active" id="is_active" class="mt-1 block" {{ old('is_active') ? 'checked' : '' }}>
            @error('is_active')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 18: Admission Date -->
        <div class="mb-4">
            <label for="admission_date" class="block text-sm font-medium text-gray-700">Admission Date</label>
            <input type="date" name="admission_date" id="admission_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('admission_date') }}">
            @error('admission_date')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 19: Graduation Date -->
        <div class="mb-4">
            <label for="graduation_date" class="block text-sm font-medium text-gray-700">Graduation Date</label>
            <input type="date" name="graduation_date" id="graduation_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('graduation_date') }}">
            @error('graduation_date')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 20: Parent's Occupation -->
        <div class="mb-4">
            <label for="parents_occupation" class="block text-sm font-medium text-gray-700">Parent's Occupation</label>
            <input type="text" name="parents_occupation" id="parents_occupation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('parents_occupation') }}">
            @error('parents_occupation')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 21: Parent's Contact -->
        <div class="mb-4">
            <label for="parents_contact" class="block text-sm font-medium text-gray-700">Parent's Contact</label>
            <input type="text" name="parents_contact" id="parents_contact" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('parents_contact') }}">
            @error('parents_contact')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 22: Scholarship Status -->
        <div class="mb-4">
            <label for="scholarship_status" class="block text-sm font-medium text-gray-700">Scholarship Status</label>
            <select name="scholarship_status" id="scholarship_status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="none" {{ old('scholarship_status') == 'none' ? 'selected' : '' }}>None</option>
                <option value="partial" {{ old('scholarship_status') == 'partial' ? 'selected' : '' }}>Partial</option>
                <option value="full" {{ old('scholarship_status') == 'full' ? 'selected' : '' }}>Full</option>
            </select>
            @error('scholarship_status')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 23: Transport -->
        <div class="mb-4">
            <label for="transport" class="block text-sm font-medium text-gray-700">Transport</label>
            <input type="text" name="transport" id="transport" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('transport') }}">
            @error('transport')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 24: Hostel -->
        <div class="mb-4">
            <label for="hostel" class="block text-sm font-medium text-gray-700">Hostel</label>
            <input type="text" name="hostel" id="hostel" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('hostel') }}">
            @error('hostel')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 25: Extra-Curricular Activities -->
        <div class="mb-4">
            <label for="extra_curricular_activities" class="block text-sm font-medium text-gray-700">Extra-Curricular Activities</label>
            <input type="text" name="extra_curricular_activities" id="extra_curricular_activities" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('extra_curricular_activities') }}">
            @error('extra_curricular_activities')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 26: Achievements -->
        <div class="mb-4">
            <label for="achievements" class="block text-sm font-medium text-gray-700">Achievements</label>
            <input type="text" name="achievements" id="achievements" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('achievements') }}">
            @error('achievements')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 27: Personal Statement -->
        <div class="mb-4">
            <label for="personal_statement" class="block text-sm font-medium text-gray-700">Personal Statement</label>
            <textarea name="personal_statement" id="personal_statement" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('personal_statement') }}</textarea>
            @error('personal_statement')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 28: Parent's Education -->
        <div class="mb-4">
            <label for="parents_education" class="block text-sm font-medium text-gray-700">Parent's Education</label>
            <input type="text" name="parents_education" id="parents_education" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('parents_education') }}">
            @error('parents_education')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 29: Parent's Income -->
        <div class="mb-4">
            <label for="parents_income" class="block text-sm font-medium text-gray-700">Parent's Income</label>
            <input type="text" name="parents_income" id="parents_income" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('parents_income') }}">
            @error('parents_income')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 30: Notes -->
        <div class="mb-4">
            <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
            <textarea name="notes" id="notes" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('notes') }}</textarea>
            @error('notes')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Save</button>
        </div>
    </form>
</div>
</x-app-layout>
