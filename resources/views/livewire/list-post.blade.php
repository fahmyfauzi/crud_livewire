<div>

    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    @foreach ($posts as $post)
      <div class="p-4 my-2 bg-white shadow-xl rounded-md">
        <span class="text-xl font-bold">{{$post->user->name}}</span>
        <span class="text-gray-500">{{$post->created_at->diffForHumans()}}</span>
        <button
        wire:click="showUpdateForm({{$post->id}})"
        type="button" class="btn btn-primary" >Edit</button>
        <button
        onclick="return confirm('Apakah yakin?') || event.stopImmediatePropagation()"
        wire:click="delete({{$post->id}})"
        type="button" class="btn btn-danger" >Delete</button>
      <div class="">
        @if ($updateStateId !== $post->id)
          <span>{{$post->body}}</span>
        @endif

        @if ($updateStateId === $post->id)
          <textarea
            wire:model="body"
          class="shadow appearance-none border rounded  w-full px-3 py-2  text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="2"></textarea>
          <button
          wire:click="update({{$post->id}})"
          type="button" class="btn btn-success" >Save</button>
        @endif
      </div>
      </div>
    @endforeach
</div>
