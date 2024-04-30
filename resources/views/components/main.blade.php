<!DOCTYPE html>
<html lang="en">

{{-- Header --}}
<x-header></x-header>

<body>
    <div class="wrapper">
        {{-- Sidebar --}}
        <x-sidebar></x-sidebar>

        <div class="main">
            {{-- Navbar --}}
            <x-navbar></x-navbar>

            <main class="content">
                <div class="container-fluid p-0">

                    {{-- Title --}}
                    <x-title></x-title>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    {{-- <h5 class="card-title mb-0">Empty card</h5> --}}
                                </div>
                                <div class="card-body">
                                    <p>hii my name anomali</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            {{-- Footer --}}
            <x-footer></x-footer>
        </div>
    </div>

    {{-- Script --}}
    <x-script></x-script>
</body>

</html>
