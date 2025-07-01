<?php

namespace Layout;

include_once __DIR__ . "/../Models/Model.php";

use Models\Model;

abstract class AbstractMain {

    /**
     * @var Model|null;
     */
    private $model = null;

    /**
     * @return void
     */
    public function __construct() {
        $this->model = new Model();
    }

    /**
     * @return void
     */
    abstract protected function layout(): void;

    /**
     *
     * @return void
     */
    public function view(): void
    {
        $this->header();
        $this->layout();
        $this->footer();
    }

    /**
     *
     * @return void
     */
    protected function header(): void
    {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <title>Document</title>
        </head>
        <body>
        <div class="container mt-5">';
    }

    /**
     *
     * @return void
     */
    protected function footer(): void
    {
        echo '</div>
        </body>
        </html>';
    }

    /**
     * @return Model
     */
    private function getModel(): ?Model
    {
        if (!$this->model) {
            die("Model fail");
        }

        return $this->model;
    }

    /**
     * @param string
     * @return array
     */
    protected function sql(string $table): array
    {
        $model = $this->getModel();

        return $model->query($table);
    }
}
