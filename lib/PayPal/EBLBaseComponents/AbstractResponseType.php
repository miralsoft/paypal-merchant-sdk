<?php
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * Base type definition of a response payload that can carry
 * any type of payload content with following optional
 * elements: - timestamp of response message, - application
 * level acknowledgement, and - application-level errors and
 * warnings.
 */
class AbstractResponseType
   extends PPXmlMessage{

	/**
	 * This value represents the date and time (GMT) when the
	 * response was generated by a service provider (as a result of
	 * processing of a request).
	 * @access public

	 * @namespace ebl


	 * @var dateTime
	 */
	public $Timestamp;

	/**
	 * Application level acknowledgement code.
	 * @access public

	 * @namespace ebl


	 * @var string
	 */
	public $Ack;

	/**
	 * CorrelationID may be used optionally with an application
	 * level acknowledgement.
	 * @access public

	 * @namespace ebl


	 * @var string
	 */
	public $CorrelationID;

	/**
	 *
     * @array
	 * @access public

	 * @namespace ebl


	 * @var \PayPal\EBLBaseComponents\ErrorType
	 */
	public $Errors;

	/**
	 * This refers to the version of the response payload schema.
	 * @access public

	 * @namespace ebl


	 * @var string
	 */
	public $Version;

	/**
	 * This refers to the specific software build that was used in
	 * the deployment for processing the request and generating the
	 * response.
	 * @access public

	 * @namespace ebl


	 * @var string
	 */
	public $Build;


}
