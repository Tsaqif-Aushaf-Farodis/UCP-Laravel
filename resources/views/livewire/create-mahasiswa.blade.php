<div>
    <form>
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-5 sm:px-5 py-5">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Data Mahasiswa</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Fakultas Teknik UMY
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2" style="margin: 10px;">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Mahasiswa</label>
                                    <input wire:model="nama" type="text" name="nama" id="nama" autoc omplete="nama" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                                    <input wire:model="nim" type="text" name="nim" id="nim" autocompl ete="nim" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                                    <input wire:model="alamat" type="text" name="alamat" id="alamat" autocomplete="alamat" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 text-right sm:px-6">
                            <button wire:click="store()" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col" style="margin: 10px;">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        NIM
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Alamat
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action
                                    </th>

                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($datamahasiswa as $mahasiswa)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{$mahasiswa->nama}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{$mahasiswa->nim}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{$mahasiswa->alamat}}
                                    </td>
                                    <td>
                                        <button type="button" wire:click='editMahasiswa({{$mahasiswa->id}})' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Edit
                                        </button>
                                        <button type="button" wire:click='deleteMahasiswa({{$mahasiswa->id}})' class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Yakin Mau Dihapus?')">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>