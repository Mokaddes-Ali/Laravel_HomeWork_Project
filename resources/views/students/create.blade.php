{{-- @extends('layouts.master')

@section('content')
<div class="container mx-auto w-screen">
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

        <!-- Field 14: aditional_notes -->
        <div class="mb-4">
            <label for="aditional_note" class="block text-sm font-medium text-gray-700">Aditional Notes</label>
            <input type="text" name="aditional_note" id="aditional_note" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('aditional_note') }}">
            @error('aditional_note')
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

@endsection
 --}}


 @extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Field 1: Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 2: Date of Birth -->
        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">
            @error('date_of_birth')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 3: Gender -->
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-select">
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
            </select>
            @error('gender')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 4: Address -->
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 5: Religion -->
        <div class="mb-3">
            <label for="religion" class="form-label">Religion</label>
            <select name="religion" id="religion" class="form-select">
                <option value="select" {{ old('religion') == 'select' ? 'selected' : '' }}>Select</option>
                <option value="muslim" {{ old('religion') == 'muslim' ? 'selected' : '' }}>Muslim</option>
                <option value="hindu" {{ old('religion') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                <option value="others" {{ old('religion') == 'others' ? 'selected' : '' }}>Others</option>
            </select>
            @error('religion')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 6: Nationality -->
        <div class="mb-3">
            <label for="nationality" class="form-label">Nationality</label>
            <select name="nationality" id="nationality" class="form-select">
                <option value="select" {{ old('nationality') == 'select' ? 'selected' : '' }}>Select</option>
                <option value="bangladesh" {{ old('nationality') == 'bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                <option value="india" {{ old('nationality') == 'india' ? 'selected' : '' }}>India</option>
                <option value="uk" {{ old('nationality') == 'uk' ? 'selected' : '' }}>UK</option>
            </select>
            @error('nationality')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 7: Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 8: Phone -->
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 9: Parents Name -->
        <div class="mb-3">
            <label for="parents_name" class="form-label">Parents Name</label>
            <input type="text" name="parents_name" id="parents_name" class="form-control" value="{{ old('parents_name') }}">
            @error('parents_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 10: Parents Phone -->
        <div class="mb-3">
            <label for="parents_phone" class="form-label">Parents Phone</label>
            <input type="text" name="parents_phone" id="parents_phone" class="form-control" value="{{ old('parents_phone') }}">
            @error('parents_phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 11: Course -->
        <div class="mb-3">
            <label for="course" class="form-label">Course</label>
            <select name="course" id="course" class="form-select">
                <option value="select" {{ old('course') == 'select' ? 'selected' : '' }}>Select</option>
                <option value="webdevelopment" {{ old('course') == 'webdevelopment' ? 'selected' : '' }}>Web Development</option>
                <option value="webdesign" {{ old('course') == 'webdesign' ? 'selected' : '' }}>Web Design</option>
                <option value="webdeveloper" {{ old('course') == 'webdeveloper' ? 'selected' : '' }}>Web Developer</option>
            </select>
            @error('course')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 12: Admission Date -->
        <div class="mb-3">
            <label for="admission_date" class="form-label">Admission Date</label>
            <input type="date" name="admission_date" id="admission_date" class="form-control" value="{{ old('admission_date') }}">
            @error('admission_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 13: Admission Fee -->
        <div class="mb-3">
            <label for="admission_fee" class="form-label">Admission Fee</label>
            <input type="text" name="admission_fee" id="admission_fee" class="form-control" value="{{ old('admission_fee') }}">
            @error('admission_fee')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 14: Additional Notes -->
        <div class="mb-3">
            <label for="aditional_note" class="form-label">Additional Notes</label>
            <input type="text" name="aditional_note" id="aditional_note" class="form-control" value="{{ old('aditional_note') }}">
            @error('aditional_note')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Field 15: Profile Image -->
        <div class="mb-3">
            <label for="profile_image" class="form-label">Profile Image</label>
            <input type="file" name="profile_image" id="profile_image" class="form-control">
            @error('profile_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection
