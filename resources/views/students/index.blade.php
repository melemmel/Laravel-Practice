{{-- @dd(auth()->user()->name) --}}
@include('partials.header')
<x-nav />
<header class="max-w-lg mx-auto mt-5">
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center">Student List</h1>
    </a>
</header>
<section class="mt-10">
    <div class="overflow x-auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500">
            <thead class="text-xs text gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">First Name</th>
                    <th scope="col" class="py-3  px-6">Middle Name</th>
                    <th scope="col" class="py-3 px-6">Email</th>
                    <th scope="col" class="py-3 px-6">Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="bg-gray-800 border-b text-white">
                        <td class="py-4 px-6">
                            {{ $student->first_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->last_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->email }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->age }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-6 p-4 mx-auto bottom-0 fixed">
            {{ $students->links() }}
        </div>
    </div>
</section>
@include('partials.footer')

{{-- <ul class="mx-5">
    @foreach ($students as $student)

        <li>{{ $student->gender }} {{ $student->gender_count }}</li>

    @endforeach
</ul> --}}
