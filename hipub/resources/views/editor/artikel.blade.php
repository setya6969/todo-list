@extends('layout')
@section('container')
    <div class="h-screen w-full px-16 py-16">
        <div class="bg-white rounded-[20px] px-5">
            <table class="w-full">
                <thead>
                    <tr class=" py-9">
                        <th class="capitalize w-1/12 font-bold px-3 py-5"> no</td>
                        <th class="capitalize w-8/12 font-bold"> judul artikel</td>
                        <th class="capitalize w-3/12 font-bold"> status</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="w-1/12 text-center border-b border-[#727272] border-opacity-50 py-3">1</td>
                        <td class="w-8/12 capitalize border-b border-[#727272] border-opacity-50">Optimalisasi pola jam tubuh manusia dengan sleep hygiene</td>
                        <td class="w-3/12 border-b text-white capitalize border-[#727272] border-opacity-50 text-center">
                            <span class="bg-red-600 px-10 rounded-2xl font-bold py-1">publish</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="w-1/12 text-center border-b border-[#727272] border-opacity-50 py-3">1</td>
                        <td class="w-8/12 capitalize border-b border-[#727272] border-opacity-50">Optimalisasi pola jam tubuh manusia dengan sleep hygiene</td>
                        <td class="w-3/12 border-b text-white capitalize border-[#727272] border-opacity-50 text-center">
                            <span class="bg-red-600 px-10 rounded-2xl font-bold py-1">publish</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection