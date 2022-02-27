<div class="flex flex-col items-center justify-center m-5">
    <!-- Be present above all else. - Naval Ravikant -->
    <div
        class="relative flex flex-col items-center justify-center w-full max-w-xs p-4 space-y-4  rounded-lg {{ $color ?? 'bg-white' }}">
        <h4 class="text-base font-medium text-white">{{ $summary }}</h4>
        <p class="text-xs font-medium text-gray-400">
            {{ $message }}
        </p>
        <div class="absolute -bottom-2">
            <div
                class="w-0 h-0 border-t-[10px] border-r-transparent border-r-[5px] border-l-transparent border-l-[5px] {{ $bgColor ?? 'border-white' }}">
            </div>
        </div>
    </div>
    <div class="flex items-center mt-6 space-x-2">
        <img src="{{ $user == 'male' ? asset('images/icons/user-man.png') : asset('images/icons/user-woman.png') }}"
            class="w-10 h-10 rounded-full" alt="">
        <div class="flex flex-col text-sm">
            <span class="font-semibold text-white capitalize">{{ $fullname }}</span>
            <span class="text-xs text-gray-200 ">{{ $profession }}</span>
        </div>
    </div>
</div>
