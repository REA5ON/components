<?php

class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll($table)
    {
        //2. Выполнить запрос
        $sql = "SELECT * FROM {$table}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        //3. Получить асоциативный массив $posts = []
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($table, $data) {
        $keys = implode(',', array_keys($data));
        $tags = ":" . implode(', :', array_keys($data));

        $sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
    }

    public function getOne($table, $id) {
        $sql = "SELECT * FROM {$table} WHERE id=:id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            'id' => $id,
        ]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function update($table, $data, $id) {

        $string = '';
        $keys = array_keys($data);
        foreach ($keys as $key) {
            $string .= $key . '=:' . $key . ',';
        }
        $keys = rtrim($string, ',');
        $data['id'] = $id;

        $sql = "UPDATE {$table} SET {$keys} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM {$table} WHERE id=:id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            'id' => $id
        ]);
    }

}
