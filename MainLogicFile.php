<?php

class MainLogicFile
{
    public $title;
    public $path;
    public $jwt;
    public $file;

    /**
     * MainLogicFile constructor.
     * @param $title
     * @param $path
     * @param $jwt
     * @param $file
     */
    public function __construct($title, $path, $jwt, $file)
    {
        $this->title = $title;
        $this->path = $path;
        $this->jwt = $jwt;
        $this->file = $file;
    }

    public function actionFile()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $this->path]);
        try {
            $response = $client->request('POST', '', [
                'multipart' => [
                    [
                        'name' => 'title',
                        'contents' => $this->title
                    ],
                    [
                        'name' => 'file',
                        'contents' => fopen($this->file, 'r')
                    ]
                ],
                'headers' => [
                    'Authorization' => $this->jwt
                ]
            ]);

            echo "Code: " . $response->getStatusCode() . '. Type: FILE ' . $response->getBody() ."\n".'<br>';
        } catch (\GuzzleHttp\Exception\GuzzleException $exception) {
            echo $exception->getMessage() . "\n";
        }
    }
}
