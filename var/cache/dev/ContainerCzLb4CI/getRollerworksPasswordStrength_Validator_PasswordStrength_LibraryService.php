<?php

namespace ContainerCzLb4CI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRollerworksPasswordStrength_Validator_PasswordStrength_LibraryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'rollerworks_password_strength.validator.password_strength.library' shared service.
     *
     * @return \Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordStrengthValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'rollerworks'.\DIRECTORY_SEPARATOR.'password-strength-validator'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'PasswordStrengthValidator.php';

        return $container->privates['rollerworks_password_strength.validator.password_strength.library'] = new \Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordStrengthValidator(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
