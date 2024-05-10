<?php

declare(strict_types=1);

// Connect to the database
$dsn = 'mysql:host=localhost;dbname=tic_tac_toe';
$username = 'username';
$password = 'password';
$pdo = new PDO($dsn, $username, $password);

// Start the game
startGame();

function startGame(): void
{
    session_start();

    if (!isset($_SESSION['game_board'])) {
        $_SESSION['game_board'] = [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '];
        $_SESSION['current_player'] = 'X';
    }

    displayGameBoard();
}

function displayGameBoard(): void
{
    echo '<h2>Tic-Tac-Toe Game</h2>';

    echo '<table>';
    echo '<tr>';
    for ($i = 0; $i < 9; $i++) {
        echo '<td><a href="?square=' . $i . '">' . $_SESSION['game_board'][$i] . '</a></td>';

        if (($i + 1) % 3 === 0) {
            echo '</tr><tr>';
        }
    }
    echo '</tr>';
    echo '</table>';

    checkForWinner();
}

function checkForWinner(): void
{
    $winning_combinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Horizontal
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Vertical
        [0, 4, 8], [2, 4, 6] // Diagonal
    ];

    foreach ($winning_combinations as $combination) {
        $player = $_SESSION['game_board'][$combination[0]];
        if ($player !== ' ' &&
            $player === $_SESSION['game_board'][$combination[1]] &&
            $player === $_SESSION['game_board'][$combination[2]]) {
            echo '<h3>Player ' . $player . ' wins!</h3>';

            session_destroy();
            return;
        }
    }

    if (!in_array(' ', $_SESSION['game_board'], true)) {
        echo '<h3>It\'s a draw!</h3>';
        session_destroy();
        return;
    }

    switchPlayer();
}

function switchPlayer(): void
{
    $_SESSION['current_player'] = ($_SESSION['current_player'] === 'X') ? 'O' : 'X';

    if (isset($_GET['square'])) {
        $square = $_GET['square'];
        if ($_SESSION['game_board'][$square] === ' ') {
            $_SESSION['game_board'][$square] = $_SESSION['current_player'];
        }

        displayGameBoard();
    }

}

