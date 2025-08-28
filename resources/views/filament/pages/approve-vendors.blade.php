<x-filament-panels::page>
    <x-filament::page>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <!-- Users Panel -->
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Users Pending Approval</h3>
            </div>
            <div class="border-t border-gray-200">
                <ul role="list" class="divide-y divide-gray-200">
                    @foreach ($users as $user)
                        <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                            <div class="flex w-0 flex-1 items-center">
                                <UserIcon class="h-5 w-5 flex-shrink-0 text-gray-400" aria-hidden="true" />
                                <span class="ml-2 w-0 flex-1 truncate">{{ $user->name }}</span>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-900">Approve</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Vendors Panel -->
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Vendors</h3>
            </div>
            <div class="border-t border-gray-200">
                <ul role="list" class="divide-y divide-gray-200">
                    @foreach ($vendors as $vendor)
                        <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                            <div class="flex w-0 flex-1 items-center">
                                <UserIcon class="h-5 w-5 flex-shrink-0 text-gray-400" aria-hidden="true" />
                                <span class="ml-2 w-0 flex-1 truncate">{{ $vendor->name }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-filament::page>
</x-filament-panels::page>
