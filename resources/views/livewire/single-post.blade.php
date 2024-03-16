<div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
 <h5>Post Number: {{ $post->id }}</h5>
    <h3>{{ $post->title }}</h3>
    <div>
            <input type="text" class="form-control" wire:model='comment'>
            <button class="btn btn-primary m-2" wire:click='addComment'>Add Comment</button>
        </div>
        <h3>Comments</h3>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($post->comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->comment }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">No Comments found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
</div>
