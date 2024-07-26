<?php

namespace AssoConnect\GraphQLMutationValidatorBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
Class GraphQLRequestObject extends Constraint
{

    public function getTargets(): array|string
    {
        return self::CLASS_CONSTRAINT;
    }

}