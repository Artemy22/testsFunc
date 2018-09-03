<?php

class MainLogicClassifAddNew
{
    public $title;
    public $path;
    public $jwt;
    public $token;
    /**
     * ClassifAddNewLocal constructor.
     * @param $title
     * @param $path
     * @param $jwt
     * @param $token
     */
    public function __construct($title, $path, $jwt, $token)
    {
        $this->title = $title;
        $this->path = $path;
        $this->jwt = $jwt;
        $this->token = $token;
    }

    public function actionData()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $this->path]);
        try {
            $response = $client->request('POST', '', [
                'multipart' => [
                    [
                        'name' => 'classifier[_token]',
                        'contents' => $this->token
                    ],
                    [
                        'name' => 'classifier[categories][0][title]',
                        'contents' => 'Positive'
                    ],
                    [
                        'name' => 'classifier[categories][1][title]',
                        'contents' => 'Negative'
                    ],
                    [
                        'name' => 'classifier[title]',
                        'contents' => $this->title
                    ],
                    [
                        'name' => 'classifier[user]',
                        'contents' => ' '
                    ]
                ],
                'headers' => [
                    'Authorization' => $this->jwt
                ]
            ]);

            echo "Code: " . $response->getStatusCode() . '. Classifier with two categories was added ';
        } catch (\GuzzleHttp\Exception\GuzzleException $exception) {
            echo $exception->getMessage() . "<br>";
        }
    }
}
