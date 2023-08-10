@extends('layouts.main')

@section('container')
  <div class="min-h-screen px-[10%] pt-[120px]">
    <h1 class="text-center text-3xl font-bold text-blue-500">Destinasi Wisata Kota Dumai</h1>
    <form action="/posts">
      <div class="my-3 flex justify-center">
        <input type="text" name="search" placeholder="Search..."
          class="focus:border-primary dark:focus:border-primary relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">
        <button
          class="border-primary text-primary relative z-[2] rounded-r border-2 px-6 py-3 text-xs font-medium uppercase transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
          type="button">
          Search
        </button>
      </div>
    </form>
    <div class="flex flex-wrap">
      <h4 class="mr-2 font-bold">Pilih kategori: </h4>
      <ul class="flex flex-wrap gap-4">
        <li class="rounded border"><a href="" class="px-2 py-1">Pantai</a></li>
        <li class="rounded border"><a href="" class="px-2 py-1">Hutan</a></li>
        <li class="rounded border"><a href="" class="px-2 py-1">Sunset</a></li>
        <li class="rounded border"><a href="" class="px-2 py-1">Sunset</a></li>
        <li class="rounded border"><a href="" class="px-2 py-1">Sunset</a></li>
        <li class="rounded border"><a href="" class="px-2 py-1">Sunset</a></li>
      </ul>
    </div>

  </div>
@endsection
