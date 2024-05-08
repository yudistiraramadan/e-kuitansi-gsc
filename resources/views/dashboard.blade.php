<x-main>
    <x-slot:title>{{ $title }}</x-slot:title>

    <style>
        @keyframes slideInFromRight {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromBottom {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .text-animation {
            animation: slideInFromBottom 1s ease-out;
        }

        .img-animation {
            animation: slideInFromRight 1s ease-out;
        }
    </style>

    <h3 style="text-align: center; margin-top:2%; font-family:'Nunito'; font-weight:700; font-size:24px; color:#222E3C;"
        class="text-animation">Selamat
        Datang di Sistem E-Kuitansi GSC</h3>
    {{-- <img src="{{ asset('img/gsc/gsc3d.png') }}" alt="" style="width:25%; display:flex; align-items:center;"> --}}
    <div style="text-align: center;">
        <img src="{{ asset('img/gsc/gsc3d.png') }}" alt="GSC" class="img-animation"
            style="vertical-align: middle; width:25%; padding-bottom:50px;">
    </div>
</x-main>
