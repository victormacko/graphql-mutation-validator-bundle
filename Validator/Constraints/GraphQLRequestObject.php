<?php

namespace AssoConnect\GraphQLMutationValidatorBundle\Validator\Constraints;

use Attribute;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
#[Attribute(Attribute::TARGET_CLASS)]
Class GraphQLRequestObject extends Constraint
{

    public function getTargets(): array|string
    {
        return self::CLASS_CONSTRAINT;
    }

}