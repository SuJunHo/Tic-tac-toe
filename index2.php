<?php

// Database 
class Database {
    private $host = 'localhost';
    private $db_name = 'tic_tac_toe';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function __construct() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
    }
}

// Game class
class TicTacToe {
    private $db;
    public $board;
    public $currentPlayer;

    public function __construct() {
        $this->db = new Database();
        $this->board = array_fill(0, 3, array_fill(0, 3, ''));
        $this->currentPlayer = 'X';

        $this->createTable();
    }

    private function createTable() {
        $query = "CREATE TABLE IF NOT EXISTS game_moves (
            id INT AUTO_INCREMENT PRIMARY KEY,
            player CHAR(1) NOT NULL,
            row INT NOT NULL,
            col INT NOT NULL
        )";
        $this->db->conn->exec($query);
    }

    public function makeMove($row, $col) {
        if ($this->board[$row][$col] != '') {
            return false; // недопустимый ход
        }

        $this->board[$row][$col] = $this->currentPlayer;

        // сохранение хода в database
        $this->saveMove($this->currentPlayer, $row, $col);

        // смена пользователя 
        $this->currentPlayer = $this->currentPlayer == 'X' ? 'O' : 'X';
        return true;
    }

    private function saveMove($player, $row, $col) {
        $query = "INSERT INTO game_moves (player, row, col) VALUES (:player, :row, :col)";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':player', $player);
        $stmt->bindParam(':row', $row);
        $stmt->bindParam(':col', $col);
        $stmt->execute();
    }

    public function checkWinner() {
        // проверка всего для победы
        for ($i = 0; $i < 3; $i++) {
            if ($this->board[$i][0] && $this->board[$i][0] === $this->board[$i][1] && $this->board[$i][0] === $this->board[$i][2]) {
                return $this->board[$i][0];
            }
            if ($this->board[0][$i] && $this->board[0][$i] === $this->board[1][$i] && $this->board[0][$i] === $this->board[2][$i]) {
                return $this->board[0][$i];
            }
        }
        if ($this->board[0][0] && $this->board[0][0] === $this->board[1][1] && $this->board[0][0] === $this->board[2][2]) {
            return $this->board[0][0];
        }
        if ($this->board[0][2] && $this->board[0][2] === $this->board[1][1] && $this->board[0][2] === $this->board[2][0]) {
            return $this->board[0][2];
        }

        return null;
    }

    public function getBoard() {
        return $this->board;
    }
}
}

?>


