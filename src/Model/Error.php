<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields that can be returned in an error.
 */
class Error extends AbstractModel
{
    /**
     * This string value indicates the error category. There are three categories of
     * errors: request errors, application errors, and system errors.
     *
     * @var string
     */
    public $category = null;

    /**
     * The name of the primary system where the error occurred. This is relevant for
     * application errors.
     *
     * @var string
     */
    public $domain = null;

    /**
     * A unique code that identifies the particular error or warning that occurred.
     * Your application can use error codes as identifiers in your customized
     * error-handling algorithms.
     *
     * @var int
     */
    public $errorId = null;

    /**
     * An array of reference IDs that identify the specific request elements most
     * closely associated to the error or warning, if any.
     *
     * @var string[]
     */
    public $inputRefIds = null;

    /**
     * A detailed description of the condition that caused the error or warning, and
     * information on what to do to correct the problem.
     *
     * @var string
     */
    public $longMessage = null;

    /**
     * A description of the condition that caused the error or warning.
     *
     * @var string
     */
    public $message = null;

    /**
     * An array of reference IDs that identify the specific response elements most
     * closely associated to the error or warning, if any.
     *
     * @var string[]
     */
    public $outputRefIds = null;

    /**
     * An array of warning and error messages that return one or more variables
     * contextual information about the error or warning. This is often the field or
     * value that triggered the error or warning.
     *
     * @var \Ebay\Buy\Browse\Model\ErrorParameter[]
     */
    public $parameters = null;

    /**
     * The name of the subdomain in which the error or warning occurred.
     *
     * @var string
     */
    public $subdomain = null;
}
