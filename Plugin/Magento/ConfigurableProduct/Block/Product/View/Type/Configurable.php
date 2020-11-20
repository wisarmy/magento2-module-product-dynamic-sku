<?php

namespace Wisarmy\Product\Plugin\Magento\ConfigurableProduct\Block\Product\View\Type;

class Configurable
{
    
    public function afterGetJsonConfig(
        \Magento\ConfigurableProduct\Block\Product\View\Type\Configurable $subject,
        $result
        ) {
            
            $jsonResult = json_decode($result, true);
            
            $jsonResult['skus'] = [];
            foreach ($subject->getAllowProducts() as $simpleProduct) {
                $jsonResult['skus'][$simpleProduct->getId()] = $simpleProduct->getSku();
            }
            
            
            $result = json_encode($jsonResult);
            
            return $result;
    }
}