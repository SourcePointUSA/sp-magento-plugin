<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Sourcepoint\Sourcepointcmp\Config\SourcepointCmpConfig;

class Converter implements \Magento\Framework\Config\ConverterInterface
{

    /**
     * Convert dom node tree to array
     *
     * @param \DOMDocument $source
     * @return array
     */
    public function convert($source)
    {
        $output = [];
        $xpath = new \DOMXPath($source);
        $nodes = $xpath->evaluate('/config/sp_account_id');
        
        /** @var $node \DOMNode */
        foreach ($nodes as $node) {
            $nodeId = $node->attributes->getNamedItem('id');
        
            $data = [];
            $data['id'] = $nodeId;
            foreach ($node->childNodes as $childNode) {
                if ($childNode->nodeType != XML_ELEMENT_NODE) {
                    continue;
                }
        
                $data[$childNode->nodeName] = $childNode->nodeValue;
            }
            $output['sp_account_id'][$nodeId] = $data;
        }
        
        return $output;
    }

        
 
}

