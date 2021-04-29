<?php

class Model
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "test_db";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (\Throwable $th) {
            //throw $th;
            echo "Connection error " . $th->getMessage();
        }
    }

    // Fetch Standard

    public function fetch_imp()
    {
        $data = [];

        $query = "SELECT DISTINCT id_implantation FROM `users` ORDER BY id_implantation ASC";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Fetch Result

    public function fetch_str()
    {
        $data = [];

        $query = "SELECT DISTINCT id_structure FROM `users`";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Fetch Records

    public function fetch()
    {
        $data = [];

        $query = "SELECT * FROM users";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Filter Standard and Result

    public function fetch_filter($imp, $str)
    {
        $data = [];

        $query = "SELECT * FROM users WHERE id_implantation = '$imp' AND id_structure = '$str' ";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Filter Standard

    public function fetch_imp_filter($imp)
    {
        $data = [];

        $query = "SELECT * FROM users WHERE id_implantation = '$imp'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Filter Result

    public function fetch_str_filter($str)
    {
        $data = [];

        $query = "SELECT * FROM users WHERE id_structure = '$str'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }
}