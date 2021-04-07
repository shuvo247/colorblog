
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($allPost as $post)
        <url>
            <loc>{{url('/single/post?post_slug=')}}{{ $post->post_slug }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>
