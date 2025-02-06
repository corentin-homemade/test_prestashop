<?php

namespace MongoDB\Driver;

use MongoDB\Driver\Exception\InvalidArgumentException;

/**
 * The BulkWrite collects one or more write operations that should be sent to the server.
 * After adding any number of insert, update, and delete operations, the collection may be executed via Manager::executeBulkWrite().
 * Write operations may either be ordered (default) or unordered.
 * Ordered write operations are sent to the server, in the order provided, for serial execution.
 * If a write fails, any remaining operations will be aborted.
 * Unordered operations are sent to the server in an arbitrary order where they may be executed in parallel.
 * Any errors that occur are reported after all operations have been attempted.
 */
final class BulkWrite implements \Countable
{
    /**
     * Create a new BulkWrite
     * Constructs a new ordered (default) or unordered BulkWrite.
     * @link https://php.net/manual/en/mongodb-driver-bulkwrite.construct.php
     * @param array $options
     * @throws InvalidArgumentException on argument parsing errors.
     */
    final public function __construct(?array $options = []) {}

    final public function __wakeup() {}

    /**
     * Count expected roundtrips for executing the bulk
     * Returns the expected number of client-to-server roundtrips required to execute all write operations in the BulkWrite.
     * @link https://php.net/manual/en/mongodb-driver-bulkwrite.count.php
     * @return int number of expected roundtrips to execute the BulkWrite.
     * @throws InvalidArgumentException on argument parsing errors.
     */
    final public function count() {}

    /**
     * Add a delete operation to the bulk
     * @link https://php.net/manual/en/mongodb-driver-bulkwrite.delete.php
     * @param array|object $query The search filter
     * @param array $deleteOptions
     * @throws InvalidArgumentException on argument parsing errors.
     */
    final public function delete($query, ?array $deleteOptions = []) {}

    /**
     * Add an insert operation to the bulk
     * If the document did not have an _id, a MongoDB\BSON\ObjectId will be generated and returned; otherwise, no value is returned.
     * @link https://php.net/manual/en/mongodb-driver-bulkwrite.insert.php
     * @param array|object $document
     * @return mixed
     * @throws InvalidArgumentException on argument parsing errors.
     */
    final public function insert($document) {}

    /**
     * Add an update operation to the bulk
     * @link https://php.net/manual/en/mongodb-driver-bulkwrite.update.php
     * @param array|object $query The search filter
     * @param array|object $newObj A document containing either update operators (e.g. $set) or a replacement document (i.e. only field:value expressions)
     * @param array $updateOptions
     * @throws InvalidArgumentException on argument parsing errors.
     */
    final public function update($query, $newObj, ?array $updateOptions = []) {}
}
