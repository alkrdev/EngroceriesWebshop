<?php


class DatabaseConnection
{

  public PDO $pdo;     // PDO object
  public string $success; // State of last SQL request

  protected string $database;
  protected string $hostname;
  protected string $username;
  protected string $password;
  protected string $charset;

  public function __construct()
  {
    $this->database = $_ENV['DB_NAME'];
    $this->hostname = $_ENV['DB_HOST'];
    $this->username = $_ENV['DB_USER'];
    $this->password = $_ENV['DB_PASS'];
    $this->charset = 'utf8mb4';
  }

  public function Connect(): DatabaseConnection
  {
    $hostname = $this->hostname;
    $database = $this->database;
    $charset = $this->charset;
    $dsn = "mysql:host=$hostname;dbname=$database;charset=$charset";
    $options = [
      // Throw exception when encountering errors
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];

    // Actually create connection and throw any error that is caught
    try {
      $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
    } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    return $this;
  }

  /**
   * Send a single SQL query without any parameters and fetch the first returned row.
   *
   * @param string $query
   */
  public function Query(string $query): void
  {
    $stmt = $this->pdo->prepare($query);
    $this->success = $stmt->execute();
  }

  /**
   * Send a single SQL query without any parameters and fetch all returned rows.
   *
   * @param string $query
   * @return array
   */
  public function QueryFetchAll(string $query): array
  {
    $stmt = $this->pdo->prepare($query);
    $this->success = $stmt->execute();
    return $stmt->fetchAll();
  }

  /**
   * Send a single SQL query with parameters and fetch first returned row.
   * This uses prepared statements, and expects one array element for every question mark in the SQL string.
   *
   * @param string $query
   * @param array $parameters
   * @return mixed
   */
  public function QueryWithParams(string $query, array $parameters): void
  {
    $stmt = $this->pdo->prepare($query);
    $this->success = $stmt->execute($parameters);
  }

  /**
   * Send a single SQL query with parameters and fetch all returned rows.
   * This uses prepared statements, and expects one array element for every question mark in the SQL string.
   *
   * @param string $query
   * @param array $parameters
   * @return array
   */
  public function QueryWithParamsFetchAll(string $query, array $parameters): array
  {
    $stmt = $this->pdo->prepare($query);
    $this->success = $stmt->execute($parameters);
    return $stmt->fetchAll();
  }

