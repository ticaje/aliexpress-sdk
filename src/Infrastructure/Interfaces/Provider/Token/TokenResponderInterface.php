<?php
declare(strict_types=1);

/**
 * General Interface
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\AeSdk\Infrastructure\Interfaces\Provider\Token;

use Ticaje\Contract\Patterns\Interfaces\Decorator\DecoratorInterface;
use Ticaje\Contract\Patterns\Interfaces\Decorator\Responder\ResponseInterface as ContractResponseInterface;

/**
 * Interface TokenResponderInterface
 * @package Ticaje\AeSdk\Infrastructure\Interfaces\Provider\Token
 * It turns out that our SDK is a higher level module compared to lower level module Contract library
 * which it depends upon, so it is responsible for interpreting the response coming out from the connector middleware
 * so it handles it back to consumers modules.
 * This kind of implements chain of responsibility pattern in combination with decorator's
 */
interface TokenResponderInterface extends DecoratorInterface
{
    /**
     * @param ContractResponseInterface $response
     * @return TokenResponderInterface
     */
    public function process(ContractResponseInterface $response): TokenResponderInterface;
}
