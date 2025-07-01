<?php

namespace Layout;

include_once __DIR__ . "/AbstractMain.php";

use Layout\AbstractMain;

class Main extends AbstractMain {

    /**
     *
     * @return void
     */
    private function form(): void
    {
        echo '<div class="col-6">
            <form action="register.php" method="post" style="display: flex; flex-direction: column; gap: 1rem;">
                <input type="text" name="username" placeholder="name">
                <input type="email" name="email" placeholder="email">
                <input type="password" name="password" placeholder="password">
                <button>Register</button>
            </form>
        </div>';
    }

    /**
     *
     * @return void
     */
    private function list(): void
    {
        $rows = $this->sql('goods');

        echo '<div class="row">';

        foreach ($rows as $row) {
            echo '<div class="col-4">
            <div>
                <img src="' . $row['img'] . '" style="max-width: 400px" alt="">
            </div>
                ' . $row['name'] . '<br>
                ' . $row['price'] . ' руб. <br>
            </div>';
        }

        echo '</div>';
        echo '</div>';
    }

    /**
     *
     * @return void
     */
    private function getRows(): void
    {
        $rows = $this->sql('users');

        foreach ($rows as $row) {
            echo $row['name'] . ' ' . $row['email'];
            echo '<br>';
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function layout(): void
    {
        echo '<div class="row">';
            $this->form();
            echo '<div class="col-6">';
                $this->getRows();
            echo '</div>';
        echo '</div>';

        echo '</div>';
        echo '<div class="container mt-5">';

        $this->list();
    }
}
