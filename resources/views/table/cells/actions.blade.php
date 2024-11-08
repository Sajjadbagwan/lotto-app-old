<div class="flex justify-start items-center space-x-2">
    <!-- Edit action -->
    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
    
    <!-- Delete action -->
    <form action="#" method="POST" class="inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
    </form>
</div>
