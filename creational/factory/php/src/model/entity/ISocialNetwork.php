<?php

namespace Src\Model\Entity;

interface ISocialNetwork
{
    public function makePost(string $postContent): string;
    public function getPosts(): array;
    public function deletePost(string $postId): string;
}
