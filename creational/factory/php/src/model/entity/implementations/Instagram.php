<?php

namespace Src\Model\Entity\Implementations;

use Src\Model\Entity\SocialNetwork;

class Instagram extends SocialNetwork
{
    public function makePost(string $postContent): string
    {
        return "Posting in Instagram: " . $postContent;
    }

    public function getPosts(): array
    {
        return [
            [
                "id" => 1,
                "post" => "First post in Instagram"
            ],
            [
                "id" => 2,
                "post" => "Second post in Instagram"
            ]
        ];
    }

    public function deletePost(string $postId): string
    {
        return "Deleting post in Instagram: ". $postId;
    }
}
