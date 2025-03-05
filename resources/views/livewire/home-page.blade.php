<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <hr class="mt-2 text-gray-300">

    <div class="container mx-auto mt-4 p-6 bg-white shadow-lg rounded-lg">

        <form class="space-y-4" wire:submit="submit">
            <div>
                <label for="title" class="block text-gray-700 font-semibold">Title</label>
                <input type="text" id="title" wire:model="title"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

                @error('title')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="content" class="block text-gray-700 font-semibold">Content</label>
                <textarea id="content" rows="5" wire:model="content"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>

                @error('content')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                Submit
            </button>
        </form>
    </div>

</div>
