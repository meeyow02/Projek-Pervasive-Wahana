<x-app-layout>
    @section('title', $title)

    <div class="p-4 sm:ml-64">
        <div class="mt-20">
            <div class="grid grid-cols-1 gap-4 mb-6">
                <div class="flex flex-col rounded ">
                    <div class="flex flex-col gap-2 font-sans">
                        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6">
                                <h3 class="mb-4 text-xl font-semibold ">General information</h3>
                                <form action="#">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                                            <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="Bonnie" required>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                            <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="Green@gmail.com" required>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 ">Age</label>
                                            <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="Bonnie" required>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Address</label>
                                            <input type="text" name="address" id="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="e.g. California" required>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 ">Phone Number</label>
                                            <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="e.g. +(12)3456 789" required>
                                        </div>
                                        <div class="col-span-6 sm:col-full">
                                            <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">Save all</button>
                                        </div>
                                    </div>
                                </form>
                        </div>

                        <livewire:profile.update-additional-user-information />

                        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6">
                                <h3 class="mb-4 text-xl font-semibold ">Password information</h3>
                                <form action="#">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 ">Current password</label>
                                            <input type="text" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="••••••••" required>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">New password</label>
                                            <input data-popover-target="popover-password" data-popover-placement="bottom" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required>
                                            <div data-popover id="popover-password" role="tooltip" class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                                <div class="p-3 space-y-2">
                                                    <h3 class="font-semibold text-gray-900 ">Must have at least 6 characters</h3>
                                                    <div class="grid grid-cols-4 gap-2">
                                                        <div class="h-1 bg-orange-300 dark:bg-orange-400"></div>
                                                        <div class="h-1 bg-orange-300 dark:bg-orange-400"></div>
                                                        <div class="h-1 bg-gray-200 dark:bg-gray-600"></div>
                                                        <div class="h-1 bg-gray-200 dark:bg-gray-600"></div>
                                                    </div>
                                                    <p>It’s better to have:</p>
                                                    <ul>
                                                        <li class="flex items-center mb-1">
                                                            <svg class="w-4 h-4 mr-2 text-green-400 dark:text-green-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                                            Upper & lower case letters
                                                        </li>
                                                        <li class="flex items-center mb-1">
                                                            <svg class="w-4 h-4 mr-2 text-gray-300 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                            A symbol (#$&)
                                                        </li>
                                                        <li class="flex items-center">
                                                            <svg class="w-4 h-4 mr-2 text-gray-300 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                            A longer password (min. 12 chars.)
                                                        </li>
                                                    </ul>
                                            </div>
                                            <div data-popper-arrow></div>
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 ">Confirm password</label>
                                            <input type="text" name="confirm-password" id="confirm-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="••••••••" required>
                                        </div>
                                        <div class="col-span-6 sm:col-full">
                                            <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">Save all</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                </div>                
            </div>
        </div>
    </div>
    
</x-app-layout>

