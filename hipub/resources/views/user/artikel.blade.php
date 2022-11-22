@extends('layout')
@section('container')
    <div class="h-screen w-full px-16 py-16">
        <div class=" mx-16 bg-white rounded-[20px]">
            <table>
                <thead>
                    <tr class=" py-9">
                        <td class="capitalize font-bold px-3"> no</td>
                        <td class="capitalize font-bold"> judul artikel</td>
                        <td class="capitalize font-bold"> status</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class=" py-3 border-b">
                        <td>1</td>
                        <td class="capitalize">Optimalisasi pola jam tubuh manusia dengan sleep hygiene</td>
                        <td class="bg-red-600 text-white capitalize">publish</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection