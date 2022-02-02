<?php

namespace Symfony\Config\LiipImagine\DefaultFilterSetSettings;


use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class FiltersConfig 
{
    
    public function __construct(array $value = [])
    {
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
    
        return $output;
    }

}
