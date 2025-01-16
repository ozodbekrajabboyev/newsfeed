<?php

use App\Models\Author;
use App\Models\Category;
use App\Models\News;

it('can create news', function () {
    // Create a category and an author
    $author = Author::factory()->create();
    $category = Category::factory()->create();

    // Create a news item
    $news = News::factory()->create([
        'author_id' => $author->id,
        'category_id' => $category->id,
    ]);

    // Verify the news is in the database
    $this->assertDatabaseHas('news', [
        'title' => $news->title,
        'author_id' => $author->id,
        'category_id' => $category->id,
    ]);
});



