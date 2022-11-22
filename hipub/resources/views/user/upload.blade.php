@extends('layout')
@section('container')
    <div class="h-screen w-full pt-[141px] px-96">
        <form action="#" method="POST">
            @csrf
            <div class="flex flex-col space-y-5">
                <input class="w-full p-5 pl-5 rounded-2xl" type="text" name="judul" placeholder="Judul Artikel">
                <select class="capitalize appearance-none p-5 pl-5 rounded-2xl" name="kategori" id="">
                    <option class="capitalize " value="seni">pilih kategori</option>
                    <option class="capitalize " value="seni">teknologi</option>
                    <option class="capitalize " value="seni">kesehatan</option>
                </select>
                <div class="flex">
                    <div class="w-3/4 rounded-l-2xl bg-white p-5" id="fileName">
                        Choose File
                    </div>
                    <label class="w-1/4 p-5 capitalize rounded-r-2xl bg-gray-400 cursor-pointer" for="file">
                        browse
                    </label>
                    <input class="hidden" id="file" clas name="file" type="file">
                </div>
                <button class="capitalize py-5 px-12 w-1/3 bg-black rounded-xl text-white font-bold text-3xl hover:bg-orange-700 hover:text-black" type="submit">upload artikel</button>
            </div>    
        </form>
    </div>
    <script>
        var inputs = document.querySelectorAll('#file');
        Array.prototype.forEach(inputs, function(input)
        {
            var label = document.querySelectorAll('#fileName'),
            labelVal = label.innerHTML;
            
            input.addEventListener('change', function(e)
            {
                var fileName = '';
                fileName = e.target.value.split('\').pop();

                if(fileName)
                    label.innerHTML = fileName;
                else
                    label.innerHTML = labelVal;
            });
        });
    </script>
@endsection