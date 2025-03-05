<div>
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Posts Dashboard</h1>

        @if ($posts->isEmpty())
            <p class="text-gray-600">No posts found.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300 text-sm">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="p-3 border border-gray-300">Title</th>
                            <th class="p-3 border border-gray-300">Content</th>
                            <th class="p-3 border border-gray-300">Created At</th>
                            <th class="p-3 border border-gray-300">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr class="border border-gray-300 hover:bg-gray-100">
                                <td class="p-3 border border-gray-300">{{ $post->title }}</td>
                                <td class="p-3 border border-gray-300">{{ $post->content }}</td>
                                <td class="p-3 border border-gray-300 min-w-36">{{ $post->created_at->format('d M. Y H:i') }}</td>
                                <td class="p-3 border border-gray-300">
                                    <button wire:click="delete({{ $post->id }})" class="text-red-700 hover:underline">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
