Public static function all()
(
  return cache()->rememberForever('posts.all',function () {
      return collect(File::files(resource_path("posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post (
                      $document->title,
                      $document->excerpt,
                      $document->date,
                      $document->body(),
                      $document->slug
                  ))
                  ->sortByDesc('date');
    });
)
