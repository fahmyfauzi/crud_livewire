<div>
    {{-- Stop trying to control. --}}
    <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
      {{$body}}
        <textarea
          wire:model="body"
        class="shadow appearance-none border rounded  w-full px-3 py-2  text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="2" placeholder="Post something..."></textarea>
        <div class="flex justify-end">
          <button
          wire:click="createPost"
           type="button" name="button" class="btn btn-primary mb-3">Post</button>
        </div>
    </div>
</div>
