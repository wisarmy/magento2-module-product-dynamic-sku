var config = {
    config: {
        mixins: {
            'Magento_ConfigurableProduct/js/configurable': {
                'Wisarmy_Product/js/model/skuswitch': true
            },
			'Magento_Swatches/js/swatch-renderer': {
                'Wisarmy_Product/js/model/swatch-skuswitch': true
            }
        }
    }
};