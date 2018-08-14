<?php

class MainLogicData
{
    public $title;
    public $path;
    public $cookie;
    public $data;

    /**
     * MainLogicFile constructor.
     * @param $title
     * @param $path
     * @param $cookie
     * @param $data
     */
    public function __construct($title, $path, $cookie, $data)
    {
        $this->title = $title;
        $this->path = $path;
        $this->cookie = $cookie;
        $this->data = $data;
    }

    public function actionData()
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
                        'name' => 'data',
                        'contents' => $this->data
                    ]
                ],
                'headers' => [
                    'Cookie' => $this->cookie
                ]
            ]);

            echo "Code: " . $response->getStatusCode() . '. Type: DATA ' . $response->getBody() . '<br>';
        } catch (\GuzzleHttp\Exception\GuzzleException $exception) {
            echo $exception->getMessage() . "<br>";
        }
    }
}
