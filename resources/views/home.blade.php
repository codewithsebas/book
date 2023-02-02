@extends('layouts.app')
@section('title', 'Home')
@section('content')

<main class="px-5">
    <h1 class="text-red-500 text-3xl">WELCOME <b class="text-3xl">{{ auth()->user()->name }}<b/></h1>
        <div class="mt-5">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table class="min-w-full">
                        <thead class="bg-white border-b">
                          <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              #
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              Title
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              Author
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              Action
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Edited
                              </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                El señor de los anillos

                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                J. R. R. Tolkien
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                Reserved
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3">
                                <a href="#" class="bg-black py-2 px-3 text-white rounded-sm">Edit</a>
                                <a href="#" class="bg-black py-2 px-3 text-white rounded-sm">Delete</a>
                            </td>
                          </tr>
                          <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                Cien años de soledad
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                Gabriel García Márquez
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                Free
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3">
                                <a href="#" class="bg-black py-2 px-3 text-white rounded-sm">Edit</a>
                                <a href="#" class="bg-black py-2 px-3 text-white rounded-sm">Delete</a>
                            </td>
                          </tr>
                          <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                1984
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                George Orwell
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                Reserved
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex gap-3">
                                <a href="#" class="bg-black py-2 px-3 text-white rounded-sm">Edit</a>
                                <a href="#" class="bg-black py-2 px-3 text-white rounded-sm">Delete</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
</main>

@endsection