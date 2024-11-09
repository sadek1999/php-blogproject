<x-layout>
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-6">
    <form action="/submit" method="POST">
        <!-- Blog Title -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Blog Title</label>
            <input
                type="text"
                id="title"
                name="title"
                placeholder="Enter blog title"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                required
            />
        </div>

        <!-- Blog Content -->
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-bold mb-2">Content</label>
            <textarea
                id="content"
                name="content"
                rows="4"
                placeholder="Enter blog content"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                required
            ></textarea>
        </div>

        <!-- Submit Button -->
        <div>
            <button
                type="submit"
                class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition duration-200"
            >
                Submit
            </button>
        </div>
    </form>
</div>

</x-layout>
