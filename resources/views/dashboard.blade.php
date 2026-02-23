<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
                
                <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-6">
                    <h3 class="text-white text-xl font-semibold">
                        👋 Welcome Back!
                    </h3>
                    <p class="text-indigo-100 mt-1">
                        {{ __("You're successfully logged in.") }}
                    </p>
                </div>

                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        
                        <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                            <h4 class="font-semibold text-lg text-gray-700">Profile</h4>
                            <p class="text-sm text-gray-500 mt-2">
                                Manage your account settings and profile information.
                            </p>
                            <a href="#" class="inline-block mt-4 text-indigo-600 hover:text-indigo-800 font-medium">
                                Manage →
                            </a>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                            <h4 class="font-semibold text-lg text-gray-700">Projects</h4>
                            <p class="text-sm text-gray-500 mt-2">
                                View and manage your latest projects.
                            </p>
                            <a href="#" class="inline-block mt-4 text-indigo-600 hover:text-indigo-800 font-medium">
                                View →
                            </a>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                            <h4 class="font-semibold text-lg text-gray-700">Settings</h4>
                            <p class="text-sm text-gray-500 mt-2">
                                Customize your preferences and system options.
                            </p>
                            <a href="#" class="inline-block mt-4 text-indigo-600 hover:text-indigo-800 font-medium">
                                Update →
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
