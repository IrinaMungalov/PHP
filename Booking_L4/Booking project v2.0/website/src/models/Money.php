<?php

    namespace Student\Booking\models;

    class Money extends Model {
        public int $id;
        public int $amount;
        public string $currency;

        public function __construct(int $amount, string $currency, int $id = 0) {
            $this->id = $id;
            $this->amount = $amount;
            $this->currency = $currency;
        }

        public function save(): void {
            $sql = 'INSERT INTO money VALUES (?, ?, ?)';
            $stmt = static::$pdo->prepare($sql);                                   
            $stmt->execute([$this->id, $this->amount, $this->currency]);
        }

        // HW5!!!: add getOne() here
        public static function getOne(int $id) {
            $stmt = static::$pdo->prepare('SELECT * FROM money WHERE id = ?');
            $stmt->execute([$id]);

            $stmt->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, __CLASS__);
            $money = $stmt->fetch();
        
            return $money;
        }
       
    }