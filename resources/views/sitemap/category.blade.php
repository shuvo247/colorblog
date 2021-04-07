
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($categories as $category)
        <url>
            <loc>{{url('/category/post?category_slug=')}}{{ $category->category_slug }}</loc>
            <lastmod>{{ $category->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>
