<?php

namespace Src\Observers;

class Logger implements \SplObserver
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        if(file_exists($this->fileName)) {
            unlink($this->fileName);
        }
    }

    public function update(\SplSubject $subject, string $event = null, $data = null): void
    {
        $entry = date("Y-m-d H:i:s") . ": '$event' with data '" . json_encode($data, JSON_UNESCAPED_UNICODE) . "'\n";
        file_put_contents($this->fileName, $entry, FILE_APPEND);

        echo "Logger: I've written '$event' entry to the log.\n";
    }
}
