<?php

namespace Src\Model\Entity\Implementations;

use Src\Model\Entity\SocialNetwork;

class LinkedIn extends SocialNetwork
{
    public function makePost(string $postContent): string
    {
        return "Posting in LinkedIn: " . $postContent;
    }

    public function getPosts(): array
    {
        return [
            [
                "id" => 1,
                "post" => "First post in LinkedIn"
            ],
            [
                "id" => 2,
                "post" => "Second post in LinkedIn"
            ]
        ];
    }

    public function deletePost(string $postId): string
    {
        return "Deleting post in LinkedIn: ". $postId;
    }
}
