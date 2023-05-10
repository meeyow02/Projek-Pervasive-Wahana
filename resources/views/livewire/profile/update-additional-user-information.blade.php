<div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6">
                            <h3 class="mb-4 text-xl font-semibold ">Additional information</h3>
                            <form action="#">
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 ">Tinggi Badan</label>
                                        <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="Bonnie" required>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 ">Berat Badan</label>
                                        <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="Green@gmail.com" required>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 ">Riwayat Penyakit</label>
                                        <x-select label="Select Statuses" placeholder="Select many statuses" multiselect :options="['Jantung', 'Hepatitis', 'Corona','Asma','Kanker','Sakit Hati', 'aaaaa']" wire:model.defer="penyakit"/>
                                    </div>
                                    <div class="col-span-6 sm:col-full">
                                        <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">Save all</button>
                                    </div>
                                </div>
                            </form>
                        </div>