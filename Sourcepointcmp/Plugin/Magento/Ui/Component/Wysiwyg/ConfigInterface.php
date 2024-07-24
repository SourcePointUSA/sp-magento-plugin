<?php

namespace Sourcepoint\Sourcepointcmp\Plugin\Magento\Ui\Component\Wysiwyg;

class ConfigInterface
{
    /**
     * @param \Magento\Ui\Component\Wysiwyg\ConfigInterface $configInterface
     * @param \Magento\Framework\DataObject $result
     * @return \Magento\Framework\DataObject
     */
    public function afterGetConfig(
        \Magento\Ui\Component\Wysiwyg\ConfigInterface $configInterface,
        \Magento\Framework\DataObject $result
    ) {
        $settings = $result->getData('settings');



        $settings['menubar'] = false;
        $settings['toolbar'] = 'undo redo | code';
        $settings['plugins'] = ' code';


        $result->setData('settings', $settings);



        return $result;
    }
}
