@extends('layout')
@section('container')
    <div class="w-full h-screen pt-24 px-28">
        <div class=" px-14 py-[134px] bg-white rounded-[20px] text-3xl text-center">
            <p>
                Lakukan pembayaran sebesar Rp. 5.000.567 ke rekening berikut a.n HiPub untuk proses publikasi
                xxxx-xxxxxxxxxxxxx (BRI)
            </p>
        </div>
        <form action="" method="post">
            @csrf
            <div class="flex mt-5">
                <div class=" w-5/6 rounded-l-2xl bg-white p-5" id="fileName">
                    Upload Bukti Pembayaran (.jpg)
                </div>
                <label class="w-1/6 p-5 capitalize rounded-r-2xl bg-gray-400 cursor-pointer" for="file">
                    browse
                </label>
                <input class="hidden" id="file" name="bukti" type="file">
            </div>
            <div>
                <button class=" mt-16 w-1/5 py-3 rounded-[15px] float-right bg-black text-white text-3xl font-bold" type="submit">Kirim</button>
            </div>
        </form>
    </div>
@endsection