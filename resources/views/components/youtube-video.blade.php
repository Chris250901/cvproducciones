@props(['videoId' => '', 'playlistId' => '', 'title' => '', 'width' => '100%', 'height' => '400'])

@if($playlistId)
    <!-- Para playlists -->
    <iframe
        src="https://www.youtube.com/embed/videoseries?list={{ $playlistId }}"
        width="{{ $width }}"
        height="{{ $height }}"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
        class="rounded-2xl">
    </iframe>
@else
    <!-- Para videos individuales -->
    <iframe
        src="https://www.youtube.com/embed/{{ $videoId }}"
        width="{{ $width }}"
        height="{{ $height }}"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
        class="rounded-2xl">
    </iframe>
@endif

@if($title)
    <h3 class="mt-4 font-display font-bold text-xl text-gray-900 dark:text-white">{{ $title }}</h3>
@endif