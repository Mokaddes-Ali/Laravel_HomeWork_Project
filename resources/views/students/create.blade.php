<x-app-layout>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Field 1:Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name') }}">
            @error('name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 2: Date of Birth -->
        <div class="mb-4">
            <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('date_of_birth') }}">
            @error('date_of_birth')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 3: Gender -->
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


         <!-- Field 4: Address -->
         <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" name="address" id="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('address') }}">
            @error('address')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 5: Religion -->

        <div class="mb-4">
            <label for="religion" class="block text-sm font-medium text-gray-700">Religion</label>
            <select name="religion" id="religion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="select" {{ old('religion') == 'select' ? 'selected' : '' }}>Select</option>
                <option value="muslim" {{ old('religion') == 'muslim' ? 'selected' : '' }}>Muslim</option>
                <option value="hindu" {{ old('religion') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                <option value="others" {{ old('religion') == 'others' ? 'selected' : '' }}>Others</option>
            </select>
            @error('religion')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

         <!-- Field 6: Nationality -->
        <div class="mb-4">
            <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
            <select name="nationality" id="nationality" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="select" {{ old('nationality') == 'select' ? 'selected' : '' }}>Select</option>
                <option value="bangladesh" {{ old('nationality') == 'bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                <option value="india" {{ old('nationality') == 'india' ? 'selected' : '' }}>India</option>
                <option value="uk" {{ old('nationality') == 'uk' ? 'selected' : '' }}>UK</option>
            </select>
            @error('nationality')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>


             <!-- Field 7: Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('email') }}">
            @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 8: Phone -->
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('phone') }}">
            @error('phone')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

         <!-- Field 9: parents_name -->
         <div class="mb-4">
            <label for="parents_name" class="block text-sm font-medium text-gray-700">Parents Name</label>
            <input type="text" name="parents_name" id="parents_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('parents_name') }}">
            @error('parents_name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

         <!-- Field 10: parents_phone -->
         <div class="mb-4">
            <label for="parents_phone" class="block text-sm font-medium text-gray-700"> Parents Phone</label>
            <input type="text" name="parents_phone" id="parents_phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('parents_phone') }}">
            @error('parents_phone')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 11: Course -->
        <div class="mb-4">
            <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
            <select name="course" id="course" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="select" {{ old('course') == 'select' ? 'selected' : '' }}>Select</option>
                <option value="webdevelopment" {{ old('course') == 'webdevelopment' ? 'selected' : '' }}>Web Development</option>
                <option value="webdesign" {{ old('course') == 'webdesign' ? 'selected' : '' }}>Web Design</option>
                <option value="webdeveloper" {{ old('course') == 'webdeveloper' ? 'selected' : '' }}>Web Developer</option>
            </select>
            @error('course')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 12: Admission Date -->
        <div class="mb-4">
            <label for="admission_date" class="block text-sm font-medium text-gray-700">Admission Date</label>
            <input type="date" name="admission_date" id="admission_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('admission_date') }}">
            @error('admission_date')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 13: addmission_fee -->
        <div class="mb-4">
            <label for="admission_fee" class="block text-sm font-medium text-gray-700">Admission Fee</label>
            <input type="text" name="admission_fee" id="admission_fee" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('admission_fee') }}">
            @error('admission_fee')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 14: additional_notes -->
        <div class="mb-4">
            <label for="additional_notes" class="block text-sm font-medium text-gray-700">Additional Notes</label>
            <input type="text" name="additional_notes" id="additional_notes" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('additional_notes') }}">
            @error('additional_notes')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <!-- Field 15: Profile Image -->
        <div class="mb-4">
            <label for="profile_image" class="block text-sm font-medium text-gray-700">Profile Image</label>
            <input type="file" name="profile_image" id="profile_image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('profile_image')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create</button>
        </div>
    </form>
</div>
</x-app-layout>

