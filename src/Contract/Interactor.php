<?php

namespace Deefour\Interactor\Contract;

use App\Deefour\Interactor\Context;
use App\Deefour\Interactor\Status\Failure;

interface Interactor
{
    /**
     * Getter for the context object bound to the interactor.
     *
     * @return Context
     */
    public function context();

    /**
     * Process the business logic this interactor exists to handle, using the
     * bound context for support.
     */
    public function call();

    /**
     * Rollback changes.
     */
    public function rollback();

    /**
     * Convenience method to fail the interactor, passing through to the Context.
     *
     * @param string $message [optional]
     * @throws Failure
     * @return void
     */
    public function fail($message = null);
}
