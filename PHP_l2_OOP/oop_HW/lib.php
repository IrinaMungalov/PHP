<?
class Post {
    static $title = 'AI in Modern Society';
    static $body = "Artificial Intelligence (AI) has become an integral part of our daily lives, influencing various aspects of modern society...";
    static $author = 'John Smith';
    static $publishedAt = '2024-06-15';
    static $category = 'Tech';
    static $image = 'https://i.pinimg.com/236x/b8/b8/1e/b8b81e06ce0dde7fbf1507424f82ea67.jpg';
    static $status = 'published';


    static function renderAsHTML() {
        return "<div>
                    <h1>".static::$title."</h1>
                    <p>".static::$body."</p>
                    <p><strong>Author:</strong> ".static::$author."</p>
                    <p><strong>Published at:</strong> ".static::$publishedAt."</p>
                    <p><strong>Category:</strong> ".static::$category."</p>
                    <p><strong>Image:</strong><img src='".static::$image."' alt='".static::$title."' width='150px'></p>
                    <p><strong>Status:</strong> ".static::$status."</p>
                </div>";
    }


    static function renderAsXML() {
        return "<post>
                    <title>".static::$title."</title>
                    <body>".static::$body."</body>
                    <author>".static::$author."</author>
                    <publishedAt>".static::$publishedAt."</publishedAt>
                    <category>".static::$category."</category>
                    <image>".static::$image."</image>
                    <status>".static::$status."</status>
                </post>";
    }


    static function renderAsJSON() {
        return json_encode([
            'title' => static::$title,
            'body' => static::$body,
            'author' => static::$author,
            'publishedAt' => static::$publishedAt,
            'category' => static::$category,
            'image' => static::$image,
            'status' => static::$status,
        ]);
    }
}