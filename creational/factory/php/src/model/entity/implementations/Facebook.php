<?php

namespace Src\Model\Entity\Implementations;

use Src\Model\Entity\SocialNetwork;

class Facebook extends SocialNetwork
{
    public function makePost(string $postContent): string
    {
        return "Posting in Facebook: " . $postContent;
    }

    public function getPosts(): array
    {
        return [
            [
                "id" => 1,
                "post" => "First post in Facebook"
            ],
            [
                "id" => 2,
                "post" => "Second post in Facebook"
            ]
        ];
    }

    public function deletePost(string $postId): string
    {
        return "Deleting post in Facebook: ". $postId;
    }
}
