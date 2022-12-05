@extends('layout')
@section('container')
    <div class="w-full h-screen px-16 py-20">
        <div class="w-full rounded-[10px] bg-white px-5 py-5">
            <table class="w-full">
                <thead>
                    <tr>
                        <td class="w-1/12 uppercase font-bold text-2xl text-center border-b-2 border-gray-400 py-3">no</td>
                        <td class="w-8/12 capitalize font-bold text-2xl text-center border-b-2 border-gray-400">log publikasi</td>
                        <td class="w-3/12 capitalize font-bold text-2xl text-center border-b-2 border-gray-400">tanggal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="w-1/12 text-center border-b border-gray-300 py-3">1</td>
                        <td class="w-8/12 border-b border-gray-300">Telah dipublikasi oleh Vendor</td>
                        <td class="w-3/12 border-b border-gray-300">20 September 2022 09:00</td>
                    </tr>
                    <tr>
                        <td class="w-1/12 text-center border-b border-gray-300 py-3">2</td>
                        <td class="w-8/12 border-b border-gray-300">Telah dipublikasi oleh Vendor</td>
                        <td class="w-3/12 border-b border-gray-300">20 September 2022 09:00</td>
                    </tr>
                    <tr>
                        <td class="w-1/12 text-center border-b border-gray-300 py-3">3</td>
                        <td class="w-8/12 border-b border-gray-300">Telah dipublikasi oleh Vendor</td>
                        <td class="w-3/12 border-b border-gray-300">20 September 2022 09:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection