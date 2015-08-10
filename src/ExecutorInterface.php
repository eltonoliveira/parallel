<?php
namespace Icicle\Concurrent;

/**
 * Interface for execution context within a thread or fork.
 */
interface ExecutorInterface extends ChannelInterface
{
    /**
     * @return \Icicle\Promise\PromiseInterface
     */
    public function close();
}
