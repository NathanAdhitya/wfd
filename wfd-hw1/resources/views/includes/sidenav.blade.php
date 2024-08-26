<ul class="nav flex-column nav-pills">
    <x-nav-link :href="route('home')" name="home">Home</x-nav-link>
    <x-nav-link :href="route('about')" name="about">About</x-nav-link>
    <x-nav-link :href="route('posts.index')" name="posts.*">Posts</x-nav-link>
</ul>
