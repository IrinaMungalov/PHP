<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : __('Все посты') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Навигационная панель -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">{{ __('site_name') }}</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach (\App\Models\Category::all() as $category)
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ $category->name }}</a>
                        </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lang.switch', ['lang' => 'ru']) }}">RU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lang.switch', ['lang' => 'ro']) }}">RO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Список постов или один пост -->
    <div class="container mt-4">
        @isset($post)
            <!-- Страница одного поста -->
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->description }}</p>
            <p><strong>{{ __('category') }}:</strong> {{ $post->category->name ?? __('Без категории') }}</p>
            <p><strong>{{ __('date') }}:</strong> {{ $post->published_at ? $post->published_at->format('d.m.Y') : __('Не указана') }}</p>
            <a href="{{ url('/') }}" class="btn btn-primary mt-4">{{ __('Вернуться к списку постов') }}</a>
        @else
            <!-- Список постов с пагинацией -->
            <h1>{{ __('Все посты') }}</h1>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('post.show', $post->id) }}" class="text-decoration-none">
                                        {{ $post->title }}
                                    </a>
                                </h5>
                                <p class="card-text">{{ Str::limit($post->description, 100) }}</p>
                                <p class="text-muted">{{ __('category') }}: {{ $post->category->name ?? __('Без категории') }}</p>
                                <p class="text-muted">{{ __('date') }}: {{ $post->published_at }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Пагинация -->
            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        @endisset
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
