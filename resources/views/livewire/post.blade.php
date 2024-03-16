<div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Post Title</th>


          </tr>
        </thead>
        <tbody>
            @forelse ( $posts as $post )
            <tr>

                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td><a class="btn btn-primary" wire:navigate href="{{ route('show.comment', ['id'=>$post->id]) }}">Show</a></td>

              </tr>

            @empty
            <tr>
                <td colspan="3">No posts found.</td>
            </tr>
            @endforelse

          </tbody>
      </table>

{{ $posts->links()}}
</div>
