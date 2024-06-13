@extends('navbar')

@section('content')
    {{-- <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

    <div>
        <a href="project/project-1">
            <img class="h-auto max-w-full rounded-lg shadow-xl" src="assets/image/1.png" alt="">
        </a>
    </div>
    <div>
        <a href="project/project-2">
            <img class="h-auto max-w-full rounded-lg shadow-xl" src="assets/image/2.png" alt="">
        </a>
    </div>
    <div>
        <a href="project/project-3">
            <img class="h-auto max-w-full rounded-lg shadow-xl" src="assets/image/3.png" alt="">
        </a>
    </div>
    <div>
        <a href="project/project-4">
            <img class="h-auto max-w-full rounded-lg shadow-xl" src="assets/image/4.png" alt="">
        </a>
    </div>
</div> --}}



    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
            <a href="project/project-1">
                <img class="h-auto max-w-full rounded-lg" src="assets/image/1.png" alt="">
            </a>
        </div>
        <div>
            <a href="project/project-2">
                <img class="h-auto max-w-full rounded-lg" src="assets/image/2.png" alt="">
            </a>
        </div>
        <div>
            <a href="project/project-3">
                <img class="h-auto max-w-full rounded-lg" src="assets/image/3.png" alt="">
            </a>
        </div>
        <div>
            <a href="project/project-4">
                <img class="h-auto max-w-full rounded-lg ms-5" src="assets/image/4.png" alt="">
            </a>
        </div>
    </div>
@endsection
