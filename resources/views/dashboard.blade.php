
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <div class="row text-center">

                    <div class="col-sm-4">
                        <img src="{{asset('image/folder.gif')}}" alt="" width="100" height="100" class="mx-auto">
                        <a href="Management">Management</a>

                    </div>

                    <div class="col-sm-4">
                        <img src="{{asset('image/delivery-truck.gif')}}" alt="" width="100" height="100" class="mx-auto">

                        <a href="Supply">Daily Supply</a>

                    </div>

                    <div class="col-sm-4">
                        <img src="{{asset('image/prescription.gif')}}" alt="" width="100" height="100" class="mx-auto">

                        <a href="Report">Report</a>

                    </div>





                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
