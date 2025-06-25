@if (isset($errors) && $errors->any())
    <div class="animate-alert max-w-[min(80%,300px)] w-auto bg-gray-100 shadow-2xl z-[99] border-l-[10px] border-l-blue-700 fixed bottom-5 left-5"
        id="alert">
        <x-animate-expand />

        <div class="relative flex justify-between flex-row-reverse items-start p-4 pr-2">
            <button id="closeAlert" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class=" size-5 stroke-blue-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </button>
            <div class="text-[13px] pr-6">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li class="{{ $loop->count == 1 ? '' : 'list-disc' }} ml-2">{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    <script>
        const alert = document.querySelector('#alert')
        const closeAlert = document.querySelector('#closeAlert')

        if (alert && closeAlert) {
            closeAlert.addEventListener('click', e => {
                alert.classList.add('!hidden')
            })
            setInterval(() => {
                alert.classList.add('!hidden')
            }, 6000);
        }
    </script>
@endif
