<?php


abstract class QueryBuilder
{
    private Connection $connect;
    private Record     $record;
    private Insert     $insert;
    private Select     $select;
    private Delete     $delete;

    public function __construct()
    {
        $this->connect = $this->createConnect();
        $this->record  = $this->createRecord();
        $this->insert  = $this->createInsert();
        $this->select  = $this->createSelect();
        $this->delete  = $this->createDelete();
    }

    public function builder($tblName, $value)
    {
        echo "Подключение...".PHP_EOL;
        $this->connect->connect();
        echo "Создаем таблицу!".PHP_EOL;
        $this->record->record($tblName);
        echo "Добавляем...".PHP_EOL;
        $this->insert->insert($tblName, $value);
        echo "Выбираем...".PHP_EOL;
        $this->select->select($tblName, $value);
        echo "Удаляем...".PHP_EOL;
        $this->delete->delete($tblName);
    }

    abstract protected function createConnect() : Connection;
    abstract protected function createRecord()  : Record;
    abstract protected function createInsert()  : Insert;
    abstract protected function createSelect()  : Select;
    abstract protected function createDelete()  : Delete;
}