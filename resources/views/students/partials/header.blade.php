<section class="bg-azure">
    <div class="container flex between i-center py-3">
        <div class="flex gap-20 i-center">
            <div class="bold">
                Developed by: <strong class="ml-2">TEAM 2</strong>
            </div>
            <ul class="list-style-none flex gap-10">
                @foreach (config('sviluppatori') as $sviluppatore)
                    <li class="bg-gray-1-H px-2 py-1 rounded-3 bold scale-3-H traansition-transform duration-2 ease-in-out c-default">{{ $sviluppatore }}</li>
                @endforeach
            </ul>
        </div>
        <div class="flex gap-20 i-center">
            <div>
                <a class="btn btn-primary" href="{{route('students.index')}}">Students</a>
            </div>
            <div>
                <a class="btn btn-primary" href="{{route('students.create')}}">ADD NEW STUDENT</a>
            </div>
        </div>
    </div>
</section>
